<x-head />
<x-nav />

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        <x-link-button :href="url('jobs/create')">List New Job</x-link-button>
    </div>
</header>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
</main>

<x-footer />
