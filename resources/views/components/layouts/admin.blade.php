<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin — {{ config('app.name', 'ธีรพงษ์การช่าง') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400;500;600;700&family=IBM+Plex+Sans:wght@500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>

<body class="min-h-screen bg-surface font-sans text-ink antialiased">
    <div class="flex min-h-screen">
        <aside class="flex w-56 shrink-0 flex-col bg-navy-900">
            <a href="{{ route('admin.index') }}" class="flex items-center gap-2.5 border-b border-white/10 px-4 py-4">
                <span
                    class="relative grid h-8 w-8 place-items-center rounded-lg bg-white font-mono text-xs font-bold text-navy-900">TP
                    <span class="absolute h-1.5 w-1.5 translate-x-2 translate-y-2 rounded-sm bg-hivis"></span>
                </span>
                <div>
                    <div class="text-sm font-bold leading-tight text-white">ธีรพงษ์การช่าง</div>
                    <div class="font-mono text-[10px] tracking-widest text-white/35">ADMIN</div>
                </div>
            </a>

            <nav class="flex flex-1 flex-col gap-1 p-3">
                <a href="{{ route('admin.index') }}"
                    @class([
                        'flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium transition-colors',
                        'bg-white/10 text-white' => request()->routeIs('admin.index'),
                        'text-white/60 hover:bg-white/5 hover:text-white' => ! request()->routeIs('admin.index'),
                    ])>
                    <i class="bi bi-people"></i>
                    จัดการสมาชิก
                </a>
                <a href="{{ route('home') }}"
                    class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-white/60 transition-colors hover:bg-white/5 hover:text-white">
                    <i class="bi bi-box-arrow-up-right"></i>
                    กลับหน้าเว็บ
                </a>
            </nav>
        </aside>

        <div class="flex min-w-0 flex-1 flex-col">
            <header class="flex h-14 shrink-0 items-center border-b border-line bg-white px-6">
                <h1 class="text-sm font-bold text-navy-900">แผงควบคุม</h1>
            </header>

            <main class="flex-1 overflow-y-auto p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    @fluxScripts
</body>

</html>
