<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AdsMember;
use App\Models\AdsLanding;

/*----광고랜딩 컨트롤러-----*/ 
class AdsLandingManagerController extends Controller
{
    
    // 랜딩페이지 유입 사용자
    public function showMemberList(Request $request)
    {
        $sql = AdsMember::paginate(15);
        return view($this->agent().'admin.layouts.ads-content',['members' => $sql]);
    }

    // 랜딩페이지 목록
    public function showLandingList(Request $request)
    {
        $sql = DB::table('ads_landing','a')
        ->select('a.*',DB::raw('COALESCE(COUNT(b.id), 0) AS member_cnt'))
        ->leftJoin('ads_landing_members as b', 'a.landing_key', '=', 'b.landing_key')
        ->groupBy('a.id')
        ->orderBy('a.id','desc')
        ->paginate(15);
        return view($this->agent().'admin.layouts.board.landing-board',['landingLists' => $sql]);
    }

}
