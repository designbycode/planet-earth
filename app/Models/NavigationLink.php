<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Sushi\Sushi;

    class NavigationLink extends Model
    {

        use Sushi;

        public function getRows(): array
        {
            $isAuthenticated = auth()->check(); // Check if the user is logged in

            return [
                [
                    "name" => "Home",
                    "slug" => "home",
                    "route" => "home",
                    "activeRoute" => "home",
                    "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                    "dropdown" => false,
                    "show" => true
                ],
                [
                    "name" => "About Us",
                    "slug" => "about-us",
                    "route" => "about-us",
                    "activeRoute" => "about-us",
                    "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                    "dropdown" => false,
                    "show" => true
                ],
                [
                    "name" => "Trailers",
                    "slug" => "trailers",
                    "route" => "trailers.index",
                    "activeRoute" => "trailers*",
                    "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                    "dropdown" => false,
                    "show" => true
                ],
                [
                    "name" => "Film Festivals",
                    "slug" => "film-festivals",
                    "route" => "film-festivals.index",
                    "activeRoute" => "film-festivals*",
                    "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                    "dropdown" => false,
                    "show" => true
                ],
                [
                    "name" => "Contact Us",
                    "slug" => "contact-us",
                    "route" => "contact-us",
                    "activeRoute" => "contact-us",
                    "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                    "dropdown" => false,
                    "show" => true
                ],
                [
                    "name" => "Login",
                    "slug" => "admin/login",
                    "route" => "filament.admin.auth.login",
                    "activeRoute" => "admin/login",
                    "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10 border border-primary-500",
                    "dropdown" => false,
                    "show" => !$isAuthenticated // Show only if user is NOT logged in
                ],
                [
                    "name" => "Register",
                    "slug" => "admin/register",
                    "route" => "filament.admin.auth.login",
                    "activeRoute" => "admin/register",
                    "class" => "hover:bg-primary-400 dark:hover:bg-primary-400 bg-primary-500",
                    "dropdown" => false,
                    "show" => !$isAuthenticated // Show only if user is NOT logged in
                ],
                [
                    "name" => "Dashboard",
                    "slug" => "admin",
                    "route" => "filament.admin.pages.dashboard",
                    "activeRoute" => "admin",
                    "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                    "dropdown" => false,
                    "show" => $isAuthenticated // Show only if user IS logged in
                ],
            ];
        }

    }
