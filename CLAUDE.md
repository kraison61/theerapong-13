# CLAUDE.md / AI INSTRUCTIONS

ไฟล์นี้คือคู่มือบริบท (Context & Guidelines) สำหรับ AI Assistant (Claude, Cursor, Copilot) และนักพัฒนาที่เข้ามาทำงานในโปรเจกต์นี้
**กรุณาอ่านและปฏิบัติตามกฎในไฟล์นี้อย่างเคร่งครัดก่อนเริ่มเขียนหรือแก้ไขโค้ดทุกครั้ง**

---

## 1. ภาพรวมโปรเจกต์ (Project Overview)

เว็บไซต์การตลาดและหาลูกค้า (Lead-generation) ของ **บริษัทธีรพงษ์เซอร์วิส จำกัด** (ผู้รับเหมาก่อสร้างในเขต กทม. และปริมณฑล)

- **กลุ่มเป้าหมาย:** เจ้าของบ้าน ผู้รับเหมาช่วง โครงการหมู่บ้าน (ใช้ภาษาไทย โทนน่าเชื่อถือ เป็นมืออาชีพ)
- **เป้าหมายหลัก:** แสดงผลงาน, ให้ข้อมูลประกอบการตัดสินใจ, และเก็บ Lead ผ่านแบบฟอร์มขอใบเสนอราคา (Quote Form) + LINE OA
- **บริการหลัก (6 หมวด):** กำแพงกันดิน, รั้วบ้าน, ถนน/ทางเข้า, ลานคอนกรีต, ระบบระบายน้ำ, ปรับพื้นที่/ถมดิน

---

## 2. Tech Stack ปัจจุบัน (อัปเกรดเป็น Laravel แล้ว)

| ส่วน                    | เทคโนโลยีที่ใช้ (Must Use)             | สิ่งที่ห้ามใช้ (Do NOT Use)                  |
| :---------------------- | :------------------------------------- | :------------------------------------------- |
| **Backend / Core**      | Laravel 13                             | โค้ด PHP แบบเก่าที่ไม่ใช้ MVC                |
| **Frontend Rendering**  | Blade Templates + Blade Components     | ไฟล์ `.html` แบบ Static เดิม                 |
| **CSS Framework**       | Tailwind CSS v4 (ผ่าน Vite / NPM)      | Tailwind CDN (`@tailwindcss/browser`)        |
| **State / JS (UI)**     | Alpine.js (`x-data`, `x-on`, `x-show`) | Vanilla JS (`document.getElementById`)       |
| **Dynamic Form / Data** | Livewire 3                             | AJAX (fetch/axios) หรือ JS Validation ธรรมดา |
| **Icons & Fonts**       | Bootstrap Icons, IBM Plex Sans Thai    | -                                            |

---

## 3. สถาปัตยกรรมและโครงสร้างไฟล์ (Architecture)

โปรเจกต์นี้ใช้แนวคิด **Component-Driven Development** ผ่าน Laravel Blade:

- **`config/catalog.php`**: แหล่งเก็บข้อมูลหลัก (Single Source of Truth) สำหรับบริการ, ตารางราคา, FAQ และรีวิว **ห้าม** Hardcode ข้อมูลเหล่านี้ในไฟล์ View
- **`resources/views/layouts/app.blade.php`**: Layout หลักที่มี Navbar, Footer และ Asset การตั้งค่า (@vite)
- **`resources/views/components/site/`**: เก็บชิ้นส่วน Global เช่น `navbar`, `footer`, `utility-bar`
- **`resources/views/components/service/`**: เก็บชิ้นส่วนของหน้าบริการ เช่น `hero`, `overview`, `pricing-table`
- **`app/Support/helpers.php`**: เก็บ Global Helpers (เช่น ฟังก์ชัน `unsplash()`)
- **`app/Providers/AppServiceProvider.php`**: ใช้ View Composers ส่งข้อมูลที่ต้องใช้ทุกหน้า (เช่น ข้อมูลบริษัท) ไปยัง Layouts

---

## 4. กฎการเขียนโค้ด (Coding Standards)

