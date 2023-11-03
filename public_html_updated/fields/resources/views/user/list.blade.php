<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-medium leading-tight">
                {{ __('User List') }}
            </h2>
        </div>
    </x-slot>

    <div class="grid grid-cols-12 gap-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg col-span-12">
            <table class="w-full text-base text-left text-gray-500 dark:text-gray-300">
                <thead class="text-sm text-gray-700 dark:text-gray-400 capitalize bg-gray-50 dark:bg-dark-eval-1">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Phone</th>
                        <th scope="col" class="px-6 py-3">User Name</th>
                        <th scope="col" class="px-6 py-3">Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="bg-white border-b hover:bg-gray-50 capitalize dark:bg-dark-eval-1 font-secondary">
                            <th class="px-6 py-4 font-medium text-black dark:text-white whitespace-nowrap font-primary">{!! $user->name !!} </th>
                            <td class="px-6 py-4">{{ $user->phone }}</td>
                            <td class="px-6 py-4">{!! $user->username !!}</td>
                            <td class="px-6 py-4">{{ $user->providers }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>