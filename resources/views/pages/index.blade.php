<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <x-hero.2 :$upcomingEvent/>

    <section class="wrapper py-20">
        <livewire:ui.events-list/>
    </section>

    <section class="wrapper my-24 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8 ">
        <div class="col-span-3">
            <h2 class="text-4xl font-bold tracking-tight mb-2">Upcoming Events</h2>
        </div>
        <x-card.1>
            <h3 class="text-2xl font-bold tracking-tight mb-2">View upcoming events </h3>
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deserunt doloribus dolorum eius, eveniet fugit neque nesciunt voluptas voluptatum!</p>
            <a class="text-primary-500 hover:underline" href="#">View Event <span class="absolute inset-0"></span></a>
        </x-card.1>
        <x-card.1>
            <h3 class="text-2xl font-bold tracking-tight mb-2">View upcoming events </h3>
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deserunt doloribus dolorum eius, eveniet fugit neque nesciunt voluptas voluptatum!</p>
            <a class="text-primary-500 hover:underline" href="#">View Event <span class="absolute inset-0"></span></a>
        </x-card.1>
        <x-card.1>
            <h3 class="text-2xl font-bold tracking-tight mb-2">View upcoming events </h3>
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deserunt doloribus dolorum eius, eveniet fugit neque nesciunt voluptas voluptatum!</p>
            <a class="text-primary-500 hover:underline" href="#">View Event <span class="absolute inset-0"></span></a>
        </x-card.1>
        <x-card.1>
            <h3 class="text-2xl font-bold tracking-tight mb-2">View upcoming events </h3>
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deserunt doloribus dolorum eius, eveniet fugit neque nesciunt voluptas voluptatum!</p>
            <a class="text-primary-500 hover:underline" href="#">View Event <span class="absolute inset-0"></span></a>
        </x-card.1>
        <x-card.1>
            <h3 class="text-2xl font-bold tracking-tight mb-2">View upcoming events </h3>
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deserunt doloribus dolorum eius, eveniet fugit neque nesciunt voluptas voluptatum!</p>
            <a class="text-primary-500 hover:underline" href="#">View Event <span class="absolute inset-0"></span></a>
        </x-card.1>
        <x-card.1>
            <h3 class="text-2xl font-bold tracking-tight mb-2">View upcoming events </h3>
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deserunt doloribus dolorum eius, eveniet fugit neque nesciunt voluptas voluptatum!</p>
            <a class="text-primary-500 hover:underline" href="#">View Event <span class="absolute inset-0"></span></a>
        </x-card.1>


    </section>


</x-app-layout>
