<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-medium leading-tight">
                {{ __('Service Providers') }}
            </h2>
        </div>
    </x-slot>

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 my-4">
            <label for="username" class="block font-medium text-lg">Filter By User</label>
            <select id="username" class="p-4 rounded-md bg-gray-300 border-0 w-full text-base dark:bg-white dark:text-black">
                <option value="all" {{ in_array($username, ['all', '']) ? 'selected' : '' }}>All</option>
                @foreach($users as $user)
                    <option value="{{ $user->username }}" {{ $username == $user->username ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-12">
            <div class="grid grid-cols-12 gap-4 pt-5">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg col-span-12">
                    <table class="w-full text-base text-left text-gray-500 dark:text-gray-300">
                        <thead class="text-sm text-gray-700 dark:text-gray-400 capitalize bg-gray-50 dark:bg-dark-eval-1">
                            <tr>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">Father's/Husband's Name</th>
                                <th scope="col" class="px-6 py-3">DOB</th>
                                <th scope="col" class="px-6 py-3">Contact</th>
                                <th scope="col" class="px-6 py-3">Address</th>
                                <th scope="col" class="px-6 py-3">Nationality</th>
                                <th scope="col" class="px-6 py-3">Govt Ids</th>
                                <th scope="col" class="px-6 py-3">Services</th>
                                <th scope="col" class="px-6 py-3">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($serviceProviders as $agent)
                                <tr class="bg-white border-b hover:bg-gray-50 capitalize dark:bg-dark-eval-1 font-secondary">
                                    <th class="px-6 py-4 font-medium text-black dark:text-white whitespace-nowrap">{!! $agent->name !!}</th>
                                    <td class="px-6 py-4">{{ $agent->father_name }}</td>
                                    <td class="px-6 py-4">{{ $agent->dob }}</td>
                                    <td class="px-6 py-4">{{ $agent->phone }}, {!! $agent->alternate_phone !!}</td>
                                    <td class="px-6 py-4">{{ $agent->address }}</td>
                                    <td class="px-6 py-4">{{ $agent->nationality }}</td>
                                    <td class="px-6 py-4">
                                        <span class="font-bold text-base">PAN:</span> {{ $agent->pan }} <br>
                                        <span class="font-bold text-base">Aadhar:</span> {{ $agent->aadhar }}</td>
                                    <td class="px-6 py-4">{{ $agent->services }}</td>
                                    <td class="px-6 py-4"><img src="{{ asset('img/uploads/' . $agent->image) }}" alt="{!! $agent->name !!}" class="w-40 rounded-md"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
