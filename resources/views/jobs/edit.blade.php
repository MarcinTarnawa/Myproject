<x-layout>
    <x-slot:heading>Edycja: {{ $job->title }}</x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label for="title"
                    class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Title</label>
                <div class="mt-2">
                    <div
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="text" name="title" id="title" autocomplete="title" required
                            class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 dark:text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                            value="{{ $job->title }}">
                    </div>

                    @error('title')
                        <p class="text-xs text-red-500 semibold mt-1">{{ $message }} </p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label for="salary"
                    class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Salary</label>
                <div class="mt-2">
                    <div
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input name="salary" id="salary" autocomplete="salary" required type="number"
                            class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 dark:text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                            value="{{ $job->salary }}">
                    </div>

                    @error('salary')
                        <p class="text-xs text-red-500 semibold mt-1">{{ $message }} </p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label for="value"
                    class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Kasa</label>
                <div class="mt-2">
                    <div>
                        <select class="text-gray-700 text-sm mb-2" name="value" id="value" required>
                            <option id="USD" value="USD" {{ $job->value == 'USD' ? 'selected' : '' }}>USD
                            </option>
                            <option id="EURO" value="EURO" {{ $job->value == 'EURO' ? 'selected' : '' }}>EURO
                            </option>
                            <option id="Zloty" value="Zloty" {{ $job->value == 'Zloty' ? 'selected' : '' }}>Zloty
                            </option>
                        </select>
                    </div>

                    @error('value')
                        <p class="text-xs text-red-500 semibold mt-1">{{ $message }} </p>
                    @enderror
                </div>
            </div>
        </div>


        <div class="mt-6 flex items-center justify-between gap-x-6">

            <div class="flex items-center">
                @auth
                    <button form="delete" class="text-red-500 text-sm font-bold"
                        onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                @endauth
            </div>

            <div>
                <a href="/job" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Cancel</a>
                @auth
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                @endauth
            </div>
        </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
