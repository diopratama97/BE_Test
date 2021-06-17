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

    public function insert(Request $data){
        $data = [
            'name'=>$data->nama_lengkap,
            'gender'=>$data->jenis_kelamin,
            'date_of_birth'=>$data->date,
            'religion_id'=>$data->agama,
            'email'=>$data->email,
            'phone'=>$data->no_hp,
            'twitter'=>$data->twitter,
            'facebook'=>$data->fb,
            'identity_number'=>$data->no_ktp,
            'identity_file'=> $data->file('file_ktp')->store('docs'),
            'bank_name'=>$data->nama_bank,
            'bank_account'=>$data->no_bank,
            'address'=>$data->alamat,
            'instagram'=>$data->ig,
            'linkedin'=>$data->linked,
            'education_id'=>$data->pendidikan,
            'university_id'=>$data->universitas,
            'graduation_year'=>$data->tahun_lulus,
            'major'=>$data->jurusan,
            'semester'=>$data->semester,
            'skill'=>$data->keahlian,
            'file_cv'=> $data->file('file_cv')->store('docs'),
            'file_photo'=> $data->file('file_photo')->store('docs'),
            'file_portfolio'=> $data->file('file_portfolio')->store('docs')
        ];
        $this->Candidate->insertCandidate($data);
        return redirect()->route('kandidat');
    }
}
