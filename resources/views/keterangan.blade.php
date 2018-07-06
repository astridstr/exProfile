@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-4">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <br>
              @if(File::exists(public_path("fotoupload/".$exprofile->File_Foto.".jpg")))
                  <img style="margin: 0 auto; width: 160px; height: 240px; border-style: groove;" class="img-responsive" src="{{ asset('fotoupload/'.$exprofile->File_Foto.'.jpg')  }}" alt= "User profile" />
              @elseif(File::exists(public_path("fotoupload/".$exprofile->File_Foto.".png"))) 
                  <img style="margin: 0 auto; width: 160px; height: 240px; border-style: groove;" class="img-responsive" src="{{ asset('fotoupload/'.$exprofile->File_Foto.'.png')  }}" alt= "User profile" />
              @else
                  <img style="margin: 0 auto; width: 300px; height: 240px; border-style: groove;" src="{{ asset('img/user-profile.png') }}" alt="User profile" />
              @endif
              <h4 class="text-center"><strong>{{$exprofile->Nama_Lengkap}}</strong><span style="font-size: 16px;"> (Ir., M.T.)</span></h4>
              <p class="text-muted text-center">NIK. {{$exprofile->NIP}}<br>NPWP</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <i class="fa fa-info fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Kota_Lahir}}, {{$exprofile->tgl_lahir}}
                </li>
                <li class="list-group-item">
                  <i class="fa fa-black-tie fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Jabatan_Saat_ini}}
                </li>
                <li class="list-group-item">
                  <i class="fa fa-phone fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->handphone}}
                </li>
                <li class="list-group-item">
                  <i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->email_korporat}}
                </li>
                <li class="list-group-item">
                  <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Kota_Domisili_Utama}}
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
                <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#jabatan" data-toggle="tab">Riwayat Jabatan</a></li>
              <li><a href="#penghargaan" data-toggle="tab">Penghargaan</a></li>
              <li><a href="#pendidikan" data-toggle="tab">Riwayat Pendidikan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="jabatan">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">2017 - saat ini</span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">{{$exprofile->Jabatan_Saat_ini}}</a> - PT PLN (Persero)</h3>

                      <div class="timeline-body">
                        <i class="fa fa-hand-pointer-o fa-fw" aria-hidden="true"></i>&nbsp; <b>Tugas dan Kewenangan</b><br>
                        <p>Sebagai penanggung jawab dan pembina operasi terhadap unit-unit yang ada di Regional Maluku Papua, untuk menjamin kelangsungan suplai ketenaga listrikan di Maluku Papua.</p>

                        <i class="fa fa-trophy fa-fw" aria-hidden="true"></i>&nbsp; <b>Masterpiece</b><br>
                        <p>Meningkatkan pertumbuhan penjualan di sistem Jawa Timur Bali dengan agresif merketing dan percepatan pertumbuhan Rasio elektrifikasi di NTT</p>
                      </div> 
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs"><i class="fa fa-square-o fa-fw" aria-hidden="true"></i>&nbsp; Biggest Masterpiece</a>
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
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="penghargaan">
                <!-- The timeline -->
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
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="pendidikan">
                <!-- Pendidikan Formal -->
                <div class="callout callout-danger text-center">
                  <p>Pendidikan Formal</p>
                </div>
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
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
