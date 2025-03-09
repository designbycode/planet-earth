@props(['event', 'showUpcoming' => true, 'showTitle' => true])
@if($event->title !== 'No upcoming events')
    <div {{ $attributes->merge(['class' => 'countdown flex flex-col  my-4']) }}  data-time="{{ $event->event_start }}">
        @if($showUpcoming)
            <div class="text-center text-2xl">
                Upcoming Event
            </div>
        @endif
        <div class="space-x-4 my-4 inline-flex">
            <div class="flex items-center flex-col">
                <div class="font-extralight size-16 border border-primary-500 rounded-full grid place-content-center text-3xl mb-2" data-month>0</div>
                <div class="font-light text-xs">Month</div>
            </div>
            <div class="flex items-center flex-col">
                <div class="font-extralight size-16 border border-primary-500 rounded-full grid place-content-center text-3xl mb-2" data-days>0</div>
                <div class="font-light text-xs">Days</div>
            </div>
            <div class="flex items-center flex-col">
                <div class="font-extralight size-16 border border-primary-500 rounded-full grid place-content-center text-3xl mb-2" data-hours>0</div>
                <div class="font-light text-xs">Hours</div>
            </div>
            <div class="flex items-center flex-col">
                <div class="font-extralight size-16 border border-primary-500 rounded-full grid place-content-center text-3xl mb-2" data-minutes>0</div>
                <div class="font-light text-xs">Minutes</div>
            </div>
            <div class="flex items-center flex-col">
                <div class="font-extralight size-16 border border-primary-500 rounded-full grid place-content-center text-3xl mb-2" data-seconds>0</div>
                <div class="font-light text-xs">Seconds</div>
            </div>
        </div>
        <div class="flex justify-center">
            @if($showTitle)
                <a wire:navigate.hover href="{{ route('film-festivals.show', $event) }}" class="inline-flex mx-auto hover:bg-primary-500/10 border border-primary-500 px-6 py-1.5 rounded-full items-center">
                    {{ $event->title }}
                    <x-heroicon-s-chevron-right class="size-4 ml-2"/>
                </a>
            @endif
        </div>

    </div>
@else
    <div class="bg-rose-500 text-white p-4 rounded-md mb-4">
        <p class="text-center">{{ $upcomingEvent->title }}</p>
    </div>

@endif
