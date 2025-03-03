@props(['link' => $link, 'full' => false])

@php
    // Determine if the current route matches the link's route
    $active = request()->routeIs($link->activeRoute);

    // Start with the base classes
    $classes = $full ? 'flex' : 'inline-flex';

    // Add conditional classes for active state
    if ($active) {
        $classes .= ' text-primary-500 dark:text-primary-400 bg-primary-900/10 dark:bg-primary-100/10';
    }

    // Always include these classes
//    $classes .= ' items-center px-1.5 rounded py-1 font-medium hover:text-primary-500 ';
    $classes .= ' btn ';

    $classes .= $link->classes;
@endphp

<a wire:navigate.hover {{ $attributes->merge(['class' => $classes, 'href' => route($link->route)]) }}>
    {{ $link->name }}
</a>
