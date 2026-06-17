<section id="projects" class="bg-surface">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-navy-700"></span> ผลงานที่ผ่านมา
            </span>
            <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                ผลงานก่อสร้างจริง — ลูกค้าจริง พื้นที่จริง
            </h2>
            <p class="mt-4 text-lg text-ink2">เลือกหมวดเพื่อกรองผลงานตามประเภทงาน</p>
        </div>

        {{-- Filter buttons --}}
        <div class="mt-8 flex flex-wrap gap-2.5">
            @php
                $filters = [
                    'all'   => 'ทั้งหมด',
                    'wall'  => 'กำแพงกันดิน',
                    'fence' => 'รั้วบ้าน',
                    'road'  => 'ถนน & ทางเข้า',
                    'slab'  => 'ลานคอนกรีต',
                    'drain' => 'ระบายน้ำ',
                ];
            @endphp

            @foreach ($filters as $key => $label)
                <flux:button
                    wire:click="setFilter('{{ $key }}')"
                    variant="{{ $filter === $key ? 'primary' : 'outline' }}"
                    class="{{ $filter === $key
                        ? 'rounded-full border-navy-900 bg-navy-900 text-white'
                        : 'rounded-full border-line text-ink2 hover:border-navy-900 hover:text-navy-900' }}
                        px-4 py-2.5 text-[15px] font-medium transition"
                >{{ $label }}</flux:button>
            @endforeach
        </div>

        {{-- Project grid --}}
        <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($this->projects as $project)
                <a href="#" class="group relative block aspect-[4/3] overflow-hidden rounded-2xl ring-1 ring-line">
                    <img
                        src="https://images.unsplash.com/photo-{{ $project['img'] }}?w=900&q=80&auto=format&fit=crop"
                        alt="{{ $project['title'] }}"
                        class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition duration-500"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-950/85 via-navy-950/15 to-transparent"></div>
                    <div class="absolute inset-0 p-5 flex flex-col justify-end text-white">
                        <span class="self-start rounded-full bg-white/20 backdrop-blur px-2.5 py-1 text-[11px] font-semibold uppercase tracking-wide">
                            {{ $project['tag'] }}
                        </span>
                        <h3 class="mt-2.5 text-lg font-bold">{{ $project['title'] }}</h3>
                        <p class="text-[13px] text-white/75">{{ $project['meta'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>
