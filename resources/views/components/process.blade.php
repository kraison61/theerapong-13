@props(['process'])

<section id="process" class="bg-slate-50">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

        {{-- Section head --}}
        <div class="grid lg:grid-cols-12 gap-8 items-end mb-16">
            <div class="lg:col-span-7">
                <span class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                    <span class="w-7 h-px bg-navy-700"></span> Process &amp; Conditions
                </span>
                <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                    ขั้นตอนการทำงานที่ชัดเจน โปร่งใส
                </h2>
            </div>
            <p class="lg:col-span-5 text-lg text-ink2 leading-relaxed">
                ตั้งแต่วันแรกที่ติดต่อจนถึงการส่งมอบงาน เราใช้กระบวนการมาตรฐาน 4 ขั้นตอนเพื่อให้ทุกโครงการเสร็จตรงเวลาและงบประมาณ
            </p>
        </div>

        {{-- Phase cards --}}
        <div class="flex flex-col gap-5">
            @foreach ($process as $index => $step)
                @php
                    [$num, $badge] = array_pad(explode('-', $step['step'], 2), 2, '');
                    $isLast = $loop->last;
                @endphp

                <div class="relative grid lg:grid-cols-[auto_1fr] gap-0 rounded-2xl border border-line bg-white overflow-hidden
                            hover:shadow-xl hover:shadow-navy-900/6 transition-shadow duration-300">

                    {{-- Left accent strip: step number + icon --}}
                    <div class="flex lg:flex-col items-center lg:justify-start gap-4 lg:gap-0 bg-navy-900 text-white
                                px-6 py-5 lg:px-8 lg:py-8 lg:w-36 shrink-0">
                        <span class="font-mono text-xs font-bold tracking-[0.2em] text-navy-300 uppercase lg:mb-4">STEP</span>
                        <span class="text-5xl lg:text-6xl font-black leading-none tracking-tighter">{{ $num }}</span>
                        <span class="lg:mt-auto lg:pt-8">
                            <i class="bi {{ $step['icon'] }} text-2xl text-navy-300"></i>
                        </span>
                    </div>

                    {{-- Right: content --}}
                    <div class="px-7 py-6 lg:py-8">

                        {{-- Phase header row --}}
                        <div class="flex flex-wrap items-start gap-3 mb-4">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-xl font-bold text-navy-900 leading-snug">{{ $step['title'] }}</h3>
                            </div>
                            @if ($badge)
                                <span class="inline-flex items-center gap-1.5 shrink-0 rounded-full
                                             bg-emerald-50 border border-emerald-200 text-emerald-700
                                             text-xs font-semibold px-3 py-1 whitespace-nowrap">
                                    <i class="bi bi-clock text-[11px]"></i>
                                    {{ $badge }}
                                </span>
                            @endif
                        </div>

                        {{-- Description --}}
                        <p class="text-[15px] text-ink2 leading-relaxed max-w-3xl">{{ $step['desc'] }}</p>
                    </div>

                    {{-- Connector arrow (hidden on last item) --}}
                    @unless ($isLast)
                        <div class="absolute -bottom-[18px] left-[3.25rem] lg:left-[4.25rem] z-10
                                    grid place-items-center w-9 h-9 rounded-full
                                    bg-navy-900 border-2 border-white text-white shadow-md">
                            <i class="bi bi-chevron-down text-sm"></i>
                        </div>
                    @endunless
                </div>
            @endforeach
        </div>

        {{-- Bottom CTA row --}}
        <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-6
                    rounded-2xl bg-navy-900 px-8 py-7 text-white">
            <div>
                <p class="font-semibold text-lg">พร้อมเริ่มโครงการของคุณแล้วหรือยัง?</p>
                <p class="text-navy-300 text-sm mt-0.5">ปรึกษาวิศวกรและสำรวจหน้างานฟรี ไม่มีค่าใช้จ่าย ไม่มีข้อผูกมัด</p>
            </div>
            <a href="{{ config('company.line_url') }}"
               target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 shrink-0 rounded-xl
                      bg-accent text-white font-semibold text-sm px-6 py-3
                      hover:opacity-90 transition">
                <i class="bi bi-chat-fill text-base"></i>
                ทักไลน์นัดสำรวจฟรี
            </a>
        </div>

    </div>
</section>