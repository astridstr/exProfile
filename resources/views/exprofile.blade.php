@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bars margin-r-5"></i>&nbsp;<h3 class="box-title">Executive Profile</h3>
            </div>
            <div class="box-body ">
              <!-- User Profile -->
              <div class="row">
                <!-- foto -->
                <div class="col-md-4">
                  <img class="img-responsive" src="dist/img/images.jpg" style="width: 150px; height: 200px;" alt="User Profile Photo">
                  </div>
                <!-- biodata -->
                <div class="col-md-8 box-comment">
                  <div class= "comment-text">
                    <h2 class="profile-username text-left"><b>{{$exprofile->Nama_Lengkap}}</b><span class="pull-right">{{$exprofile->NIP}}</span></h2>
                    <p class="text-muted text-left">{{$exprofile->Jabatan_Saat_ini}}</p>
                  </div>
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <i class="fa fa-birthday-cake fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Kota_Lahir}}, {{$exprofile->tgl_lahir}} <br>
                      <i class="fa fa-phone fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->handphone}} <br>
                      <i class="fa fa-heart fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Religion}}<br>
                    </li>
                  </ul>
                  <div class="col-md-12">
                    <div class="col-md-7">
                      <a href="{{ route('formexprofile') }}" class="pull-right">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Edit</button>
                      </a>
                    </div>
                    <div class="col-md-5">
                      <a href="{{action('PdfGenerateController@download')}}" class="pull-right">
                        <button type="submit" class="btn btn-primary pull-right btn-block btn-sm">Download as PDF</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of user profile -->

              <div class="box-header with-border">
                <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title">Hasil Assesment</h3>
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
                      <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title">Certification</h3>
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
                      <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title">Education</h3>
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
                      <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title">Area of Expertise</h3>
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
                      <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title">Career Interest</h3>
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
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bars fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title">About and Experience</h3>
            </div>
            <p class="text-muted text-left" style="padding-left: 10px">{{$exprofile->About_and_Experience}}</p>
          </div>
           <div class="box box-primary"><div class="box-header with-border">
              <i class="fa fa-bars fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title">3 Masterpiece</h3>
            </div>
            <div class="box-footer ">
              <ul class="nav nav-stacked">
                <li><a href="#">1st Masterpiece</a></li>
                 <div class = "col-md -12">
                 <p class="text-muted text-left">{{$exprofile->Masterpiece_1}}</p>
                 </div>
                <li><a href="#">2nd Masterpiece</a></li>
                 <p class="text-muted text-left">{{$exprofile->Masterpiece_2}}</p>
                <li><a href="#">3rd Masterpiece</a></li>
                 <p class="text-muted text-left">{{$exprofile->Masterpiece_3}}</p>
              </ul>
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
