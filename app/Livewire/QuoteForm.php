<?php

    namespace App\Livewire;

    //    use App\Events\QuoteSubmittedEvent;


    use App\Events\SubmitContactForm;
    use Illuminate\View\View;
    use Livewire\Component;

    class QuoteForm extends Component
    {


        public string $first_name = '';
        public string $last_name = '';
        public string $email = '';

        public string $message = '';


        public function __construct(public ?string $subject = '') {}

        public function messages(): array
        {
            return [
                'phone' => 'The :attribute field must be a valid number.',
            ];
        }

        public function send(): void
        {
            $data = $this->validate();

            event(new SubmitContactForm($this->validate()));

            $this->triggerSuccess();

            $this->reset();
        }

        public function triggerSuccess(): void
        {
            // Emit an event to trigger the toaster notification
            $this->dispatch('toast', [
                'title' => 'Success!',
                'description' => 'Email was send successfully.',
                'type' => 'success',
                'iconSVG' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-400"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
            ]);
        }

        public function render(): View
        {
            return view('livewire.quote-form');
        }

        protected function rules(): array
        {
            return [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
//                'phone' => 'required|min:10|phone:ZA',
                'subject' => 'required',
                'message' => 'required',
            ];
        }
    }
