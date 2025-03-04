<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>

    <div class="wrapper py-24">
        <h1 class="text-5xl md:text-4xl mb-4 font-bold">{{ $trailer->title }}</h1>
        <h2 class="italic font-semibold text-lg mb-4">{{ $trailer->author }}</h2>
        <iframe class="rounded-md" width="560" height="315" src="https://www.youtube.com/embed/{{ $trailer->code }}" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</x-app-layout>
