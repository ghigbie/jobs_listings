@props(['active' => false, 'href' => '#'])

@php
$constantStyles = "rounded-md px-3 py-2 text-sm font-medium";
$activeStyles = "bg-gray-900 text-white {$constantStyles}";
$inactiveStyles = "text-gray-300 hover:bg-gray-700 hover:text-white {$constantStyles}";

@endphp

<a  href="{{$href}}" class="{{ $active ? $activeStyles : $inactiveStyles }}" aria-current="{{ $active && 'page' }}">
    {{$slot}}
</a>
