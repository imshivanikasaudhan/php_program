<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-medium leading-tight">
                {{ __('Export Data') }}
            </h2>
        </div>
    </x-slot>

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-4 p-6 bg-white rounded-md dark:bg-dark-eval-1">
            <div class="grid grid-cols-12 gap-4 pt-5">
                <div class="col-span-12">
                    <label for="range" class="block font-medium text-black/50 dark:text-white text-base font-primary">Range</label>
                    <select id="range" class="rounded text-base font-medium leading-5 border-black/10 bg-gray-100 w-full px-5 py-3">
                        <option value="all">All</option>
                        <option value="today">Today</option>
                        <option value="yesterday">Yesterday</option>
                        <option value="7">Last 7 Days</option>
                        <option value="30">Last 30 Days</option>
                    </select>
                </div>
                <div class="col-span-9"></div>
                <div class="col-span-3 flex justify-end">
                    <div class="bg-blue-500 flex items-center justify-center hover:bg-blue-600 hover:cursor-pointer px-5 py-3 text-base font-medium rounded text-white" id="export">Export</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
