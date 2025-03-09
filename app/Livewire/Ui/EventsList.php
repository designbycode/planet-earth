<?php

    namespace App\Livewire\Ui;

    use App\Models\Event;
    use Illuminate\View\View;
    use Livewire\Component;

    class EventsList extends Component
    {


        public function render(): View
        {
            return view('livewire.ui.events-list', [
                'events' => Event::get()
            ]);
        }
    }
