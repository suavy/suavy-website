<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $link;
    public $id;

    public function __construct($link,$id=null)
    {
        $this->id=$id;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.form');
    }
}
