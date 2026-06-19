@props(['service'])

{{-- ============ OVERVIEW + SCOPE ============ --}}
<section class="mx-auto max-w-7xl px-6 py-20 lg:py-24">
  <div class="grid lg:grid-cols-12 gap-12 lg:gap-16">
    {{-- left: long overview --}}
    <div class="lg:col-span-7">
      <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase"><span class="w-7 h-px bg-accent"></span> รายละเอียดบริการ</span>
      <h2 class="mt-4 text-3xl lg:text-4xl font-bold tracking-tight text-navy-900 leading-tight">{{ $service['overviewTitle'] }}</h2>
      <div class="mt-5 space-y-4 text-lg text-ink2 leading-relaxed">
        @foreach ($service['overview'] as $paragraph)
          <p>{{ $paragraph }}</p>
        @endforeach
      </div>

      <h3 class="mt-10 text-xl font-bold text-navy-900">งานนี้รวมอะไรบ้าง</h3>
      <ul class="mt-4 grid sm:grid-cols-2 gap-x-6 gap-y-3 text-[15px] text-ink2">
        @foreach ($service['scope'] as $item)
          <li class="flex items-start gap-2.5"><i class="bi bi-check-circle-fill text-accent mt-1 shrink-0"></i><span>{{ $item }}</span></li>
        @endforeach
      </ul>
    </div>

    {{-- right: sticky spec + price card --}}
    <aside class="lg:col-span-5">
      <div class="lg:sticky lg:top-[88px] rounded-2xl border border-line bg-surface p-7">
        <div class="flex items-end justify-between gap-4">
          <div>
            <div class="text-[13px] text-muted">ราคาเริ่มต้น</div>
            <div class="font-mono text-3xl font-bold text-navy-900 tracking-tight tabular-nums">{{ $service['price'] }}</div>
          </div>
          <span class="rounded-full bg-hivis/20 text-accent text-[13px] font-semibold px-3 py-1.5">ประเมินฟรี</span>
        </div>
        <p class="mt-2 text-[14px] text-muted">* ราคาจริงขึ้นกับหน้างาน ขนาด และวัสดุที่เลือก ทีมงานสำรวจและตีราคาให้ฟรี</p>

        <div class="mt-3 flex items-center gap-2.5 rounded-xl bg-navy-900/5 px-3.5 py-2.5 text-[13px] text-navy-900">
          <i class="bi bi-credit-card-2-front-fill text-accent text-base shrink-0"></i>
          <span><b class="font-semibold">ทุนไม่พร้อม? ผ่อนได้</b> — มีสินเชื่อจากพันธมิตรสถาบันการเงินรองรับ</span>
        </div>

        <dl class="mt-6 divide-y divide-line border-y border-line">
          @foreach ($service['specs'] as [$key, $value])
            <div class="flex items-center justify-between gap-4 py-3 text-[15px]">
              <dt class="text-muted">{{ $key }}</dt><dd class="font-semibold text-navy-900 text-right">{{ $value }}</dd>
            </div>
          @endforeach
        </dl>

        <a href="#contact" class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-accent px-6 py-3.5 font-semibold text-white hover:bg-navy-900 transition">ขอใบเสนอราคางานนี้ <i class="bi bi-arrow-right"></i></a>
        <a href="tel:0812345678" class="mt-2.5 inline-flex w-full items-center justify-center gap-2 rounded-xl border border-line bg-white px-6 py-3 font-semibold text-navy-900 hover:border-navy-900 transition"><i class="bi bi-telephone-fill text-accent"></i> 081-234-5678</a>
      </div>
    </aside>
  </div>
</section>
