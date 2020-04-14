<?php

namespace App\View\Components\Inputs;

class Checkbox extends Input
{
    public $value;

    public function __construct($name, $label, $value, $params = [])
    {
        $this->value = $value;
        parent::__construct($name, $label, $params);
    }

    public function render()
    {
        return view('components.inputs.checkbox');
    }
}
