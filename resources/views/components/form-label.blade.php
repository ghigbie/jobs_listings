@php
$styles = "block text-sm font-medium leading-6 text-grey-900";
@endphp

<label {{ $attributes->merge(['class' => $styles]) }}>
    {{ $slot }}
</label>
