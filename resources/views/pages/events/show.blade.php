<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <section class="py-20">
        <div class="wrapper my-12">

            <div class="prose max-w-2xl dark:prose-invert space-y-4 mx-auto">
                <x-timer :$event :showTitle="false" :showUpcoming="false"/>
                <img class="aspect-video object-center rounded-md" src="{{ $event->getFirstMediaUrl('events', 'big') }}" alt="{{ $event->title }}">
                <h1 class="text-5xl mb-2 md:text-4xl font-bold">{{ $event->title }}</h1>
                @markdown($event->description)
            </div>
        </div>
    </section>
</x-app-layout>

