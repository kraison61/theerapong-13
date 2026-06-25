{{-- ไฟล์: resources/views/quotation-safety-net.blade.php --}}

<div class="font-sans text-slate-800 bg-slate-50 min-h-screen">

    <!-- ════════════════════════════════════════════
         MOCK: Quotation / Pricing Table
    ════════════════════════════════════════════ -->
    <section class="bg-slate-50 border-b border-slate-300">
        <div class="max-w-5xl mx-auto px-6 py-14">

            {{-- Eyebrow & Title --}}
            <div class="flex items-center gap-2 text-[11px] font-bold tracking-widest uppercase text-blue-900 mb-3">
                <div class="w-6 h-px bg-blue-900"></div>ใบเสนอราคาเบื้องต้น
            </div>
            <h2 class="text-2xl font-bold text-slate-900 mb-1">โครงการกำแพงกันดิน + ถนนคอนกรีต + รั้วบ้าน</h2>
            <p class="text-sm text-slate-500 mb-8">คุณสมชาย ใจดี &nbsp;·&nbsp; บางใหญ่ นนทบุรี &nbsp;·&nbsp; ประเมิน ณ วันที่ 25 มิถุนายน 2568</p>

            {{-- Table --}}
            <div class="overflow-x-auto">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-slate-900 text-white text-xs font-semibold tracking-wider uppercase text-left">
                            <th class="p-3 rounded-tl-lg">รายการ</th>
                            <th class="p-3">จำนวน</th>
                            <th class="p-3">หน่วย</th>
                            <th class="p-3 text-right rounded-tr-lg">ราคา (บาท)</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-700">
                        <tr class="border-b border-slate-200">
                            <td class="p-3">กำแพงกันดิน คสล. ความสูง 2.5 ม. พร้อม Drainage</td>
                            <td class="p-3">45</td>
                            <td class="p-3">ม.</td>
                            <td class="p-3 text-right font-mono">562,500</td>
                        </tr>
                        <tr class="border-b border-slate-200">
                            <td class="p-3">ถนนคอนกรีต หนา 15 ซม. พร้อมเหล็กเสริม</td>
                            <td class="p-3">280</td>
                            <td class="p-3">ตร.ม.</td>
                            <td class="p-3 text-right font-mono">448,000</td>
                        </tr>
                        <tr class="border-b border-slate-200">
                            <td class="p-3">รั้วเหล็กดัดพร้อมเสา พร้อมทาสีกันสนิม</td>
                            <td class="p-3">32</td>
                            <td class="p-3">ม.</td>
                            <td class="p-3 text-right font-mono">256,000</td>
                        </tr>
                        <tr class="border-b border-slate-200">
                            <td class="p-3">งานปรับพื้นที่ + ถมดิน + บดอัด</td>
                            <td class="p-3">1</td>
                            <td class="p-3">งาน</td>
                            <td class="p-3 text-right font-mono">185,000</td>
                        </tr>
                        <tr class="border-b-2 border-slate-200">
                            <td class="p-3">ค่าออกแบบ ควบคุมงาน และตรวจรับงาน</td>
                            <td class="p-3">1</td>
                            <td class="p-3">งาน</td>
                            <td class="p-3 text-right font-mono">95,000</td>
                        </tr>
                        <tr class="text-slate-500 text-[13px] border-b border-slate-200">
                            <td colspan="3" class="p-3">ภาษีมูลค่าเพิ่ม 7%</td>
                            <td class="p-3 text-right font-mono">107,345</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="font-bold text-[15px] text-slate-900">
                            <td colspan="3" class="p-4">รวมทั้งสิ้น</td>
                            <td class="p-4 text-right text-2xl font-extrabold font-mono"><span class="text-sm font-semibold text-slate-500 mr-1">฿</span>1,653,845</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            {{-- Payment schedule --}}
            <div class="mt-6 flex flex-col md:flex-row bg-slate-50 border border-slate-200 rounded-2xl overflow-hidden divide-y md:divide-y-0 md:divide-x divide-slate-200">
                <div class="flex-1 p-5 text-center">
                    <div class="text-2xl font-extrabold font-mono text-slate-900 leading-none">30%</div>
                    <div class="text-[13px] font-bold text-orange-500 font-mono mt-1">฿ 496,154</div>
                    <div class="text-xs text-slate-500 mt-1 leading-relaxed">ชำระเมื่อเซ็นสัญญา<br/>และก่อนเริ่มงาน</div>
                </div>
                <div class="flex-1 p-5 text-center">
                    <div class="text-2xl font-extrabold font-mono text-slate-900 leading-none">40%</div>
                    <div class="text-[13px] font-bold text-orange-500 font-mono mt-1">฿ 661,538</div>
                    <div class="text-xs text-slate-500 mt-1 leading-relaxed">ชำระเมื่อโครงสร้าง<br/>แล้วเสร็จ 60%</div>
                </div>
                <div class="flex-1 p-5 text-center">
                    <div class="text-2xl font-extrabold font-mono text-slate-900 leading-none">30%</div>
                    <div class="text-[13px] font-bold text-orange-500 font-mono mt-1">฿ 496,153</div>
                    <div class="text-xs text-slate-500 mt-1 leading-relaxed">ชำระเมื่อส่งมอบงาน<br/>ครบถ้วน</div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="mt-6 flex flex-wrap items-center gap-3">
                <flux:button class="bg-orange-500 hover:bg-orange-600 text-white rounded-xl px-6 py-2.5 font-bold shadow-lg shadow-orange-500/30 transition-colors border-none">
                    <i class="bi bi-check-circle-fill mr-1.5"></i> ยืนยันและนัดเซ็นสัญญา
                </flux:button>
                <flux:button variant="outline" class="border-slate-300 text-slate-700 hover:border-slate-900 rounded-xl px-5 py-2.5 font-semibold transition-colors">
                    <i class="bi bi-download mr-1.5"></i> ดาวน์โหลด PDF
                </flux:button>
            </div>
            <p class="mt-4 text-xs text-slate-500 flex items-center gap-1.5">
                <i class="bi bi-info-circle text-blue-800"></i> ราคาสามารถเปลี่ยนแปลงได้ตามปริมาณวัสดุจริงหน้างาน · ใบเสนอราคามีอายุ 30 วัน
            </p>

        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════════
         AFFILIATE SAFETY NET SECTION
    ════════════════════════════════════════════════════════════════ -->
    <section class="bg-white border-t border-slate-200 py-14">
        <div class="max-w-5xl mx-auto px-6">

            <!-- Header + nav -->
            <div class="flex flex-col md:flex-row md:items-start justify-between gap-6 mb-7">
                <div>
                    <div class="inline-flex items-center gap-2 text-[11px] font-bold tracking-widest uppercase text-slate-500 mb-2">
                        <i class="bi bi-lightbulb-fill text-blue-800 text-xs"></i> ตัวเลือกทางการเงิน · พันธมิตรที่คัดสรรแล้ว
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-slate-900 leading-snug tracking-tight">งบประมาณยังไม่ครบ? ไม่ต้องกังวล</h2>
                    <p class="mt-2 text-[14.5px] text-slate-500 leading-relaxed max-w-lg">
                        มีหลายวิธีที่จะช่วยให้โครงการเดินหน้าได้ — สินเชื่อจากพันธมิตรด้านล่างนี้ช่วย<strong class="text-slate-700">แบ่งเบาภาระ</strong>ได้โดยไม่ต้องรอเงินครบก้อน
                    </p>
                </div>

                <!-- Slider navigation -->
                <div class="flex items-center gap-2 shrink-0 mt-2 md:mt-0">
                    <button id="prevBtn" class="grid place-items-center w-10 h-10 rounded-xl border-2 border-slate-200 bg-white text-slate-900 transition-colors hover:bg-slate-900 hover:border-slate-900 hover:text-white disabled:opacity-30 disabled:pointer-events-none" disabled>
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button id="nextBtn" class="grid place-items-center w-10 h-10 rounded-xl border-2 border-slate-200 bg-white text-slate-900 transition-colors hover:bg-slate-900 hover:border-slate-900 hover:text-white disabled:opacity-30 disabled:pointer-events-none">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Slider Wrapper -->
            <div class="relative overflow-hidden" id="sliderWrap">
                <!-- Track -->
                <div class="flex gap-4 transition-transform duration-500 ease-[cubic-bezier(0.25,0.46,0.45,0.94)] will-change-transform" id="sliderTrack">

                    {{-- Card 1: ttbDrive --}}
                    <a href="#" class="flex-none w-full sm:w-[calc(50%-8px)] md:w-[calc(33.333%-11px)] bg-white border border-slate-200 rounded-2xl overflow-hidden flex flex-col transition-all duration-300 hover:shadow-2xl hover:shadow-blue-900/10 hover:-translate-y-1">
                        <div class="h-[3px] bg-[#00B9A8]"></div>
                        <div class="p-4 pb-3 flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-[#003E80] text-white flex items-center justify-center text-[9px] font-black font-mono leading-tight text-center">ttb<br/>drive</div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">ttb drive</div>
                                <div class="text-[11.5px] text-slate-500 mt-0.5">สินเชื่อรถยนต์</div>
                            </div>
                        </div>
                        <div class="px-4 flex-1">
                            <div class="text-[14.5px] font-semibold text-slate-800 leading-snug mb-3">มีรถอยู่แล้ว? ใช้เป็นทุน<br/>เริ่มงานก่อสร้างได้เลย</div>
                            <div class="flex flex-col gap-2">
                                <div class="flex items-start gap-2 text-[13px] text-slate-600 leading-tight"><i class="bi bi-check2-circle text-[#00B9A8] text-[11px] mt-0.5 shrink-0"></i> ไม่ต้องโอนกรรมสิทธิ์ ขับรถได้ปกติ</div>
                                <div class="flex items-start gap-2 text-[13px] text-slate-600 leading-tight"><i class="bi bi-check2-circle text-[#00B9A8] text-[11px] mt-0.5 shrink-0"></i> วงเงินสูงสุด 1.5 ล้านบาท</div>
                            </div>
                        </div>
                        <div class="mx-4 mt-4 bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 inline-flex items-baseline gap-1 self-start">
                            <span class="font-mono text-lg font-extrabold text-[#003E80] leading-none">0.99%</span>
                            <span class="text-[11.5px] text-slate-500">/เดือน</span>
                        </div>
                        <div class="p-4 pt-3 mt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] text-slate-500 flex items-center gap-1"><i class="bi bi-patch-check-fill text-[#00B9A8]"></i> ธนาคาร TTB</span>
                            <span class="bg-[#003E80] text-white text-[13px] font-bold py-2 px-3 rounded-lg hover:opacity-85 transition-opacity inline-flex items-center gap-1.5 whitespace-nowrap">ดูรายละเอียด <i class="bi bi-arrow-right text-[10px]"></i></span>
                        </div>
                    </a>

                    {{-- Card 2: Car4Cash --}}
                    <a href="#" class="flex-none w-full sm:w-[calc(50%-8px)] md:w-[calc(33.333%-11px)] bg-white border border-slate-200 rounded-2xl overflow-hidden flex flex-col transition-all duration-300 hover:shadow-2xl hover:shadow-blue-900/10 hover:-translate-y-1">
                        <div class="h-[3px] bg-[#FFB800]"></div>
                        <div class="p-4 pb-3 flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-[#005BAC] text-white flex items-center justify-center text-[9px] font-black font-mono leading-tight text-center">Car4<br/>Cash</div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">Car4Cash</div>
                                <div class="text-[11.5px] text-slate-500 mt-0.5">สินเชื่อรถแลกเงิน</div>
                            </div>
                        </div>
                        <div class="px-4 flex-1">
                            <div class="text-[14.5px] font-semibold text-slate-800 leading-snug mb-3">รถแลกเงินก้อน — ขับได้<br/>เหมือนเดิมตลอดสัญญา</div>
                            <div class="flex flex-col gap-2">
                                <div class="flex items-start gap-2 text-[13px] text-slate-600 leading-tight"><i class="bi bi-check2-circle text-[#005BAC] text-[11px] mt-0.5 shrink-0"></i> วงเงินสูงสุด 80% ของมูลค่ารถ</div>
                                <div class="flex items-start gap-2 text-[13px] text-slate-600 leading-tight"><i class="bi bi-check2-circle text-[#005BAC] text-[11px] mt-0.5 shrink-0"></i> รถเก่าก็สมัครได้ ทุกยี่ห้อ</div>
                            </div>
                        </div>
                        <div class="mx-4 mt-4 bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 inline-flex items-baseline gap-1 self-start">
                            <span class="font-mono text-lg font-extrabold text-[#005BAC] leading-none">1.09%</span>
                            <span class="text-[11.5px] text-slate-500">/เดือน</span>
                        </div>
                        <div class="p-4 pt-3 mt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] text-slate-500 flex items-center gap-1"><i class="bi bi-patch-check-fill text-[#005BAC]"></i> ธนาคารกรุงศรี</span>
                            <span class="bg-[#005BAC] text-white text-[13px] font-bold py-2 px-3 rounded-lg hover:opacity-85 transition-opacity inline-flex items-center gap-1.5 whitespace-nowrap">ดูรายละเอียด <i class="bi bi-arrow-right text-[10px]"></i></span>
                        </div>
                    </a>

                    {{-- Card 3: เงินเทอร์โบ --}}
                    <a href="#" class="flex-none w-full sm:w-[calc(50%-8px)] md:w-[calc(33.333%-11px)] bg-white border border-slate-200 rounded-2xl overflow-hidden flex flex-col transition-all duration-300 hover:shadow-2xl hover:shadow-blue-900/10 hover:-translate-y-1">
                        <div class="h-[3px] bg-[#FF6B00]"></div>
                        <div class="p-4 pb-3 flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-[#C8231A] text-white flex items-center justify-center text-[9px] font-black font-mono leading-tight text-center">เงิน<br/>เทอร์โบ</div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">เงินเทอร์โบ</div>
                                <div class="text-[11.5px] text-slate-500 mt-0.5">สินเชื่อส่วนบุคคล</div>
                            </div>
                        </div>
                        <div class="px-4 flex-1">
                            <div class="text-[14.5px] font-semibold text-slate-800 leading-snug mb-3">ไม่มีรถก็กู้ได้ — ไม่ต้อง<br/>มีหลักประกันใดๆ</div>
                            <div class="flex flex-col gap-2">
                                <div class="flex items-start gap-2 text-[13px] text-slate-600 leading-tight"><i class="bi bi-check2-circle text-[#C8231A] text-[11px] mt-0.5 shrink-0"></i> สมัครออนไลน์ 100% ไม่ต้องไปสาขา</div>
                                <div class="flex items-start gap-2 text-[13px] text-slate-600 leading-tight"><i class="bi bi-check2-circle text-[#C8231A] text-[11px] mt-0.5 shrink-0"></i> วงเงินสูงสุด 5 เท่าของรายได้</div>
                            </div>
                        </div>
                        <div class="mx-4 mt-4 bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 inline-flex items-baseline gap-1 self-start">
                            <span class="font-mono text-lg font-extrabold text-[#C8231A] leading-none">5×</span>
                            <span class="text-[11.5px] text-slate-500">วงเงินสูงสุด</span>
                        </div>
                        <div class="p-4 pt-3 mt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] text-slate-500 flex items-center gap-1"><i class="bi bi-patch-check-fill text-[#FF6B00]"></i> พันธมิตร Accesstrade</span>
                            <span class="bg-[#C8231A] text-white text-[13px] font-bold py-2 px-3 rounded-lg hover:opacity-85 transition-opacity inline-flex items-center gap-1.5 whitespace-nowrap">ดูรายละเอียด <i class="bi bi-arrow-right text-[10px]"></i></span>
                        </div>
                    </a>

                    {{-- Card 4: เงินติดล้อ --}}
                    <a href="#" class="flex-none w-full sm:w-[calc(50%-8px)] md:w-[calc(33.333%-11px)] bg-white border border-slate-200 rounded-2xl overflow-hidden flex flex-col transition-all duration-300 hover:shadow-2xl hover:shadow-blue-900/10 hover:-translate-y-1">
                        <div class="h-[3px] bg-[#F5761A]"></div>
                        <div class="p-4 pb-3 flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-[#F5761A] text-white flex items-center justify-center text-[9px] font-black font-mono leading-tight text-center">เงิน<br/>ติดล้อ</div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">เงินติดล้อ</div>
                                <div class="text-[11.5px] text-slate-500 mt-0.5">สินเชื่อทะเบียนรถ</div>
                            </div>
                        </div>
                        <div class="px-4 flex-1">
                            <div class="text-[14.5px] font-semibold text-slate-800 leading-snug mb-3">ทะเบียนรถ = เงินทุน<br/>ทุกอาชีพ สมัครได้เลย</div>
                            <div class="flex flex-col gap-2">
                                <div class="flex items-start gap-2 text-[13px] text-slate-600 leading-tight"><i class="bi bi-check2-circle text-[#F5761A] text-[11px] mt-0.5 shrink-0"></i> รถยนต์ รถกระบะ มอเตอร์ไซค์</div>
                                <div class="flex items-start gap-2 text-[13px] text-slate-600 leading-tight"><i class="bi bi-check2-circle text-[#F5761A] text-[11px] mt-0.5 shrink-0"></i> ไม่เช็คสลิป อนุมัติทุกอาชีพ</div>
                            </div>
                        </div>
                        <div class="mx-4 mt-4 bg-slate-50 border border-slate-200 rounded-lg py-2 px-3 inline-flex items-baseline gap-1 self-start">
                            <span class="font-mono text-lg font-extrabold text-[#F5761A] leading-none">ตามรถ</span>
                            <span class="text-[11.5px] text-slate-500">วงเงินสูงสุด</span>
                        </div>
                        <div class="p-4 pt-3 mt-3 flex items-center justify-between border-t border-slate-100">
                            <span class="text-[11px] text-slate-500 flex items-center gap-1"><i class="bi bi-patch-check-fill text-[#F5761A]"></i> เงินติดล้อ (TIDLOR)</span>
                            <span class="bg-[#F5761A] text-white text-[13px] font-bold py-2 px-3 rounded-lg hover:opacity-85 transition-opacity inline-flex items-center gap-1.5 whitespace-nowrap">ดูรายละเอียด <i class="bi bi-arrow-right text-[10px]"></i></span>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Dots Indicator -->
            <div class="flex justify-center gap-2 mt-6" id="dotsRow"></div>

            <!-- Footer Note -->
            <p class="mt-6 text-center text-xs text-slate-500 flex items-center justify-center gap-1.5">
                <i class="bi bi-lock-fill text-slate-300"></i>
                ข้อมูลเพื่อการอ้างอิงเท่านั้น — ธีรพงษ์การช่างไม่ได้รับค่าธรรมเนียมจากท่าน · การอนุมัติขึ้นอยู่กับเงื่อนไขของผู้ให้สินเชื่อแต่ละราย
            </p>

        </div>
    </section>
