<a wire:navigate {{ $attributes->merge(['class' => 'flex shrink-0 md:ml-0 origin-left md:scale-125 text-lg font-black text-gray-700 dark:text-gray-100', 'href' => route('home') ]) }}>
    <span >{{ config('app.name') }}</span>
</a>
