<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;


class HomeController extends Controller
{
    public function home()
    {
        $menuDeps1 = DB::select('SELECT * FROM ads_menus WHERE 1=1 AND 3 > CHAR_LENGTH(me_code)');
        return view('homes', ['nav_menu' => $menuDeps1]);
    }
}
