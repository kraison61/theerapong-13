@props(['partners'])

{{-- ============ FINANCING CAROUSEL ============ --}}
{{-- ใช้ Alpine component "carousel" (นิยามครั้งเดียวใน layout) จัดการ index/autoplay/swipe --}}
<section x-data="carousel({{ count($partners) }})" class="mx-auto max-w-7xl px-6 py-12 lg:py-16">
  <div class="flex items-end justify-between gap-4 mb-6">
    <div>
      <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.16em] text-xs uppercase"><span class="w-6 h-px bg-accent"></span> สินเชื่อเพื่อการก่อสร้าง</span>
      <h2 class="mt-3 text-2xl lg:text-3xl font-bold tracking-tight text-navy-900 leading-tight">ทุนไม่พร้อม? เริ่มก่อน ผ่อนทีหลัง — เลือกพันธมิตรที่ใช่</h2>
    </div>
    <div class="hidden sm:flex gap-2 shrink-0">
      <button @click="prev()" aria-label="สไลด์ก่อนหน้า" class="grid place-items-center w-11 h-11 rounded-full border border-line text-navy-900 hover:bg-navy-900 hover:text-white hover:border-navy-900 transition"><i class="bi bi-arrow-left"></i></button>
      <button @click="next()" aria-label="สไลด์ถัดไป" class="grid place-items-center w-11 h-11 rounded-full border border-line text-navy-900 hover:bg-navy-900 hover:text-white hover:border-navy-900 transition"><i class="bi bi-arrow-right"></i></button>
    </div>
  </div>

  <div @mouseenter="stop()" @mouseleave="start()" @touchstart.passive="onStart($event)" @touchend.passive="onEnd($event)" class="relative overflow-hidden rounded-2xl">
    <div class="flex transition-transform duration-500 ease-out" :style="`transform: translateX(-${index * 100}%)`">
      @foreach ($partners as $f)
        <div class="shrink-0 basis-full min-w-0">
          <div class="relative overflow-hidden rounded-2xl bg-navy-900 text-white">
            <div class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full bg-hivis/15 blur-2xl"></div>
            <div class="pointer-events-none absolute -left-10 -bottom-20 h-56 w-56 rounded-full bg-accent/30 blur-2xl"></div>
            <div class="relative p-8 lg:p-10 flex flex-col lg:flex-row lg:items-center gap-7">
              <span class="grid place-items-center w-16 h-16 rounded-2xl bg-hivis text-navy-900 text-3xl shrink-0"><i class="bi {{ $f['icon'] }}"></i></span>
              <div class="flex-1">
                <div class="flex items-center gap-2.5 flex-wrap">
                  <span class="font-bold text-xl">{{ $f['name'] }}</span>
                  <span class="rounded-full bg-hivis/20 text-hivis text-[12px] font-semibold px-2.5 py-1">{{ $f['highlight'] }}</span>
                </div>
                <p class="mt-2.5 text-white/70 leading-relaxed max-w-2xl">{{ $f['desc'] }}</p>
                <p class="mt-2 text-[12px] text-white/40">ดอกเบี้ยและเงื่อนไขการอนุมัติเป็นไปตามที่ผู้ให้สินเชื่อกำหนด · อยู่ระหว่างการพิจารณาคุณสมบัติผู้กู้</p>
              </div>
              <div class="flex flex-col gap-2.5 shrink-0">
                <a href="#contact" class="inline-flex items-center justify-center gap-2 rounded-xl bg-hivis px-6 py-3.5 font-semibold text-navy-900 hover:bg-white transition whitespace-nowrap">ปรึกษาแผนผ่อน <i class="bi bi-arrow-right"></i></a>
                <a href="tel:0812345678" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/25 px-6 py-3 font-semibold text-white hover:bg-white/10 transition whitespace-nowrap"><i class="bi bi-telephone-fill text-hivis"></i> โทรสอบถาม</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div class="mt-5 flex justify-center gap-2">
    @foreach ($partners as $i => $f)
      <button @click="to({{ $i }})" aria-label="ไปสไลด์ {{ $i + 1 }}" class="h-2.5 rounded-full transition-all" :class="index === {{ $i }} ? 'w-7 bg-accent' : 'w-2.5 bg-line hover:bg-muted'"></button>
    @endforeach
  </div>
</section>
