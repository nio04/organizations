<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sort extends Component {
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $sortBy = "name",
        public string $sortDir = "asc",
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.layouts.sort');
    }
}
