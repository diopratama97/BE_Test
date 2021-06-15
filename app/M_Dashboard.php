<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Dashboard extends Model
{
    public function countMale(){
    //get data kandidat laki laki
    $countMale = DB::table('candidate')->where('gender','L')->count();
    return $countMale;
    }

    public function countFemale(){
        //get data kandidat wanita
        $countFemale = DB::table('candidate')->where('gender','P')->count();
        return $countFemale;
    }

    public function countAllkandidat(){
        //get data kandidat semua
        $countAll = DB::table('candidate')->count();
        return $countAll;
    }

    public function recentActivity(){
        //aktifitas terbaru
        $recent = DB::table('candidate as c')
        ->leftJoin('candidate_status as cs','cs.id','c.candidate_status_id')
        ->select('c.name','c.created_at as tgl_daftar','cs.code')
        ->orderBy('c.created_at','desc')
        ->limit(5)->get();
        return $recent;
    }
}
