<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#0284c7"/>
    <link rel="canonical" href="{{ URL::current()}}"/>

    {{ $seo }}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:100,200,400,500,600,700,800,900" rel="stylesheet"/>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    @livewireStyles
    @filamentStyles
</head>
<body class="antialiased overflow-x-clip flex flex-col text-gray-700 bg-gray-100  dark:bg-gray-950 dark:text-gray-300 h-full">
<x-skip/>
<x-navigation/>
<main id="main" class="flex-1">
    {{ $slot }}
</main>
<x-footer/>
@livewire('notifications')
@livewireScripts
@filamentScripts
</body>
</html>
