<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;

    public $placeholder;
    public $size;

    public function __construct($name, $label, $params = [])
    {
        $this->name = $name;
        $this->label = $label;
        foreach ($params as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('components.inputs.text');
    }
}
