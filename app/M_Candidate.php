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
        ->select('c.id','c.name','c.created_at as tgl_daftar','c.major','c.email','cs.code','co.org_name')
        ->orderBy('c.created_at','asc')
        ->get();
        return $list;
    }

    public function listKandidatbyId($id){
        $list = DB::table('candidate as c')
        ->leftJoin('candidate_status as cs','cs.id','c.candidate_status_id')
        ->leftJoin('candidate_organization as co','co.candidate_id','c.id')
        ->leftJoin('religion as r','r.id','c.religion_id')
        ->leftJoin('education as e','e.id','c.education_id')
        ->leftJoin('university as u','u.id','c.university_id')
        ->select('c.*','cs.*','co.*','r.name as agama','e.name as education_name','u.name as university_name')
        ->where('c.id',$id)
        ->first();
        return $list;
    }

    public function insertCandidate($data){
        DB::table('candidate')->insert($data);
    }
}
