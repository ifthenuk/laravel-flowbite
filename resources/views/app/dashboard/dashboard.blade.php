<x-app-layout>

    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">{{ __('Dashboard') }}</h1>
        </div>

        <div class="col-span-full xl:col-auto">
            <x-cards.basic class="p-4 mb-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
               <h3>Ini basic card</h3>
            </x-cards.basic>

            <x-cards.with-header-footer class="mb-4" title="Title Card" footer="Footer Card">
                <h3>Ini card with header and footer</h3>
            </x-cards.with-header-footer>
            
            <div
                class="p-4 mb-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card header</h3>
                </div>
                <div
                    class="h-32 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card body</h3>
                </div>
                <div class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card footer</h3>
                </div>
            </div>
        </div>

        <div class="col-span-2">
            <div
                class="p-4 mb-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card header</h3>
                </div>
                <div
                    class="h-32 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card body</h3>
                </div>
                <div class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card footer</h3>
                </div>
            </div>
            <div
                class="p-4 mb-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card header</h3>
                </div>
                <div
                    class="h-32 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card body</h3>
                </div>
                <div class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                    <h3>Card footer</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4 px-4 pt-6">
        <div class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 my-6 mx-4"></div>
    <div class="grid grid-cols-2 gap-4 my-6 mx-4">
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-6 px-4">
        <x-cards.stats title="Total Users" value="1.240">
            <x-slot:icon>
                <x-fwb-s-users class="w-6 h-6 text-gray-800 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
            </x-slot:icon>
        </x-cards.stats>
    </div>



</x-app-layout>
