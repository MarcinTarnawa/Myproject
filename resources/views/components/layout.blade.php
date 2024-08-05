<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-nav-link href="/" :active="request()->is('/')">Strona Główna</x-nav-link>
                        <x-nav-link href="/cv" :active="request()->is('cv')">CV</x-nav-link>
                        <x-nav-link href="/job" :active="request()->is('job')">Baza danych</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        @auth
                            <div class="space-x-6 font-bold flex">
                                <form method="POST" action="/logout">
                                    @csrf
                                    @method('DELETE')            
                                    <button class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Log out</button>
                                </form>
                            </div>
                            <div class="space-x-6 font-bold flex">
                            <x-nav-link href="/jobs/create" :active="request()->is('jobs/create')">Create</x-nav-link>
                            </div>
                        @endauth

                        @guest()
                            <div class="text-white space-x-6 font-bold">
                            <x-nav-link href="/register" :active="request()->is('register')">Sign up</x-nav-link>
                            <x-nav-link href="/login" :active="request()->is('login')">Log in</x-nav-link>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }} </h1>
        </div>
     </header>

    <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
    </main>

</body>
</html>