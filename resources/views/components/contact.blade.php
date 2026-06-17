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
                        <div class="font-mono tabular-nums text-xl font-semibold"><a href="tel:+66627188847">{{ config('company.phone') }}</a></div>
                    </div>
                </li>
                <li class="flex gap-3.5">
                    <i class="bi bi-envelope-fill text-hivis text-xl shrink-0"></i>
                    <div>
                        <div class="text-[13px] text-white/50">อีเมล</div>
                        <div class="font-medium"><a href="mailto:{{ config('company.email') }}" target="_blank" >{{ config('company.email') }}</a></div>
                    </div>
                </li>
                <li class="flex gap-3.5">
                    <i class="bi bi-geo-alt-fill text-hivis text-xl shrink-0"></i>
                    <div>
                        <div class="text-[13px] text-white/50">สำนักงาน</div>
                        <div class="font-medium"><a href="https://maps.app.goo.gl/toHbNT1QRe3D9uP86" target="_blank" >{{ config('company.address') }}</a></div>
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