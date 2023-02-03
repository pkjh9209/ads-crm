<?php

namespace App\Http\Controllers\Admin;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function dashboard()
    {

        return view(
            "admin.dashboard" ,
            [
            ]
        );
    }
}
