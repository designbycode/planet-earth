@props(['event'])
<div class="border border-gray-200 dark:border-white/20 rounded-md p-2 flex  space-x-4">
    <img class="w-30 aspect-square object-cover rounded-md" src="{{ $event->getFirstMediaUrl('events', 'card') }}" alt="{{ $event->title }}">
    <div class="flex flex-col space-y-1">
        <p class="text-lg font-semibold">{{ $event->title }}</p>
        <p class="text-gray-500"><strong>Starting date</strong>: {{ $event->event_start->toFormattedDayDateString() }}</p>
        <p class="text-gray-500"><strong>Ending date</strong>: {{ $event->event_end->toFormattedDayDateString() }}</p>
        <a wire:navigate.hover href="{{ route('film-festivals.show', $event) }}" class="text-primary-500 hover:underline">Read more</a>
    </div>
</div>
