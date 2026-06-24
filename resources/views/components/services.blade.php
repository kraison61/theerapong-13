@props(['services'])

<section id="services" data-carousel class="mx-auto max-w-7xl px-6 py-20 lg:py-28">
    <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
        <div class="max-w-2xl">
            <span
                class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-navy-700"></span> บริการของเรา
            </span>
            <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                รายละเอียดบริการและอัตราค่าบริการ (Our Services)
            </h2>
            <p class="mt-4 text-lg text-ink2 leading-relaxed">
                ทีมงานเฉพาะทางสำหรับงานรับเหมาก่อสร้าง ตั้งแต่ 5 ตร.ม. ถึงโครงการขนาดใหญ่ ในกรุงเทพฯ และปริมณฑล
                อัตราค่าบริการมาตรฐานของเรา (ราคานี้อาจมีการปรับเปลี่ยนตามระยะทางและภูมิประเทศสำหรับงานต่างจังหวัด):
            </p>
        </div>

        {{-- ปุ่มเลื่อน (ซ่อนบนจอเล็ก เพราะใช้นิ้วปัดแทน) --}}
        <div class="hidden shrink-0 gap-3 lg:flex">
            <button type="button" data-carousel-prev aria-label="เลื่อนไปบริการก่อนหน้า"
                class="grid h-12 w-12 place-items-center rounded-full border border-line bg-white text-navy-900 transition hover:border-accent hover:text-accent disabled:opacity-30 disabled:pointer-events-none">
                <i class="bi bi-arrow-left text-xl"></i>
            </button>
            <button type="button" data-carousel-next aria-label="เลื่อนไปบริการถัดไป"
                class="grid h-12 w-12 place-items-center rounded-full border border-line bg-white text-navy-900 transition hover:border-accent hover:text-accent disabled:opacity-30 disabled:pointer-events-none">
                <i class="bi bi-arrow-right text-xl"></i>
            </button>
        </div>
    </div>

    {{-- แทร็กเลื่อน: -mx-6 px-6 ทำให้การ์ดไหลถึงขอบจอบนมือถือสวย ๆ --}}
    <div data-carousel-track role="region" aria-label="รายการบริการ" tabindex="0" class="mt-12 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth pb-4 -mx-6 px-6
               [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden
               focus:outline-none focus-visible:ring-2 focus-visible:ring-accent/40 rounded-2xl">
        @foreach ($services as $svc)
            <a href="{{ route('services.index', $svc['slug']) }}" class="group flex flex-col rounded-2xl border border-line bg-white p-7 transition hover:border-accent hover:-translate-y-1 hover:shadow-2xl hover:shadow-accent/15
                           snap-start shrink-0 w-[78%] sm:w-[45%] lg:w-[31%]">
                <span class="grid place-items-center w-14 h-14 rounded-xl bg-navy-700/8 text-navy-700 text-2xl mb-5">
                    <i class="bi {{ $svc['icon_name'] }}"></i>
                </span>
                <h3 class="text-xl font-bold text-navy-900">{{ $svc->title }}</h3>
                <p class="mt-2 text-[15px] text-ink2 leading-relaxed flex-1">{{ $svc->description }}</p>
                <div class="mt-5 pt-4 border-t border-dashed border-line flex gap-5 text-[13px] text-muted">
                    <span>เริ่มต้น <strong class="text-navy-900 font-semibold">{{ number_format($svc->prices->first()->price) ?? 0, 0 }}.-/  {{ $svc->prices->first()->unit }}</strong></span>
                    <span>ระยะงาน <strong class="text-navy-900 font-semibold">{{ $svc->dur }}</strong></span>
                </div>
                <span class="mt-4 inline-flex items-center gap-1.5 text-accent font-semibold text-[15px]">
                    ดูรายละเอียดบริการ <i class="bi bi-arrow-right group-hover:translate-x-1 transition"></i>
                </span>
            </a>
        @endforeach
    </div>
</section>

@once
    <script>
        document.querySelectorAll('[data-carousel]').forEach((root) => {
            const track = root.querySelector('[data-carousel-track]');
            const prev = root.querySelector('[data-carousel-prev]');
            const next = root.querySelector('[data-carousel-next]');
            if (!track) return;

            // ระยะเลื่อน = ความกว้างการ์ด 1 ใบ + ช่องว่าง
            const step = () => {
                const card = track.querySelector(':scope > *');
                const gap = parseFloat(getComputedStyle(track).columnGap) || 20;
                return card ? card.offsetWidth + gap : track.clientWidth * 0.8;
            };

            prev?.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
            next?.addEventListener('click', () => track.scrollBy({ left: step(), behavior: 'smooth' }));

            // จางปุ่มเมื่อสุดทาง
            const update = () => {
                const max = track.scrollWidth - track.clientWidth - 1;
                if (prev) prev.disabled = track.scrollLeft <= 0;
                if (next) next.disabled = track.scrollLeft >= max;
            };
            track.addEventListener('scroll', update, { passive: true });
            window.addEventListener('resize', update);
            update();
        });
    </script>
@endonce