<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                User Management
            </h2>
            <a href="{{ route('admin.users.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700">
                + Add User
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 bg-green-100 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <div class="bg-white shadow-sm rounded-lg p-6">

                {{-- Search + Filter --}}
                <form method="GET" action="{{ route('admin.users.index') }}" class="flex flex-wrap gap-3 mb-6">
                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Naam ya email se search karo..."
                        class="border-gray-300 rounded px-3 py-2 text-sm flex-1 min-w-[200px]"
                    >

                    <select name="role" class="border-gray-300 rounded px-3 py-2 text-sm">
                        <option value="">Sab Roles</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}" {{ request('role') == $role->name ? 'selected' : '' }}>
                                {{ ucwords(str_replace('_', ' ', $role->name)) }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded text-sm hover:bg-gray-900">
                        Filter
                    </button>

                    @if (request('search') || request('role'))
                        <a href="{{ route('admin.users.index') }}" class="text-sm text-gray-500 px-3 py-2 hover:underline">
                            Clear
                        </a>
                    @endif
                </form>

                {{-- Table --}}
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-50 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-3">Naam</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Role</th>
                            <th class="px-4 py-3">Bana Hua</th>
                            <th class="px-4 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($users as $user)
                            <tr>
                                <td class="px-4 py-3 font-medium text-gray-800">{{ $user->name }}</td>
                                <td class="px-4 py-3 text-gray-600">{{ $user->email }}</td>
                                <td class="px-4 py-3">
                                    <span class="bg-indigo-50 text-indigo-700 px-2 py-1 rounded text-xs">
                                        {{ $user->role ? ucwords(str_replace('_', ' ', $user->role->name)) : 'Koi role nahi' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-gray-500">{{ $user->created_at->format('d M Y') }}</td>
                                <td class="px-4 py-3 text-right space-x-2">
                                    <a href="{{ route('admin.users.edit', $user) }}" class="text-indigo-600 hover:underline">Edit</a>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline" onsubmit="return confirm('Pakka delete karna hai?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-6 text-center text-gray-400">
                                    Koi user nahi mila.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $users->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>