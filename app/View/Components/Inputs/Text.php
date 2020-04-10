<?php

namespace App\View\Components\Inputs;

class Text extends Input
{

    public function __construct($name, $label, $placeholder = null)
    {
        parent::__construct($name, $label, $placeholder);
    }

    public function render()
    {
        return view('components.inputs.text');
    }
}
