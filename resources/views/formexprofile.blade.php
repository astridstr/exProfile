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
              <li><a href="#pendidikan" data-toggle="tab">Riwayat Pendidikan</a></li>
              <li><a href="#carier" data-toggle="tab">Carier and Interest</a></li>
              <li><a href="#award" data-toggle="tab">Penghargaan</a></li>
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
                  <label for="exampleInputPassword1">Per. No</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Per. No">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Divisi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Divisi/ Satuan/Unit">
              </div>
              <!-- /.form-group -->
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
                  <label>About and Experience</label>
                  <textarea class="form-control" rows="3" placeholder="About and Experience"></textarea>
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
                  <label for="exampleInputPassword1">TTL</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Domisili</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kota Tinggal">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">HP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor Handphone">
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
        <div class="tab-pane" id="pendidikan">
                <!-- Pendidikan Formal -->
                <div class="callout callout-danger text-center">
                  <p>Pendidikan Formal</p>
                </div>
                <a class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Tambah </a>
                <br>
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">2002 - Institut Teknologi Sepuluh Nopember</span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><b>S2</b></h3>

                      <div class="timeline-body">
                        <i class="fa fa-trophy fa-fw" aria-hidden="true"></i>&nbsp; <b>Achievement</b><br>
                        <p>Surabaya/Indonesia</p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default"> Edit</a>
                      </div> 
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">1992 - Institut Teknologi Sepuluh Nopember</span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><b>S1</b></h3>

                      <div class="timeline-body">
                        <i class="fa fa-trophy fa-fw" aria-hidden="true"></i>&nbsp; <b>Achievement</b><br>
                        <p>Surabaya/Indonesia</p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default"> Edit</a>
                      </div>  
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>

                <br>

                <!-- Pendidikan Latihan -->
                <div class="callout callout-danger text-center">
                  <p>Pendidikan dan Latihan/Pengembangan Kompetensi yang Pernah Diikuti (Mnimal 16 Jam)</p>
                </div>
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">2013</span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><b>PLN Udiklat Jakarta - Executive Education I</b></h3>

                      <div class="timeline-body">
                        <p><i class="fa fa-bookmark-o fa-fw" aria-hidden="true"></i>&nbsp; <b>C.2.0.0.01.4.02.13.05.6894153J</b> - Diklat Fungsional</p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default"> Edit</a>
                      </div>  
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
        </div>        

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Riwayat Pendidikan</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Institusi</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Nama Institusi">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Jenjang</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Jenjang Pendidikan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun Masuk</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Tahun Masuk">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun Lulus</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Tahun Masuk">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Penghargaan</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Penghargaan"></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="tab-pane" id="masterpiece">
               <ul class="timeline timeline-inverse">
               <a class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#modal-masterpiece"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Tambah </a>
                <br>
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">2017 - saat ini</span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Kepala Divisi Operasi Jawa Timur, Bali dan Nusa Tenggara</a> - PT PLN (Persero)</h3>

                      <div class="timeline-body">
                        <i class="fa fa-hand-pointer-o fa-fw" aria-hidden="true"></i>&nbsp; <b>Tugas dan Kewenangan</b><br>
                        <p>Sebagai penanggung jawab dan pembina operasi terhadap unit-unit yang ada di Regional Maluku Papua, untuk menjamin kelangsungan suplai ketenaga listrikan di Maluku Papua.</p>

                        <i class="fa fa-trophy fa-fw" aria-hidden="true"></i>&nbsp; <b>Masterpiece</b><br>
                        <p>Meningkatkan pertumbuhan penjualan di sistem Jawa Timur Bali dengan agresif merketing dan percepatan pertumbuhan Rasio elektrifikasi di NTT</p>
                      </div> 
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs"><i class="fa fa-square-o fa-fw" aria-hidden="true"></i>&nbsp; Biggest Masterpiece</a>
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-masterpiece"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Edit</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">2015 - 2017</span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa  bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Kepala Divisi Operasi Regional Maluku Dan Papua pada Direktorat Bisnis Regional Maluku Dan Papua PT PLN (Persero) Kantor Pusat</a> - PT PLN (Persero)</h3>

                      <div class="timeline-body">
                        <i class="fa fa-hand-pointer-o fa-fw" aria-hidden="true"></i>&nbsp; <b>Tugas dan Kewenangan</b><br>
                        <p>Sebagai penanggung jawab dan pembina operasi terhadap unit-unit yang ada di Regional Maluku Papua, untuk menjamin kelangsungan suplai ketenaga listrikan di Maluku Papua.</p>

                        <i class="fa fa-trophy fa-fw" aria-hidden="true"></i>&nbsp; <b>Masterpiece</b><br>
                        <p>Meningkatkan pertumbuhan penjualan di sistem Jawa Timur Bali dengan agresif merketing dan percepatan pertumbuhan Rasio elektrifikasi di NTT</p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs"><i class="fa fa-square-o fa-fw" aria-hidden="true"></i>&nbsp; Biggest Masterpiece</a>
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-masterpiece"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Edit</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul> 
               
        </div>        

        <div class="modal fade" id="modal-masterpiece">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Riwayat Jabatan</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Jabatan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Nama Jabatan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Instansi</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Instansi">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun Mulai</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Tahun Mulai">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun Selesai</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Tahun Selesai">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Tugas dan Wewenang</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Tugas dan Wewenang"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Masterpiece</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Masterpiece"></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
              <!-- /.tab-pane -->

          <div class="tab-pane" id="award">
                <!-- Pendidikan Formal -->
                <a class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#modal-penghargaan"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Tambah </a>
                <br>
                <br>
                <ul class="timeline timeline-inverse">
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Menteri Penghargaan Internasional</a> - 2013</h3>

                      <div class="timeline-body">
                        <i class="fa fa-trophy fa-fw" aria-hidden="true"></i>&nbsp; <b>Achievement</b><br>
                        <p>Kementerian Negara Myanmar</p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-penghargaan"> Edit</a>
                      </div>  
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">PT PLN (Persero) Perusahaan</a> - 2010</h3>

                      <div class="timeline-body">
                        <i class="fa fa-trophy fa-fw" aria-hidden="true"></i>&nbsp; <b>Achievement</b><br>
                        <p>Kesetiaan Kerja 2 Windu</p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-penghargaan"> Edit</a>
                      </div>  
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Menteri ESDM Penghargaan Nasional</a> - 2009</h3>

                      <div class="timeline-body">
                        <i class="fa fa-trophy fa-fw" aria-hidden="true"></i>&nbsp; <b>Achievement</b><br>
                        <p>Efisiensi/Susut Unit Terbaik di Area Bali Selatan</p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-penghargaan"> Edit</a>
                      </div>  
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>

        <div class="modal fade" id="modal-penghargaan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Riwayat Penghargaan</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Penghargaan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Nama Penghargaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Pemberi Penghargaan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Pemberi Penghargaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun Penghargaan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Tahun Pengharagaan">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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
             
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
             <div class="form-group">
                <label> 1st Interest</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Human Capital (SDM)</option>
                  <option>Distribusi Wilayah</option>
                  <option>Pembangkit</option>
                  <option>Transmisi</option>
                  <option>Konstruksi</option>
                  <option>Enjiniring</option>
                  <option>Energi Primer</option>
                  <option>Business Planning</option>
                  <option>Marketing and Service</option>
                  <option>Pendidikan dan Pelatihan</option>
                  <option>Keuangan</option>
                  <option>Procurement</option>
                  <option>Penelitian dan Pengembang</option>
                  <option>Teknologi Informasi</option>
                  <option>Auditor</option>
                  <option>Legal dan Kepatuhan</option>
                  <option>Communication and Public Relation</option>
                </select>
              </div>
              <div class="form-group">
                <label> 2nd Interest</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Human Capital (SDM)</option>
                  <option>Distribusi Wilayah</option>
                  <option>Pembangkit</option>
                  <option>Transmisi</option>
                  <option>Konstruksi</option>
                  <option>Enjiniring</option>
                  <option>Energi Primer</option>
                  <option>Business Planning</option>
                  <option>Marketing and Service</option>
                  <option>Pendidikan dan Pelatihan</option>
                  <option>Keuangan</option>
                  <option>Procurement</option>
                  <option>Penelitian dan Pengembang</option>
                  <option>Teknologi Informasi</option>
                  <option>Auditor</option>
                  <option>Legal dan Kepatuhan</option>
                  <option>Communication and Public Relation</option>
                </select>
              </div>
              <div class="form-group">
                <label> 3rd Interest</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Human Capital (SDM)</option>
                  <option>Distribusi Wilayah</option>
                  <option>Pembangkit</option>
                  <option>Transmisi</option>
                  <option>Konstruksi</option>
                  <option>Enjiniring</option>
                  <option>Energi Primer</option>
                  <option>Business Planning</option>
                  <option>Marketing and Service</option>
                  <option>Pendidikan dan Pelatihan</option>
                  <option>Keuangan</option>
                  <option>Procurement</option>
                  <option>Penelitian dan Pengembang</option>
                  <option>Teknologi Informasi</option>
                  <option>Auditor</option>
                  <option>Legal dan Kepatuhan</option>
                  <option>Communication and Public Relation</option>
                </select>
              </div>
              <!-- /.form-group -->
              <a class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#modal-default"> Simpan </a>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
   
               
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        <!-- left column -->
        <div class="col-md-12">
        
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
