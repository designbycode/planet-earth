<?php

    namespace App\Listeners;

    use App\Events\SubmitContactForm;
    use App\Mail\ContactUs;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailables\Address;
    use Illuminate\Queue\InteractsWithQueue;
    use Illuminate\Support\Facades\Mail;

    class SendEmail implements ShouldQueue
    {

        use InteractsWithQueue;

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
                new Address(config('mail.from.address'),
                    config('mail.from.name')))
                ->queue(new ContactUs((array)$event));
        }
    }
