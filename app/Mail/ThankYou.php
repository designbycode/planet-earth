<?php

    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Mail\Mailables\Content;
    use Illuminate\Mail\Mailables\Envelope;
    use Illuminate\Queue\SerializesModels;

    class ThankYou extends Mailable
    {
        use Queueable, SerializesModels;

        /**
         * Create a new message instance.
         */
        public function __construct(public array $contactDetails) {}

        /**
         * Get the message envelope.
         */
        public function envelope(): Envelope
        {
            return new Envelope(
                subject: 'Thank You',
            );
        }

        /**
         * Get the message content definition.
         */
        public function content(): Content
        {
            return new Content(
                markdown: 'emails.contact-us.thank-you',
                with: [
                    'message' => $this->contactDetails['data']['message'],
                    'first_name' => $this->contactDetails['data']['first_name'],
                    'last_name' => $this->contactDetails['data']['last_name'],
                    'subject' => $this->contactDetails['data']['subject'],
                    'email' => $this->contactDetails['data']['email'],
//                    'phone' => $this->contactDetails['data']['phone'],
                ]
            );
        }

        /**
         * Get the attachments for the message.
         *
         * @return array<int, \Illuminate\Mail\Mailables\Attachment>
         */
        public function attachments(): array
        {
            return [];
        }
    }
