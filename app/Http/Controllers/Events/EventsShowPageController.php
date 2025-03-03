<?php

    namespace App\Http\Controllers\Events;

    use App\Http\Controllers\Controller;
    use App\Models\Event;
    use Illuminate\View\View;

    class EventsShowPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Event $event): View
        {
            $e = $event->load('media');

            return view('pages.events.show', [
                'event' => $e,
                'meta' => [
                    'title' => $e->title,
                    'description' => $e->description
                ]
            ]);
        }
    }
