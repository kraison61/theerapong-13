<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function deleteMember(int $id): void
    {
        User::findOrFail($id)->delete();
        session()->flash('success', 'ลบสมาชิกเรียบร้อยแล้ว');
    }

    public function render()
    {
        return view('livewire.admin.index', [
            'members' => User::query()
                ->when($this->search, fn ($q) => $q->where('name', 'like', "%{$this->search}%"))
                ->latest()
                ->paginate(10),
        ]);
    }
}