</div>

<!-- JavaScript คุม Slider (ทำงานเข้ากับ Tailwind) -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const track   = document.getElementById('sliderTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dotsRow = document.getElementById('dotsRow');
    
    if (!track) return;

    const cards   = track.querySelectorAll('a');
    const total   = cards.length;
    let   current = 0;
    let   visCount= 3;

    function maxStep() { return Math.max(0, total - visCount); }

    function updateVisCount() {
      const w = track.parentElement.offsetWidth;
      if      (w < 640) visCount = 1; // sm ใน Tailwind
      else if (w < 768) visCount = 2; // md ใน Tailwind
      else              visCount = 3;
      current = Math.min(current, maxStep());
      render();
    }

    function render() {
      const cardW = cards[0].getBoundingClientRect().width;
      const gap   = 16; // gap-4 ใน Tailwind = 16px
      const px    = current * (cardW + gap);
      track.style.transform = `translateX(-${px}px)`;

      prevBtn.disabled = current === 0;
      nextBtn.disabled = current >= maxStep();

      dotsRow.querySelectorAll('button').forEach((d, i) => {
        if (i === current) {
          d.className = 'w-5 h-2 rounded-full bg-slate-900 transition-all duration-300 cursor-pointer p-0 border-none';
        } else {
          d.className = 'w-2 h-2 rounded-full bg-slate-300 transition-all duration-300 cursor-pointer p-0 border-none';
        }
      });
    }

    function buildDots() {
      dotsRow.innerHTML = '';
      const count = maxStep() + 1;
      for (let i = 0; i < count; i++) {
        const d = document.createElement('button');
        d.setAttribute('aria-label', `Slide ${i + 1}`);
        d.addEventListener('click', () => { current = i; render(); });
        dotsRow.appendChild(d);
      }
    }

    prevBtn.addEventListener('click', () => { if (current > 0) { current--; render(); } });
    nextBtn.addEventListener('click', () => { if (current < maxStep()) { current++; render(); } });

    /* Touch / Drag Swipe */
    let startX = 0;
    track.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
    track.addEventListener('touchend', e => {
      const dx = e.changedTouches[0].clientX - startX;
      if (dx < -40 && current < maxStep()) { current++; render(); }
      if (dx >  40 && current > 0)         { current--; render(); }
    }, { passive: true });

    updateVisCount();
    buildDots();
    render();
    window.addEventListener('resize', () => { updateVisCount(); buildDots(); render(); });
  });
</script>