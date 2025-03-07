@props(['upcomingEvent'])

<header class="isolate  bg-black min-h-svh relative overflow-x-clip place-content-center text-white">
    <canvas class="absolute inset-x-0 top-0 -bottom-200 z-0" id="starCanvas"></canvas>
    <div class="wrapper grid relative z-20 relative -translate-y-20">
        @if($upcomingEvent)
            <x-timer class="mx-auto z-10 -translate-y-0" :event="$upcomingEvent"/>
        @endif
        <h1 class="text-6xl drop-shadow-[5px_5px_5px_rgba(0,0,0,1)] md:text-7xl lg:text-9xl text-center font-black tracking-tight relative">
            {{ config('app.name') }}
            <span class="absolute left-1/2 z-10 -translate-x-1/2 text-white -bottom-8  rotate-3 inline-block text-nowrap text-2xl lg:text-4xl bg-primary-500/70 p-1.5 lg:p-3 backdrop-blur-md rounded-md text-center font-black
            tracking-widest drop-shadow-[2px_3px_2px_rgba(0,0,0,1)] ">
                Film Festival
            </span>
        </h1>
        <p class="max-w-3xl drop-shadow-[2px_3px_2px_rgba(0,0,0,1)]  mt-10 text-lg mx-auto leading-loose text-center">An independent festival in Berlin connecting filmmakers and musicians worldwide. Enjoy top-tier screenings,
            networking, Q&As, and an exclusive
            awards ceremony
            .</p>


    </div>


    <div class="absolute z-10 inset-x-0 h-60 bottom-0 rounded-t-full blur-3xl opacity-40 bg-radial from-primary-200 to-primary-700"></div>
    <img class="absolute mask-image-b mask-image-start-60 inset-x-0 -bottom-120 z-10 " src="{{ Vite::asset('resources/img/earth.webp') }}" alt="Planet Earth">

</header>
