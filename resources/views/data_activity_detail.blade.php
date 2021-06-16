@extends('layout')
@section('content')


<div class="main-panel">  
        <div class="content-wrapper">
          <div class="page-header">
              <p class="mb-1 text-black">Detail Data Kandidat Magang</p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Daftar kandidat </a></li>
                      <li class="breadcrumb-item active" aria-current="page">Lowongan Magang</li>
                  </ol>
              </nav>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
          <div class="row">
              <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title"> Data Diri </h4>
                          <form class="form-sample">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Ahmad Syaifullah" value="{{$kandidatbyId->name}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Laki-laki" value="{{$kandidatbyId->gender}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Tempat Lahir" value="{{$kandidatbyId->city_of_birth}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Tanggal Lahir" value="{{$kandidatbyId->date_of_birth}}" v>
                                      </div>
      
                                      <div class="form-group">
                                          <label for="#">Agama</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Agama" value="{{$kandidatbyId->agama}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Email</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder=" Email" value="{{$kandidatbyId->email}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor HP " value="{{$kandidatbyId->phone}}" disabled>
                                      </div>
      
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor KTP " value="{{$kandidatbyId->identity_number}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> File KTP</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="File KTP " value="{{$kandidatbyId->identity_file}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nama Bank " value="{{$kandidatbyId->bank_name}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor Bank Akun " value="{{$kandidatbyId->bank_account}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="#" rows="6"
                                              placeholder="Alamat Domisili" value="{{$kandidatbyId->address}}"disabled></textarea>
                                      </div>
                                  </div>
                              </div><br>
                              <h4 class="card-title"> Data Pendidikan </h4>
                                  <div class="row ">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Pendidikan</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Pendidikan" value="{{$kandidatbyId->education_name}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Universitas</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Universitas" value="{{$kandidatbyId->university_name}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                          <div class="form-group">
                                              <div class="input-group" name="#">
                                                  <input type="text" class="form-control mr-2" id="#" placeholder="Tahun Lulus" value="{{$kandidatbyId->graduation_year}}">
                                                      <div class="form-check ">
                                                          <label class="form-check-label">
                                                              <input type="checkbox" class="form-check-input"> Masih Kuliah
                                                          </label>
                                                      </div>
                                                  
                                              </div>
                                          </div>
      
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Jurusan </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Jurusan" value="{{$kandidatbyId->major}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Semester</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Semester" value="{{$kandidatbyId->semester}}">
                                      </div>
                                  </div><br>
                                  </div>
                                  <h4 class="card-title"> Pengalaman Organisai </h4>
                                  <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Organisasi</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="organisasi">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tahun</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="tahun">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Jabatan</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="jabatan">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="exampleTextarea1" rows="6"></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> File</label>
                                          <input type="file" class="form-control" id="#" placeholder="">
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                                  <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="#">Keahlian</label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="exampleTextarea1" rows="10" value="{{$kandidatbyId->skill}}"></textarea>
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Lain - Lain </h4>
                                  <div class="row ">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">File CV</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="File CV.pdf" value="{{$kandidatbyId->file_cv}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Past Photo</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Photo.jpg" value="{{$kandidatbyId->file_photo}}">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#"> Portofolio</label>
                                          <input type="text" class="form-control" id="#" placeholder="Portofolio.pdf" value="{{$kandidatbyId->file_portfolio}}">
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                                  <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Internet
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Kampus
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Instagram
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Facebook
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Twitter
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Lain-lain
                                              <i class="input-helper"></i></label>
                                          </div>
                                      
                                          <input type="text" class="form-control" id="#" placeholder=""value="{{$kandidatbyId->source_information_other}}">
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Data Akun Magang </h4>
                                  <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Lowongan</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Lowongan" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tipe Magang </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Tipe Magang" disabled>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#"> Periode Magang</label>
                                          <input type="text" class="form-control" id="#" placeholder="Periode Magang" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Lokasi Magang</label>
                                          <input type="text" class="form-control" id="#" placeholder="Lokasi Magang " disabled>
                                      </div>
                                  </div>
                                  </div><br>
                              <h4 class="card-title">Proses Seleksi </h4>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Unit Kerja</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Hasil Assesmen </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="" disabled value="{{$kandidatbyId->assessment_score}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Rangkin</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="" disabled value="{{$kandidatbyId->ranking}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Hasil</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="" disabled>
                                      </div>
                                  </div>
                              </div><br>
                          </form>
                          <div class="float-right">
                              <a href="{{ url('data_activity') }}" type="button" class="btn btn-dark mb-2  mr-2">Kembali</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
      </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a
                      href="https://www.jasamarga.com/" target="_blank">© PT Jasa Marga (Persero)</a>. All
                  rights
                  reserved.</span>
              <span class="float-none float-sm-right d-block text-muted  text-center">Suported by Information
                  Technology
                  Group </span>
          </div>
      </footer>
        <!-- partial -->
      </div>

@endsection
