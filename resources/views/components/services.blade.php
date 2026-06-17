@props(['services'])

<section id="services" class="mx-auto max-w-7xl px-6 py-20 lg:py-28">
    <div class="max-w-2xl">
        <span class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
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

    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ($services as $svc)
            <a href="{{ route('services.index', $svc['slug']) }}"
                class="group flex flex-col rounded-2xl border border-line bg-white p-7 hover:border-accent hover:-translate-y-1 hover:shadow-2xl hover:shadow-accent/15 transition">
                <span class="grid place-items-center w-14 h-14 rounded-xl bg-navy-700/8 text-navy-700 text-2xl mb-5">
                    <i class="bi {{ $svc['icon'] }}"></i>
                </span>
                <h3 class="text-xl font-bold text-navy-900">{{ $svc['name'] }}</h3>
                <p class="mt-2 text-[15px] text-ink2 leading-relaxed flex-1">{{ $svc['desc'] }}</p>
                <div class="mt-5 pt-4 border-t border-dashed border-line flex gap-5 text-[13px] text-muted">
                    <span>เริ่มต้น <strong class="text-navy-900 font-semibold">{{ $svc['price'] }}</strong></span>
                    <span>ระยะงาน <strong class="text-navy-900 font-semibold">{{ $svc['dur'] }}</strong></span>
                </div>
                <span class="mt-4 inline-flex items-center gap-1.5 text-accent font-semibold text-[15px]">
                    ดูรายละเอียดบริการ <i class="bi bi-arrow-right group-hover:translate-x-1 transition"></i>
                </span>
            </a>
        @endforeach
    </div>
</section>