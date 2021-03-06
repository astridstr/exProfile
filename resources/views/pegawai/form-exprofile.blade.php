@extends('pegawai.app')

@section('content')

@include('pegawai.sidebar')
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
              <li><a href="#carier" data-toggle="tab">Career and Interest</a></li>
              <li><a href="#masterpiece" data-toggle="tab">Masterpieces</a></li>
            </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
      <form action="{{route('formeditdiri')}}" method="post" enctype="multipart/form-data">
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
              <label for="exampleInputPassword1">Media Sosial</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa  fa-facebook-square"></i></span>
                <input type="text" class="form-control" placeholder="Akun Facebook" name="facebook" value="{{$exprofile->Akun_Facebook}}">
                </div>
              </div>
              <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-twitter-square"></i></span>
                <input type="text" class="form-control" placeholder="Akun Twitter" name="twitter" value="{{$exprofile->Akun_Twitter}}">
                </div>
              </div>
              <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                <input type="text" class="form-control" placeholder="Akun Instagram" name="instagram" value="{{$exprofile->Akun_Instagram}}">
                </div>
              </div>
              <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-linkedin-square"></i></span>
                <input type="text" class="form-control" placeholder="Akun LinkedIn" name="linkedin" value="{{$exprofile->Akun_Linkedin}}">
              </div>
              </div>
              <div class="form-group">
                  <label>About and Experience <b style="color: red;">*</b></label>
                  <br>
                  <small>Paragraf 1</small>
                  <textarea class="form-control" rows="3" placeholder="Deskripsikan Data Diri Anda (Maksimal 500 karakter)
" name ="ae_1" value="{{$exprofile->About_and_Experience_1}}" maxlength="500"  required>{{$exprofile->About_and_Experience_1}}</textarea>
                  <small>Paragraf 2</small>
                  <textarea class="form-control" rows="3" placeholder="Jabarkan Riwayat Jabatan dan Karir (Align dengan Career and Interest ) (Maksimal 500 karakter)
" name="ae_2" value="{{$exprofile->About_and_Experience_2}}" maxlength="500" required>{{$exprofile->About_and_Experience_2}}</textarea>
                  <small>Paragraf 3</small>
                  <textarea class="form-control" rows="3" placeholder=" Jabarkan Bidang dan Minat Anda (Align dengan Career and Interest) (Maksimal 500 karakter)
