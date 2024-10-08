<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component {
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = "button",
        public string $id = "",
        public string $class = "",
        public string $href = "",
        public string $value = "",
        public string $icons = ""
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.buttons.button');
    }
}
