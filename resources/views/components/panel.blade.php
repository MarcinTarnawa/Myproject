@php
    $classes = "p-4 rounded-xl border border-transparent hover:border-blue-800 group"
@endphp

<div {{ $attributes(['class'=> $classes]) }}>
    {{ $slot }}
</div>