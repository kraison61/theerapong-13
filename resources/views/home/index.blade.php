@extends('layouts.app')

@section('title', 'ธีรพงษ์การช่าง — รับเหมาก่อสร้างครบวงจร')
@section('description', 'รับเหมากำแพงกันดิน รั้วบ้าน ถนน ลานคอนกรีต งานปรับพื้นที่ บางใหญ่ นนทบุรี · ประสบการณ์ 18 ปี รับประกัน 2 ปี')

@section('content')

{{-- ============ UTILITY BAR ============ --}}
<div class="hidden md:block bg-navy-950 text-white/70 text-[13px]">
    <div class="mx-auto max-w-7xl px-6 h-10 flex items-center justify-between">
        <div class="flex items-center gap-6">
            <span><i class="bi bi-geo-alt-fill text-hivis mr-1"></i> บางใหญ่ นนทบุรี · รับงาน กทม. &amp; ปริมณฑล</span>
            <span><i class="bi bi-clock-fill text-hivis mr-1"></i> จันทร์–เสาร์ 8:00–18:00 น.</span>
        </div>
        <div class="flex items-center gap-6">
            <a href="#" class="hover:text-white transition"><i class="bi bi-line text-hivis mr-1"></i> @@theeraphong</a>
            <a href="tel:0812345678" class="hover:text-white transition font-mono tabular-nums tracking-tight">
                <i class="bi bi-telephone-fill text-hivis mr-1"></i> 081-234-5678
            </a>
        </div>
    </div>
</div>

{{-- ============ NAV (Alpine.js สำหรับ mobile toggle) ============ --}}
<header id="nav" class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-line" x-data="{ open: false }">
    <nav class="mx-auto max-w-7xl px-6 h-[68px] flex items-center justify-between gap-4">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0">
            <span class="relative grid place-items-center w-10 h-10 rounded-lg bg-navy-900 text-white font-mono font-bold text-sm">
                TP
                <span class="absolute w-1.5 h-1.5 rounded-[2px] bg-hivis translate-x-3 translate-y-3"></span>
            </span>
            <span class="font-bold text-navy-900 tracking-tight text-[17px] whitespace-nowrap">ธีรพงษ์การช่าง</span>
        </a>

        {{-- Desktop nav --}}
        <div class="hidden lg:flex items-center gap-1 text-[15px] font-medium text-ink2">
            <a href="{{ route('home') }}"          class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">หน้าแรก</a>
            <a href="{{ route('services.index') }}" class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">บริการ</a>
            <a href="#projects"                    class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">ผลงาน</a>
            <a href="#process"                     class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">ขั้นตอน</a>
            <a href="{{ route('blog.index') }}"    class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">บทความ</a>
            <a href="{{ route('portal.index') }}"  class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">
                พอร์ทัลลูกค้า <i class="bi bi-arrow-up-right text-xs"></i>
            </a>
        </div>

        {{-- CTA + hamburger --}}
        <div class="flex items-center gap-2">
            <flux:button
                href="#contact"
                class="hidden sm:inline-flex rounded-xl bg-accent hover:bg-navy-900 text-white px-4 py-2.5 text-sm font-semibold transition"
            >ขอใบเสนอราคา</flux:button>

            <button
                @click="open = !open"
                class="lg:hidden grid place-items-center w-10 h-10 rounded-lg border border-line text-navy-900"
                :aria-expanded="open.toString()"
                aria-label="เมนู"
            >
                <i class="bi text-2xl" :class="open ? 'bi-x-lg' : 'bi-list'"></i>
            </button>
        </div>
    </nav>

    {{-- Mobile menu --}}
    <div x-show="open" x-cloak x-transition:enter="transition duration-150" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition duration-100" x-transition:leave-end="opacity-0" class="lg:hidden border-t border-line bg-white">
        <div class="mx-auto max-w-7xl px-6 py-3 flex flex-col text-[15px] font-medium text-ink2">
            <a href="{{ route('home') }}"          @click="open=false" class="py-2.5 border-b border-line/70">หน้าแรก</a>
            <a href="{{ route('services.index') }}" @click="open=false" class="py-2.5 border-b border-line/70">บริการ</a>
            <a href="#projects"                    @click="open=false" class="py-2.5 border-b border-line/70">ผลงาน</a>
            <a href="#process"                     @click="open=false" class="py-2.5 border-b border-line/70">ขั้นตอน</a>
            <a href="{{ route('blog.index') }}"    @click="open=false" class="py-2.5 border-b border-line/70">บทความ</a>
            <a href="{{ route('portal.index') }}"  @click="open=false" class="py-2.5">พอร์ทัลลูกค้า</a>
        </div>
    </div>
