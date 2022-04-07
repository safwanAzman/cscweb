<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class header extends Component
{
    public $bgimg;
    public $title;
    public $height;

    public function __construct($bgimg,$title,$height = "25rem")
    {
        $this->bgimg = $bgimg;
        $this->title = $title;
        $this->height = $height;
    }


    public function render()
    {
        return view('components.general.header');
    }
}
