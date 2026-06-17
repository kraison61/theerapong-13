<section class="bg-surface">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">

        <div class="text-center max-w-2xl mx-auto">
            <span class="inline-flex items-center gap-2 text-navy-700 font-semibold tracking-[0.18em] text-xs uppercase">
                <span class="w-7 h-px bg-navy-700"></span> เสียงจากลูกค้าจริง
            </span>
            <h2 class="mt-4 text-4xl lg:text-5xl font-bold tracking-tight text-navy-900 leading-tight">
                ลูกค้ากว่า 150+ บ้านพูดเป็นเสียงเดียวกัน
            </h2>
        </div>

        {{-- Tab switcher --}}
        <div class="mt-8 flex justify-center gap-2 flex-wrap">
            @foreach ($this->tabs as $i => $label)
                <flux:button
                    wire:click="setTab({{ $i }})"
                    variant="{{ $activeTab === $i ? 'primary' : 'outline' }}"
                    class="{{ $activeTab === $i
                        ? 'rounded-full bg-navy-900 text-white'
                        : 'rounded-full bg-white border-line text-ink2 hover:border-navy-900' }}
                        px-5 py-2.5 text-[15px] font-medium transition"
                >{{ $label }}</flux:button>
            @endforeach
        </div>

        {{-- Testimonial cards --}}
        <div class="mt-10 grid md:grid-cols-3 gap-5">
            @foreach ($this->testimonials as $t)
                <figure class="rounded-2xl bg-white ring-1 ring-line p-7 flex flex-col">
                    <div class="text-hivis text-[15px] mb-4">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <blockquote class="text-ink leading-relaxed flex-1">{{ $t['text'] }}</blockquote>
                    <figcaption class="mt-5 flex items-center gap-3">
                        <span class="grid place-items-center w-10 h-10 rounded-full bg-surface text-navy-900 font-bold shrink-0">
                            {{ $t['initial'] }}
                        </span>
                        <span>
                            <span class="block font-semibold text-navy-900 text-[15px]">{{ $t['name'] }}</span>
                            <span class="block text-[13px] text-muted">{{ $t['project'] }}</span>
                        </span>
                    </figcaption>
                </figure>
            @endforeach
        </div>

    </div>
</section>
