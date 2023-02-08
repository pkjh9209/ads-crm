<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\Controller;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $agentPath = Controller::agent();
        return view($agentPath . 'layouts.admin');
    }
}
