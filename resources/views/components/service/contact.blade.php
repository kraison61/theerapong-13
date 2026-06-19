@props(['services', 'selected'])

@php
    $budgets = ['ต่ำกว่า 100,000 บาท', '100,000 – 500,000 บาท', '500,000 – 1,000,000 บาท', '1,000,000 – 3,000,000 บาท', 'มากกว่า 3,000,000 บาท'];
@endphp

{{-- ============ CONTACT ============ --}}
<section id="contact" class="bg-navy-900 text-white">
  <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28 grid lg:grid-cols-12 gap-12">
    <div class="lg:col-span-5">
      <span class="inline-flex items-center gap-2 text-hivis font-semibold tracking-[0.18em] text-xs uppercase"><span class="w-7 h-px bg-hivis"></span> ขอใบเสนอราคา</span>
      <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight leading-tight">เริ่มต้นโครงการของคุณวันนี้</h2>
      <p class="mt-4 text-lg text-white/60 leading-relaxed">กรอกข้อมูลคร่าวๆ ทีมงานจะติดต่อกลับภายใน 24 ชั่วโมง (วันทำการ) เพื่อนัดสำรวจหน้างานฟรี</p>

      <ul class="mt-8 space-y-4 text-white/85">
        <li class="flex gap-3.5"><i class="bi bi-telephone-fill text-hivis text-xl"></i><div><div class="text-[13px] text-white/50">โทรเลย</div><div class="font-mono tabular-nums text-xl font-semibold">081-234-5678</div></div></li>
        <li class="flex gap-3.5"><i class="bi bi-envelope-fill text-hivis text-xl"></i><div><div class="text-[13px] text-white/50">อีเมล</div><div class="font-medium">work@theeraphong.co.th</div></div></li>
        <li class="flex gap-3.5"><i class="bi bi-geo-alt-fill text-hivis text-xl"></i><div><div class="text-[13px] text-white/50">สำนักงาน</div><div class="font-medium">88/15 ถ.กาญจนาภิเษก บางใหญ่ นนทบุรี 11140</div></div></li>
        <li class="flex gap-3.5"><i class="bi bi-clock-fill text-hivis text-xl"></i><div><div class="text-[13px] text-white/50">เวลาทำการ</div><div class="font-medium">จันทร์–เสาร์ 8:00–18:00 น.</div></div></li>
      </ul>
    </div>

    <div class="lg:col-span-7">
      {{-- success + native validation จัดการด้วย Alpine บรรทัดเดียว ไม่ต้องมีไฟล์ JS --}}
      <form x-data="{ sent: false }"
            @submit.prevent="$el.checkValidity() ? (sent = true, $el.reset(), setTimeout(() => sent = false, 6000)) : $el.reportValidity()"
            class="rounded-2xl bg-white p-7 lg:p-8 text-ink shadow-2xl shadow-navy-950/40 grid sm:grid-cols-2 gap-5">
        <div class="sm:col-span-2">
          <label class="block text-sm font-medium text-navy-900 mb-1.5">ชื่อ–นามสกุล <span class="text-red-500">*</span></label>
          <input name="name" required placeholder="กรุณากรอกชื่อ-นามสกุล" class="w-full rounded-xl border border-line px-4 py-3 outline-none focus:border-accent focus:ring-2 focus:ring-accent/15 transition" />
        </div>
        <div class="sm:col-span-1">
          <label class="block text-sm font-medium text-navy-900 mb-1.5">เบอร์โทรศัพท์ <span class="text-red-500">*</span></label>
          <input name="phone" required pattern="[0-9\-\s]{9,}" placeholder="08X-XXX-XXXX" class="w-full rounded-xl border border-line px-4 py-3 font-mono tabular-nums outline-none focus:border-accent focus:ring-2 focus:ring-accent/15 transition" />
        </div>
        <div class="sm:col-span-1">
          <label class="block text-sm font-medium text-navy-900 mb-1.5">ประเภทงาน <span class="text-red-500">*</span></label>
          <select name="service" required class="w-full rounded-xl border border-line px-4 py-3 outline-none focus:border-accent focus:ring-2 focus:ring-accent/15 transition bg-white">
            <option value="">เลือกประเภทงาน...</option>
            @foreach ($services as $option)
              <option @selected($option === $selected)>{{ $option }}</option>
            @endforeach
          </select>
        </div>
        <div class="sm:col-span-1">
          <label class="block text-sm font-medium text-navy-900 mb-1.5">งบประมาณคร่าวๆ</label>
          <select name="budget" class="w-full rounded-xl border border-line px-4 py-3 outline-none focus:border-accent focus:ring-2 focus:ring-accent/15 transition bg-white">
            @foreach ($budgets as $b)
              <option @selected($b === '500,000 – 1,000,000 บาท')>{{ $b }}</option>
            @endforeach
          </select>
        </div>
        <div class="sm:col-span-2">
          <label class="block text-sm font-medium text-navy-900 mb-1.5">รายละเอียดงาน</label>
          <textarea name="detail" rows="4" placeholder="เช่น ขนาดพื้นที่, ความสูง, ระยะเวลาที่ต้องการ ฯลฯ" class="w-full rounded-xl border border-line px-4 py-3 outline-none focus:border-accent focus:ring-2 focus:ring-accent/15 transition"></textarea>
        </div>
        <label class="sm:col-span-2 flex items-center gap-2.5 text-sm text-ink2">
          <input type="checkbox" required class="size-4 rounded border-line text-accent focus:ring-accent/30" />
          ยอมรับ <a href="#" class="text-accent font-medium">นโยบายความเป็นส่วนตัว</a>
        </label>
        <div class="sm:col-span-2 flex flex-wrap items-center gap-4">
          <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-accent px-7 py-3.5 font-semibold text-white hover:bg-navy-900 transition">ส่งคำขอเสนอราคา <i class="bi bi-arrow-right"></i></button>
          <span class="text-sm text-muted">ทีมงานติดต่อกลับภายใน 24 ชั่วโมง</span>
        </div>
        <div x-show="sent" x-cloak class="sm:col-span-2 rounded-xl bg-green-50 border border-green-200 text-green-700 px-4 py-3 text-[15px]">
          <i class="bi bi-check-circle-fill"></i> ส่งคำขอเรียบร้อย! ทีมงานจะติดต่อกลับเร็วที่สุด ขอบคุณที่ไว้วางใจครับ
        </div>
      </form>
    </div>
  </div>
</section>
