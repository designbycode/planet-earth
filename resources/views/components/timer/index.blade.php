@props(['date'])

<div {{ $attributes->merge(['class' => 'countdown my-4 scale-90 flex flex-col items-center']) }}  data-time="{{ $date }}">
    <div class="text-center my-2 border border-white/20 px-6 py-1.5 text-sm rounded-full bg-white/10 inline-block mx-auto">
        Upcoming Event
    </div>
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

</div>
