@props([
    'label',
    'route' => null,
    'active' => false,
    'submenu' => [], // array submenu
    'id' => 'dropdown-' . Str::slug($label),
])

<li x-data="{ open: {{ $active ? 'true' : 'false' }} }">

    {{-- Jika ADA submenu → dropdown --}}
    @if(count($submenu))
        <button 
            type="button"
            @click="open = !open"
            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"            
        >
            {{-- Ikon --}}
            {{ $slot }}

            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ $label }}</span>

            @isset($notification)
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">
                    {{ $notification }}
                </span>
            @endisset

            {{-- Arrow --}}
            <svg sidebar-toggle-item x-bind:class="{ 'rotate-180': open }" class="w-5 h-5 transition" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>

        {{-- Submenu --}}
        <ul 
            x-show="open"
            x-collapse
            class="space-y-2 py-2"
            id={{ $id }}
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2" 
        >
            @foreach($submenu as $item)
                <li>
                    <a 
                        href="{{ $item['route'] }}"
                        class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700
                               {{ request()->routeIs($item['routeName']) ? 'bg-gray-100 dark:bg-gray-700' : '' }}"
                    >
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

    {{-- Jika TIDAK ada submenu → single link --}}
    @else
        <a 
            href="{{ $route }}"
            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group 
                   dark:text-gray-200 dark:hover:bg-gray-700 {{ $active ? 'bg-gray-100 dark:bg-gray-700' : '' }}"
        >
            {{-- Ikon --}}
            {{ $slot }}

            <span class="ml-3">{{ $label }}</span>

            @isset($notification)
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">
                    {{ $notification }}
                </span>
            @endisset
        </a>
    @endif

</li>