</header>

{{-- ============ HERO ============ --}}
<section id="home" class="relative overflow-hidden bg-gradient-to-b from-surface to-white">
    <div class="pointer-events-none absolute -top-24 right-0 h-[480px] w-[480px] rounded-full bg-accent/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-16 lg:py-24 grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        {{-- Text column --}}
        <div>
            <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-accent"></span> รับเหมาก่อสร้าง · นนทบุรี &amp; กรุงเทพฯ
            </span>

            <h1 class="mt-5 text-[clamp(2.2rem,4.2vw,3.6rem)] font-bold leading-[1.3] tracking-tight text-navy-900">
                สร้างทุกโครงสร้าง ด้วย<span class="bg-gradient-to-t from-hivis/60 from-[28%] to-transparent to-[28%]">มาตรฐานมืออาชีพ</span>
            </h1>

            <p class="mt-5 text-lg leading-relaxed text-ink2 max-w-xl">
                รับเหมา <strong class="text-navy-900 font-semibold">กำแพงกันดิน · รั้วบ้าน · ถนน · ลานคอนกรีต</strong> และงานปรับพื้นที่
                — ทีมช่างมืออาชีพ ราคาตรงไปตรงมา ส่งมอบตรงเวลา รับประกันงาน 2 ปี
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <flux:button
                    href="#contact"
                    class="rounded-xl bg-accent hover:bg-navy-900 text-white px-6 py-3.5 font-semibold shadow-lg shadow-navy-900/20 transition"
                >ขอใบเสนอราคาฟรี <i class="bi bi-arrow-right ml-1"></i></flux:button>

                <flux:button
                    href="#projects"
                    variant="outline"
                    class="rounded-xl border-navy-900 text-navy-900 hover:bg-navy-900 hover:text-white px-6 py-3.5 font-semibold transition"
                >ดูผลงานก่อสร้าง</flux:button>
            </div>

            <div class="mt-9 flex flex-wrap gap-x-8 gap-y-3 text-[15px] text-ink2">
                <span><i class="bi bi-check-circle-fill text-accent mr-1.5"></i> ประสบการณ์ 18 ปี</span>
                <span><i class="bi bi-check-circle-fill text-accent mr-1.5"></i> รับประกันงาน 2 ปี</span>
                <span><i class="bi bi-check-circle-fill text-accent mr-1.5"></i> ใบอนุญาตถูกต้อง</span>
                <span><i class="bi bi-check-circle-fill text-accent mr-1.5"></i> ทีมงาน 35 คน</span>
            </div>
        </div>

        {{-- Image column --}}
        <div class="relative">
            <div class="relative aspect-[4/5] overflow-hidden rounded-2xl shadow-2xl shadow-navy-900/30">
                <img
                    src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200&q=80&auto=format&fit=crop"
                    alt="ทีมช่างของธีรพงษ์การช่าง"
                    class="h-full w-full object-cover"
                />
                <div class="absolute inset-x-5 bottom-5 flex items-center gap-4 rounded-xl bg-white/95 backdrop-blur p-4 shadow-xl">
                    <span class="grid place-items-center w-11 h-11 rounded-lg bg-navy-900 text-white text-xl shrink-0">
                        <i class="bi bi-patch-check-fill"></i>
                    </span>
                    <div>
                        <div class="font-bold text-navy-900 text-[15px]">ใบรับรองมาตรฐาน วศ.</div>
                        <div class="text-[13px] text-muted">มอก. 109-2552 · รับเหมาก่อสร้าง ระดับ ค</div>
                    </div>
                </div>
            </div>

            {{-- Floating badge --}}
            <div class="absolute -left-4 top-8 hidden sm:flex items-center gap-3 rounded-xl bg-white p-3 pr-4 shadow-xl ring-1 ring-line">
                <span class="grid place-items-center w-10 h-10 rounded-lg bg-hivis/20 text-accent text-lg">
                    <i class="bi bi-buildings-fill"></i>
                </span>
                <div>
                    <div class="font-mono font-bold text-navy-900 leading-none tabular-nums">420+</div>
                    <div class="text-[12px] text-muted mt-0.5">โครงการ</div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ============ TRUST STRIP ============ --}}
