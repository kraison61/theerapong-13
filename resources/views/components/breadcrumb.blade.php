{{-- resources/views/components/breadcrumb.blade.php --}}
@props(['breadcrumbs' => $breadcrumbs ?? []])

<nav {{ $attributes->merge(['class' => 'border-b border-zinc-200 bg-white']) }}>
    <flux:breadcrumbs>
        @foreach($breadcrumbs as $breadcrumb)
            <flux:breadcrumbs.item href="{{ $breadcrumb['url'] }}" :current="$loop->last" class="text-sm">
                {{ $breadcrumb['label'] }}
            </flux:breadcrumbs.item>
        @endforeach
    </flux:breadcrumbs>
</nav>