" name="ae_3" value="{{$exprofile->About_and_Experience_3}}" maxlength="500" required>{{$exprofile->About_and_Experience_3}}</textarea>
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
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->Gender}}" placeholder="Jenis Kelamin" name="gender" disabled>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">HP <b style="color: red;">*</b></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->handphone}}" placeholder="Nomor Handphone" name="handphone" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Domisili <b style="color: red;">*</b></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->Kota_Domisili_Utama}}" name="domisili" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Tinggal <b style="color: red;">*</b></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$exprofile->Alamat_Tinggal_Saat_Ini}}" placeholder="Alamat Tinggal Saat Ini" name="alamat_tinggal" required>
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
     <form action="{{route('formeditedu')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
       <div class="box-body">
          <div class="row">
              <div class="col-md-6"> 
              <div class="form-group">
                  <label>Pendidikan Terakhir 1 <b style="color: red;">*</b></label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Education_1}} " name="edu1" placeholder="Pendidikan Terakhir 1" required>{{$exprofile->Education_1}}</textarea>
              </div>
              <div class="form-group">
                  <label>Pendidikan Terakhir 2 <b style="color: red;">*</b></label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Education_2}}"  name="edu2" placeholder="Pendidikan Terakhir 2" required>{{$exprofile->Education_1}}</textarea>
              </div>
          <!-- /.form-group -->
              </div>
            <!-- /.col -->
            <div class="col-md-6"> 
                <div class="form-group">
                  <label>Penghargaan 1</label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Professional_Certification_1}}" name="certif1" placeholder="Penghargaan atau Sertifikasi Terkait Kompetensi dan/atau Minat, Baik Nasional Maupun Internasional (Sertakan Asal Penghargaan dan Tahun)">{{$exprofile->Professional_Certification_1}}</textarea>
              </div>
              <div class="form-group">
                  <label>Penghargaan 2</label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Professional_Certification_2}}" placeholder="Penghargaan atau Sertifikasi Terkait Kompetensi dan/atau Minat, Baik Nasional Maupun Internasional (Sertakan Asal Penghargaan dan Tahun)" name="certif2">{{$exprofile->Professional_Certification_2}}</textarea>
              </div>
              <div class="form-group">
                  <label>Penghargaan 3</label>
                  <textarea class="form-control" rows="3" value="{{$exprofile->Professional_Certification_3}} " placeholder="Penghargaan atau Sertifikasi Terkait Kompetensi dan/atau Minat, Baik Nasional Maupun Internasional (Sertakan Asal Penghargaan dan Tahun)" name="certif3" >{{$exprofile->Professional_Certification_3}}</textarea>
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
      <form action="{{route('formeditcareer')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}       
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">1st Expertise <b style="color: red;">*</b></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keahlian 1" name="expert1" value="{{$exprofile->Area_of_Expertise_1}}" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">2nd Expertise <b style="color: red;">*</b></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keahlian 2" name="expert2" value="{{$exprofile->Area_of_Expertise_2}}" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">3rd Expertise <b style="color: red;">*</b></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keahlian 3" name="expert3" value="{{$exprofile->Area_of_Expertise_3}} " required>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
             <div class="form-group">
                <label> 1st Interest <b style="color: red;">*</b></label>
                <select class="form-control select2" style="width: 100%;" name="interest1"  required>
                @if(is_null($exprofile->Career_Interest_1))
                <option value="" disabled selected> Mohon Diisi </option>
                  @foreach($interest as $inter)
                    <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                  @endforeach
                @else
                 <option selected value="{{$exprofile->Career_Interest_1}}" >{{$exprofile->Career_Interest_1}}</option>
                  @foreach($interest as $inter)
                    <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                  @endforeach
                @endif
                </select>
              </div>
              <div class="form-group">
                <label> 2nd Interest <b style="color: red;">*</b></label>
                <select class="form-control select2" style="width: 100%;" name="interest2"  required>
                @if(is_null($exprofile->Career_Interest_2))
                <option value="" disabled selected> Mohon Diisi </option>
                  @foreach($interest as $inter)
                    <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                  @endforeach
                @else
                 <option selected value="{{$exprofile->Career_Interest_2}}" >{{$exprofile->Career_Interest_2}}</option>
                  @foreach($interest as $inter)
                    <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                  @endforeach
                @endif
                </select>
              </div>
              <div class="form-group">
                <label> 3rd Interest <b style="color: red;">*</b></label>
                <select class="form-control select2" style="width: 100%;" name="interest3"  required>
                @if(is_null($exprofile->Career_Interest_3))
                <option value="" disabled selected> Mohon Diisi </option>
                  @foreach($interest as $inter)
                    <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                  @endforeach
                @else
                 <option selected value="{{$exprofile->Career_Interest_3}}" >{{$exprofile->Career_Interest_3}}</option>
                  @foreach($interest as $inter)
                    <option value="{{$inter->nama_interest}}">{{$inter->nama_interest}}</option>
                  @endforeach
                @endif
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
      <form action="{{route('formeditmaster')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }} 
        <div class="box-body">
          <div class="row">
              <div class="col-md-6"> 
              <div class="form-group">
                  <label>Masterpiece 1</label>
                  <textarea class="form-control" rows="3" placeholder="Tuliskan Pencapaian Terbaik Anda Selama Bekerja (Maksimal 250 karakter) " value ="{{$exprofile->Masterpiece_1}}" name="master1" maxlength="250" > {{$exprofile->Masterpiece_1}}</textarea>
              </div>
              <div class="form-group">
                  <label>Masterpiece 2</label>
                  <textarea class="form-control" rows="3" placeholder="Tuliskan Pencapaian Terbaik Anda Selama Bekerja (Maksimal 250 karakter)" value ="{{$exprofile->Masterpiece_2}}" name="master2" maxlength="250" > {{$exprofile->Masterpiece_2}}</textarea>
              </div>
              <div class="form-group">
                  <label>Masterpiece 3</label>
                  <textarea class="form-control" rows="3" placeholder="Tuliskan Pencapaian Terbaik Anda Selama Bekerja (Maksimal 250 karakter) " value ="{{$exprofile->Masterpiece_3}}" name="master3" maxlength="250" > {{$exprofile->Masterpiece_3}}</textarea>
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
