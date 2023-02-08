<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Jenssegers\Agent\Facades\Agent;

class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function agent()
    {
        $agent = Agent::isMobile();
        $agentType = '/desktop';
        if ($agent) {
            return 'mobile.';
        } else {
            return 'desktop.';
        }
    }
}
