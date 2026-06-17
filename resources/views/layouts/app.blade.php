<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', config('app.name', 'ธีรพงษ์การช่าง'))</title>
    <meta name="description"
        content="@yield('description', 'รับเหมาก่อสร้างครบวงจร กำแพงกันดิน รั้วบ้าน ถนน ลานคอนกรีต บางใหญ่ นนทบุรี และกรุงเทพฯ')" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400;500;600;700&family=IBM+Plex+Sans:wght@500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

    {{-- Tailwind 4.3 + Flux UI styles (compiled by Vite) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Flux UI v2.x: appearance (dark/light detection) ต้องอยู่ใน

    <head> --}}
        @fluxAppearance

        @stack('head')
    </head>

<body class="font-sans text-ink bg-white antialiased [text-wrap:pretty]">

    @yield('content')

    {{-- Livewire v4: auto-injects its own scripts — ไม่ต้อง @livewireScripts --}}
    {{-- Flux UI v2.x: Alpine.js bundled inside fluxScripts --}}

    @fluxScripts

    @stack('scripts')
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
                fixed bottom-6 right-6 z-50
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
</body>

</html>