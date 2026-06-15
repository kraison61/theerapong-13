<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Flux UI Appearance --}}
    @fluxAppearance

    {{-- Livewire Styles --}}
    @livewireStyles
</head>
<body class="min-h-screen bg-white dark:bg-zinc-900 text-zinc-900 dark:text-white antialiased">
    
    {{-- ส่วนหลักของเนื้อหา --}}
    <main class="p-8">
        {{ $slot }}
    </main>

    {{-- Flux UI Scripts --}}
    @fluxScripts
    
    {{-- Livewire Scripts --}}
    @livewireScripts
</body>
</html>
