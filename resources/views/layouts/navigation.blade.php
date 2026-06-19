<!-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100"> -->
    <!-- Primary Navigation Menu -->
    <!-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex"> -->
                <!-- Logo -->
                <!-- <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div> -->

                <!-- Navigation Links -->
                <!-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div> -->

            <!-- Settings Dropdown -->
            <!-- <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link> -->

                        <!-- Authentication -->
                        <!-- <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div> -->

            <!-- Hamburger -->
            <!-- <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div> -->

    <!-- Responsive Navigation Menu -->
    <!-- <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> -->

        <!-- Responsive Settings Options -->
        <!-- <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link> -->

                <!-- Authentication -->
                <!-- <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> -->

<aside
    class="fixed inset-y-0 left-0 z-40 flex flex-col w-64 bg-ink-900 text-ink-200 transform transition-transform duration-200 lg:translate-x-0"
    :class="mobileOpen ? 'translate-x-0' : '-translate-x-full'"
>
    {{-- Logo / Brand --}}
    <div class="flex items-center gap-3 px-6 h-16 border-b border-white/5">
        <div class="flex items-center justify-center w-9 h-9 rounded-lg bg-brand-600 text-white font-bold text-sm">
            BC
        </div>
        <div class="leading-tight">
            <p class="text-white font-semibold text-sm">Bid Control</p>
            <p class="text-ink-400 text-xs">Agency CRM</p>
        </div>
    </div>

    {{-- Nav Links --}}
    <nav class="flex-1 px-3 py-6 space-y-1 overflow-y-auto">

        <p class="px-3 text-xs font-semibold uppercase tracking-wider text-ink-500 mb-2">Overview</p>

        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                  {{ request()->routeIs('dashboard') || request()->routeIs('admin.dashboard') || request()->routeIs('sm.dashboard') || request()->routeIs('pm.dashboard') ? 'bg-brand-600 text-white' : 'text-ink-300 hover:bg-white/5 hover:text-white' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </a>

        @if (auth()->user()->role?->name === 'admin')
            <p class="px-3 text-xs font-semibold uppercase tracking-wider text-ink-500 mt-6 mb-2">Manage</p>

            <a href="{{ route('admin.users.index') }}"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                      {{ request()->routeIs('admin.users.*') ? 'bg-brand-600 text-white' : 'text-ink-300 hover:bg-white/5 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-1.13a4 4 0 100-8 4 4 0 000 8zm6 0a4 4 0 10-3-6.65" />
                </svg>
                Users
            </a>
        @endif

    </nav>

    {{-- User Footer --}}
    <div class="border-t border-white/5 p-3">
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg hover:bg-white/5 transition-colors">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-brand-500 text-white text-xs font-semibold shrink-0">
                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                </div>
                <div class="flex-1 text-left min-w-0">
                    <p class="text-sm font-medium text-white truncate">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-ink-400 truncate">{{ ucwords(str_replace('_', ' ', auth()->user()->role?->name ?? '')) }}</p>
                </div>
                <svg class="w-4 h-4 text-ink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                </svg>
            </button>

            <div x-show="open" @click.outside="open = false" x-transition
                 class="absolute bottom-full left-0 mb-2 w-full bg-white rounded-lg shadow-lg border border-ink-100 py-1 overflow-hidden">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-ink-700 hover:bg-ink-50">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>

{{-- Mobile overlay --}}
<div x-show="mobileOpen" @click="mobileOpen = false" x-cloak
     class="fixed inset-0 bg-black/40 z-30 lg:hidden" x-transition.opacity></div>