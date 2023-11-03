<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-medium leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="h-screen flex items-center justify-center text-3xl text-black/70 font-medium dark:text-white">
        Welcome To Dashboard
    </div>
</x-app-layout>
