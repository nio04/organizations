<?php

namespace App\View\Components\Modals;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteModal extends Component {
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $headerTitle,
        public string $typeIcon,
        public string $formId,
        public string $actionConfirmBtn,
        public string $actionConfirmCancel,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.modals.delete-modal');
    }
}
