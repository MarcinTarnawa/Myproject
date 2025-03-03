<x-layout>
    <x-slot:heading>Wynik</x-slot:heading>

    <!-- Wyświetla wynik wyszukiwania -->

    <p class="text-xl text-blue-500 semibold mt-1 p-2 text-center">{{ $message }} </p>

    <div class="space-y-6">
        @foreach($jobs as $job)
        <x-job-card :$job />
        @endforeach
    </div>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Wyszukaj</h1>

        <form action="/look" class="mt-6">
            <input class="rounded-xl border border-transparent text-lg" :label="false" name="q" placeholder="Web developer"></input>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Wyszukaj</button>
        </form>
    </section>

</x-layout>