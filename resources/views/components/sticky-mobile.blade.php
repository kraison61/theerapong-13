<!-- sticky CTA bar (mobile only)
     แสดงเมื่อ nav เลื่อนพ้นหน้าจอ และโชว์ไว้จนสุดหน้าเว็บ
-->
<div x-data="{
        show: false,
        init() {
            const nav = document.querySelector('#nav');
            if (nav) {
                const obs = new IntersectionObserver(([entry]) => {
                    this.show = !entry.isIntersecting;
                }, { threshold: 0 });
                obs.observe(nav);
            }
        }
    }" x-show="show" x-cloak x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-4" class="lg:hidden fixed bottom-0 inset-x-0 z-50 bg-navy-900
           px-3 pt-3 pb-[calc(0.75rem+env(safe-area-inset-bottom))]">

    <div class="flex items-center gap-2.5">
        <a href="https://line.me/R/ti/p/@theeraphong" target="_blank" rel="noopener" class="flex-1 flex items-center justify-center gap-2.5 rounded-2xl py-3.5
                  text-white font-bold text-[16px]
                  shadow-lg shadow-black/20 active:scale-[0.98] transition" style="background-color:#06C755">
            <i class="bi bi-chat-dots-fill text-xl"></i> แอดไลน์ ขอราคาได้เลย
        </a>
        <a href="tel:0812345678" aria-label="โทรหาเรา" class="grid place-items-center w-[54px] h-[54px] rounded-2xl
                  bg-navy-700 text-white ring-1 ring-white/10
                  shadow-lg shadow-black/20 active:scale-95 transition shrink-0">
            <i class="bi bi-telephone-fill text-2xl"></i>
        </a>
    </div>
</div>