@props(['links'])

<div {{ $attributes->merge(['class' => 'flex space-x-1 lg:flex hidden items-center']) }}>
    @foreach($links as $link)
        @if($link->show)
            @if(!$link->dropdown)
                <x-navigation.menu.link :$link/>
            @else
                <x-navigation.menu.dropdown :$link/>
            @endif
        @endif
    @endforeach
</div>
