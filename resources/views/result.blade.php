<x-layout>
    <x-slot:heading>Wynik</x-slot:heading>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-card :$job />
        @endforeach
    </div>

</x-layout>