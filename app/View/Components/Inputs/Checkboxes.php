<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Checkboxes extends Component
{
    public $label;
    public $options;
    public $name;

    public function __construct($label, $name, $options = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
    }

    public function render()
    {
        return view('components.inputs.checkboxes');
    }
}
