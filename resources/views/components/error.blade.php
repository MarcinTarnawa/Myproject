@props(['name'])

@error($name)
    <p class="text-xs text-red-500 semibold mt-1">{{ $message }} </p>
@enderror