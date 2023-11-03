<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-medium leading-tight">
                {{ __('Add User') }}
            </h2>
        </div>
    </x-slot>

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 p-6 bg-white rounded-md dark:bg-dark-eval-1">
            <div class="grid grid-cols-12 gap-4 pt-5">
                <div class="col-span-6">
                    <label for="name" class="block font-medium text-black/50 dark:text-white text-base font-primary">Name</label>
                    <input type="text" class="bg-gray-50 focus:bg-white w-full p-3 border-gray-200 rounded-md" id="name" placeholder="Full Name" />
                </div>
                <div class="col-span-6">
                    <label for="phone" class="block font-medium text-black/50 dark:text-white text-base font-primary">Phone Number</label>
                    <input type="number" class="bg-gray-50 focus:bg-white w-full p-3 border-gray-200 rounded-md" id="phone" placeholder="Phone Number" />
                </div>
                <div class="col-span-9"></div>
                <div class="col-span-3 flex justify-end">
                    <label for="createUser">&nbsp;</label>
                    <div class="bg-blue-500 flex items-center justify-center hover:bg-blue-600 hover:cursor-pointer px-5 py-3 rounded-md text-white" id="createUser">Create User</div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>