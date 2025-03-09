<ul class="max-w-xl mx-auto space-y-4 border-ls border-gray-500/20 px-2">
    @foreach($events as $event)
        <li class="relative hover:bg-neutral-800/50 space-y-2 rounded-md p-6 group">
            <span class="absolute block left-[2px] group-hover:border-primary-500 -translate-x-4 bg-black top-8 size-3 rounded-full border border-gray-500"></span>
            <span class="absolute w-px block bg-gray-500/20 -left-[9px] bottom-0 top-12 rounded-md"></span>
            <h4 class="text-xl font-semibold">{{ $event->title }}</h4>
            <time class="md:absolute pointer-events-none -translate-x-full md:-left-10 md:top-7 text-sm">2025-05-29</time>
            <p class="text-gray-500 line-clamp-3">{{ $event->description }}</p>
            <a wire:navigate.hover class="text-primary-500 hover:underline" href="{{ route('film-festivals.show', $event) }}">
                <span class="absolute inset-0 rounded-md "></span>
                View</a>
        </li>
    @endforeach
</ul>
