<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdsLanding;
use App\Models\AdsMember;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdsLandingController extends Controller
{
    // 랜딩페이지 연결
    public function show($id){
        $sql = AdsLanding::where('landing_key',intval($id))->get();
        $dir = $sql[0]['landing_url'];
        $dirView = 'landing.dev-landing.' . $dir . '.ad-contents';
        return view($dirView);
    }
}
