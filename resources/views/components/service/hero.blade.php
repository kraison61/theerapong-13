@props(['service'])

@php
    $stats = [
        ['bi-cash-coin', 'เริ่มต้น ' . $service['price']],
        ['bi-calendar-check', 'ระยะงาน ' . $service['dur']],
        ['bi-patch-check-fill', 'รับประกัน 2 ปี'],
    ];
@endphp

{{-- ============ SERVICE HERO ============ --}}
<section class="relative overflow-hidden bg-gradient-to-b from-surface to-white">
    <div class="pointer-events-none absolute -top-24 right-0 h-[480px] w-[480px] rounded-full bg-accent/10 blur-3xl">
    </div>
    <div class="relative mx-auto max-w-7xl px-6 py-16 lg:py-20 grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div>
            <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-accent"></span> <span>{{ $service['kicker'] }}</span>
            </span>
            <div class="mt-5 flex items-center gap-4">
                <span class="grid place-items-center w-16 h-16 rounded-2xl bg-accent/8 text-accent text-3xl shrink-0"><i
                        class="bi {{ $service['icon'] }}"></i></span>
                <h1 class="text-[clamp(1.9rem,3.6vw,3rem)] font-bold leading-[1.2] tracking-tight text-navy-900">
                    {{ $service['name'] }}</h1>
            </div>
            <p class="mt-5 text-lg leading-relaxed text-ink2 max-w-xl">{{ $service['tagline'] }}</p>

            <div class="mt-7 flex flex-wrap gap-x-8 gap-y-3 text-[15px] text-ink2">
                @foreach ($stats as [$icon, $text])
                    <span><i class="bi {{ $icon }} text-accent mr-1.5"></i> {{ $text }}</span>
                @endforeach
            </div>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#contact"
                    class="inline-flex items-center gap-2 rounded-xl bg-accent px-6 py-3.5 font-semibold text-white shadow-lg shadow-navy-900/20 hover:bg-navy-900 transition">ขอใบเสนอราคาฟรี
                    <i class="bi bi-arrow-right"></i></a>
                <a href="tel:0812345678"
                    class="inline-flex items-center gap-2 rounded-xl border border-navy-900 px-6 py-3.5 font-semibold text-navy-900 hover:bg-navy-900 hover:text-white transition"><i
                        class="bi bi-telephone-fill"></i> โทรปรึกษาช่าง</a>
            </div>
        </div>

        <div class="relative">
            <div class="relative aspect-4/5 overflow-hidden rounded-2xl shadow-2xl shadow-navy-900/30">
                <img src="{{ unsplash($service['hero'], 1200) }}" alt="{{ $service['name'] }}"
                    class="h-full w-full object-cover" />
                <div
                    class="absolute inset-x-5 bottom-5 flex items-center gap-4 rounded-xl bg-white/95 backdrop-blur p-4 shadow-xl">
                    <span class="grid place-items-center w-11 h-11 rounded-lg bg-navy-900 text-white text-xl"><i
                            class="bi bi-patch-check-fill"></i></span>
                    <div>
                        <div class="font-bold text-navy-900 text-[15px]">รับประกันงาน 2 ปีเต็ม</div>
                        <div class="text-[13px] text-muted">คำนวณโครงสร้างโดยวิศวกร · ใบ กว. ถูกต้อง</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>