@props([
    'type' => 'purple-blue',
    'size' => 'md',
    'pill' => false,
    'href' => null,
])

@php
    $sizes = [
        'xs' => 'text-xs px-3 py-1.5',
        'sm' => 'text-sm px-3 py-2',
        'md' => 'text-sm px-4 py-2.5',
        'lg' => 'text-base px-5 py-3',
        'xl' => 'text-base px-6 py-3.5',
    ];

    $types = [
        'purple-blue' => 'text-white bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 focus:ring-purple-200',
        'green-blue' => 'text-white bg-gradient-to-r from-green-400 to-blue-500 hover:from-green-500 hover:to-blue-600 focus:ring-green-200',
        'pink-orange' => 'text-white bg-gradient-to-r from-pink-500 to-orange-400 hover:from-pink-600 hover:to-orange-500 focus:ring-orange-200',
        'red-yellow' => 'text-white bg-gradient-to-r from-red-500 to-yellow-400 hover:from-red-600 hover:to-yellow-500 focus:ring-yellow-200',
    ];

    $classes = implode(' ', [
        'inline-flex items-center font-medium leading-5 rounded-base shadow-xs focus:outline-none focus:ring-4 transition',
        $sizes[$size],
        $types[$type],
        $pill ? 'rounded-full' : '',
    ]);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
