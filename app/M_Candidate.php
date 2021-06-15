<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Candidate extends Model
{
    //list kandidat magang
    public function listKandidat(){
        $list = DB::table('candidate as c')
        ->leftJoin('candidate_status as cs','cs.id','c.candidate_status_id')
        ->leftJoin('candidate_organization as co','co.candidate_id','c.id')
        ->select('c.name','c.created_at as tgl_daftar','c.major','c.email','cs.code','co.org_name')
        ->orderBy('c.created_at','asc')
        ->get();
        return $list;
    }
}
