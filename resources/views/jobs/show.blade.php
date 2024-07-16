

<x-layout>
    <x-slot:heading>
        Jobs Information
    </x-slot:heading>

    <div>
        <h4 class="font-bold text-lg">{{$job->title}}</h4>
        <h5>${{$job->salary}} - {{$job->location}}</h5>
        <p>{{$job->description}}</p>
        <p class="mt-6">

            @php
                $editURL = "/jobs/$job->id/edit";
            @endphp

            <x-link-button :href="url($editURL)">Edit Job</x-link-button>
        </p>
    </div>
</x-layout>
