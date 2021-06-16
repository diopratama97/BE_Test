<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_Candidate;

class Candidate extends Controller
{
    public function __construct(){
        $this->Candidate = new M_Candidate();
    }

    public function dataKandidat(){
        $data = [
            "kandidat"=> $this->Candidate->listKandidat()
        ];
        return view('data_activity',$data);
    }

    public function dataKandidatbyId($id){
        $data = [
            "kandidatbyId"=> $this->Candidate->listKandidatbyId($id)
        ];
        return view('data_activity_detail',$data);
    }

    public function insert(){
        $data = [
            'name'=> Request()->name
        ];
        $this->Candidate->insertCandidate($data);
        return route('kandidat')->with('pesan','berhasil registrasi');
    }
}
