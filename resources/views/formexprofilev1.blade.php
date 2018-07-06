@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Executive Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
         <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Diri</a></li>
              <li><a href="#pendidikan" data-toggle="tab">Pendidikan dan Penghargaan</a></li>
              <li><a href="#carier" data-toggle="tab">Carier and Interest</a></li>
              <li><a href="#masterpiece" data-toggle="tab">Masterpieces</a></li>
            </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
      <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Pegawai">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Grade</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Per. No">
              </div>
              <div class="form-group">
                <label> Divisi</label>
                <select class="form-control select2" style="width: 100%;">
                  <option>Divisi Administrasi Konstruksi</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Kota Lahir</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kota Kelahiran">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Laki Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="email">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Media Sosial</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Media Sosial Aktif">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Tinggal</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat Tinggal Saat Ini (Home Based)">
              </div>
              <div class="form-group">
                  <label>About and Experience</label>
                  <br>
                  <small>Paragraf 1</small>
                  <textarea class="form-control" rows="3" placeholder="Data Diri "></textarea>
                  <small>Paragraf 2</small>
                  <textarea class="form-control" rows="3" placeholder="Riwayat Jabatan dan Karir"></textarea>
                  <small>Paragraf 3</small>
                  <textarea class="form-control" rows="3" placeholder="Bidang Minat"></textarea>
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">jpg/png max 10MB</p>
              </div>

             
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputPassword1">NIP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor Induk Pegawai">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Posisi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Panjang Posisi">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Agama</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Agama">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">TTL</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Per. No">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Domisili</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kota Tinggal">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">HP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor Handphone">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Akun</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Akun Media Sosial Aktif">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <a class="btn btn-primary btn-md pull-left" data-toggle="modal" data-target="#modal-default"> Simpan </a>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="pendidikan">
        <div class="box-body">
          <div class="row">
              <div class="col-md-6"> 
              <div class="form-group">
                  <label>Pendidikan Terakhir 1</label>
                  <textarea class="form-control" rows="3" placeholder="Pendidikan Terakhir 1 "></textarea>
              </div>
              <div class="form-group">
                  <label>Pendidikan Terakhir 1</label>
                  <textarea class="form-control" rows="3" placeholder="Pendidikan Terakhir 1 "></textarea>
              </div>
          <!-- /.form-group -->
              </div>
            <!-- /.col -->
            <div class="col-md-6"> 
                <div class="form-group">
                  <label>Penghargaan 1</label>
                  <textarea class="form-control" rows="3" placeholder="Penghargaan"></textarea>
              </div>
              <div class="form-group">
                  <label>Penghargaan 2</label>
                  <textarea class="form-control" rows="3" placeholder="Penghargaan "></textarea>
              </div>
              <div class="form-group">
                  <label>Penghargaan 2</label>
                  <textarea class="form-control" rows="3" placeholder="Penghargaan "></textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <a class="btn btn-primary btn-md pull-left" data-toggle="modal" data-target="#modal-default"> Simpan </a>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->           
    </div>        

      <div class="tab-pane" id="carier">       
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">1st Expertise </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keahlian 1">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">2nd Expertise</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keahlian 2">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">3rd Expertise</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keahlian 3">
              </div>
              <a class="btn btn-primary btn-md pull-left" data-toggle="modal" data-target="#modal-default"> Simpan </a>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
             <div class="form-group">
                <label> 1st Interest</label>
                <select class="form-control select2" style="width: 100%;">
                  <option >Human Capital (SDM)</option>
                </select>
              </div>
              <div class="form-group">
                <label> 2nd Interest</label>
                <select class="form-control select2" style="width: 100%;">
                  <option>Human Capital (SDM)</option>
                </select>
              </div>
              <div class="form-group">
                <label> 3rd Interest</label>
                <select class="form-control select2" style="width: 100%;">
                  <option>Human Capital (SDM)</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="masterpiece">
        <div class="box-body">
          <div class="row">
              <div class="col-md-6"> 
              <div class="form-group">
                  <label>Masterpiece 1</label>
                  <textarea class="form-control" rows="3" placeholder="Masterpiece 1 "></textarea>
              </div>
              <div class="form-group">
                  <label>Masterpiece 2</label>
                  <textarea class="form-control" rows="3" placeholder="Masterpiece 2 "></textarea>
              </div>
              <div class="form-group">
                  <label>Masterpiece 3</label>
                  <textarea class="form-control" rows="3" placeholder="Masterpiece 3 "></textarea>
              </div>
          <!-- /.form-group -->
              </div>
            <!-- /.col -->
          </div>
          <a class="btn btn-primary btn-md pull-left" data-toggle="modal" data-target="#modal-default"> Simpan </a>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->           
    </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!--/.col (left) -->
      </div>
       <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
