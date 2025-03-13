<x-app-layout>
    <x-slot name="seo">
        <x-seo-meta :$meta/>
    </x-slot>
    <section class="py-20">
        <div class="wrapper my-12">
            <div class="grid place-content-center mx-auto animate-up">
                <x-timer.2 :$event :showTitle="false" :showUpcoming="false"/>
            </div>

            <div class="max-w-2xl space-y-4 mx-auto">
                <img class="rounded-md min-w-full animate-up" src="{{ $event->getFirstMediaUrl('events', 'big') }}" alt="{{ $event->title }}">
                <h1 class="text-5xl mb-2 md:text-4xl font-bold animate-up">{{ $event->title }}</h1>
                <div class="prose prose-a:text-primary-500 animate-up">
                    {!! $event->description !!}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

