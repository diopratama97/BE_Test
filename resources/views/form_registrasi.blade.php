@extends('layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Forms
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic elements</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="/form_registrasi/insert" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" name="nama_lengkap"
                                    placeholder="Ahmad Syaifullah">
                            </div>
                            <div class="form-group">
                                <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" name="jenis_kelamin" placeholder="Laki-laki">
                            </div>
                            <div class="form-group">
                                <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                <input name="date" type="text" class="flatpickr flatpickr-input form-control" id="checkin-date">
                            </div>
                            <div class="form-group">
                                <label for="#">Agama</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" name="agama" placeholder="Agama">
                            </div>
                            <div class="form-group">
                                <label for="#">Email</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder=" Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Nomor HP " name="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="#">Twitter</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="#" placeholder="Twitter" name="twitter">
                            </div>
                            <div class="form-group">
                                <label for="#">Facebook</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="#" placeholder="Facebook " name="fb">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Nomor KTP " name="no_ktp">
                            </div>
                            <div class="form-group">
                                <label for="#"> File KTP</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="file_ktp" placeholder=" KTP " name="file_ktp">

                            </div>
                            <div class="form-group">
                                <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Nama Bank " name="nama_bank">
                            </div>
                            <div class="form-group">
                                <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" name="no_bank"
                                    placeholder="Nomor Bank Akun ">
                            </div>
                            <div class="form-group">
                                <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                <textarea class="form-control" id="#" rows="8" name="alamat"
                                    placeholder="Alamat Domisili"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="#">Instagram</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="#" placeholder="Instagram" name="ig">
                            </div>
                            <div class="form-group">
                                <label for="#">Linked In</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="#" placeholder="Linked In " name="linked">
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title"> Data Pendidikan </h4>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Pendidikan</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Pendidikan" name="pendidikan">
                            </div>
                            <div class="form-group">
                                <label for="#">Universitas</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Universitas" name="universitas">
                            </div>
                            <div class="form-group">
                                <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                <div class="form-group">
                                    <div class="input-group" name="tahun_lulus">
                                        <input type="text" class="form-control mr-2" id="#" 
                                            placeholder="Tahun Lulus">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Masih
                                                Kuliah</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Jurusan </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Jurusan" name="jurusan">
                            </div>
                            <div class="form-group">
                                <label for="#"> Semester</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Semester" name="semester">
                            </div>
                        </div><br>
                    </div>
                    
                    <div class="controls mt-3"> 
                            <div class="entry ">
                                <h4 class="card-title mt-5"> Pengalaman Organisai </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="#">Organisasi</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="organisasi" name="organisasi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="#">Tahun</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="tahun" name="tahun">
                                                </div>
                                                <div class="form-group">
                                                    <label for="#">Jabatan</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="jabatan" name="jabatan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                                    <textarea class="form-control" id="exampleTextarea1" name="desc_kegiatan" rows="6"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="#"> File</label>
                                                    <input type="file" class="form-control" id="#" placeholder="" name="file_organisasi">
                                                </div>
                                            </div>
                                        </div>
                                <span class="input-group-btn float-right">
                                    <button class="btn btn-success btn-sm btn-add" type="button"> Tambah Organisasi
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                    </div><br>
                    <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="#">Keahlian</label><span class="text-danger">*</span>
                                <textarea class="form-control" id="exampleTextarea1" rows="10" name="keahlian"></textarea>
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title">Lain - Lain </h4>
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">File CV</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="#" placeholder="File CV.pdf" name="file_cv">
                            </div>
                            <div class="form-group">
                                <label for="#">Past Photo</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="#" placeholder="Photo.jpg" name="file_photo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#"> Portofolio</label>
                                <input type="file" class="form-control" id="#" placeholder="Portofolio.pdf" name="file_portfolio">
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input" value="Internet">
                                        <label class="custom-control-label" for="customRadio1">Internet</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input" value="Kampus">
                                        <label class="custom-control-label"
                                            for="customRadio2">Kampus</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio3" name="customRadio"
                                            class="custom-control-input" value="Instagram">
                                        <label class="custom-control-label"
                                            for="customRadio3">Instagram</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio4" name="customRadio"
                                            class="custom-control-input" value="facebook">
                                        <label class="custom-control-label"
                                            for="customRadio4">facebook</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio5" name="customRadio"
                                            class="custom-control-input" value="twitter">
                                        <label class="custom-control-label"
                                            for="customRadio5">Twitter</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio6" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="customRadio6">Lain-lain</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="#" placeholder="" name="lain_lain">
                            </div>
                        </div>
                    </div><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I Accept <a href=""
                                        class="text-primary">Terms And Condition</a></label>
                            </div>
                        </div>
                    </div>
                <div class="mt-4">
                    <button class="btn btn-outline-primary">Kirim Lamaran <i class="mdi mdi-send"></i></button>
                </div>
            <!--end form-->
            </form>
        </div>
                
                  
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
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
      <!-- main-panel ends -->
 @endsection
