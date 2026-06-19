@props(['service', 'projects'])

{{-- ============ RELATED PROJECTS ============ --}}
<section class="mx-auto max-w-7xl px-6 py-20 lg:py-24">
  <div class="flex flex-wrap items-end justify-between gap-4 mb-10">
    <div class="max-w-2xl">
      <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase"><span class="w-7 h-px bg-accent"></span> ผลงานที่เกี่ยวข้อง</span>
      <h2 class="mt-4 text-3xl lg:text-4xl font-bold tracking-tight text-navy-900 leading-tight">ตัวอย่างงาน{{ $service['name'] }}ที่เราทำมา</h2>
    </div>
    <a href="/#projects" class="inline-flex items-center gap-1.5 text-accent font-semibold text-[15px] hover:gap-2.5 transition-all">ดูผลงานทั้งหมด <i class="bi bi-arrow-right"></i></a>
  </div>
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
    @foreach ($projects as $p)
      <a href="/#projects" class="group relative block aspect-4/3 overflow-hidden rounded-2xl ring-1 ring-line">
        <img src="{{ unsplash($p['img']) }}" alt="{{ $p['title'] }}" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-navy-950/85 via-navy-950/15 to-transparent"></div>
        <div class="absolute inset-0 p-5 flex flex-col justify-end text-white">
          <span class="self-start rounded-full bg-white/20 backdrop-blur px-2.5 py-1 text-[11px] font-semibold uppercase tracking-wide">{{ $p['tag'] }}</span>
          <h3 class="mt-2.5 text-lg font-bold">{{ $p['title'] }}</h3>
          <p class="text-[13px] text-white/75">{{ $p['meta'] }}</p>
        </div>
      </a>
    @endforeach
  </div>
</section>
