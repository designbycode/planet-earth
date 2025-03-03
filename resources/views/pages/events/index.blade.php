<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <section class="py-20">
        <div class="wrapper my-12">
            <h1 class="text-5xl md:text-4xl font-bold">About The Festival</h1>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-lg mb-6">
                        CINEFEST is an annual celebration of independent cinema, showcasing groundbreaking films
                        from emerging and established filmmakers across the globe.
                    </p>
                    <p class="text-lg mb-6">
                        Founded in 2010, our festival has grown to become one of the most prestigious platforms
                        for discovering new talent and honoring cinematic excellence.
                    </p>
                    <p class="text-lg">
                        Each year, we present a carefully curated selection of features, documentaries, shorts,
                        and experimental works that push the boundaries of storytelling.
                    </p>
                </div>
                @if($events->count())
                    <div class="relative  rounded-lg space-y-4">
                        @foreach($events as $event)
                            <x-events.card :$event/>
                        @endforeach
                    </div>
                @else
                    <p>No events at this time</p>
                @endif
            </div>
        </div>
    </section>


</x-app-layout>
