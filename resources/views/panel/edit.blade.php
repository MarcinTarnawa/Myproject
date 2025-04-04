<x-layout>
    <x-slot:heading>Edycja: {{ $user->name }}</x-slot:heading>

    <form method="POST" action="/panel/{{ $user->id }}">
        @csrf
        @method('PATCH')

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label for="user"
                    class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Użytkownik</label>
                <div class="mt-2">
                    <div
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="text" name="name" id="name" autocomplete="name" required
                            class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 dark:text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                            value="{{ $user->name }}">
                    </div>

                    @error('User')
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
                <a href="/panel" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Cancel</a>
                @auth
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                @endauth
            </div>
        </div>
    </form>

    <form method="POST" action="/panel/{{ $user->id }}" id="delete" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
