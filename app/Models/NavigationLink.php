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
                "classes" => "hover:text-primary-500 dark:text-shadow ",
                "dropdown" => false,
            ],
            [
                "name" => "About Us",
                "slug" => "about-us",
                "route" => "about-us",
                "activeRoute" => "about-us",
                "classes" => "",
                "dropdown" => false,
            ],
            [
                "name" => "Film Festivals",
                "slug" => "film-festivals",
                "route" => "film-festivals.index",
                "activeRoute" => "film-festivals*",
                "classes" => "",
                "dropdown" => false,
            ],
            [
                "name" => "Contact Us",
                "slug" => "contact-us",
                "route" => "contact-us",
                "activeRoute" => "contact-us",
                "classes" => "",
                "dropdown" => false,
            ],
        ];
    }
