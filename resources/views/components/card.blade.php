@props([
    'class' => '',
])

<div {{ $attributes->merge(['class' => "bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 $class"]) }}>
    
    {{-- HEADER --}}
    @isset($header)
        <div class="border-b border-gray-200 px-4 py-3 dark:border-gray-700">
            {{ $header }}
        </div>
    @endisset

    {{-- IMAGE --}}
    @isset($image)
        <div class="w-full">
            {{ $image }}
        </div>
    @endisset

    {{-- ICON / STATS --}}
    @isset($icon)
        <div class="px-4 pt-4">
            {{ $icon }}
        </div>
    @endisset

    {{-- BODY --}}
    <div class="px-4 py-4">
        {{ $slot }}
    </div>

    {{-- CTA / ACTIONS --}}
    @isset($actions)
        <div class="px-4 py-3 flex items-center gap-2 border-t border-gray-200 dark:border-gray-700">
            {{ $actions }}
        </div>
    @endisset

    {{-- FOOTER --}}
    @isset($footer)
        <div class="px-4 py-3 border-t border-gray-200 dark:border-gray-700">
            {{ $footer }}
        </div>
    @endisset

</div>