<div class="border-y border-line bg-white">
    <div class="mx-auto max-w-7xl px-6 py-7 flex flex-wrap items-center justify-between gap-4">
        <span class="text-xs font-semibold uppercase tracking-[0.12em] text-muted">ได้รับความไว้วางใจจาก</span>
        <div class="flex flex-wrap gap-2.5">
            <span class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i class="bi bi-shield-check text-accent"></i> มอก. 109</span>
            <span class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i class="bi bi-award-fill text-accent"></i> ใบอนุญาตชั้น ค</span>
            <span class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i class="bi bi-people-fill text-accent"></i> สมาชิก ส.อ.ท.</span>
            <span class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i class="bi bi-cone-striped text-accent"></i> จป. วิชาชีพ</span>
            <span class="inline-flex items-center gap-2 rounded-full border border-line px-3.5 py-2 text-[15px] text-ink2"><i class="bi bi-bank2 text-accent"></i> ขึ้นทะเบียนภาครัฐ</span>
        </div>
    </div>
</div>

{{-- ============ SERVICES ============ --}}
<section id="services" class="mx-auto max-w-7xl px-6 py-20 lg:py-28">
    <div class="max-w-2xl">
        <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase">
            <span class="w-7 h-px bg-accent"></span> บริการของเรา
        </span>
        <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
            งานก่อสร้างที่บ้านคุณต้องการ ครบจบในที่เดียว
        </h2>
        <p class="mt-4 text-lg text-ink2 leading-relaxed">
            ทีมงานเฉพาะทางสำหรับงานก่อสร้างนอกตัวบ้าน รับงานตั้งแต่ 5 ตร.ม. ถึงโครงการขนาดใหญ่ ในกรุงเทพฯ และปริมณฑล
        </p>
    </div>

    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ($services as $svc)
            <a href="{{ route('services.index', $svc['slug']) }}"
               class="group flex flex-col rounded-2xl border border-line bg-white p-7 hover:border-navy-900 hover:-translate-y-1 hover:shadow-2xl hover:shadow-navy-900/10 transition">
                <span class="grid place-items-center w-14 h-14 rounded-xl bg-accent/8 text-accent text-2xl mb-5">
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

{{-- ============ STATS ============ --}}
<section class="bg-navy-900 text-white">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-24">
        <div class="grid lg:grid-cols-12 gap-8 items-end mb-14">
            <div class="lg:col-span-7">
                <span class="inline-flex items-center gap-2 text-hivis font-semibold tracking-[0.18em] text-xs uppercase">
                    <span class="w-7 h-px bg-hivis"></span> ตัวเลขที่ภูมิใจ
                </span>
                <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight leading-tight">
                    18 ปี กับงานก่อสร้าง<br/>ที่ส่งมอบจริง ไม่ทิ้งงาน
                </h2>
            </div>
            <p class="lg:col-span-5 text-lg text-white/60 leading-relaxed">
                เรารับงานทุกสัญญาด้วยมาตรฐานเดียวกัน — ไม่ว่ารั้วบ้านขนาดเล็ก หรือกำแพงกันดินยาว 200 เมตร
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-px bg-white/10 rounded-2xl overflow-hidden">
            <div class="bg-navy-900 p-7">
                <div class="font-mono text-5xl font-bold tracking-tight tabular-nums">18<span class="text-2xl text-hivis ml-1">ปี</span></div>
                <div class="mt-2 text-white/55">ประสบการณ์ในวงการก่อสร้าง</div>
            </div>
            <div class="bg-navy-900 p-7">
                <div class="font-mono text-5xl font-bold tracking-tight tabular-nums">420<span class="text-2xl text-hivis ml-1">+</span></div>
                <div class="mt-2 text-white/55">โครงการที่ส่งมอบเรียบร้อย</div>
            </div>
            <div class="bg-navy-900 p-7">
                <div class="font-mono text-5xl font-bold tracking-tight tabular-nums">35</div>
                <div class="mt-2 text-white/55">ทีมช่างประจำและวิศวกร</div>
            </div>
            <div class="bg-navy-900 p-7">
                <div class="font-mono text-5xl font-bold tracking-tight tabular-nums">98<span class="text-2xl text-hivis ml-1">%</span></div>
                <div class="mt-2 text-white/55">ลูกค้าแนะนำต่อเพื่อนและครอบครัว</div>
            </div>
        </div>
    </div>
</section>

{{-- ============ PROJECTS (Livewire) ============ --}}
<livewire:project-grid />

