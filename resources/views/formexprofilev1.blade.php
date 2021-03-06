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
      <form action="{{url('/formexprofile/v1')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$exprofile->Nama_Lengkap}}" placeholder="Nama Pegawai" name="nama" disabled>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Grade</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->Grade}}" placeholder="Grade" name="grade" disabled>
              </div>
              <div class="form-group">
                <label> Divisi</label>
                <select class="form-control select2" style="width: 100%;" name="divisi" disabled>
                <option selected="selected" value="{{$exprofile->Divisi_Satuan}}" >{{$exprofile->Divisi_Satuan}}</option>
                @foreach($divisi as $div)
                  <option value="{{$div->nama_divisi}}">{{$div->nama_divisi}}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Kota Lahir</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value ="{{$exprofile->Kota_Lahir}}" placeholder="Kota Kelahiran" name="kota_lahir" disabled>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Agama</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value ="{{$exprofile->Religion}}" placeholder="Kota Kelahiran" name="agama" disabled>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" value="{{$exprofile->email_korporat}}" placeholder="Email Korporat" name="email" disabled >
              </div>
              <div class="form-group">
                <label>Media Sosial</label>
                <select class="form-control select2" style="width: 100%;" name="media_sosialr">
                @if($exprofile->Sosmed_Aktif == '')
                  <option selected="selected" value="" ></option>
                  <option value="Instagram">Instagram</option>
                  <option value="Facebook" >Facebook</option>
                  <option value="Twitter" >Twitter</option>
                @elseif($exprofile->Sosmed_Aktif == 'Instagram')
                  <option selected="selected" value="Instagram">Instagram</option>
                  <option value="Facebook" >Facebook</option>
                  <option value="Twitter" >Twitter</option>
                  <option value="" ></option>
                @elseif($exprofile->Sosmed_Aktif == 'Facebook')
                  <option selected="selected" value="Facebook">Facebook</option>
                  <option value="Instagram" >Instagram</option>
                  <option value="Twitter" >Twitter</option>
                  <option value="" ></option>
                @else
                  <option selected="selected" value="Twitter" >Twitter</option>
                  <option value="Instagram" >Instagram</option>
                  <option value="Facebook" >Facebook</option>
                  <option value="" ></option>
                @endif
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Tinggal</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->Alamat_Tinggal_Saat_Ini}}" placeholder="Alamat Tinggal Saat Ini" name="alamat_tinggal">
              </div>
              <div class="form-group">
                  <label>About and Experience</label>
                  <br>
                  <small>Paragraf 1</small>
                  <textarea class="form-control" rows="3" placeholder="Data Diri" name ="ae_1" value="{{$exprofile->About_and_Experience_1}}">{{$exprofile->About_and_Experience_1}}</textarea>
                  <small>Paragraf 2</small>
                  <textarea class="form-control" rows="3" placeholder="Riwayat Jabatan dan Karir" name="ae_2" value="{{$exprofile->About_and_Experience_2}}" >{{$exprofile->About_and_Experience_2}}</textarea>
                  <small>Paragraf 3</small>
                  <textarea class="form-control" rows="3" placeholder="Bidang Minat" name="ae_3" value="{{$exprofile->About_and_Experience_3}}">{{$exprofile->About_and_Experience_3}}</textarea>
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" id="exampleInputFile" name="foto">

                  <p class="help-block">jpg/png max 10MB</p>
              </div>

             
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputPassword1">NIP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->NIP}}" placeholder="NIP" name="nip" disabled>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Posisi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value ="{{$exprofile->Jabatan_Saat_ini}}" placeholder="Posisi Saat Ini" name="jabatan" disabled>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Jenjang</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{$exprofile->Jenjang}}" value="{{$exprofile->Jenjang}}" name="jenjang" disabled>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Kelahiran" value="{{$exprofile->tgl_lahir}}" name="tgl_lahir" disabled>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" style="width: 100%;" name="gender">
                @if($exprofile->Gender == 'LAKI LAKI')
                  <option selected="selected" value="LAKI LAKI">Laki Laki</option>
                  <option value="PEREMPUAN" >Perempuan</option>
                @else
                  <option selected="selected" value="LAKI LAKI" >Perempuan</option>
                  <option value="PEREMPUAN" >Laki Laki</option>
                @endif
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">HP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->handphone}}" placeholder="Nomor Handphone" name="handphone">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Akun</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->akun_sosmed_aktif_twitter_instagram_facebook}}" placeholder="Akun Media Sosial Aktif" name="akun">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Domisili</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->Kota_Domisili_Utama}}" name="domisili">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        </form>
      </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="pendidikan">
     <form action="{{url('/formexprofile/v1edu')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
       <div class="box-body">
          <div class="row">
              <div class="col-md-6"> 
              <div class="form-group">
                  <label>Pendidikan Terakhir 1</label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Education_1}} " name="edu1" placeholder="Pendidikan Terakhir 1" >{{$exprofile->Education_1}}</textarea>
              </div>
              <div class="form-group">
                  <label>Pendidikan Terakhir 1</label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Education_2}}"  name="edu2" placeholder="Pendidikan Terakhir 2">{{$exprofile->Education_1}}</textarea>
              </div>
          <!-- /.form-group -->
              </div>
            <!-- /.col -->
            <div class="col-md-6"> 
                <div class="form-group">
                  <label>Penghargaan 1</label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Professional_Certification_1}}" name="certif1" placeholder="Penghargaan atau Sertifikasi">{{$exprofile->Professional_Certification_1}}</textarea>
              </div>
              <div class="form-group">
                  <label>Penghargaan 2</label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Professional_Certification_2}}" placeholder="Penghargaan atau Sertifikasi" name="certif2">{{$exprofile->Professional_Certification_2}}</textarea>
              </div>
              <div class="form-group">
                  <label>Penghargaan 3</label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Professional_Certification_3}} " placeholder="Penghargaan atau Sertifikasi" name="certif3">{{$exprofile->Professional_Certification_3}}</textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->           
    </form>
    </div>        

      <div class="tab-pane" id="carier">
      <form action="{{url('/formexprofile/v1career')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}       
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">1st Expertise </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keahlian 1" name="expert1" value="{{$exprofile->Area_of_Expertise_1}} ">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">2nd Expertise</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keahlian 2" name="expert2" value="{{$exprofile->Area_of_Expertise_2}} ">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">3rd Expertise</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keahlian 3" name="expert3" value="{{$exprofile->Area_of_Expertise_3}} ">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
             <div class="form-group">
                <label> 1st Interest</label>
                <select class="form-control select2" style="width: 100%;" name="interest1">
                <option selected value="{{$exprofile->Career_Interest_1}}">{{$exprofile->Career_Interest_1}}</option>
                <option value=""></option>
                @foreach($interest as $inter)
                  <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                @endforeach
                <option value="{{$inter->nama_interest}}"></option>
                </select>
              </div>
              <div class="form-group">
                <label> 2nd Interest</label>
                <select class="form-control select2" style="width: 100%;" name="interest2">
                <option selected value="{{$exprofile->Career_Interest_2}}">{{$exprofile->Career_Interest_2}}</option>
                <option value=""></option>
                @foreach($interest as $inter)
                  <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                <label> 3rd Interest</label>
                <select class="form-control select2" style="width: 100%;" name="interest3">
                <option selected value="{{$exprofile->Career_Interest_3}}">{{$exprofile->Career_Interest_3}}</option>
                <option value=""></option>
                @foreach($interest as $inter)
                  <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                @endforeach
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        </form>
        </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="masterpiece">
      <form action="{{url('/formexprofile/v1master')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }} 
        <div class="box-body">
          <div class="row">
              <div class="col-md-6"> 
              <div class="form-group">
                  <label>Masterpiece 1</label>
                  <textarea class="form-control" rows="3" placeholder="Masterpiece 1 " value ="{{$exprofile->Masterpiece_1}}" name="master1" > {{$exprofile->Masterpiece_1}}</textarea>
              </div>
              <div class="form-group">
                  <label>Masterpiece 2</label>
                  <textarea class="form-control" rows="3" placeholder="Masterpiece 2 " value ="{{$exprofile->Masterpiece_1}}" name="master2"> {{$exprofile->Masterpiece_2}}</textarea>
              </div>
              <div class="form-group">
                  <label>Masterpiece 3</label>
                  <textarea class="form-control" rows="3" placeholder="Masterpiece 3 " value ="{{$exprofile->Masterpiece_1}}" name="master3"> {{$exprofile->Masterpiece_3}}</textarea>
              </div>
          <!-- /.form-group -->
              </div>
            <!-- /.col -->
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </form>           
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
