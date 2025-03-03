<?php

    namespace App\Http\Controllers\Events;

    use App\Http\Controllers\Controller;
    use App\Models\Event;
    use Illuminate\View\View;

    class EventsIndexPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.events.index', [
                'events' => Event::with('media')->get(),
                'meta' => [
                    'title' => 'Events List',
                    'description' => 'Events description'
                ]
            ]);
        }
    }
