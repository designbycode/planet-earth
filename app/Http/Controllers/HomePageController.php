<?php

    namespace App\Http\Controllers;

    use App\Models\Event;
    use Illuminate\View\View;

    class HomePageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.index', [
                'upcomingEvent' => Event::where('event_start', '>=', now())->first(),
                'meta' => [
                    'title' => 'Home Page',
                    'description' => 'Home Page'
                ]
            ]);
        }
    }
