<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                
                <div id="counter-container" class="mt-4">
                        <button onclick="decreaseCount()" class="px-4 py-2 bg-red-500 text-white rounded">-</button>
                        <span id="counter-value" class="mx-4">0</span>
                        <button onclick="increaseCount()" class="px-4 py-2 bg-green-500 text-white rounded">+</button>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
