<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function increment(): void
    {
        $this->count++;
    }

    public function render()
    {
        return $this->view();
    }
}


<div class="space-y-4">
    <flux:heading size="xl">{{ $count }}</flux:heading>
    <flux:button wire:click="increment" variant="primary">
        เพิ่มค่า
    </flux:button>
</div>
