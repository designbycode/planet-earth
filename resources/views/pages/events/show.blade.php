<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <section class="py-20">
        <div class="wrapper my-12">
            <div class="max-w-2xl  space-y-4 mx-auto">
                <x-timer :$event :showTitle="false" :showUpcoming="false"/>
                <img class="aspect-video object-center rounded-md" src="{{ $event->getFirstMediaUrl('events', 'big') }}" alt="{{ $event->title }}">
                <h1 class="text-5xl mb-2 md:text-4xl font-bold">{{ $event->title }}</h1>
                <div class="prose prose-a:text-primary-500 ">
                    {!! $event->description !!}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

