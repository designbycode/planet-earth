<?php

    namespace App\Composers;

    use App\Models\Event;
    use Illuminate\View\View;

    class UpcomingEventComposer
    {
        public ?Event $upcomingEvent;

        public function compose(View $view): View
        {
            // Retrieve the upcoming event from cache or database
            $this->upcomingEvent = Event::where('event_start', '<=', now())
                ->orderBy('event_start', 'asc')
                ->first();


            // Check if no event was found
//            if (!$this->upcomingEvent) {
//                // Optionally, you can set a default message or a default event object
//                $this->upcomingEvent = new Event();
//                $this->upcomingEvent->title = 'No upcoming events';
//                // You can also set other default properties if needed
//            }

            // Pass the upcoming event to the view
            return $view->with('upcomingEvent', $this->upcomingEvent);
        }
    }
