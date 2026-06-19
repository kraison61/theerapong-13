<header id="nav" class=" top-0 z-50 bg-white/90 backdrop-blur-md border-b border-line" x-data="{ open: false }">
    <nav class="mx-auto max-w-7xl px-6 h-[68px] flex items-center justify-between gap-4">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0">
            <span
                class="relative grid place-items-center w-10 h-10 rounded-lg bg-navy-900 text-white font-mono font-bold text-sm">
                TP
                <span class="absolute w-1.5 h-1.5 rounded-[2px] bg-hivis translate-x-3 translate-y-3"></span>
            </span>
            <span class="font-bold text-navy-900 tracking-tight text-[17px] whitespace-nowrap">ธีรพงษ์การช่าง</span>
        </a>

        {{-- Desktop nav --}}
        <div class="hidden lg:flex items-center gap-1 text-[15px] font-medium text-ink2">
            <a href="{{ route('home') }}"
                class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">หน้าแรก</a>
            <a href="{{ route('services.index') }}"
                class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">บริการ</a>
            <a href="#projects" class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">ผลงาน</a>
            <a href="#process"
                class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">ขั้นตอน</a>
            <a href="{{ route('blog.index') }}"
                class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">บทความ</a>
            <a href="{{ route('portal.index') }}"
                class="px-3.5 py-2 rounded-lg hover:text-navy-900 hover:bg-surface transition">
                พอร์ทัลลูกค้า <i class="bi bi-arrow-up-right text-xs"></i>
            </a>
        </div>

        {{-- CTA + hamburger --}}
        <div class="flex items-center gap-2">
            <!-- <flux:button href="tel:0817928148"
                class="hidden sm:inline-flex rounded-xl bg-accent hover:bg-navy-900 text-white px-4 py-2.5 text-sm font-semibold transition">
                <i class="bi bi-telephone-fill"></i>
            </flux:button> -->
            <flux:button href="tel:0817928148"
                class="hidden sm:inline-flex rounded-xl !bg-navy-900 hover:!bg-[#1B365D] !text-white px-4 py-2.5 text-sm font-semibold transition">
                <i class="bi bi-telephone-fill"></i>
            </flux:button>

            <flux:button href="https://line.me/ti/p/h9SHumuTEB"
                class="hidden sm:inline-flex rounded-xl !bg-[#00B900] hover:!bg-[#009900] !text-white px-4 py-2.5 text-sm font-semibold transition !border-none">
                <i class="bi bi-line"></i>
            </flux:button>

            <button @click="open = !open"
                class="lg:hidden grid place-items-center w-10 h-10 rounded-lg border border-line text-navy-900"
                :aria-expanded="open.toString()" aria-label="เมนู">
                <i class="bi text-2xl" :class="open ? 'bi-x-lg' : 'bi-list'"></i>
            </button>
        </div>
    </nav>

    {{-- Mobile menu --}}
    <div x-show="open" x-cloak x-transition:enter="transition duration-150"
        x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition duration-100" x-transition:leave-end="opacity-0"
        class="lg:hidden border-t border-line bg-white">
        <div class="mx-auto max-w-7xl px-6 py-3 flex flex-col text-[15px] font-medium text-ink2">
            <a href="{{ route('home') }}" @click="open=false" class="py-2.5 border-b border-line/70">หน้าแรก</a>
            <a href="{{ route('services.index') }}" @click="open=false"
                class="py-2.5 border-b border-line/70">บริการ</a>
            <a href="#projects" @click="open=false" class="py-2.5 border-b border-line/70">ผลงาน</a>
            <a href="#process" @click="open=false" class="py-2.5 border-b border-line/70">ขั้นตอน</a>
            <a href="{{ route('blog.index') }}" @click="open=false" class="py-2.5 border-b border-line/70">บทความ</a>
            <a href="{{ route('portal.index') }}" @click="open=false" class="py-2.5">พอร์ทัลลูกค้า</a>
        </div>
    </div>
</header>