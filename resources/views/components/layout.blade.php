<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ darkMode: false }" :class="{ 'dark': darkMode === true }" class="antialiased">
    <!-- Nawigacja strony -->
    <nav class="bg-gray-700 items-baseline  dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8"
                            src="https://images.unsplash.com/photo-1554629947-334ff61d85dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&h=1000&q=90"
                            alt="Your image">
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')">Strona Główna</x-nav-link>
                            <x-nav-link href="/search" :active="request()->is('search')">Wyszukaj</x-nav-link>
                            <x-nav-link href="/job" :active="request()->is('job')">Baza danych</x-nav-link>
                            @auth
                                <x-nav-link href="/panel" :active="request()->is('panel')">Panel admina</x-nav-link>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- Dark mode button -->
                <button id="darkMode" title="Toggles light & dark" class="theme-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="#5f6368" class="theme-toggle">
                        <path
                            d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="#5f6368" class="hidden theme-toggle">
                        <path
                            d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
                    </svg>
                </button>

                <!-- Nav bar zalogowanego uzytkownika -->
                <div class="ml-4 flex items-center md:ml-6">
                    @auth
                        <div class="space-x-6 font-bold flex">
                            <form method="POST" action="/logout">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Wyloguj</button>
                            </form>
                        </div>

                        <div class="space-x-6 font-bold flex">
                            <x-nav-link href="/jobs/create" :active="request()->is('jobs/create')">Dodaj ogłoszenie</x-nav-link>
                        </div>
                    @endauth

                    <!-- Nav bar niezalogowanego uzytkownika -->
                    @guest()
                        <div class="text-white space-x-6 font-bold">
                            <x-nav-link href="/register" :active="request()->is('register')">Zarejestruj</x-nav-link>
                            <x-nav-link href="/login" :active="request()->is('login')">Zaloguj</x-nav-link>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
        </div>
    </nav>

    <!-- Tytuł strony -->
    <header>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1
                class="bg-white dark:bg-slate-800 px-4 py-2 rounded-md text-3xl font-bold tracking-tight text-slate-900 dark:text-white">
                {{ $heading }} </h1>
        </div>
    </header>


    <!-- Zawartość strony -->
    <main class="px-4 py-2 rounded-md text-slate-900 dark:text-white mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>

</body>

</html>
