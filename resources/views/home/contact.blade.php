@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา — ธีรพงษ์การช่าง')
@section('description', 'ธีรพงษ์การช่าง รับเหมาก่อสร้างครบวงจร ประสบการณ์ 18 ปี ทีมวิศวกรและช่างมืออาชีพ 35 คน รับรองมาตรฐาน มอก. รับประกันงาน 2 ปี')

@section('content')

    {{-- ============ UTILITY BAR ============ --}}
    <x-utility-bar />

    {{-- ============ NAV ============ --}}
    <x-nav />

    {{-- ============ PAGE HERO ============ --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-surface to-white">
        <div class="pointer-events-none absolute -top-24 right-0 h-[420px] w-[420px] rounded-full bg-navy-700/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-14 lg:py-20">
            <nav class="flex items-center gap-2 text-[13px] text-muted mb-6" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-navy-900 transition">หน้าแรก</a>
                <i class="bi bi-chevron-right text-[10px]"></i>
                <span class="text-navy-900">ติดต่อเรา</span>
            </nav>

            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                    <span class="w-7 h-px bg-navy-700"></span> พร้อมให้คำปรึกษาฟรี
                </span>
                <h1 class="mt-4 text-[clamp(2.2rem,4.2vw,3.6rem)] font-bold leading-[1.25] tracking-tight text-navy-900">
                    เริ่มต้นโครงการของคุณ<br/>ด้วยการสนทนา
                </h1>
                <p class="mt-4 text-lg text-ink2 leading-relaxed max-w-xl">
                    กรอกแบบฟอร์ม หรือโทรหาเราโดยตรง — ทีมงานพร้อมนัดสำรวจหน้างาน
                    และส่งใบเสนอราคาให้ภายใน <strong class="text-navy-900">5–7 วันทำการ</strong>
                    ไม่มีค่าใช้จ่าย ไม่มีข้อผูกมัด
                </p>
            </div>

            {{-- Quick-contact chips --}}
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="tel:0812345678"
                   class="inline-flex items-center gap-2.5 rounded-xl border border-line bg-white px-4 py-2.5 text-[15px] font-medium text-navy-900 shadow-sm hover:border-accent hover:text-accent transition">
                    <i class="bi bi-telephone-fill text-accent text-base"></i>
                    <span class="font-mono tabular-nums">081-234-5678</span>
                </a>
                <a href="mailto:work@theeraphong.co.th"
                   class="inline-flex items-center gap-2.5 rounded-xl border border-line bg-white px-4 py-2.5 text-[15px] font-medium text-navy-900 shadow-sm hover:border-accent hover:text-accent transition">
                    <i class="bi bi-envelope-fill text-accent text-base"></i>
                    work@theeraphong.co.th
                </a>
                <a href="#"
                   class="inline-flex items-center gap-2.5 rounded-xl border border-line bg-white px-4 py-2.5 text-[15px] font-medium text-navy-900 shadow-sm hover:border-accent hover:text-accent transition">
                    <i class="bi bi-line text-accent text-base"></i>
                    @@theeraphong
                </a>
            </div>
        </div>
    </section>

    {{-- ============ MAIN: FORM + INFO ============ --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 pb-20 lg:pb-28 grid lg:grid-cols-12 gap-10 lg:gap-16">

            {{-- ── Contact Info sidebar ── --}}
            <aside class="lg:col-span-4 flex flex-col gap-5">

                {{-- Info cards --}}
                @php
                    $channels = [
                        [
                            'icon' => 'bi-telephone-fill',
                            'label' => 'โทรศัพท์',
                            'primary' => '081-234-5678',
                            'sub' => 'จันทร์–เสาร์ 8:00–18:00 น.',
                            'href' => 'tel:0812345678',
                            'cta' => 'โทรเลย',
                        ],
                        [
                            'icon' => 'bi-envelope-fill',
                            'label' => 'อีเมล',
                            'primary' => 'work@theeraphong.co.th',
                            'sub' => 'ตอบกลับภายใน 4 ชม. (วันทำการ)',
                            'href' => 'mailto:work@theeraphong.co.th',
                            'cta' => 'ส่งอีเมล',
                        ],
                        [
                            'icon' => 'bi-line',
                            'label' => 'LINE Official',
                            'primary' => '@theeraphong',
                            'sub' => 'แชทได้เลย ไม่ต้องรอคิว',
                            'href' => '#',
                            'cta' => 'เพิ่มเพื่อน',
                        ],
                        [
                            'icon' => 'bi-geo-alt-fill',
                            'label' => 'สำนักงาน',
                            'primary' => '88/15 ถ.กาญจนาภิเษก',
                            'sub' => 'บางใหญ่ นนทบุรี 11140',
                            'href' => 'https://maps.google.com',
                            'cta' => 'เปิด Maps',
                        ],
                    ];
                @endphp

                @foreach ($channels as $ch)
                    <div class="flex gap-4 rounded-2xl border border-line bg-white p-5 hover:border-navy-900 hover:shadow-lg hover:shadow-navy-900/5 transition">
                        <span class="grid place-items-center w-11 h-11 rounded-xl bg-navy-700/8 text-navy-700 text-lg shrink-0">
                            <i class="bi {{ $ch['icon'] }}"></i>
                        </span>
                        <div class="flex-1 min-w-0">
                            <div class="text-[12px] font-semibold uppercase tracking-[0.1em] text-muted mb-0.5">{{ $ch['label'] }}</div>
                            <div class="font-bold text-navy-900 text-[15px] truncate">{{ $ch['primary'] }}</div>
                            <div class="text-[13px] text-ink2 mt-0.5">{{ $ch['sub'] }}</div>
                        </div>
                        <a href="{{ $ch['href'] }}"
                           class="self-center shrink-0 rounded-lg bg-surface hover:bg-accent hover:text-white text-navy-900 text-[13px] font-semibold px-3 py-1.5 transition">
                            {{ $ch['cta'] }}
                        </a>
                    </div>
                @endforeach

                {{-- Service areas --}}
                <div class="rounded-2xl border border-line bg-surface p-5">
                    <div class="flex items-center gap-2.5 mb-4">
                        <span class="grid place-items-center w-9 h-9 rounded-lg bg-navy-700/8 text-navy-700">
                            <i class="bi bi-map-fill text-base"></i>
                        </span>
                        <span class="font-semibold text-navy-900 text-[15px]">พื้นที่ให้บริการ</span>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @php
                            $areas = ['นนทบุรี', 'กรุงเทพฯ', 'ปทุมธานี', 'สมุทรปราการ', 'สมุทรสาคร', 'นครปฐม'];
                        @endphp
                        @foreach ($areas as $area)
                            <span class="inline-flex items-center gap-1 rounded-full border border-line bg-white px-3 py-1 text-[13px] text-ink2">
                                <i class="bi bi-check2 text-navy-700 text-xs"></i> {{ $area }}
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- Response time promise --}}
                <div class="rounded-2xl bg-navy-900 text-white p-5 flex gap-4 items-start">
                    <span class="grid place-items-center w-11 h-11 rounded-xl bg-white/10 text-hivis text-xl shrink-0">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </span>
                    <div>
                        <div class="font-bold text-[15px] mb-1">รับประกันการตอบกลับ</div>
                        <p class="text-[13px] text-white/65 leading-relaxed">
                            ส่งฟอร์มแล้ว ทีมงานโทรกลับภายใน <strong class="text-white">24 ชั่วโมง</strong>
                            (วันทำการ) หากไม่ได้รับการติดต่อ แจ้งได้ที่ LINE @@theeraphong
                        </p>
                    </div>
                </div>

            </aside>

            {{-- ── Quote Form ── --}}
            <div class="lg:col-span-8">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-navy-900">ขอใบเสนอราคา / ปรึกษาโครงการ</h2>
                    <p class="mt-1 text-[15px] text-ink2">กรอกข้อมูลคร่าวๆ ยิ่งละเอียดยิ่งได้ใบเสนอราคาที่แม่นยำ</p>
                </div>

                {{-- Livewire contact form component --}}
                <livewire:contact-form />
            </div>

        </div>
    </section>

    {{-- ============ MAP + OFFICE ============ --}}
    <section class="bg-surface border-t border-line">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:py-20 grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            {{-- Map embed --}}
            <div class="rounded-2xl overflow-hidden border border-line shadow-sm aspect-[4/3] lg:aspect-auto lg:h-[400px] bg-navy-800 relative">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.5!2d100.397!3d13.856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDUxJzIxLjYiTiAxMDDCsDIzJzQ5LjIiRQ!5e0!3m2!1sth!2sth!4v1600000000000!5m2!1sth!2sth"
                    class="w-full h-full border-0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="ที่ตั้งสำนักงานธีรพงษ์การช่าง"
                ></iframe>
            </div>

            {{-- Office details --}}
            <div class="flex flex-col gap-6">
                <div>
                    <span class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                        <span class="w-7 h-px bg-navy-700"></span> สำนักงานใหญ่
                    </span>
                    <h2 class="mt-3 text-3xl font-bold text-navy-900 tracking-tight">ธีรพงษ์การช่าง</h2>
                    <p class="mt-2 text-[15px] text-ink2 leading-relaxed">
                        88/15 ถนนกาญจนาภิเษก แขวงบางม่วง<br/>
                        เขตบางใหญ่ จังหวัดนนทบุรี 11140
                    </p>
                </div>

                <ul class="space-y-4">
                    @php
                        $officeInfo = [
                            ['icon' => 'bi-clock-fill', 'label' => 'วันและเวลาทำการ', 'value' => 'จันทร์–เสาร์ 8:00–18:00 น. (อาทิตย์ปิดทำการ)'],
                            ['icon' => 'bi-car-front-fill', 'label' => 'การเดินทาง', 'value' => 'ใกล้แยกบางใหญ่ ถ.กาญจนาภิเษก ออก BTS สายสีม่วง 3 กม.'],
                            ['icon' => 'bi-p-square-fill', 'label' => 'ที่จอดรถ', 'value' => 'มีที่จอดรถสำหรับลูกค้า 10 คัน ด้านหน้าสำนักงาน'],
                            ['icon' => 'bi-building-fill', 'label' => 'สถานที่', 'value' => 'อาคารพาณิชย์ 3 ชั้น สังเกตป้าย "ธีรพงษ์การช่าง" สีน้ำเงิน'],
                        ];
                    @endphp
                    @foreach ($officeInfo as $info)
                        <li class="flex gap-3.5 items-start">
                            <span class="grid place-items-center w-9 h-9 rounded-lg bg-navy-700/8 text-navy-700 shrink-0">
                                <i class="bi {{ $info['icon'] }} text-base"></i>
                            </span>
                            <div>
                                <div class="text-[12px] font-semibold uppercase tracking-[0.1em] text-muted">{{ $info['label'] }}</div>
                                <div class="text-[15px] text-ink2 mt-0.5">{{ $info['value'] }}</div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <a href="https://maps.google.com" target="_blank" rel="noopener"
                   class="self-start inline-flex items-center gap-2 rounded-xl bg-accent hover:bg-navy-900 text-white px-5 py-3 text-[15px] font-semibold shadow-lg shadow-accent/25 transition">
                    <i class="bi bi-map-fill"></i> เปิด Google Maps
                </a>
            </div>

        </div>
    </section>

    {{-- ============ FAQ TEASER ============ --}}
    <section class="bg-white border-t border-line">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:py-20 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
            <div>
                <span class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                    <span class="w-7 h-px bg-navy-700"></span> ก่อนติดต่อ
                </span>
                <h2 class="mt-3 text-3xl font-bold text-navy-900 tracking-tight">มีคำถามอื่นไหม?</h2>
                <p class="mt-2 text-[15px] text-ink2 max-w-md">
                    ดูคำถามที่พบบ่อยของเราก่อน — ครอบคลุมเรื่องราคา ระยะเวลา วัสดุ และการชำระเงิน
                </p>
            </div>
            <div class="flex flex-wrap gap-3 shrink-0 justify-center">
                <flux:button
                    href="{{ route('home') }}#faq"
                    variant="outline"
                    class="rounded-xl border-navy-900 text-navy-900 hover:bg-navy-900 hover:text-white px-6 py-3.5 font-semibold transition"
                ><i class="bi bi-patch-question-fill mr-1.5"></i> คำถามที่พบบ่อย</flux:button>
                <flux:button
                    href="{{ route('about') }}"
                    variant="outline"
                    class="rounded-xl border-line text-ink2 hover:border-navy-900 hover:text-navy-900 px-6 py-3.5 font-semibold transition"
                >เกี่ยวกับเรา</flux:button>
            </div>
        </div>
    </section>
@endsection