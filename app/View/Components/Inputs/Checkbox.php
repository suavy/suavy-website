<?php

namespace App\View\Components\Inputs;

class Checkbox extends Input
{

    public function __construct($name, $label, $params = [])
    {
        parent::__construct($name, $label, $params);
    }


    public function render()
    {
        return view('components.inputs.checkbox');
    }
}
