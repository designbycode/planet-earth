@props(['event', 'showUpcoming' => true, 'showTitle' => true])
@if($event)
    <div {{ $attributes->merge(['class' => 'countdown my-4 scale-90 flex flex-col items-center']) }}  data-time="{{ $event->event_start }}">
        @if($showUpcoming)
            <div class="text-center my-2 border border-white/20 px-6 py-1.5 text-sm rounded-full bg-white/10 inline-block mx-auto">
                Upcoming Event
            </div>
        @endif
        <div class="flex space-x-4">
            <div class="border size-20 shadow-lg shadow-primary-500/20 grid place-content-center border-white/20 backdrop-blur-xs rounded-md bg-white/10 text-center">
                <div class="font-extralight text-2xl" data-month>0</div>
                <div class="font-light text-sm">Month</div>
            </div>
            <div class="border size-20 shadow-lg shadow-primary-500/20 grid place-content-center border-white/20 backdrop-blur-xs rounded-md bg-white/10 text-center">
                <div class="font-extralight text-2xl" data-days>0</div>
                <div class="font-light text-sm">Days</div>
            </div>
            <div class="border size-20 shadow-lg shadow-primary-500/20 grid place-content-center border-white/20 backdrop-blur-xs rounded-md bg-white/10 text-center">
                <div class="font-extralight text-2xl" data-hours>0</div>
                <div class="font-light text-sm">Hours</div>
            </div>
            <div class="border size-20 shadow-lg shadow-primary-500/20 grid place-content-center border-white/20 backdrop-blur-xs rounded-md bg-white/10 text-center">
                <div class="font-extralight text-2xl" data-minutes>0</div>
                <div class="font-light text-sm">Minutes</div>
            </div>
            <div class="border size-20 shadow-lg shadow-primary-500/20 grid place-content-center border-white/20 backdrop-blur-xs rounded-md bg-white/10 text-center">
                <div class="font-extralight text-2xl" data-seconds>0</div>
                <div class="font-light text-sm">Seconds</div>
            </div>


        </div>
        @if($showTitle)
            <div class="text-center tracking-widest my-2 text-sm rounded-full  inline-block mx-auto">
                {{ $event->title }}
            </div>
        @endif
    </div>
@else
    <p>{{ $upcomingEvent->title }}</p>
@endif