### CSS & Tailwind

- **ใช้ Utility Classes เป็นหลัก:** ห้ามเขียน CSS แยกในไฟล์อื่นเด็ดขาด
- **การจัดการ Theme:** ตั้งค่าสีแบรนด์ (เช่น `--color-navy-950`, `--color-accent`) ไว้ที่ `resources/css/app.css` เพื่อให้ Vite จัดการ
- **ห้ามใส่ `<style type="text/tailwindcss">`** ในหน้า Blade เด็ดขาด (ยกเลิกการใช้ Browser Build)

### JavaScript & Interactivity

- **UI States (เมนู, Tabs, Accordion):** **บังคับใช้ Alpine.js** ห้ามสร้างตัวแปร JS โดดๆ ในไฟล์ Blade
- **Forms & Backend Calls:** **บังคับใช้ Livewire** ในส่วนที่ต้องมีการ Validate ข้อมูลหรือส่งเมล
- **ห้ามใช้ DOM Manipulation:** ห้ามใช้ `querySelector`, `innerHTML`, `classList.add()` ให้ใช้ Data Binding ของ Alpine.js หรือ Livewire เสมอ

### PHP & Laravel

- **DRY (Don't Repeat Yourself):** ถ้าเห็นโค้ด HTML ซ้ำกันเกิน 2 จุด ให้ Extract ออกเป็น `<x-component>` ทันที
- **Routing:** ใช้ Route Prefix และ Controller Grouping เพื่อความสะอาดของโค้ด (`Route::prefix('services')->name('services.')...`)

---

## 5. กฎทางธุรกิจและเนื้อหา (Business Rules)

1. **ข้อมูลการติดต่อ:** เบอร์โทร, อีเมล, ลิงก์ LINE **ห้าม Hardcode** ต้องเรียกใช้ผ่าน `config('company.phone')` หรือตัวแปรที่ส่งมาจาก Provider
2. **รูปภาพ:** ชั่วคราวให้ใช้ฟังก์ชัน Helper `unsplash(id)` ในการแสดงผล เพื่อเตรียมพร้อมเปลี่ยนเป็นรูปจริงในอนาคต โดยต้องใส่ `alt` เป็นภาษาไทยเสมอ
3. **ข้อควรระวังทางกฎหมาย:** - งานฐานรากต้องระบุเสมอว่า "ควบคุม/คำนวณโดยวิศวกรและมีใบ กว."
    - ส่วนของสินเชื่อ ต้องมีข้อความกำกับเสมอว่า _"ดอกเบี้ยและเงื่อนไขการอนุมัติเป็นไปตามที่ผู้ให้สินเชื่อกำหนด"_

---

## 6. Workflow สำหรับ AI (System Instructions)

เมื่อผู้ใช้ออกคำสั่งให้สร้างหรือแก้ไขฟีเจอร์:

1. ตรวจสอบก่อนว่ามี Blade Component ที่ทำหน้าที่นั้นอยู่แล้วหรือไม่
2. แยก Data ออกจาก View เสมอ (ข้อมูลไปที่ Config/Controller, หน้าตาไปที่ Blade)
3. หากต้องทำ UI เคลื่อนไหว ให้เขียน `x-data` ครอบทันที ห้ามเขียนแท็ก `<script>` ถ้าไม่จำเป็นจริงๆ (ยกเว้น Livewire `@script`)
4. ให้คำตอบเป็นโค้ดที่พร้อมใช้งานกับ **Laravel Vite** ทันที

---

## 7. เอกสารอ้างอิง (Official Documentation)

หากมีข้อสงสัยเกี่ยวกับ Syntax หรือ API ให้ยึดตามเอกสารเวอร์ชันเหล่านี้เป็นหลัก:

- **Laravel 13.x:** https://laravel.com/docs/13.x/installation
- **Livewire Volt 4.x:** https://livewire.laravel.com/docs/4.x/quickstart
- **Alpine.js:** https://alpinejs.dev/start-here
- **Tailwind CSS v4:** https://tailwindcss.com/docs
