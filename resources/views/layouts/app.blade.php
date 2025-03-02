<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700,800,900" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    @livewireStyles
</head>
<body class="antialiased text-gray-700 bg-gray-100  dark:bg-gray-950 dark:text-gray-300 h-full">
<x-skip/>
<x-navigation/>
<main id="main">
    {{ $slot }}
</main>
<x-footer/>
@livewireScripts
</body>
</html>
