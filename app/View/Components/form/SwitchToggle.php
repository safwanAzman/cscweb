<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class SwitchToggle extends Component
{
    
    public function __construct()
    {
        //
    }


    public function render()
    {
        return view('components.form.switch-toggle');
    }
}
