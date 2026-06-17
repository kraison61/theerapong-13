@props(['services'])

<footer class="bg-navy-950 text-white/60">
    <div class="mx-auto max-w-7xl px-6 pt-16 pb-10 grid md:grid-cols-12 gap-10">

        <div class="md:col-span-5">
            <div class="flex items-center gap-3 mb-4">
                <span
                    class="grid place-items-center w-10 h-10 rounded-lg bg-white text-navy-900 font-mono font-bold text-sm">TP</span>
                <span class="font-bold text-white text-[17px]">ธีรพงษ์การช่าง</span>
            </div>
            <p class="max-w-sm text-[15px] leading-relaxed">
                รับเหมาก่อสร้างครบวงจร — กำแพงกันดิน รั้ว ถนน ลานคอนกรีต และงานปรับพื้นที่ ในเขตกรุงเทพฯ และปริมณฑล
            </p>
            <div class="mt-5 flex gap-2.5">
                <a href="#"
                    class="inline-flex items-center gap-2 rounded-full bg-white/5 ring-1 ring-white/15 px-3.5 py-2 text-[14px] text-white/80 hover:bg-white/10 transition">
                    <i class="bi bi-facebook"></i> Facebook
                </a>
                <a href="#"
                    class="inline-flex items-center gap-2 rounded-full bg-white/5 ring-1 ring-white/15 px-3.5 py-2 text-[14px] text-white/80 hover:bg-white/10 transition">
                    <i class="bi bi-line"></i> @@theeraphong
                </a>
            </div>
        </div>

        <div class="md:col-span-2">
            <h3 class="text-white font-semibold mb-3.5 text-[15px]">บริการ</h3>
            <ul class="space-y-2.5 text-[15px]">
                @foreach ($services as $svc)
                    <li><a href="{{ route('services.index', $svc['slug']) }}"
                            class="hover:text-white transition">{{ $svc['name'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="md:col-span-2">
            <h3 class="text-white font-semibold mb-3.5 text-[15px]">บริษัท</h3>
            <ul class="space-y-2.5 text-[15px]">
                <li><a href="#projects" class="hover:text-white transition">ผลงานก่อสร้าง</a></li>
                <li><a href="#process" class="hover:text-white transition">ขั้นตอนทำงาน</a></li>
                <li><a href="{{ route('blog.index') }}" class="hover:text-white transition">บทความ</a></li>
                <li><a href="{{ route('portal.index') }}" class="hover:text-white transition">พอร์ทัลลูกค้า</a></li>
                <li><a href="#faq" class="hover:text-white transition">คำถามที่พบบ่อย</a></li>
            </ul>
        </div>

        <div class="md:col-span-3">
            <h3 class="text-white font-semibold mb-3.5 text-[15px]">ติดต่อ</h3>
            <ul class="space-y-2.5 text-[15px]">
                <li><i class="bi bi-telephone-fill text-hivis mr-2"></i><span
                        class="font-mono tabular-nums">081-234-5678</span></li>
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