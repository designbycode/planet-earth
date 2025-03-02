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
            "classes" => "hover:text-primary-500 dark:text-shadow ",
            "dropdown" => false,
        ],
        [
            "name" => "About Us",
            "slug" => "about-us",
            "route" => "about-us",
            "classes" => "",
            "dropdown" => false,
        ],
        [
            "name" => "Film Festivals",
            "slug" => "film-festivals",
            "route" => "film-festivals",
            "classes" => "",
            "dropdown" => false,
        ],
    ];
}
