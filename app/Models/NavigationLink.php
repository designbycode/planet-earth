<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Sushi\Sushi;

    class NavigationLink extends Model
    {

        use Sushi;

        protected array $rows = [
            [
                "name" => "Home",
                "slug" => "home",
                "route" => "home",
                "activeRoute" => "home",
                "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                "dropdown" => false,
            ],
            [
                "name" => "About Us",
                "slug" => "about-us",
                "route" => "about-us",
                "activeRoute" => "about-us",
                "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                "dropdown" => false,
            ],
            [
                "name" => "Trailers",
                "slug" => "trailers",
                "route" => "trailers.index",
                "activeRoute" => "trailers*",
                "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                "dropdown" => false,
            ],
            [
                "name" => "Film Festivals",
                "slug" => "film-festivals",
                "route" => "film-festivals.index",
                "activeRoute" => "film-festivals*",
                "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                "dropdown" => false,
            ],
            [
                "name" => "Contact Us",
                "slug" => "contact-us",
                "route" => "contact-us",
                "activeRoute" => "contact-us",
                "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10",
                "dropdown" => false,
            ],
            [
                "name" => "Login",
                "slug" => "login",
                "route" => "contact-us",
                "activeRoute" => "contact-us",
                "class" => "hover:bg-primary-900/10 dark:hover:bg-primary-100/10 border border-primary-500",
                "dropdown" => false,
            ],
            [
                "name" => "Register",
                "slug" => "register",
                "route" => "contact-us",
                "activeRoute" => "contact-us",
                "class" => "hover:bg-primary-400 dark:hover:bg-primary-400 bg-primary-500",
                "dropdown" => false,
            ],
        ];
    }
