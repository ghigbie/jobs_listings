@php
$styles = "col-span-full";
@endphp

<div {{ $attributes->merge(['class'=> $styles]) }}>
    {{ $slot }}
</div>
