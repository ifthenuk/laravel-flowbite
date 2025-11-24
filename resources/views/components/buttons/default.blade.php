@props([
    'variant' => 'primary',
    'size' => 'md',
    'pill' => false,
    'href' => null,
    'iconLeft' => null,
    'iconRight' => null,
    'type' => 'button',
    'disabled' => false    
])

@php
    // ----- SIZE -----
    $sizes = [
        'xs' => 'text-xs px-3 py-1.5',
        'sm' => 'text-sm px-3 py-2',
        'md' => 'text-sm px-4 py-2.5',
        'lg' => 'text-base px-5 py-3',
        'xl' => 'text-base px-6 py-3.5',
    ];

    // ----- VARIANT -----
    $variants = [
        // Filled
        'primary' => 'text-white bg-primary hover:bg-primary-strong border border-transparent focus:ring-primary-medium',
        'secondary' => 'text-body bg-neutral-secondary-medium border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-neutral-tertiary',
        'dark' => 'text-white bg-gray-900 hover:bg-gray-800 border border-transparent focus:ring-gray-300',
        'light' => 'text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-gray-200',
        'green' => 'text-white bg-green-600 hover:bg-green-700 border border-transparent focus:ring-green-300',
        'red' => 'text-white bg-red-600 hover:bg-red-700 border border-transparent focus:ring-red-300',
        'yellow' => 'text-white bg-yellow-500 hover:bg-yellow-600 border border-transparent focus:ring-yellow-300',
        'purple' => 'text-white bg-purple-600 hover:bg-purple-700 border border-transparent focus:ring-purple-300',
        'alternative' => 'text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-gray-300',

        // Outline
        'outline-primary' => 'text-primary bg-transparent border border-primary hover:bg-primary hover:text-white focus:ring-primary-subtle',
        'outline-secondary' => 'text-body bg-neutral-primary border border-default hover:bg-neutral-secondary-soft hover:text-heading focus:ring-neutral-tertiary',
        'outline-dark' => 'text-gray-900 border border-gray-900 bg-transparent hover:bg-gray-900 hover:text-white focus:ring-gray-300',
        'outline-green' => 'text-green-600 border border-green-600 bg-transparent hover:bg-green-600 hover:text-white focus:ring-green-300',
        'outline-red' => 'text-red-600 border border-red-600 bg-transparent hover:bg-red-600 hover:text-white focus:ring-red-300',
        'outline-yellow' => 'text-yellow-600 border border-yellow-600 bg-transparent hover:bg-yellow-600 hover:text-white focus:ring-yellow-300',
        'outline-purple' => 'text-purple-600 border border-purple-600 bg-transparent hover:bg-purple-600 hover:text-white focus:ring-purple-300',
    ];

    $disabledClass = $disabled ? 'opacity-60 cursor-not-allowed' : '';

    $classes = implode(' ', [
        'inline-flex items-center font-medium leading-5 rounded-base shadow-xs focus:outline-none focus:ring-4 transition',
        $sizes[$size] ?? $sizes['md'],
        $variants[$variant] ?? $variants['primary'],
        $pill ? 'rounded-full' : '',
        $disabledClass
    ]);
@endphp

@if($href)
    <a href="{{ $disabled ? '#' : $href }}" {{ $attributes->merge(['class' => $classes]) }} @if($disabled) aria-disabled="true" @endif>
        @if($iconLeft)
            <x-dynamic-component :component="$iconLeft" class="w-4 h-4 mr-2" />
        @endif

        {{ $slot }}

        @if($iconRight)
            <x-dynamic-component :component="$iconRight" class="w-4 h-4 ml-2" />
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }} @if($disabled) disabled @endif>
        @if($iconLeft)
            <x-dynamic-component :component="$iconLeft" class="w-4 h-4 mr-2" />
        @endif

        {{ $slot }}

        @if($iconRight)
            <x-dynamic-component :component="$iconRight" class="w-4 h-4 ml-2" />
        @endif
    </button>
@endif
