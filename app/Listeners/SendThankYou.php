<?php

    namespace App\Listeners;

    use App\Events\SubmitContactForm;
    use App\Mail\ThankYou;
    use Illuminate\Mail\Mailables\Address;
    use Illuminate\Support\Facades\Mail;

    class SendThankYou
    {
        /**
         * Create the event listener.
         */
        public function __construct()
        {
            //
        }

        /**
         * Handle the event.
         */
        public function handle(SubmitContactForm $event): void
        {
            Mail::to(
                new Address(
                    $event->data['email'],
                    $event->data['first_name']
                ))
                ->queue(new ThankYou((array)$event));
        }
    }
