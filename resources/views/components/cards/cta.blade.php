@props(['title' => null])

<x-card {{ $attributes }}>
    
    @if($title)
        <x-slot:header>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                {{ $title }}
            </h3>
        </x-slot:header>
    @endif

    {{ $slot }}

    <x-slot:actions>
        {{ $actions }}
    </x-slot:actions>

</x-card>