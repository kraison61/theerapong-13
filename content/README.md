# เนื้อหาเว็บไซต์ (CMS Content Layer)

โฟลเดอร์นี้คือ **แหล่งข้อมูลกลาง** ที่ระบบ CMS (เช่น headless CMS / Git-based CMS) จัดการได้
หน้าเว็บทั้งหมดเป็น **template เดียว** ที่ดึงเนื้อหาจากไฟล์ JSON เหล่านี้ผ่าน `fetch()`
แก้เนื้อหา = แก้ไฟล์ JSON เท่านั้น **ไม่ต้องแตะ HTML**

```
content/
├── services/
│   ├── _index.json        รายการบริการ (สำหรับเมนูสลับ + footer)
│   ├── wall.json          ← 1 ไฟล์ = 1 หน้าบริการ
│   ├── fence.json
│   ├── road.json
│   ├── slab.json
│   ├── drain.json
│   └── land.json
└── blog/
    ├── _index.json        รายการบทความ (หน้า blog.html) + หมวด + บทความแนะนำ
    ├── _authors.json      โปรไฟล์ผู้เขียน (key → {name, bio})
    ├── _meta.json         meta สั้นๆ ทุกบทความ (ใช้แสดง "บทความที่เกี่ยวข้อง")
    ├── choose-contractor.json   ← 1 ไฟล์ = 1 บทความ
    ├── retaining-wall-cost.json
    ├── concrete-crack.json
    └── contract-payment.json
```

## Template เดียว ใช้ซ้ำทุกหน้า

| Template | ดึงข้อมูลจาก | URL |
|---|---|---|
| `service.html` | `services/<slug>.json` | `service.html?service=wall` |
| `service.html` (โหมดพิมพ์/PDF) | เหมือนกัน — template เดียว | `service.html?service=wall&print=1` |
| `blog.html` | `blog/_index.json` | `blog.html` |
| `blog-post.html` | `blog/<slug>.json` | `blog-post.html?post=choose-contractor` |

> **Service + Service-Print รวมเป็น template เดียว** — หน้าพิมพ์ใช้ stylesheet `@media print`
> ปุ่ม "บันทึก PDF" หรือ `?print=1` เปิดหน้าต่างพิมพ์ได้เลย เนื้อหามาจาก JSON ชุดเดียวกัน

## เพิ่มบริการ/บทความใหม่
1. สร้างไฟล์ JSON ใหม่ในโฟลเดอร์ที่เกี่ยวข้อง (คัดลอกจากไฟล์เดิมเป็นแบบ)
2. เพิ่ม entry ใน `_index.json` (และ `_meta.json` สำหรับบทความ)
3. เสร็จ — ไม่ต้องแก้ HTML

## Schema ย่อ

**services/&lt;slug&gt;.json**
`slug, name, eyebrow, titleHTML, lead, hero, price, priceUnit, duration, warranty,
heroSpecs[[k,v]], overview{title,paragraph,checklist[]}, featuresPara,
features[[icon,head,text]], process[[head,text,dur]], specs[[k,v]],
pricing[{name,desc,value,unit,includes[],featured}], gallery[url], faq[[q,a]]`

**blog/&lt;slug&gt;.json**
`slug, cat, title, stand, author, date, read, hero, caption, tags[],
body[ ["p",html] | ["h2|id",text] | ["h3",text] | ["callout|label",html]
      | ["quote",text] | ["table|h1|h2|h3", [c1,c2,c3], ... ] ],
related[slug]`

> หมายเหตุ: ต้องเปิดผ่าน HTTP (เซิร์ฟเวอร์/พรีวิว) เพราะใช้ `fetch()` โหลด JSON
> การเปิดไฟล์ตรงด้วย `file://` เบราว์เซอร์จะบล็อก
