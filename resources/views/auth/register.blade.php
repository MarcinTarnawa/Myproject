<x-layout>
    <x-slot:heading>
        <x-section-heading>Register</x-section-heading>
    </x-slot:heading>

    <form method="POST" action="/register" enctype="multipart/form-data" class="rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2" for="name">
        Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Name">
        <x-error name="name" />

        <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2" for="email">
        Email
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="email">
        <x-error name="email" />
        </div>
        <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2" for="password">
        Password
        </label>
        <input class="shadow appearance-none border border-red-200 rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="******************">
        <x-error name="password" />
        </div>

        <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2" for="password_confirmation">
        Password Confirmation
        </label>
        <input class="shadow appearance-none border border-red-200 rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password" placeholder="******************">
        </div>

        <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2" for="employer">
        Employer Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline" name="employer" type="text" placeholder="Dundee">
        <x-error name="employer" />
        </div>

        <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2" for="logo">
        Employer logo
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-900 leading-tight focus:outline-none focus:shadow-outline" name="logo" type="url" placeholder="url">
        <x-error name="logo" />
        </div>


        <div class="flex items-center justify-between">
        </div>
        <button class="bg-blue-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Account</button>
    <form>
</x-layout>