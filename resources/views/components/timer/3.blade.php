@props(['event', 'showUpcoming' => true, 'showTitle' => true])
@if($event->title !== 'No upcoming events')
    <div {{ $attributes->merge(['class' => 'countdown']) }}  data-time="{{ $event->event_start }}">
        @if($showUpcoming)
            <div class="">
                Upcoming Event
            </div>
        @endif
        <div class="flex space-x-4">
            <div class="">
                <div class="font-extralight text-2xl" data-month>0</div>
                <div class="font-light text-sm">Month</div>
            </div>
            <div class="">
                <div class="font-extralight text-2xl" data-days>0</div>
                <div class="font-light text-sm">Days</div>
            </div>
            <div class="">
                <div class="font-extralight text-2xl" data-hours>0</div>
                <div class="font-light text-sm">Hours</div>
            </div>
            <div class="">
                <div class="font-extralight text-2xl" data-minutes>0</div>
                <div class="font-light text-sm">Minutes</div>
            </div>
            <div class="">
                <div class="font-extralight text-2xl" data-seconds>0</div>
                <div class="font-light text-sm">Seconds</div>
            </div>
        </div>
        @if($showTitle)
            <div class="">
                {{ $event->title }}
            </div>
        @endif
    </div>
@else
    <p>{{ $upcomingEvent->title }}</p>
@endif
