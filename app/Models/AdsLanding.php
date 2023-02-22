<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdsLanding extends Model
{
    use HasFactory;

    protected $table = 'ads_landing';

    public function hasInput($request)
    {   
        if($request->has('_token')) {
            return count($request->all()) > 1;
        } else {
            return count($request->all()) > 0;
        }
    }

    public function getLandingList($request){
        $query = DB::table('ads_landing','a')
        ->select('a.*',DB::raw('COALESCE(COUNT(b.id), 0) AS member_cnt'))
        ->leftJoin('ads_landing_members as b', 'a.landing_key', '=', 'b.landing_key');


        if ($this->hasInput($request)) {
            
            if($request->input('seaech_type') == 'landing_key' && $request->input('search_val')){
                $query = $query->where('a.'.$request->input('seaech_type'),'=', $request->input('search_val'));
            }else if($request->input('seaech_type') == 'landing_name' && $request->input('search_val')){
                $query = $query->where('a.'.$request->input('seaech_type'),'like', '%'.$request->input('search_val').'%');
            }

            if($request->input('start_reg_date')){
                $query->whereBetween('a.reg_date', [$request->input('start_reg_date'), $request->input('last_reg_date')]);
            }
        }

        $query = $query->groupBy('a.id')->orderBy('a.id','desc')->paginate(15);

        return $query;
    }
}
