<?php
use Livewire\Component;

new class extends Component {
    // กำหนด State สำหรับทดสอบ wire:model
    public string $name = '';
    public string $greeting = '';

    // ฟังก์ชันทดสอบการ Submit และ wire:click
    public function generateGreeting()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
        ], [
            'name.required' => 'กรุณากรอกชื่อของคุณก่อนครับ',
            'name.min' => 'ชื่อต้องมีอย่างน้อย 3 ตัวอักษร',
        ]);

        $this->greeting = "ยินดีต้อนรับคุณ " . $this->name . " เข้าสู่ระบบ Laravel 13 + Livewire 4 + Flux UI 2! 🚀";

        // ✅ เปลี่ยนชื่อพารามิเตอร์ให้ตรงกับ API ของ Flux
        \Flux::toast(
            heading: 'สำเร็จแล้ว!',
            text: 'ระบบ Livewire ทำงานร่วมกับ Flux UI ได้อย่างสมบูรณ์',
            variant: 'success'
        );
    }
};
?>

{{-- CRITICAL: Component ของ Livewire ต้องมี Single Root Element (ครอบด้วย div เพียงตัวเดียว) --}}
<div class="max-w-2xl mx-auto p-6 space-y-8">

    <div class="space-y-2">
        <flux:heading size="xl" level="1">ระบบทดสอบ Flux UI & Livewire 4</flux:heading>
        <flux:subheading>หากคุณเห็นหน้านี้และ UI แสดงผลสวยงาม แสดงว่าการติดตั้งของคุณถูกต้องแล้ว</flux:subheading>
    </div>

    <flux:separator />

    <flux:card class="space-y-6">
        <form wire:submit.prevent="generateGreeting" class="space-y-4">

            <flux:input wire:model="name" label="ชื่อของคุณ" placeholder="กรอกชื่อเพื่อทดสอบระบบ..." clearable />

            <div class="flex justify-end">
                <flux:button type="submit" variant="primary">
                    ส่งข้อมูลทดสอบ
                </flux:button>
            </div>
        </form>

        @if ($greeting)
            <div
                class="p-4 bg-zinc-50 dark:bg-zinc-800/50 rounded-xl border border-zinc-200 dark:border-zinc-700 animate-fade-in">
                <flux:text class="text-emerald-600 dark:text-emerald-400 font-medium">
                    {{ $greeting }}
                </flux:text>
            </div>
        @endif
    </flux:card>

    <flux:card class="flex items-center justify-between">
        <div>
            <flux:heading size="lg">ทดสอบระบบ Modal</flux:heading>
            <flux:subheading>คลิกปุ่มขวาเพื่อเปิดหน้าต่าง Modal ของ Flux</flux:subheading>
        </div>

        <flux:modal.trigger name="test-modal">
            <flux:button variant="filled">เปิด Modal</flux:button>
        </flux:modal.trigger>

        <flux:modal name="test-modal" class="md:w-96" class="space-y-6">
            <div class="space-y-2">
                <flux:heading size="lg">การเชื่อมต่อสำเร็จ!</flux:heading>
                <flux:subheading>Alpine.js และ Flux JavaScript กำลังทำงานอยู่บนเบราว์เซอร์ของคุณ</flux:subheading>
            </div>

            <div class="flex space-x-2 justify-end">
                <flux:modal.close>
                    <flux:button variant="ghost">ปิดหน้าต่าง</flux:button>
                </flux:modal.close>
            </div>
        </flux:modal>
    </flux:card>

    <flux:toast />
</div>