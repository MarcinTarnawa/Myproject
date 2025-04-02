@props(['user'])

<x-panel class="flex-col text-center">
    <div class="self-start text-sm">{{ $user->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold">
            <a href="/panel/{{ $user->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                {{ $user->name }}
            </a>
        </h3>
    </div>
    </div>
</x-panel>
