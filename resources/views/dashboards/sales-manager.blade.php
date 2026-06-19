<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sales Manager Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                Welcome Sales Manager, {{ auth()->user()->name }}! here you manage your's PMs and Upwork IDs.
            </div>
        </div>
    </div>
</x-app-layout>