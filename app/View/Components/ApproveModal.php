<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ApproveModal extends Component {
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $headerTitle,
        public string $typeIcon,
        public string $actionConfirmBtn,
        public string $actionConfirmCancel,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.approve-modal');
    }
}
