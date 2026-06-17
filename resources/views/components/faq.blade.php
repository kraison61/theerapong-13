@props(['faqs'])

<section id="faq" class="mx-auto max-w-7xl px-6 py-20 lg:py-28">
    <div class="grid lg:grid-cols-12 gap-10 lg:gap-16">

        <div class="lg:col-span-5">
            <span
                class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-navy-700"></span> คำถามที่พบบ่อย
            </span>
            <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                ก่อนตัดสินใจ คุณอาจอยากรู้
            </h2>
            <p class="mt-4 text-lg text-ink2 leading-relaxed">
                หากไม่พบคำตอบที่ต้องการ โทร
                <a href="tel:0812345678" class="font-mono tabular-nums text-accent font-semibold">081-234-5678</a>
                ทีมงานพร้อมตอบทุกวันจันทร์–เสาร์ 8:00–18:00
            </p>
            <flux:button href="#contact"
                class="mt-6 rounded-xl bg-accent hover:bg-navy-900 text-white px-6 py-3.5 font-semibold transition">
                ขอคำปรึกษาฟรี <i class="bi bi-arrow-right ml-1"></i></flux:button>
        </div>

        <div class="lg:col-span-7 space-y-3">
            {{-- เปลี่ยนจาก flux:accordion เป็น Alpine.js เพื่อรองรับ Flux Free --}}
            <div class="space-y-3" x-data="{ active: 0 }"> {{-- กำหนดให้ active: 0 เพื่อให้เปิดข้อแรกเสมอ --}}
                @foreach ($faqs as $i => $faq)
                    <div class="rounded-2xl border border-line bg-white px-5">

                        {{-- Heading (ปุ่มกดเปิด-ปิด) --}}
                        <button type="button" @click="active = active === {{ $i }} ? null : {{ $i }}"
                            class="w-full flex items-center justify-between gap-4 py-4 font-semibold text-navy-900 cursor-pointer text-left focus:outline-none">
                            <span>{{ $faq['q'] }}</span>
                            {{-- ใช้ Bootstrap Icon ตามธีมเว็บของคุณ พร้อมแอนิเมชันหมุนศร --}}
                            <i class="bi bi-chevron-down text-lg transition-transform duration-200"
                                :class="active === {{ $i }} ? 'rotate-180' : ''">
                            </i>
                        </button>

                        {{-- Content (เนื้อหาที่ซ่อนอยู่) --}}
                        <div x-show="active === {{ $i }}" x-collapse {{-- ใช้ x-collapse ของ Alpine (มาพร้อม Livewire)
                            เพื่อให้เปิดปิดนุ่มนวล --}} x-cloak class="pb-5 text-[15px] text-ink2 leading-relaxed">
                            {!! $faq['a'] !!}
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>