<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown
        title="Users"
        :active="Str::startsWith(request()->route()->uri(), 'user')"
    >
        <x-slot name="icon">
            <x-icons.users class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Add User"
            href="{{ route('user.add') }}"
            :active="request()->routeIs('user.add')"
        />
        <x-sidebar.sublink
            title="User List"
            href="{{ route('user.list') }}"
            :active="request()->routeIs('user.list')"
        />
    </x-sidebar.dropdown>

    <x-sidebar.link
        title="Service Providers"
        href="{{ route('service.list') }}"
        :isActive="request()->routeIs('service.list')"
    >
        <x-slot name="icon">
            <x-icons.service class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Export Data"
        href="{{ route('export') }}"
        :isActive="request()->routeIs('export')"
    >
        <x-slot name="icon">
            <x-icons.export class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

</x-perfect-scrollbar>
