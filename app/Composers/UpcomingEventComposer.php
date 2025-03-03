<?php

    namespace App\Composers;

    use App\Models\Event;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\View\View;

    class UpcomingEventComposer
    {
        public ?Event $upcomingEvent;

        public function compose(View $view): View
        {
            // Retrieve the upcoming event from cache or database
            $this->upcomingEvent = Cache::remember('upcomingEvent', config('cache.time_to_life'), function () {
                return Event::first();
            });

            // Check if no event was found
            if (!$this->upcomingEvent) {
                // Optionally, you can set a default message or a default event object
                $this->upcomingEvent = new Event();
                $this->upcomingEvent->title = 'No upcoming events';
                // You can also set other default properties if needed
            }

            // Pass the upcoming event to the view
            return $view->with('upcomingEvent', $this->upcomingEvent);
        }
    }
