<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <x-hero :$upcomingEvent/>
    <section class="py-20 relative z-10 bg-black/80 backdrop-blur-md">
        <div class="text-9xl font-black absolute tracking-tight text-white/5-translate-x-1/3 translate-y-1/2  -rotate-90 left-5 text-center" aria-hidden="true">Planet <br/> Earth</div>
        <div class="wrapper relative z-10">
            <iframe class="rounded-md mx-auto max-w-4xl  w-full aspect-video" src="https://www.youtube.com/embed/jxJbml7-9VE?si=v2nBggZLkQ9PajY8" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
    <!-- About Section -->
    <section class="py-10 relative z-10">
        <div class="wrapper">

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
