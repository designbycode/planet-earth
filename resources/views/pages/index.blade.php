<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <x-hero/>
    <!-- About Section -->
    <section id="about" class="py-10">
        <div class="wrapper">
            @if($upcomingEvent)
                <x-timer class="mx-auto z-10 -translate-y-30" :event="$upcomingEvent"/>
            @endif
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">About The Festival</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-lg mb-6">
                        Planet Earth is an annual celebration of independent cinema, showcasing groundbreaking films
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
                <div class="relative h-80 md:h-96 rounded-lg overflow-hidden">
                    <img width="768" height="430" src="{{ Vite::asset('resources/img/Film-768x430.jpeg') }}" alt="Festival Audience" class="object-cover w-full h-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Submission Section -->
    <section id="submissions" class="py-20 bg-primary-600 text-white ">
        <div class="wrapper text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Submit Your Film</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                We're looking for bold, innovative films that push the boundaries of storytelling.
                Submissions for Planet Earth 2025 are now open.
            </p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <button class="px-6 py-3 bg-primary-500 hover:bg-primary-400 text-white font-semibold rounded-md transition-colors">
                    Submission Guidelines
                </button>
                <button class="px-6 py-3 bg-transparent border border-white/75 hover:border-white rounded-md transition-colors">
                    Submit Now
                </button>
            </div>
        </div>
    </section>


</x-app-layout>
