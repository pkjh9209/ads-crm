<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AdsMember;
use App\Models\AdsLanding;

/*----광고유입 유저 컨트롤러-----*/ 
class AdsMemberManagerController extends Controller
{
    public function hasInput(Request $request)
    {
        if($request->has('_token')) {
            return count($request->all()) > 1;
        } else {
            return count($request->all()) > 0;
        }
    }

    // 랜딩페이지 유입 사용자
    public function show(Request $request)
    {
        $sql = AdsMember::paginate(15);
        return view('admin.layouts.board.board-adsmember',['members' => $sql]);
    }

}
