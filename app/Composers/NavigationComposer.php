<?php

	namespace App\Composers;

	use App\Models\NavigationLink;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\View\View;

    class NavigationComposer {


        public object $links;
        public function compose(View $view): View
        {
            $this->links = Cache::remember('nav-links', config('cache.time_to_life'), function () {
                return NavigationLink::get();
            });

            return $view->with('links', $this->links);
        }
    }
