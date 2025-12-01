@props(['title' => null, 'footer' => null])

<x-card {{ $attributes }}>
    
    @if($title)
        <x-slot:header>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                {{ $title }}
            </h3>
        </x-slot:header>
    @endif

    {{ $slot }}

    @if($footer)
        <x-slot:footer>
            {{ $footer }}
        </x-slot:footer>
    @endif

</x-card>
