@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา — ธีรพงษ์การช่าง')
@section('description', 'ธีรพงษ์การช่าง รับเหมาก่อสร้างครบวงจร ประสบการณ์ 18 ปี ทีมวิศวกรและช่างมืออาชีพ 35 คน รับรองมาตรฐาน มอก. รับประกันงาน 2 ปี')

@section('content')

    {{-- ============ UTILITY BAR ============ --}}
    <x-utility-bar />

    {{-- ============ NAV ============ --}}
    <x-nav />

    {{-- ============ HERO ============ --}}
    <section class="relative overflow-hidden bg-navy-900 text-white">
        {{-- Decorative blobs --}}
        <div
            class="pointer-events-none absolute -top-32 -right-32 h-[560px] w-[560px] rounded-full bg-navy-700/40 blur-3xl">
        </div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-[320px] w-[320px] rounded-full bg-accent/10 blur-3xl">
        </div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:py-28 grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Text --}}
            <div>
                <nav class="flex items-center gap-2 text-[13px] text-white/50 mb-6" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}" class="hover:text-white transition">หน้าแรก</a>
                    <i class="bi bi-chevron-right text-[10px]"></i>
                    <span class="text-white/80">เกี่ยวกับเรา</span>
                </nav>

                <span class="inline-flex items-center gap-2 text-hivis font-semibold tracking-[0.18em] text-xs uppercase">
                    <span class="w-7 h-px bg-hivis"></span> ธีรพงษ์การช่าง · ก่อตั้ง พ.ศ. 2549
                </span>

                <h1 class="mt-5 text-[clamp(2rem,4vw,3.4rem)] font-bold leading-[1.25] tracking-tight">
                    Building Your Vision<br />
                    <span class="bg-gradient-to-r from-white to-white/70 bg-clip-text text-transparent">
                        with Excellence
                    </span>
                </h1>

                <p class="mt-5 text-lg leading-relaxed text-white/70 max-w-xl">
                    เราไม่ใช่แค่ผู้รับเหมา — เราเป็น <strong
                        class="text-white font-semibold">พาร์ทเนอร์ด้านก่อสร้าง</strong>
                    ที่เข้าใจว่าทุกโครงสร้างที่สร้างคือการลงทุนระยะยาวของคุณ
                    ตลอด 18 ปี เราส่งมอบงานกำแพงกันดิน รั้ว ถนน และลานคอนกรีต
                    มากกว่า 420 โครงการ ด้วยมาตรฐานวิศวกรรมที่เชื่อถือได้
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <flux:button href="{{ route('home') }}#contact"
                        class="rounded-xl bg-accent hover:bg-orange-600 text-white px-6 py-3.5 font-semibold shadow-lg shadow-accent/30 transition">
                        ขอใบเสนอราคาฟรี <i class="bi bi-arrow-right ml-1"></i></flux:button>
                    <flux:button href="{{ route('services.index') }}" variant="outline"
                        class="rounded-xl border-white/30 text-white hover:bg-white/10 px-6 py-3.5 font-semibold transition">
                        ดูบริการทั้งหมด</flux:button>
                </div>
            </div>

            {{-- Image --}}
            <div class="relative">
                <div class="relative aspect-[4/5] overflow-hidden rounded-2xl shadow-2xl shadow-navy-950/60">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1000&q=80&auto=format&fit=crop"
                        alt="ทีมงานธีรพงษ์การช่าง หน้างานก่อสร้าง" class="h-full w-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-950/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-x-5 bottom-5 text-white">
                        <div class="font-bold text-lg">ทีมงานมืออาชีพ 35 คน</div>
                        <div class="text-[13px] text-white/70">วิศวกร · หัวหน้าช่าง · ช่างผู้ชำนาญการ</div>
                    </div>
                </div>

                {{-- Floating stats --}}
                <div
                    class="absolute -left-4 top-10 hidden sm:flex items-center gap-3 rounded-xl bg-white p-3 pr-4 shadow-2xl ring-1 ring-line">
                    <span class="grid place-items-center w-10 h-10 rounded-lg bg-navy-700/10 text-navy-700 text-lg">
                        <i class="bi bi-patch-check-fill"></i>
                    </span>
                    <div>
                        <div class="font-mono font-bold text-navy-900 leading-none tabular-nums">18 ปี</div>
                        <div class="text-[12px] text-muted mt-0.5">ประสบการณ์ก่อสร้าง</div>
                    </div>
                </div>

                <div
                    class="absolute -right-4 bottom-24 hidden sm:flex items-center gap-3 rounded-xl bg-white p-3 pr-4 shadow-2xl ring-1 ring-line">
                    <span class="grid place-items-center w-10 h-10 rounded-lg bg-accent/10 text-accent text-lg">
                        <i class="bi bi-shield-fill-check"></i>
                    </span>
                    <div>
                        <div class="font-mono font-bold text-navy-900 leading-none">2 ปี</div>
                        <div class="text-[12px] text-muted mt-0.5">รับประกันงาน</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ============ PHILOSOPHY ============ --}}
    <section id="philosophy" class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span
                    class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                    <span class="w-7 h-px bg-navy-700"></span> ปรัชญาการทำงาน
                </span>
                <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                    หลักสามประการที่ขับเคลื่อน<br />ทุกโครงการของเรา
                </h2>
                <p class="mt-4 text-lg text-ink2 leading-relaxed">
                    ทุกการตัดสินใจ ทุกวัสดุที่เลือก ทุกเส้นตายที่รับปาก
                    ล้วนผ่านการกลั่นกรองจากหลักการสามข้อนี้
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">

                {{-- Pillar 1: Structural Integrity --}}
                <div class="group relative overflow-hidden rounded-2xl bg-navy-900 text-white p-8 flex flex-col">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 rounded-full bg-navy-700/50 blur-2xl group-hover:scale-150 transition duration-700">
                    </div>
                    <span
                        class="relative grid place-items-center w-14 h-14 rounded-xl bg-white/10 text-white text-2xl mb-6">
                        <i class="bi bi-bricks"></i>
                    </span>
                    <div class="relative">
                        <div class="font-mono text-xs font-bold tracking-[0.15em] text-white/40 mb-2">01</div>
                        <h3 class="text-2xl font-bold mb-3">Structural Integrity</h3>
                        <p class="text-white/65 leading-relaxed text-[15px]">
                            ทุกโครงสร้างต้องผ่านการคำนวณโดยวิศวกรโยธา ใช้วัสดุมาตรฐาน มอก. และตรวจสอบหน้างานทุกขั้นตอน
                            เพราะงานที่ดีเริ่มจากรากฐานที่ถูกต้อง ไม่มีทางลัด
                        </p>
                    </div>
                    <div class="relative mt-6 pt-5 border-t border-white/10 flex flex-col gap-2 text-[14px] text-white/50">
                        <span><i class="bi bi-check2 text-hivis mr-2"></i>ออกแบบโดยวิศวกรโยธา ว.ส.ท.</span>
                        <span><i class="bi bi-check2 text-hivis mr-2"></i>วัสดุ มอก. รับรองทุกรายการ</span>
                        <span><i class="bi bi-check2 text-hivis mr-2"></i>ทดสอบกำลังรับน้ำหนักก่อนส่งมอบ</span>
                    </div>
                </div>

                {{-- Pillar 2: On-Time Delivery --}}
                <div
                    class="group relative overflow-hidden rounded-2xl border border-line bg-white p-8 flex flex-col hover:border-navy-900 hover:shadow-2xl hover:shadow-navy-900/8 transition">
                    <span class="grid place-items-center w-14 h-14 rounded-xl bg-navy-700/8 text-navy-700 text-2xl mb-6">
                        <i class="bi bi-calendar2-check"></i>
                    </span>
                    <div>
                        <div class="font-mono text-xs font-bold tracking-[0.15em] text-muted mb-2">02</div>
                        <h3 class="text-2xl font-bold text-navy-900 mb-3">On-Time Delivery</h3>
                        <p class="text-ink2 leading-relaxed text-[15px]">
                            กำหนดส่งงานคือสัญญา ไม่ใช่คาดการณ์
                            เราวางแผน Gantt Chart ล่วงหน้า บริหารจัดการทีมงานและวัสดุอย่างรัดกุม
                            และรายงานความคืบหน้าจริงทุกสัปดาห์
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-dashed border-line flex flex-col gap-2 text-[14px] text-ink2">
                        <span><i class="bi bi-check2 text-navy-700 mr-2"></i>Gantt Chart ก่อนเริ่มงานทุกโครงการ</span>
                        <span><i class="bi bi-check2 text-navy-700 mr-2"></i>Daily Report ผ่านพอร์ทัลลูกค้า</span>
                        <span><i class="bi bi-check2 text-navy-700 mr-2"></i>ค่าปรับเหมาะสมหากล่าช้า</span>
                    </div>
                </div>

                {{-- Pillar 3: Transparent Communication --}}
                <div
                    class="group relative overflow-hidden rounded-2xl border border-line bg-white p-8 flex flex-col hover:border-navy-900 hover:shadow-2xl hover:shadow-navy-900/8 transition">
                    <span class="grid place-items-center w-14 h-14 rounded-xl bg-navy-700/8 text-navy-700 text-2xl mb-6">
                        <i class="bi bi-chat-square-text"></i>
                    </span>
                    <div>
                        <div class="font-mono text-xs font-bold tracking-[0.15em] text-muted mb-2">03</div>
                        <h3 class="text-2xl font-bold text-navy-900 mb-3">Transparent Communication</h3>
                        <p class="text-ink2 leading-relaxed text-[15px]">
                            ใบเสนอราคาครบทุกรายการ ไม่มีค่าใช้จ่ายแอบแฝง
                            ลูกค้าทราบทุกการเปลี่ยนแปลงก่อนดำเนินการ
                            และสามารถติดตามงานแบบ real-time ตลอด 24 ชม.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-dashed border-line flex flex-col gap-2 text-[14px] text-ink2">
                        <span><i class="bi bi-check2 text-navy-700 mr-2"></i>BOQ ครบทุกรายการก่อนเซ็น</span>
                        <span><i class="bi bi-check2 text-navy-700 mr-2"></i>แจ้ง Change Order ล่วงหน้าทุกครั้ง</span>
                        <span><i class="bi bi-check2 text-navy-700 mr-2"></i>พอร์ทัลลูกค้า ติดตามได้ 24/7</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============ OUR STORY ============ --}}
    <section class="bg-surface">
        <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28 grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Image side --}}
            <div class="relative order-2 lg:order-1">
                <div class="relative aspect-square overflow-hidden rounded-2xl shadow-xl shadow-navy-900/15">
                    <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=1000&q=80&auto=format&fit=crop"
                        alt="หน้างานก่อสร้างธีรพงษ์การช่าง" class="h-full w-full object-cover" />
                </div>
                {{-- Overlay card --}}
                <div
                    class="absolute inset-x-5 bottom-5 rounded-xl bg-white/95 backdrop-blur p-4 shadow-xl flex items-center gap-4">
                    <span class="grid place-items-center w-11 h-11 rounded-lg bg-navy-900 text-white text-xl shrink-0">
                        <i class="bi bi-award-fill"></i>
                    </span>
                    <div>
                        <div class="font-bold text-navy-900 text-[15px]">รางวัล "ผู้รับเหมาดีเด่น" 2566</div>
                        <div class="text-[13px] text-muted">สมาคมผู้รับเหมาก่อสร้างไทย ภาคกลาง</div>
                    </div>
                </div>
            </div>

            {{-- Text side --}}
            <div class="order-1 lg:order-2">
                <span
                    class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                    <span class="w-7 h-px bg-navy-700"></span> เส้นทางของเรา
                </span>
                <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                    จากทีมช่าง 5 คน สู่บริษัท 35 คน
                </h2>
                <p class="mt-5 text-[15px] text-ink2 leading-relaxed">
                    ธีรพงษ์การช่างก่อตั้งขึ้นในปี พ.ศ. 2549 จากทีมช่างที่มีประสบการณ์ตรงจากงานโยธา
                    ด้วยความเชื่อว่างานก่อสร้างที่ดีเกิดจากความใส่ใจในทุกรายละเอียด
                    ไม่ใช่แค่การทำให้เสร็จ
                </p>

                {{-- Timeline --}}
                <ol class="mt-8 space-y-5">
                    @php
                        $milestones = [
                            ['year' => '2549', 'text' => 'ก่อตั้งในบางใหญ่ นนทบุรี ด้วยทีมช่าง 5 คน รับงานกำแพงและรั้ว'],
                            ['year' => '2555', 'text' => 'ขยายทีมงานและเพิ่มบริการถนน ลานคอนกรีต และระบบระบายน้ำ'],
                            ['year' => '2560', 'text' => 'ได้รับใบอนุญาตรับเหมาชั้น ค จาก กรมโยธาธิการและผังเมือง'],
                            ['year' => '2566', 'text' => 'เปิดพอร์ทัลลูกค้า ติดตามงานแบบ real-time ครบ 420+ โครงการ'],
                        ];
                    @endphp
                    @foreach ($milestones as $m)
                        <li class="flex gap-4 items-start">
                            <span
                                class="shrink-0 grid place-items-center w-14 h-8 rounded-full bg-navy-900 text-white font-mono text-xs font-bold tabular-nums">
                                {{ $m['year'] }}
                            </span>
                            <p class="text-[15px] text-ink2 leading-relaxed pt-0.5">{{ $m['text'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>

        </div>
    </section>

    {{-- ============ EXPERTISE & SAFETY ============ --}}
    <section id="expertise" class="bg-navy-900 text-white">
        <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

            <div class="grid lg:grid-cols-12 gap-8 items-end mb-14">
                <div class="lg:col-span-7">
                    <span
                        class="inline-flex items-center gap-2 text-hivis font-semibold tracking-[0.18em] text-xs uppercase">
                        <span class="w-7 h-px bg-hivis"></span> มาตรฐานวิศวกรรม & ความปลอดภัย
                    </span>
                    <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight leading-tight">
                        ทุกงานผ่านมาตรฐาน<br />ที่วิศวกรเซ็นรับรอง
                    </h2>
                </div>
                <p class="lg:col-span-5 text-lg text-white/60 leading-relaxed">
                    เราลงทุนในความปลอดภัยและมาตรฐานวิศวกรรมเพราะรู้ว่า
                    งานก่อสร้างที่ผิดพลาดคือต้นทุนที่ลูกค้าแบกรับในระยะยาว
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @php
                    $expertise = [
                        ['icon' => 'bi-person-badge-fill', 'title' => 'วิศวกรประจำโครงการ', 'desc' => 'วิศวกรโยธา ว.ส.ท. ดูแลทุกโครงการตั้งแต่ออกแบบจนส่งมอบ พร้อมลงนามในเอกสาร'],
                        ['icon' => 'bi-clipboard2-check-fill', 'title' => 'QC ทุกชั้นงาน', 'desc' => 'ตรวจสอบคุณภาพก่อนเทคอนกรีต ก่อนวางเหล็ก และก่อนปิดงานทุกครั้ง บันทึกรูปถ่ายทุกจุด'],
                        ['icon' => 'bi-cone-striped', 'title' => 'Safety Plan ทุกไซต์', 'desc' => 'แผนความปลอดภัยหน้างาน ทีม จป. วิชาชีพ อุปกรณ์ PPE ครบ ประกันอุบัติเหตุทีมงาน'],
                        ['icon' => 'bi-file-earmark-text-fill', 'title' => 'เอกสารครบถ้วน', 'desc' => 'ส่งมอบแบบก่อสร้าง As-Built Drawing ใบ กว. และรายงานทดสอบวัสดุพร้อมงาน'],
                    ];
                @endphp

                @foreach ($expertise as $item)
                    <div
                        class="rounded-2xl bg-navy-800/60 ring-1 ring-white/10 p-6 flex flex-col gap-4 hover:bg-navy-800 transition">
                        <span class="grid place-items-center w-12 h-12 rounded-xl bg-white/10 text-hivis text-xl">
                            <i class="bi {{ $item['icon'] }}"></i>
                        </span>
                        <div>
                            <h3 class="font-bold text-lg text-white mb-1.5">{{ $item['title'] }}</h3>
                            <p class="text-[14px] text-white/60 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Certifications strip --}}
            <div class="mt-10 pt-8 border-t border-white/10 flex flex-wrap gap-3">
                @php
                    $certs = ['มอก. 109-2552', 'ใบอนุญาตก่อสร้าง ชั้น ค', 'จป. วิชาชีพ', 'ขึ้นทะเบียน กรมโยธาฯ', 'สมาชิก ส.อ.ท.', 'ประกัน P.A. ทีมงาน'];
                @endphp
                @foreach ($certs as $cert)
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-white/8 ring-1 ring-white/15 px-3.5 py-2 text-[13px] text-white/75">
                        <i class="bi bi-shield-check text-hivis"></i> {{ $cert }}
                    </span>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ============ WHY CHOOSE US ============ --}}
    <section id="why-us" class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">

                {{-- Sticky heading column --}}
                <div class="lg:col-span-5 lg:sticky lg:top-24">
                    <span
                        class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                        <span class="w-7 h-px bg-navy-700"></span> ทำไมต้องเลือกเรา
                    </span>
                    <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                        ความแตกต่างที่คุณ สัมผัสได้ตั้งแต่วันแรก
                    </h2>
                    <p class="mt-4 text-lg text-ink2 leading-relaxed">
                        เราไม่ได้แข่งด้านราคาถูกที่สุด — เราแข่งด้าน
                        <strong class="text-navy-900">คุณค่าสูงสุดต่อทุกบาทที่คุณจ่าย</strong>
                    </p>
                    <flux:button href="{{ route('home') }}#contact"
                        class="mt-6 rounded-xl bg-accent hover:bg-navy-900 text-white px-6 py-3.5 font-semibold shadow-lg shadow-accent/25 transition">
                        เริ่มโครงการของคุณ <i class="bi bi-arrow-right ml-1"></i></flux:button>
                </div>

                {{-- Feature list column --}}
                <div class="lg:col-span-7 grid sm:grid-cols-2 gap-4">
                    @php
                        $features = [
                            ['icon' => 'bi-person-check-fill', 'title' => 'ทีมมืออาชีพมีใบอนุญาต', 'desc' => 'ช่างทุกคนผ่านการฝึกอบรม มีบัตรประจำตัวช่าง และอยู่ภายใต้การดูแลของวิศวกรที่ลงทะเบียนถูกต้อง'],
                            ['icon' => 'bi-gem', 'title' => 'วัสดุพรีเมียมเท่านั้น', 'desc' => 'ปูน SCG/TPI เหล็ก TATA/SYS ท่อ SCG ไม่มีการลดคุณภาพวัสดุเพื่อเพิ่มกำไร — ใบสั่งซื้อเปิดให้ตรวจสอบได้'],
                            ['icon' => 'bi-clock-history', 'title' => 'ตรงเวลาหรือปรับจริง', 'desc' => 'ทุกสัญญาระบุวันส่งงานและอัตราค่าปรับ หากล่าช้าโดยไม่ใช่เหตุสุดวิสัย เราปรับตามสัญญาทุกกรณี'],
                            ['icon' => 'bi-shield-fill-check', 'title' => 'รับประกัน 2 ปีเต็ม', 'desc' => 'ครอบคลุมโครงสร้าง รอยแตกร้าวผิดปกติ และความเสียหายจากงานก่อสร้าง แจ้งได้ 24 ชม. ทางพอร์ทัล'],
                            ['icon' => 'bi-graph-up-arrow', 'title' => 'เพิ่มมูลค่าทรัพย์สิน', 'desc' => 'งานก่อสร้างที่มีมาตรฐานและเอกสารครบถ้วนช่วยเพิ่มราคาประเมินและความน่าเชื่อถือของทรัพย์สินคุณ'],
                            ['icon' => 'bi-headset', 'title' => 'After-Sales Support', 'desc' => 'ทีม Support รับเคสหลังส่งงาน ตอบภายใน 4 ชั่วโมงวันทำการ พร้อมส่งช่างเข้าตรวจในกรณีที่จำเป็น'],
                            ['icon' => 'bi-cash-coin', 'title' => 'ราคาโปร่งใส ไม่ต่อรองในงาน', 'desc' => 'ราคาที่เสนอคือราคาที่จ่ายจริง เว้นแต่มี Change Order ที่ลูกค้าอนุมัติ ไม่มีค่าใช้จ่ายเพิ่มกลางคัน'],
                            ['icon' => 'bi-recycle', 'title' => 'จัดการของเสียอย่างรับผิดชอบ', 'desc' => 'เศษวัสดุและขยะก่อสร้างถูกจัดการตามกฎหมาย ส่งไปยังผู้รับซื้อที่ได้รับอนุญาต ไม่ทิ้งไว้บนพื้นที่ลูกค้า'],
                        ];
                    @endphp

                    @foreach ($features as $f)
                        <div
                            class="flex gap-4 rounded-2xl border border-line bg-white p-5 hover:border-navy-900 hover:shadow-lg hover:shadow-navy-900/5 transition">
                            <span
                                class="grid place-items-center w-11 h-11 rounded-xl bg-navy-700/8 text-navy-700 text-lg shrink-0">
                                <i class="bi {{ $f['icon'] }}"></i>
                            </span>
                            <div>
                                <h3 class="font-bold text-navy-900 text-[15px] mb-1">{{ $f['title'] }}</h3>
                                <p class="text-[13px] text-ink2 leading-relaxed">{{ $f['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    {{-- ============ STATS ============ --}}
    <section class="bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-6 py-12">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-px bg-line rounded-2xl overflow-hidden">
                @php
                    $stats = [
                        ['num' => '18', 'suffix' => 'ปี', 'label' => 'ประสบการณ์'],
                        ['num' => '420', 'suffix' => '+', 'label' => 'โครงการที่ส่งมอบ'],
                        ['num' => '35', 'suffix' => '', 'label' => 'ทีมช่างและวิศวกร'],
                        ['num' => '98', 'suffix' => '%', 'label' => 'ลูกค้าแนะนำต่อ'],
                    ];
                @endphp
                @foreach ($stats as $s)
                    <div class="bg-white py-8 px-6 text-center">
                        <div class="font-mono text-4xl lg:text-5xl font-bold text-navy-900 tabular-nums">
                            {{ $s['num'] }}<span class="text-2xl text-hivis">{{ $s['suffix'] }}</span>
                        </div>
                        <div class="mt-1.5 text-[14px] text-muted">{{ $s['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ CTA BANNER ============ --}}
    <section class="bg-navy-900 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:py-20 flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="text-center lg:text-left">
                <h2 class="text-3xl lg:text-4xl font-bold tracking-tight leading-tight">
                    พร้อมเริ่มโครงการกับเราแล้วหรือยัง?
                </h2>
                <p class="mt-3 text-lg text-white/60">
                    นัดสำรวจหน้างานฟรี — ไม่มีค่าใช้จ่าย ไม่มีข้อผูกมัด
                </p>
            </div>
            <div class="flex flex-wrap gap-3 shrink-0">
                <flux:button href="{{ route('home') }}#contact"
                    class="rounded-xl bg-accent hover:bg-orange-600 text-white px-7 py-3.5 font-semibold shadow-xl shadow-accent/30 transition">
                    ขอใบเสนอราคาฟรี <i class="bi bi-arrow-right ml-1"></i></flux:button>
                <flux:button href="tel:0812345678" variant="outline"
                    class="rounded-xl border-white/30 text-white hover:bg-white/10 px-7 py-3.5 font-semibold transition"><i
                        class="bi bi-telephone-fill mr-1.5"></i> 081-234-5678</flux:button>
            </div>
        </div>
    </section>



@endsection