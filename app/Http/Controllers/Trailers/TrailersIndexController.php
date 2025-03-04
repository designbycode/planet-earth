<?php

    namespace App\Http\Controllers\Trailers;

    use App\Http\Controllers\Controller;
    use App\Models\Trailer;
    use Illuminate\View\View;

    class TrailersIndexController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Trailer $trailers): View
        {
            return view("pages.trailers.index", [
                'trailers' => $trailers->paginate(),
                'meta' => [
                    'title' => 'About Us',
                    'description' => 'About Us'
                ]
            ]);
        }
    }
