<x-layout>
    <x-slot:heading>
        Baza danych
    </x-slot:heading>

    <div class="space-y-10">
        <section>
            <div>
                @foreach($jobs as $job)
                    <x-job-card :$job />
                @endforeach
                {{ $jobs->links() }}
            </div> 
        </section>
    </div>
</x-layout>