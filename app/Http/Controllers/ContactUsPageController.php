<?php

    namespace App\Http\Controllers;

    use Illuminate\View\View;

    class ContactUsPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.contact-us', [
                'meta' => [
                    'title' => 'Contact Us',
                    'description' => 'Contact Us'
                ]
            ]);
        }
    }
