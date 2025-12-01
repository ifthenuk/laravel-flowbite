<x-app-layout>

    <div class="w-full px-4 pt-6">
        <div class="mb-4">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All users</h1>
        </div>
        <div class="sm:flex">

            <div class="flex items-center ml-auto mb-4 space-x-2 sm:space-x-3">
                <x-buttons.default href="{{ route('users.create') }}" variant="primary" pill iconLeft="fwb-s-user-plus">
                    Add User
                </x-buttons.default>
                
                <x-buttons.default href="#" variant="secondary" pill iconLeft="fwb-s-download">
                    Export
                </x-buttons.default>                
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <x-fwb-o-search class="w-4 h-4 text-gray-500 dark:text-gray-400" />
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">ID</th>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Email</th>
                            <th scope="col" class="px-4 py-3">Verified At</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($users->count() != 0)
                            @foreach($users as $user)
                                <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
                                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                        {{ $user->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center whitespace-nowrap flex-1">
                                            <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                                            <div class="ps-4 flex flex-col gap-1 whitespace-nowrap">
                                                <p class="text-base font-regular font-monserrat">
                                                    {{ $user->name }}
                                                </p>
                                            </div>  
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email_verified_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-buttons.default size="xs" iconLeft="fwb-s-user-edit" variant="yellow" href="{{ route('users.edit', $user->id) }}" id="btn-edit-{{ $user->id }}"  pill>
                                            {{ __("Edit") }}
                                        </x-buttons.default>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
                                <td class="px-6 py-4" colspan="5">
                                    <p class="text-sm font-semibold font-monserrat text-center">
                                        Data not found.
                                    </p>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
