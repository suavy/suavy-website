<?php

namespace App\View\Components\Inputs;

class Textarea extends Input
{

    public function __construct($name, $label, $params = [])
    {
        parent::__construct($name, $label, $params);
    }


    public function render()
    {
        return view('components.inputs.textarea');
    }
}
