<x-app-layout>
    <!-- Header Slot -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h3>
                <p class="mb-4">You are logged in as an admin.</p>

                <!-- Example Links -->
                <div class="mt-4">
                    <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Manage Products
                    </a>
                    <a href="{{ route('home') }}" class="bg-green-500 text-white px-4 py-2 rounded ml-4">
                        Visit Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
