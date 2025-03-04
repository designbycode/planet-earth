<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>

    <div class="wrapper py-24">
        <h1 class="text-5xl md:text-4xl font-bold">Trailers</h1>
        <ul class="my-2 space-y-4">

            @foreach($trailers as $trailer)
                <li class="p-6 border border-gray-300 dark:border-gray-800 rounded-md bg-gray-100 dark:bg-gray-900">
                    <a class="hover:underline text-primary-500" href="{{route('trailers.show', $trailer)}}">{{ $trailer->title }}</a>
                    <p>{{ $trailer->author }}</p>
                </li>
            @endforeach
        </ul>

    </div>
</x-app-layout>



