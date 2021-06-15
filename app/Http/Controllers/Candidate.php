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
}
