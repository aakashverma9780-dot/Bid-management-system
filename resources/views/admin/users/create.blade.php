<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.users.index') }}" class="text-ink-400 hover:text-ink-700 transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div>
                <h2 class="font-semibold text-xl text-ink-900">Add User</h2>
                <p class="text-sm text-ink-500">Create a new Sales Manager or Project Manager account</p>
            </div>
        </div>
    </x-slot>

    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-xl border border-ink-100 p-6 sm:p-8 animate-fade-in-up">

            <form method="POST" action="{{ route('admin.users.store') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-ink-700 mb-1.5">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Priya Sharma"
                           class="w-full border-ink-200 rounded-lg text-sm focus:border-brand-500 focus:ring-brand-500 @error('name') border-red-300 @enderror">
                    @error('name') <p class="text-red-600 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-ink-700 mb-1.5">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="priya@agency.com"
                           class="w-full border-ink-200 rounded-lg text-sm focus:border-brand-500 focus:ring-brand-500 @error('email') border-red-300 @enderror">
                    @error('email') <p class="text-red-600 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-ink-700 mb-1.5">Password</label>
                    <input type="password" name="password" placeholder="Minimum 8 characters"
                           class="w-full border-ink-200 rounded-lg text-sm focus:border-brand-500 focus:ring-brand-500 @error('password') border-red-300 @enderror">
                    @error('password') <p class="text-red-600 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-ink-700 mb-1.5">Role</label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        @foreach ($roles as $role)
                            <label class="relative flex cursor-pointer">
                                <input type="radio" name="role_id" value="{{ $role->id }}"
                                       {{ old('role_id') == $role->id ? 'checked' : '' }}
                                       class="peer sr-only">
                                <div class="w-full text-center px-3 py-2.5 rounded-lg border border-ink-200 text-sm font-medium text-ink-600 peer-checked:border-brand-500 peer-checked:bg-brand-50 peer-checked:text-brand-700 hover:border-ink-300 transition-colors">
                                    {{ ucwords(str_replace('_', ' ', $role->name)) }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                    @error('role_id') <p class="text-red-600 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center gap-3 pt-3">
                    <button type="submit"
                            class="bg-brand-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium hover:bg-brand-500 active:scale-[0.98] transition-all shadow-sm">
                        Create User
                    </button>
                    <a href="{{ route('admin.users.index') }}" class="text-ink-500 px-5 py-2.5 text-sm font-medium hover:text-ink-800 transition-colors">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>