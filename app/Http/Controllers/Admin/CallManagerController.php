<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BorderManager;
class BoardManagerController extends Controller
{

    public function index()
    {
        $sql = BorderManager::get();
        return view('admin.layouts.content',['boardList' => $sql]);
    }

    public function show(Request $request)
    {

    }
}
