<header class="min-h-screen relative overflow-clip place-content-center bg-black text-white">
    <canvas class="absolute inset-x-0 top-0 -bottom-200 " id="starCanvas"></canvas>
    <canvas aria-hidden="true" class="absolute inset-x-0 bottom-0 pointer-events-none  bottom-0 z-10 "
            width="600"
            height="600"
            id="canvas"></canvas>
    <div class="wrapper relative z-20 grid grid-cols-1 md:grid-cols-2">
        <div class="w-90 h-40 absolute top-0  blur-3xl rounded-b-full  z-20 bg-gradient-to-br from-primary-400/30 to-primary-800/30">d</div>
        <div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl text-left font-black tracking-tight relative">
                {{ config('app.name') }}
            </h1>

            <p class="max-w-3xl mt-2 text-lg leading-loose text-left">An independent festival in Berlin connecting filmmakers and musicians worldwide. Enjoy top-tier screenings, networking, Q&As, and an exclusive awards ceremony.</p>
            <button class="px-6 my-2 py-2 rounded-md bg-primary-500 hover:bg-primary-400 text-white">Submit Video</button>
        </div>
        <div class="flex justify-center">
            @if($upcomingEvent)
                <x-timer.2 class=" z-10 -translate-y-0" :event="$upcomingEvent"/>
            @endif
        </div>

    </div>


    <div class="w-full  bottom-0 absolute blur-lg ">
        <svg class="fill-primary-500/20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
        </svg>
    </div>


</header>
