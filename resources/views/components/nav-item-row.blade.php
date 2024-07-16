@php

$navLinks = [
    "/" => "Laravel Welcome",
    "jobs" => "Jobs",
    "home" => "Home",
    "about" => "About",
    "portfolio" => "Portfolio",
    "login" => "Login",
];

@endphp

@foreach($navLinks as $link => $name)
    <x-nav-item :href="url($link)" :active="request()->is(trim($link, '/'))">
        {{$name}}
    </x-nav-item>
@endforeach
