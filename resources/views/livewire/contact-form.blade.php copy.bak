<div class="rounded-2xl bg-white p-7 lg:p-8 text-ink shadow-2xl shadow-navy-950/40">

    {{-- Success message --}}
    @if ($submitted)
        <div class="mb-5 rounded-xl bg-green-50 border border-green-200 text-green-700 px-4 py-3 text-[15px]">
            <i class="bi bi-check-circle-fill mr-1.5"></i>
            ส่งคำขอเรียบร้อย! ทีมงานจะติดต่อกลับเร็วที่สุด ขอบคุณที่ไว้วางใจครับ
        </div>
    @endif

    {{-- Livewire v4: wire:submit ป้องกัน default อัตโนมัติ ไม่ต้องใช้ .prevent --}}
    <form wire:submit="submit" novalidate class="grid sm:grid-cols-2 gap-5">

        {{-- ชื่อ–นามสกุล --}}
        <div class="sm:col-span-1">
            <flux:field>
                <flux:label class="block text-sm font-medium text-navy-900 mb-1.5">
                    ชื่อ–นามสกุล <span class="text-red-500">*</span>
                </flux:label>
                {{-- Livewire v4: parallel requests ทำให้ debounce ไม่จำเป็น --}}
                <flux:input
                    wire:model.live="name"
                    name="name"
                    placeholder="กรุณากรอกชื่อ-นามสกุล"
                    class="w-full rounded-xl border-line focus:border-accent focus:ring-2 focus:ring-accent/15"
                />
                <flux:error name="name" class="mt-1 text-xs text-red-500" />
            </flux:field>
        </div>

        {{-- เบอร์โทร --}}
        <div class="sm:col-span-1">
            <flux:field>
                <flux:label class="block text-sm font-medium text-navy-900 mb-1.5">
                    เบอร์โทรศัพท์ <span class="text-red-500">*</span>
                </flux:label>
                <flux:input
                    wire:model.live="phone"
                    name="phone"
                    placeholder="08X-XXX-XXXX"
                    inputmode="tel"
                    class="w-full rounded-xl border-line font-mono tabular-nums focus:border-accent focus:ring-2 focus:ring-accent/15"
                />
                <flux:error name="phone" class="mt-1 text-xs text-red-500" />
            </flux:field>
        </div>

        {{-- ประเภทงาน --}}
        <div class="sm:col-span-1">
            <flux:field>
                <flux:label class="block text-sm font-medium text-navy-900 mb-1.5">
                    ประเภทงาน <span class="text-red-500">*</span>
                </flux:label>
                {{-- Livewire v4: wire:model.live validates ทันทีผ่าน #[Validate] --}}
                <flux:select
                    wire:model.live="service"
                    name="service"
                    class="w-full rounded-xl border-line focus:border-accent bg-white"
                >
                    <option value="">เลือกประเภทงาน...</option>
                    @foreach ($serviceOptions as $opt)
                        <option value="{{ $opt }}">{{ $opt }}</option>
                    @endforeach
                </flux:select>
                <flux:error name="service" class="mt-1 text-xs text-red-500" />
            </flux:field>
        </div>

        {{-- งบประมาณ --}}
        <div class="sm:col-span-1">
            <flux:field>
                <flux:label class="block text-sm font-medium text-navy-900 mb-1.5">
                    งบประมาณคร่าวๆ
                </flux:label>
                <flux:select
                    wire:model="budget"
                    name="budget"
                    class="w-full rounded-xl border-line focus:border-accent bg-white"
                >
                    @foreach ($budgetOptions as $opt)
                        <option value="{{ $opt }}" @selected($budget === $opt)>{{ $opt }}</option>
                    @endforeach
                </flux:select>
            </flux:field>
        </div>

        {{-- รายละเอียดงาน --}}
        <div class="sm:col-span-2">
            <flux:field>
                <flux:label class="block text-sm font-medium text-navy-900 mb-1.5">
                    รายละเอียดงาน
                </flux:label>
                <flux:textarea
                    wire:model="detail"
                    name="detail"
                    rows="4"
                    placeholder="เช่น ขนาดพื้นที่, ความสูง, ระยะเวลาที่ต้องการ ฯลฯ"
                    class="w-full rounded-xl border-line focus:border-accent focus:ring-2 focus:ring-accent/15"
                />
            </flux:field>
        </div>

        {{-- ยอมรับนโยบาย --}}
        <div class="sm:col-span-2">
            <flux:field>
                <div class="flex items-center gap-2.5">
                    <flux:checkbox wire:model="accepted" id="accepted" />
                    <label for="accepted" class="text-sm text-ink2 cursor-pointer">
                        ยอมรับ <a href="#" class="text-accent font-medium hover:underline">นโยบายความเป็นส่วนตัว</a>
                    </label>
                </div>
                <flux:error name="accepted" class="mt-1 text-xs text-red-500" />
            </flux:field>
        </div>

        {{-- Submit --}}
        <div class="sm:col-span-2 flex flex-wrap items-center gap-4">
            {{-- Livewire v4: data-loading:* class ใช้แทน wire:loading ได้ แต่ wire:loading ยังรองรับ --}}
            <flux:button
                type="submit"
                wire:loading.attr="disabled"
                class="rounded-xl bg-accent hover:bg-navy-900 text-white px-7 py-3.5 font-semibold transition data-loading:opacity-60 data-loading:pointer-events-none"
            >
                <span wire:loading.remove wire:target="submit">
                    ส่งคำขอเสนอราคา <i class="bi bi-arrow-right ml-1"></i>
                </span>
                <span wire:loading wire:target="submit">
                    <i class="bi bi-arrow-repeat animate-spin mr-1"></i> กำลังส่ง...
                </span>
            </flux:button>
            <span class="text-sm text-muted">ทีมงานติดต่อกลับภายใน 24 ชั่วโมง</span>
        </div>

    </form>
</div>
