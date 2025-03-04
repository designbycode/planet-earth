<?php

    namespace App\Http\Controllers\Trailers;

    use App\Http\Controllers\Controller;
    use App\Models\Trailer;
    use Illuminate\View\View;

    class TrailersShowController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Trailer $trailer): View
        {
            return view("pages.trailers.show", [
                'trailer' => $trailer,
                'meta' => [
                    'title' => 'About Us',
                    'description' => 'About Us'
                ]
            ]);
        }
    }
