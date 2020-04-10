<?php

namespace App\View\Components\Inputs;

class Text extends Input
{

    public function __construct($label)
    {
        parent::__construct($label);
    }

    public function render()
    {
        return view('components.inputs.text');
    }
}
