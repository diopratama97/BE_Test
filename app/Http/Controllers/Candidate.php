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
        //dd($data->all());
        $id_count = $this->Candidate->countallKandidat();
        $id_count2 = $this->Candidate->countOrganization();
        $id = $id_count+1;
        $id_organization = $id_count2+1;

        $dataCandidate = [
            'id'=>$id,
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
            'file_portfolio'=> $data->file('file_portfolio')->store('docs'),
            'candidate_status_id'=>1
        ];

        $dataOrganisasi = [
            'id'=>$id_organization,
            'candidate_id'=>$id,
            'org_name'=> $data->organisasi,
            'year'=>$data->tahun,
            'position'=>$data->jabatan,
            'description'=>$data->desc_kegiatan,
            'file'=>$data->file('file_organisasi')->store('docs')
        ];

        $this->Candidate->insertCandidate($dataCandidate);
        $this->Candidate->insertOrganization($dataOrganisasi);
        return redirect()->route('kandidat');
    }

    public function edit($id){
        $data = [
            "kandidatbyId"=> $this->Candidate->listKandidatbyId($id)
        ];
        return view('data_activity_edit',$data);
    }

    public function update(Request $data){
        $id = $data->id;
        $dataCandidate = [
            'name'=>$data->nama_lengkap,
            'gender'=>$data->jenis_kelamin,
            'date_of_birth'=>$data->date,
            'religion_id'=>$data->agama,
            'email'=>$data->email,
            'phone'=>$data->no_hp,
            'twitter'=>$data->twitter,
            'facebook'=>$data->fb,
            'identity_number'=>$data->no_ktp,
            'identity_file'=> $data->file_ktp,
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
            'file_cv'=> $data->file_cv,
            'file_photo'=> $data->file_photo,
            'file_portfolio'=> $data->file_portfolio,
            'candidate_status_id'=>1
        ];

        $dataOrganisasi = [
            'candidate_id'=>$id,
            'org_name'=> $data->organisasi,
            'year'=>$data->tahun,
            'position'=>$data->jabatan,
            'description'=>$data->desc_kegiatan,
            'file'=>$data->file('file_organisasi')->store('docs')
        ];

        $this->Candidate->updateCandidate($id,$dataCandidate);
        $this->Candidate->updateOrganization($id,$dataOrganisasi);
        return redirect()->route('kandidat');
    }
}
