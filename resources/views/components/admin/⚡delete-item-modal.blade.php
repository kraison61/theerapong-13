<?php

use Livewire\Component;

new class extends Component
{
    public $itemId;

    // ฟังก์ชันจัดการการลบ
    public function deleteItem()
    {
        Item::find($this->itemId)?->delete();

        // ส่งสัญญาณไปบอกหน้าหลักว่าลบเสร็จแล้ว ให้รีเฟรชข้อมูล
        $this->dispatch('item-deleted');
    }
};
?>

<div>
    {{-- ปุ่มกดเพื่อเปิด Modal --}}
    <flux:modal.trigger name="delete-item-modal-{{ $itemId }}">
        <flux:button variant="danger" size="sm">ลบ</flux:button>
    </flux:modal.trigger>

    {{-- ตัว Modal (ใช้ Tailwind Classes จัดระยะห่างแบบ Mobile-First) --}}
    <flux:modal name="delete-item-modal-{{ $itemId }}" class="min-w-[22rem]">
        <form wire:submit="deleteItem">
            <div class="space-y-4">
                <h3 class="text-lg font-bold text-zinc-900 dark:text-zinc-100">ยืนยันการลบ?</h3>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">
                    คุณต้องการลบรายการนี้ใช่หรือไม่? การดำเนินการนี้ไม่สามารถย้อนกลับได้
                </p>
            </div>

            <div class="mt-6 flex flex-col-reverse sm:flex-row sm:justify-end gap-2">
                <flux:modal.close>
                    <flux:button variant="ghost">ยกเลิก</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="danger">ลบรายการ</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
