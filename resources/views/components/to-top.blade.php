<div x-data="{ visible: false }" x-init="
            window.addEventListener('scroll', () => {
                visible = window.scrollY > 400;
            }, { passive: true });
        " x-cloak>
    <button x-show="visible" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-3 scale-90"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-3 scale-90"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })" aria-label="กลับไปด้านบน" class="
                fixed bottom-[88px] lg:bottom-6 right-4 lg:right-6 z-50
                grid place-items-center
                w-12 h-12 rounded-full
                bg-navy-900 text-white
                shadow-xl shadow-navy-950/40
                ring-2 ring-white/10
                hover:bg-accent
                active:scale-95
                transition duration-200
                @media (prefers-reduced-motion: reduce) { transition: none; }
            ">
        <i class="bi bi-chevron-up text-lg font-bold"></i>
    </button>
</div>