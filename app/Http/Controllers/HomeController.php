<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home()
    {
        $menuDeps1 = DB::select('SELECT * FROM ads_menus WHERE 1=1 AND 3 > CHAR_LENGTH(me_code)');
        return view($this->agent() . 'home', ['nav_menu' => $menuDeps1]);
    }
}
