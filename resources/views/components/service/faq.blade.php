@props(['faqs'])

{{-- ============ SERVICE-SPECIFIC FAQ ============ --}}
{{-- ใช้ <details> ของ HTML ล้วน — ไม่ต้องมี JS เปิด/ปิด --}}
<section class="bg-surface">
  <div class="mx-auto max-w-7xl px-6 py-20 lg:py-24">
    <div class="grid lg:grid-cols-12 gap-10 lg:gap-16">
      <div class="lg:col-span-5">
        <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase"><span class="w-7 h-px bg-accent"></span> คำถามที่พบบ่อย</span>
        <h2 class="mt-4 text-3xl lg:text-4xl font-bold tracking-tight text-navy-900 leading-tight">เรื่องที่ลูกค้ามักถามก่อนเริ่มงาน</h2>
        <p class="mt-4 text-lg text-ink2 leading-relaxed">ไม่พบคำตอบที่ต้องการ? โทร <a href="tel:0812345678" class="font-mono tabular-nums text-accent font-semibold">081-234-5678</a> ทีมงานพร้อมตอบทุกวันจันทร์–เสาร์ 8:00–18:00</p>
      </div>
      <div class="lg:col-span-7 space-y-3">
        @foreach ($faqs as $i => [$question, $answer])
          <details class="group rounded-2xl border border-line bg-white px-5 [&_summary::-webkit-details-marker]:hidden" @if ($i === 0) open @endif>
            <summary class="flex cursor-pointer items-center justify-between gap-4 py-4 font-semibold text-navy-900">
              {{ $question }}
              <i class="bi bi-plus-lg text-accent transition group-open:rotate-45"></i>
            </summary>
            <p class="pb-5 -mt-1 text-[15px] text-ink2 leading-relaxed">{{ $answer }}</p>
          </details>
        @endforeach
      </div>
    </div>
  </div>
</section>
