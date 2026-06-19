<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-ink-900">Dashboard</h2>
            <p class="text-sm text-ink-500">Welcome back, {{ explode(' ', auth()->user()->name)[0] }}</p>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto space-y-8">

        {{-- Stat Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <div class="bg-white rounded-xl border border-ink-100 p-5 animate-fade-in-up" style="animation-delay: 0ms">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-medium text-ink-500 uppercase tracking-wide">Total Users</span>
                    <div class="w-9 h-9 rounded-lg bg-brand-50 flex items-center justify-center">
                        <svg class="w-4.5 h-4.5 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-1.13a4 4 0 100-8 4 4 0 000 8zm6 0a4 4 0 10-3-6.65" />
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-ink-900 count-up" data-target="{{ \App\Models\User::count() }}">0</p>
                <p class="text-xs text-ink-400 mt-1">Across all roles</p>
            </div>

            <div class="bg-white rounded-xl border border-ink-100 p-5 animate-fade-in-up" style="animation-delay: 60ms">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-medium text-ink-500 uppercase tracking-wide">Sales Managers</span>
                    <div class="w-9 h-9 rounded-lg bg-emerald-50 flex items-center justify-center">
                        <svg class="w-4.5 h-4.5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 11h14l-1 9H6l-1-9z" />
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-ink-900 count-up" data-target="{{ \App\Models\User::whereHas('role', fn($q) => $q->where('name', 'sales_manager'))->count() }}">0</p>
                <p class="text-xs text-ink-400 mt-1">Active accounts</p>
            </div>

            <div class="bg-white rounded-xl border border-ink-100 p-5 animate-fade-in-up" style="animation-delay: 120ms">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-medium text-ink-500 uppercase tracking-wide">Project Managers</span>
                    <div class="w-9 h-9 rounded-lg bg-amber-50 flex items-center justify-center">
                        <svg class="w-4.5 h-4.5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-ink-900 count-up" data-target="{{ \App\Models\User::whereHas('role', fn($q) => $q->where('name', 'project_manager'))->count() }}">0</p>
                <p class="text-xs text-ink-400 mt-1">Active accounts</p>
            </div>

            <div class="bg-white rounded-xl border border-ink-100 p-5 animate-fade-in-up" style="animation-delay: 180ms">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-medium text-ink-500 uppercase tracking-wide">Your Role</span>
                    <div class="w-9 h-9 rounded-lg bg-ink-100 flex items-center justify-center">
                        <svg class="w-4.5 h-4.5 text-ink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15a3 3 0 100-6 3 3 0 000 6z M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09a1.65 1.65 0 00-1-1.51 1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 11-2.83-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09a1.65 1.65 0 001.51-1 1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 112.83-2.83l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 112.83 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" />
                        </svg>
                    </div>
                </div>
                <p class="text-xl font-bold text-ink-900 mt-1.5">Administrator</p>
                <p class="text-xs text-ink-400 mt-1">Full system access</p>
            </div>

        </div>

        {{-- Quick Actions --}}
        <div>
            <h3 class="text-sm font-semibold text-ink-700 uppercase tracking-wide mb-3">Quick Actions</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

                <a href="{{ route('admin.users.index') }}"
                   class="group bg-white rounded-xl border border-ink-100 p-5 flex items-start gap-4 hover:border-brand-300 hover:shadow-sm transition-all">
                    <div class="w-11 h-11 rounded-lg bg-brand-50 flex items-center justify-center shrink-0 group-hover:bg-brand-600 transition-colors">
                        <svg class="w-5 h-5 text-brand-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-1.13a4 4 0 100-8 4 4 0 000 8zm6 0a4 4 0 10-3-6.65" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-ink-900 text-sm">User Management</p>
                        <p class="text-xs text-ink-500 mt-0.5">Add, edit, or remove Sales Managers and Project Managers</p>
                    </div>
                </a>

            </div>
        </div>

    </div>

    @push('scripts')
    <script>
        document.querySelectorAll('.count-up').forEach(el => {
            const target = parseInt(el.dataset.target, 10) || 0;
            const duration = 800;
            const start = performance.now();

            function tick(now) {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.round(eased * target);
                if (progress < 1) requestAnimationFrame(tick);
            }
            requestAnimationFrame(tick);
        });
    </script>
    @endpush
</x-app-layout>