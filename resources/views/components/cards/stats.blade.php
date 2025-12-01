@props(['title' => null, 'value' => null])

<x-card class="text-start" {{ $attributes }}>
    
    @isset($icon)
    <x-slot:icon>
        {{ $icon }}
    </x-slot:icon>
    @endisset

    @if($title)
    <div class="text-sm text-gray-500 dark:text-gray-400">
        {{ $title }}
    </div>
    @endif

    @if($value)
    <div class="text-3xl font-bold text-gray-900 dark:text-white">
        {{ $value }}
    </div>
    @endif

    {{ $slot }}

</x-card>
