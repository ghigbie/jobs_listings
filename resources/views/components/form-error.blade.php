@props(["name"])

@php
    $styles = "text-xs text-red-500 font-semibold mt-2";
@endphp

@error($name)
<p {{ $attributes->merge([ 'class' => $styles]) }}class="ml-1 mt-2 text-red-500 text-xs">
    {{$message}}
</p>
@enderror
