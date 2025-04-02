<x-layout>
    <x-slot:heading>
        Panel admina
    </x-slot:heading>

    <div class="space-y-6">
        <section>
            @foreach ($users as $user)
                <x-user-card :$user />
            @endforeach
            {{ $users->links() }}
        </section>
    </div>

</x-layout>