{{-- ============ PROCESS ============ --}}
<section id="process" class="mx-auto max-w-7xl px-6 py-20 lg:py-28">
    <div class="grid lg:grid-cols-12 gap-8 items-end mb-14">
        <div class="lg:col-span-7">
            <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-accent"></span> ขั้นตอนการทำงาน
            </span>
            <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                โปร่งใส ตรวจสอบได้ ทุกขั้นตอน
            </h2>
        </div>
        <p class="lg:col-span-5 text-lg text-ink2 leading-relaxed">
            ลูกค้าทราบงบประมาณ ระยะเวลา และทีมงานก่อนเริ่มงานจริงเสมอ — ไม่มีค่าใช้จ่ายแอบแฝง
        </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach ($process as $step)
            <div class="rounded-2xl border border-line bg-white p-6 hover:shadow-xl hover:shadow-navy-900/5 transition">
                <span class="grid place-items-center w-12 h-12 rounded-xl bg-navy-900 text-white text-xl mb-5">
                    <i class="bi {{ $step['icon'] }}"></i>
                </span>
                <div class="font-mono text-xs font-bold tracking-[0.15em] text-accent">STEP {{ $step['step'] }}</div>
                <h3 class="mt-2 text-lg font-bold text-navy-900">{{ $step['title'] }}</h3>
                <p class="mt-1.5 text-[15px] text-ink2 leading-relaxed">{{ $step['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ============ TESTIMONIALS (Livewire) ============ --}}
<livewire:testimonials />

{{-- ============ FAQ (Flux Accordion) ============ --}}
<section id="faq" class="mx-auto max-w-7xl px-6 py-20 lg:py-28">
    <div class="grid lg:grid-cols-12 gap-10 lg:gap-16">

        <div class="lg:col-span-5">
            <span class="inline-flex items-center gap-2 text-accent font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-accent"></span> คำถามที่พบบ่อย
            </span>
            <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                ก่อนตัดสินใจ คุณอาจอยากรู้
            </h2>
            <p class="mt-4 text-lg text-ink2 leading-relaxed">
                หากไม่พบคำตอบที่ต้องการ โทร
                <a href="tel:0812345678" class="font-mono tabular-nums text-accent font-semibold">081-234-5678</a>
                ทีมงานพร้อมตอบทุกวันจันทร์–เสาร์ 8:00–18:00
            </p>
            <flux:button
                href="#contact"
                class="mt-6 rounded-xl bg-accent hover:bg-navy-900 text-white px-6 py-3.5 font-semibold transition"
            >ขอคำปรึกษาฟรี <i class="bi bi-arrow-right ml-1"></i></flux:button>
        </div>

        <div class="lg:col-span-7 space-y-3">
            <flux:accordion>
                @foreach ($faqs as $i => $faq)
                    <flux:accordion.item
                        @if($i === 0) expanded @endif
                        class="rounded-2xl border border-line bg-white px-5"
                    >
                        <flux:accordion.heading class="flex items-center justify-between gap-4 py-4 font-semibold text-navy-900 cursor-pointer">
                            {{ $faq['q'] }}
                        </flux:accordion.heading>
                        <flux:accordion.content class="pb-5 text-[15px] text-ink2 leading-relaxed">
                            {!! $faq['a'] !!}
                        </flux:accordion.content>
                    </flux:accordion.item>
                @endforeach
            </flux:accordion>
        </div>

    </div>
</section>

{{-- ============ CONTACT ============ --}}
<section id="contact" class="bg-navy-900 text-white">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28 grid lg:grid-cols-12 gap-12">

        {{-- Contact info --}}
        <div class="lg:col-span-5">
            <span class="inline-flex items-center gap-2 text-hivis font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-hivis"></span> ขอใบเสนอราคา
            </span>
            <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight leading-tight">
                เริ่มต้นโครงการของคุณวันนี้
            </h2>
            <p class="mt-4 text-lg text-white/60 leading-relaxed">
                กรอกข้อมูลคร่าวๆ ทีมงานจะติดต่อกลับภายใน 24 ชั่วโมง (วันทำการ) เพื่อนัดสำรวจหน้างานฟรี
            </p>

            <ul class="mt-8 space-y-4 text-white/85">
                <li class="flex gap-3.5">
                    <i class="bi bi-telephone-fill text-hivis text-xl shrink-0"></i>
                    <div>
                        <div class="text-[13px] text-white/50">โทรเลย</div>
                        <div class="font-mono tabular-nums text-xl font-semibold">081-234-5678</div>
                    </div>
                </li>
                <li class="flex gap-3.5">
                    <i class="bi bi-envelope-fill text-hivis text-xl shrink-0"></i>
                    <div>
                        <div class="text-[13px] text-white/50">อีเมล</div>
                        <div class="font-medium">work@theeraphong.co.th</div>
                    </div>
                </li>
                <li class="flex gap-3.5">
                    <i class="bi bi-geo-alt-fill text-hivis text-xl shrink-0"></i>
                    <div>
                        <div class="text-[13px] text-white/50">สำนักงาน</div>
                        <div class="font-medium">88/15 ถ.กาญจนาภิเษก บางใหญ่ นนทบุรี 11140</div>
                    </div>
                </li>
                <li class="flex gap-3.5">
                    <i class="bi bi-clock-fill text-hivis text-xl shrink-0"></i>
                    <div>
                        <div class="text-[13px] text-white/50">เวลาทำการ</div>
                        <div class="font-medium">จันทร์–เสาร์ 8:00–18:00 น.</div>
                    </div>
                </li>
            </ul>
        </div>

        {{-- Livewire contact form --}}
        <div class="lg:col-span-7">
            <livewire:contact-form />
        </div>

    </div>
</section>

{{-- ============ FOOTER ============ --}}
<footer class="bg-navy-950 text-white/60">
    <div class="mx-auto max-w-7xl px-6 pt-16 pb-10 grid md:grid-cols-12 gap-10">

        <div class="md:col-span-5">
            <div class="flex items-center gap-3 mb-4">
                <span class="grid place-items-center w-10 h-10 rounded-lg bg-white text-navy-900 font-mono font-bold text-sm">TP</span>
                <span class="font-bold text-white text-[17px]">ธีรพงษ์การช่าง</span>
            </div>
            <p class="max-w-sm text-[15px] leading-relaxed">
                รับเหมาก่อสร้างครบวงจร — กำแพงกันดิน รั้ว ถนน ลานคอนกรีต และงานปรับพื้นที่ ในเขตกรุงเทพฯ และปริมณฑล
            </p>
            <div class="mt-5 flex gap-2.5">
                <a href="#" class="inline-flex items-center gap-2 rounded-full bg-white/5 ring-1 ring-white/15 px-3.5 py-2 text-[14px] text-white/80 hover:bg-white/10 transition">
                    <i class="bi bi-facebook"></i> Facebook
                </a>
                <a href="#" class="inline-flex items-center gap-2 rounded-full bg-white/5 ring-1 ring-white/15 px-3.5 py-2 text-[14px] text-white/80 hover:bg-white/10 transition">
                    <i class="bi bi-line"></i> @@theeraphong
                </a>
            </div>
        </div>

        <div class="md:col-span-2">
            <h3 class="text-white font-semibold mb-3.5 text-[15px]">บริการ</h3>
            <ul class="space-y-2.5 text-[15px]">
                @foreach ($services as $svc)
                    <li><a href="{{ route('services.index', $svc['slug']) }}" class="hover:text-white transition">{{ $svc['name'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="md:col-span-2">
            <h3 class="text-white font-semibold mb-3.5 text-[15px]">บริษัท</h3>
            <ul class="space-y-2.5 text-[15px]">
                <li><a href="#projects" class="hover:text-white transition">ผลงานก่อสร้าง</a></li>
                <li><a href="#process"  class="hover:text-white transition">ขั้นตอนทำงาน</a></li>
                <li><a href="{{ route('blog.index') }}"   class="hover:text-white transition">บทความ</a></li>
                <li><a href="{{ route('portal.index') }}" class="hover:text-white transition">พอร์ทัลลูกค้า</a></li>
                <li><a href="#faq" class="hover:text-white transition">คำถามที่พบบ่อย</a></li>
            </ul>
        </div>

        <div class="md:col-span-3">
            <h3 class="text-white font-semibold mb-3.5 text-[15px]">ติดต่อ</h3>
            <ul class="space-y-2.5 text-[15px]">
                <li><i class="bi bi-telephone-fill text-hivis mr-2"></i><span class="font-mono tabular-nums">081-234-5678</span></li>
                <li><i class="bi bi-envelope-fill text-hivis mr-2"></i>work@theeraphong.co.th</li>
                <li><i class="bi bi-geo-alt-fill text-hivis mr-2"></i>88/15 ถ.กาญจนาภิเษก บางใหญ่ นนทบุรี 11140</li>
            </ul>
        </div>

    </div>

    <div class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-5 flex flex-wrap justify-between gap-2 text-[14px]">
            <div>© {{ date('Y') }} ห้างหุ้นส่วนจำกัด ธีรพงษ์การช่าง · เลขผู้เสียภาษี 0125555012345</div>
            <div class="flex gap-5">
                <a href="#" class="hover:text-white transition">นโยบายความเป็นส่วนตัว</a>
                <a href="#" class="hover:text-white transition">เงื่อนไขการให้บริการ</a>
            </div>
        </div>
    </div>
</footer>

@endsection
