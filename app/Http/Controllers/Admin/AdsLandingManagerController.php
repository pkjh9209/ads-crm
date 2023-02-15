<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdsMember;

/*----광고랜딩 컨트롤러-----*/ 
class AdsLandingManagerController extends Controller
{

    public function index()
    {
        // $sql = AdsMember::get();
        // return view($this->agent().'admin.layouts.content',['members' => $sql]);
    }

    public function showMemberList(Request $request)
    {
        $sql = AdsMember::paginate(15);
        return view($this->agent().'admin.layouts.ads-content',['members' => $sql]);
    }
}
