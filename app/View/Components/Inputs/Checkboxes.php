<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Checkboxes extends Component
{
    public $label;

    public function __construct($label)
    {
        $this->label = $label;
    }

    public function render()
    {
        return view('components.inputs.checkboxes');
    }
}
