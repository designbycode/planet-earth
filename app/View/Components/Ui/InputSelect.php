<?php

    namespace App\View\Components\Ui;

    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;

    class InputSelect extends Component
    {
        /**
         * Create a new component instance.
         */
        public function __construct(public ?string $name, public ?string $id, public array $options) {}

        /**
         * Get the view / contents that represent the component.
         */
        public function render(): View|Closure|string
        {
            return view('components.ui.input-select');
        }

        /**
         * @return string
         */
        public function fallback(): string
        {
            return $this->name ?? $this->id;
        }
    }
