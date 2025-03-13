<header class="min-h-screen relative overflow-clip place-content-center bg-black text-white">
    <div class="w-150 rotate-45 h-40 absolute top-0  blur-xl rounded-full z-20 bg-gradient-to-r from-fuchsia-400/10 to-sky-500/10"></div>

    <canvas class="absolute inset-x-0 top-0 -bottom-200 " id="starCanvas"></canvas>
    <canvas aria-hidden="true" class="absolute inset-x-0 pointer-events-none bottom-0 z-10 "
            width="600"
            height="600"
            id="canvas"></canvas>
    <div class="wrapper relative z-20 grid grid-cols-1 md:grid-cols-2">
        <div class="animate-up">
            <h1 class="text-4xl md:text-6xl lg:text-7xl text-left font-black tracking-tight relative ">
                {{ config('app.name') }}
            </h1>

            <p class="max-w-3xl mt-2 text-lg leading-loose text-left ">An independent festival in Berlin connecting filmmakers and musicians worldwide. Enjoy top-tier screenings, networking, Q&As, and an exclusive awards ceremony
                .</p>
            <button class="px-6 my-2 py-2 rounded-md bg-primary-500 hover:bg-primary-400 text-white ">Submit Video</button>

            <button onclick="Livewire.dispatch('openModal', { component: 'modals.event-modal'})">Modal User</button>


        </div>
        <div class="flex justify-center relative z-20">
            @if($upcomingEvent)
                <x-timer.2 class="z-10 box" :event="$upcomingEvent"/>
            @endif
        </div>

    </div>


    <div class="w-full  bottom-0 absolute z-10 drop-shadow-[0px_0px_50px_rgba(120,0,0,1)] ">
        <svg class="fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
        </svg>
    </div>


</header>
