<x-layout>
    <x-slot:heading>
        Edit Job - {{$job->title}}
    </x-slot:heading>

    <form action="/jobs/{{$job->id}}" method="POST">
        @method("PATCH")
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Job Listing</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This form will edit an existing job listing.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Job Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="text"
                                name="title"
                                id="title"
                                placeholder="A new awesome job title"
                                value="{{$job->title}}"
                                required
                            />
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="location">Location</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="text"
                                name="location"
                                id="location"
                                placeholder="New York, NY"
                                value="{{$job->location}}"
                                required
                            />
                            <x-form-error name="location"/>
                        </div>
                    </x-form-field>


                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="number"
                                name="salary"
                                id="salary"
                                placeholder="10000000.00"
                                value="{{$job->salary}}"
                                required
                            />
                        </div>
                        <x-form-error name="salary"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="description">Description</x-form-label>
                        <div class="mt-2">
                            @php
                                $description = trim($job->description);
                            @endphp
                            <textarea
                                id="description"
                                name="description"
                                rows="5"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Add a job description"
                                required
                            >
                                    {{$description}}
                                    </textarea>
                            <x-form-error name="description"/>
                        </div>
                    </x-form-field>

                    <div class="mt-6 flex items-center justify-between gap-x-6">
                        <div class="flex items-center gap-x-6">
                            {{--NOTE! form="delete-form"  hidden form below--}}
                            <button form="delete-form" class="text-red-500 text-sm font-bold">
                                Delete
                            </button>
                        </div>
                        <div class="flex items-center gap-x-6">
                            <a href="/jobs/{{$job->id}}"
                               class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                            <x-form-button>
                                Save
                            </x-form-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{--Hidden form for delete route--}}
    <form method="POST" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
        @csrf
        @method("DELETE")
    </form>


</x-layout>
