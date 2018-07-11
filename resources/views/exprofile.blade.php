@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- judul halaman -->
    <section class="content-header">
      <h1>
        Executive Profile 
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;<h3 class="box-title"><strong>Bio</strong></h3>
            </div>
            <div class="box-body ">
              <!-- User Profile -->
              <div class="row">
                <div class="col-md-12">
                  <table>
                    <tr>
                      <!-- foto profil -->
                      <td rowspan="3" style="width: 40%">
                        <img style="margin: 0 auto; width: 160px; height: 240px; border-style: groove;" class="img-responsive" src="{{ asset('img/user-profile.png') }}" alt="User profile picture">
                      </td>
                      <p>{{ $exprofile->age }} years</p>
                      <!-- nama lengkap -->
                      <td style="width: 40%"><p style="font-size: 18px;"><b>{{$exprofile->Nama_Lengkap}}</b></p></td>

                      <!-- NIP / Grade -->
                      <td style="width: 20%" valign="middle"><p><span class="label label-primary" style="font-size: 18px;">{{$exprofile->NIP}} / {{$exprofile->Grade}}</span></p></td>
                    </tr>
                    <tr>
                      <!-- Jabatan & Divisi -->
                      <td colspan="2">
                        <p class="text-muted text-left">{{$exprofile->Jabatan_Saat_ini}}</p>
                        <p class="text-muted text-left">{{$exprofile->Divisi_Satuan}}</p>
                      </td>
                    </tr>

                    <tr>
                      <!-- keterangan -->
                      <td>
                        <ul class="list-group">
                          <li class="list-group-item">
                            <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Gender}}<br>
                            <i class="fa fa-birthday-cake fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Kota_Lahir}}, {{$exprofile->tgl_lahir}} <br>
                            <i class="fa fa-phone fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->handphone}} <br>
                            <i class="fa fa-heart fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Religion}}<br>
                          </li>
                        </ul>
                      </td>

                      <!-- umur -->
                      <td valign="top"><p><span class="label label-primary pull-right" style="font-size: 18px;">21 years old  </span></p></td>
                    </tr>
                  </table>
                </div>
                
              </div>
              <!-- end of user profile -->

              <div class="box-header with-border">
                <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title"><strong>Assesment Result</strong></h3>
                </div>

              <!-- /.box-header -->
              <div class="box-body">
               <div class="col-lg-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3>2.92</h3>

                        <p>Domestic</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-home"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        Dapat Disarankan <i class="fa fa-file"></i>
                      </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow" style="">
                      <div class="inner">
                        <h3>2.67</h3>

                        <p>Global</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-globe"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        Disarankan dgn Pertimbangan <i class="fa fa-file"></i>
                      </a>
                    </div>
                </div>
                <hr>
              </div>

              <!-- certification -->
              <div class= "row">
                <div class="col-md-12">
                  <div class="box box-widget widget-user-2">
                    <div class="box-header with-border">
                      <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title"><strong>Certification</strong></h3>
                      </div>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">1<sup>st</sup> Professional Certification <span class="pull-right">{{$exprofile->Professional_Certification_1}}</span></a>
                        <a href="#">2<sup>nd</sup> Professional Certification <span class="pull-right">{{$exprofile->Professional_Certification_2}}</span></a>
                        <a href="#">3<sup>rd</sup> Professional Certification <span class="pull-right">{{$exprofile->Professional_Certification_3}}</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of certification -->

              <!-- education -->
              <div class= "row">
                <div class="col-md-12">
                  <div class="box box-widget widget-user-2">
                    <div class="box-header with-border">
                      <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title"><strong>Education</strong></h3>
                      </div>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">{{$exprofile->Education_1}}</a>
                        <a href="#">{{$exprofile->Education_2}}</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of education -->

              <!-- area of expertise -->
              <div class= "row">
                <div class="col-md-12">
                  <div class="box box-widget widget-user-2">
                    <div class="box-header with-border">
                      <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title"><strong>Area of Expertise</strong></h3>
                      </div>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">1<sup>st</sup> Area of Expertise <span class="pull-right">{{$exprofile->Area_of_Expertise_1}}</span></a>
                        <a href="#">2<sup>nd</sup> Area of Expertise <span class="pull-right">{{$exprofile->Area_of_Expertise_2}}</span></a>
                        <a href="#">3<sup>rd</sup> Area of Expertise <span class="pull-right">{{$exprofile->Area_of_Expertise_3}}</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of area of expertise -->

              <!-- career interest -->
              <div class= "row">
                <div class="col-md-12">
                  <div class="box box-widget widget-user-2">
                    <div class="box-header with-border">
                      <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title"><strong>Career Interest</strong></h3>
                    </div>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">1<sup>st</sup> Career Interest <span class="pull-right">{{$exprofile->Career_Interest_1}}</span></a>
                        <a href="#">2<sup>nd</sup> Career Interest <span class="pull-right">{{$exprofile->Career_Interest_2}}</span></a>
                        <a href="#">3<sup>rd</sup> Career Interest <span class="pull-right">{{$exprofile->Career_Interest_3}}</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of career interest -->
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-header with-border">
                    <i class="fa fa-bars fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title"><strong>About and Experience</strong></h3>
                  </div>
                  <div class="box-footer no-padding">
                    <p style="text-align: justify;text-justify: inter-word;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{$exprofile->About_and_Experience_1}}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{$exprofile->About_and_Experience_2}}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{$exprofile->About_and_Experience_3}}</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="box-header with-border">
                    <i class="fa fa-bars fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title"><strong>3 Biggest Masterpiece</strong></h3>
                  </div>
                  <div class="box-footer no-padding">
                    <ul>
                      <li>{{$exprofile->Masterpiece_1}}</li>
                      <li>{{$exprofile->Masterpiece_2}}</li>
                      <li>{{$exprofile->Masterpiece_3}}</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
