<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DemoForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.demo-form', ['id' => $this->id]);
    }
}
