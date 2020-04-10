<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Input extends Component
{

    public $name;
    public $label;
    public $placeholder;

    public function __construct($name, $label, $placeholder = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.inputs.text');
    }
}
