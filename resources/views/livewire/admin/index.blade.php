<div>
    @if (session('success'))
        <div class="mb-6 flex items-center gap-2 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm font-medium text-green-800">
            <i class="bi bi-check-circle-fill"></i>
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6 sm:flex sm:items-center sm:justify-between">
        <h2 class="text-2xl font-bold text-zinc-900 dark:text-white">
            จัดการสมาชิก
        </h2>
        <flux:button variant="primary" icon="plus">
            เพิ่มสมาชิกใหม่
        </flux:button>
    </div>

    <flux:card class="mb-6">
        <flux:input
            wire:model.live.debounce.300ms="search"
            placeholder="ค้นหาชื่อสมาชิก..."
            icon="magnifying-glass"
        />
    </flux:card>

    <flux:card class="!p-0 overflow-hidden">
        <table class="w-full">
            <thead class="bg-zinc-50 dark:bg-zinc-800/50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold">สมาชิก</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold">อีเมล</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold">จัดการ</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                @forelse ($members as $member)
                    <tr wire:key="member-{{ $member->id }}" class="hover:bg-zinc-50 dark:hover:bg-zinc-800/30">
                        <td class="px-4 py-3">
                            <div class="flex items-center">
                                <flux:avatar name="{{ $member->name }}" />
                                <span class="ml-3 font-medium">{{ $member->name }}</span>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm text-zinc-600 dark:text-zinc-400">
                            {{ $member->email }}
                        </td>
                        <td class="px-4 py-3 text-right">
                            <flux:button
                                size="xs"
                                icon="trash"
                                variant="ghost"
                                wire:click="deleteMember({{ $member->id }})"
                                wire:confirm="คุณแน่ใจหรือไม่ว่าต้องการลบสมาชิกนี้?"
                            />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-10 text-center text-sm text-zinc-500">
                            @if ($search)
                                ไม่พบสมาชิกที่ตรงกับ "{{ $search }}"
                            @else
                                ยังไม่มีสมาชิกในระบบ
                            @endif
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($members->hasPages())
            <div class="border-t px-4 py-3">
                {{ $members->links() }}
            </div>
        @endif
    </flux:card>
</div>
