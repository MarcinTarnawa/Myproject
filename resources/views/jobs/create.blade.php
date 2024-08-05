<x-layout>
    <x-slot:heading>New Job</x-slot:heading>

    
    <form method="POST" action="/jobs" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
        Title
        </label>
        <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="title" placeholder="CEO">
        <x-error name="title" />
        </div>

        <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="salary">
        Salary
        </label>
        <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="salary" placeholder="$50,000 USD">
        <x-error name="salary" />
        </div>

        
        <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Add
        </button>
        </div>
    </form>
</x-layout>
