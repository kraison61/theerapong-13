@props(['services', 'current'])

{{-- ============ OTHER SERVICES ============ --}}
<section class="mx-auto max-w-7xl px-6 py-20 lg:py-24">
  <div class="max-w-2xl mb-10">
    <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase"><span class="w-7 h-px bg-accent"></span> บริการอื่น ๆ</span>
    <h2 class="mt-4 text-3xl lg:text-4xl font-bold tracking-tight text-navy-900 leading-tight">เราดูแลงานนอกตัวบ้านครบทุกประเภท</h2>
  </div>
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
    @foreach ($services as $key => $s)
      @continue($key === $current)
      <a href="{{ route('services.show', $key) }}" class="group flex flex-col rounded-2xl border border-line bg-white p-7 hover:border-navy-900 hover:-translate-y-1 hover:shadow-2xl hover:shadow-navy-900/10 transition">
        <span class="grid place-items-center w-14 h-14 rounded-xl bg-accent/8 text-accent text-2xl mb-5"><i class="bi {{ $s['icon'] }}"></i></span>
        <h3 class="text-xl font-bold text-navy-900">{{ $s['name'] }}</h3>
        <p class="mt-2 text-[15px] text-ink2 leading-relaxed flex-1">{{ $s['tagline'] }}</p>
        <div class="mt-5 pt-4 border-t border-dashed border-line flex gap-5 text-[13px] text-muted">
          <span>เริ่มต้น <b class="text-navy-900 font-semibold">{{ $s['price'] }}</b></span>
          <span>ระยะงาน <b class="text-navy-900 font-semibold">{{ $s['dur'] }}</b></span>
        </div>
        <span class="mt-4 inline-flex items-center gap-1.5 text-accent font-semibold text-[15px]">ดูรายละเอียดบริการ <i class="bi bi-arrow-right group-hover:translate-x-1 transition"></i></span>
      </a>
    @endforeach
  </div>
</section>
