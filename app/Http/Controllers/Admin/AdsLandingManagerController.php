<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdsLanding;

/*----광고랜딩 컨트롤러-----*/ 
class AdsLandingManagerController extends Controller
{

    // 랜딩페이지 목록
    public function show(Request $request)
    {
        $adsLanding = new AdsLanding;
        $list = $adsLanding->getLandingList($request);
        return view('admin.layouts.board.board-landing',['landingLists' => $list]);
    }

    public function edit(Request $request){
        $adsLanding = new AdsLanding;
        $list = $adsLanding->getLandingList($request);
        return view('admin.layouts.board.board-landing',['landingLists' => $list]);
    }

    public function create(Request $request){

    }

}
