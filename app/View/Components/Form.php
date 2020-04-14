<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    public function render()
    {
        return view('components.form');
    }
}
