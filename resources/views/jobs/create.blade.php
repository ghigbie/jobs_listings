<x-layout>
    <x-slot:heading>
        {{$pageHeading}}
    </x-slot:heading>
    {{$pageHeading}}

    @if($isGet)
        <x-job-add-form />
    @else
        <p>Your Job was added</p>
    @endif
</x-layout>
