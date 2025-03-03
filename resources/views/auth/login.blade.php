<x-layout>
    <x-slot:heading>
        <x-section-heading>Log in</x-section-heading>
    </x-slot:heading>
    <form method="POST" action="/login" class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="email">
            <x-error name="email" />
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="******************">
            <x-error name="password" />
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Log in
            </button>
        </div>
    </form>
</x-layout>