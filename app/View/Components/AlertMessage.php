<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Component to display message alerts
 */
class AlertMessage extends Component
{
    /** @var string $type The alert type */
    public $type;

    /** @var string $message The alert message */
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message, $type = 'info')
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return <<<'blade'
            <div  class="alert alert-{{ $type }} show fade mt-2">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         blade;
    }
}
