@extends('pegawai.app')

@section('content')

@include('pegawai.sidebar')

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
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;<h3 class="box-title">Bio</h3>
            </div>
            <div class="box-body ">
              <!-- User Profile -->
              <div class="row">
                <div class="col-md-12">
                  <table>
                    <tr>
                      <!-- foto profil -->
                      <td rowspan="4" style="width: 37%;">
                      @if(File::exists(public_path("fotoupload/".$exprofile->File_Foto.".jpg")))
                      <img style="margin: 0px 7px; width: 5cm; height: 7cm; border-style: groove; vertical-align: bottom;"  class="img-responsive" src="{{ asset('fotoupload/'.$exprofile->File_Foto.'.jpg')  }}" alt= "User profile" />
                      @elseif(File::exists(public_path("fotoupload/".$exprofile->File_Foto.".png"))) 
                      <img style="margin: 0px 7px; width: 5cm; height: 7cm; border-style: groove; vertical-align: bottom;" class="img-responsive" src="{{ asset('fotoupload/'.$exprofile->File_Foto.'.png')  }}" alt= "User profile" />
                      @elseif(File::exists(public_path("fotoupload/".$exprofile->File_Foto.".JPG"))) 
                      <img style="margin: 0px 7px; width: 5cm; height: 7cm; border-style: groove; vertical-align: bottom;" class="img-responsive" src="{{ asset('fotoupload/'.$exprofile->File_Foto.'.JPG')  }}" alt= "User profile" />
                      @elseif(File::exists(public_path("fotoupload/".$exprofile->File_Foto.".jpeg"))) 
                      <img style="margin: 0px 7px; width: 5cm; height: 7cm; border-style: groove; vertical-align: bottom;" class="img-responsive" src="{{ asset('fotoupload/'.$exprofile->File_Foto.'.jpeg')  }}" alt= "User profile" />
                      @else
                      <img style="margin: 0px 7px; width: 5cm; height: 7cm; border-style: groove; vertical-align: bottom;" class="img-responsive" src="{{ asset('img/user-profile.png') }}" alt="User profile" />
                      @endif
                      <br>
                      </td>

                      <!-- nama lengkap -->
                      <td style="width: 45%;" style="padding: 0;"><p style="font-size: 28px;"><b>{{$exprofile->Nama_Lengkap}}</b></p></td>

                      <!-- NIP / Grade -->
                      <td style="width: 20%;" valign="top"><p><span class="label label-info" style="font-size: 14px;">{{$exprofile->NIP}} / {{$exprofile->Grade}}</span></p></td>
                    </tr>
                    <tr>
                      <!-- Jabatan & Divisi -->
                      <td colspan="2" style="margin: 0px;"> 
                        <p style="margin: 2px;" class="text-muted text-left" style="font-size: 16px;">{{$exprofile->Jabatan_Saat_ini}}</p>
                        <p style="margin: 2px;" class="text-muted text-left" style="font-size: 16px;">{{$exprofile->Divisi_Satuan}}</p>
                      </td>
                    </tr>
                    <tr style="margin: 0;">
                      <td>
                        <ul class="list-group box-primary">
                          <li class="list-group-item" style="padding: 0;">
                            <b style="font-size: 16px; text-align: center;">
                                ITMS Stat : 
                                @if ($exprofile->Jenjang == 'Manajemen Atas') BOD-1
                                @elseif ($exprofile->Jenjang == 'Manajemen Menengah') BOD-2
                                @elseif ($exprofile->Jenjang == 'Manajemen Dasar') BOD-3
                                @elseif ($exprofile->Jenjang == 'Supervisior Atas') BOD-4
                                @elseif ($exprofile->Jenjang == 'Supervisior Dasar') BOD-5
                                @endif</b>
                          </li>
                        </ul>
                      </td>
                      <td>
                        <ul class="list-group box-primary">
                          <li class="list-group-item" style="padding: 0;">
                            <b style="font-size: 16px;">{{ $exprofile->age }} y.o</b>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <!-- keterangan -->
                      <td colspan="2">
                        <ul class="list-group" style="margin-top: -20px;">
                          <li class="list-group-item" style="padding: 0;">
                            <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Gender}}<br>
                            <i class="fa fa-birthday-cake fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Kota_Lahir}}, {{$exprofile->tgl_lahir}}<br>
                            <i class="fa fa-phone fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->handphone}} <br>
                            <i class="fa fa-heart fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Religion}}<br>
                            <i class="fa fa-address-book fa-fw" aria-hidden="true"></i>&nbsp; {{$exprofile->Sosmed_Aktif}} : {{$exprofile->akun_sosmed_aktif_twitter_instagram_facebook}}<br>
                          </li>
                        </ul>
                      </td>
                    </tr>
                  </table>
                </div>
                
              </div>
              <!-- end of user profile -->
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h3 class="box-title">Assesment Result</h3>
                </div>
              </div>

              <!-- /.box-header -->
              <div class="box-body">
               <div class="col-lg-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3>?</h3>

                        <p>Domestic</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-home"></i>
                      </div>
                      <!-- <a href="#" class="small-box-footer">
                        Dapat Disarankan <i class="fa fa-file"></i>
                      </a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow" style="">
                      <div class="inner">
                        <h3>?</h3>

                        <p>Global</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-globe"></i>
                      </div>
                      <!-- <a href="#" class="small-box-footer">
                        Disarankan dgn Pertimbangan <i class="fa fa-file"></i>
                      </a> -->
                    </div>
                </div>
                <hr>
              </div>

              <!-- certification -->
                <div class= "row">
                  <div class="col-md-12">
                    <div class="box box-primary box-solid">
                      <div class="box-header with-border">
                        <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h4 class="box-title">Certification</h4>
                      </div>
                      <div class="box-body">
                        <table class="table table-condensed table-responsive">                        
                          <tbody>
                            @if (!empty($exprofile->Professional_Certification_1))
                            <tr>
                              <td>1<sup>st</sup> Professional Certification</td>
                              <td>{{$exprofile->Professional_Certification_1}}</td>
                            </tr>
                            @else
                            @endif
                            @if (!empty($exprofile->Professional_Certification_2))
                            <tr>
                              <td>2<sup>nd</sup> Professional Certification</td>
                              <td>{{$exprofile->Professional_Certification_2}}</td>
                            </tr>
                            @else
                            @endif
                            @if (!empty($exprofile->Professional_Certification_1))
                            <tr>
                              <td>3<sup>rd</sup> Professional Certification</td>
                              <td>{{$exprofile->Professional_Certification_3}}</td>
                            </tr>
                            @else
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- end of certification -->

              <!-- education -->
                <div class= "row">
                  <div class="col-md-12">
                    <div class="box box-primary box-solid">
                      <div class="box-header with-border">
                        <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h4 class="box-title">Education</h4>
                      </div>
                      <div class="box-body">
                        <table class="table table-condensed table-responsive">                        
                          <tbody>
                            @if (!empty($exprofile->Education_1))
                            <tr>
                              <td>{{$exprofile->Education_1}}</td>
                            </tr>
                            @else
                            @endif
                            @if (!empty($exprofile->Education_2))
                            <tr>
                              <td>{{$exprofile->Education_2}}</td>
                            </tr>
                            @else
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- end of education -->

              <!-- area of expertise -->
                <div class= "row">
                  <div class="col-md-12">
                    <div class="box box-primary box-solid">
                      <div class="box-header with-border">
                        <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h4 class="box-title">Area of Expertise</h4>
                      </div>
                      <div class="box-body">
                        <table class="table table-condensed table-responsive">                        
                          <tbody>
                            @if (!empty($exprofile->Area_of_Expertise_1))
                            <tr>
                              <td>1<sup>st</sup> Area of Expertise</td>
                              <td>{{$exprofile->Area_of_Expertise_1}}</td>
                            </tr>
                            @else
                            @endif
                            @if (!empty($exprofile->Area_of_Expertise_2))
                            <tr>
                              <td>2<sup>nd</sup> Area of Expertise</td>
                              <td>{{$exprofile->Area_of_Expertise_2}}</td>
                            </tr>
                            @else
                            @endif
                            @if (!empty($exprofile->Area_of_Expertise_3))
                            <tr>
                              <td>3<sup>rd</sup> Area of Expertisen</td>
                              <td>{{$exprofile->Area_of_Expertise_3}}</td>
                            </tr>
                            @else
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- end of area of expertise -->

              <!-- career interest -->
                <div class= "row">
                  <div class="col-md-12">
                    <div class="box box-primary box-solid">
                      <div class="box-header with-border">
                        <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h4 class="box-title">Career Interest</h4>
                      </div>
                      <div class="box-body">
                        <table class="table table-condensed table-responsive">                        
                          <tbody>
                            @if (!empty($exprofile->Career_Interest_1))
                            <tr>
                              <td>1<sup>st</sup> Career Interest</td>
                              <td>{{$exprofile->Career_Interest_1}}</td>
                            </tr>
                            @else
                            @endif
                            @if (!empty($exprofile->Career_Interest_2))
                            <tr>
                              <td>2<sup>nd</sup> Career Interest2}}</td>
                              <td>{{$exprofile->Career_Interest_2}}</td>
                            </tr>
                            @else
                            @endif
                            @if (!empty($exprofile->Career_Interest_3))
                            <tr>
                              <td>3<sup>rd</sup> Career Interest</td>
                              <td>{{$exprofile->Career_Interest_3}}</td>
                            </tr>
                            @else
                            @endif
                          </tbody>
                        </table>
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
      <!-- about and experience + 3 biggest masterpiece -->  
        <div class="col-md-6">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;<h3 class="box-title">About and Experience</h3>
            </div>
            <div class="box-body">
              <div class="row">
              <!-- about and experience -->
                <div class="col-md-12">
                  <div class= "row">
                    <div class="col-md-12">
                      <div class="box box-primary box-solid">
                        <div class="box-body">
                          <p style="text-align: justify;text-justify: inter-word;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {{$exprofile->About_and_Experience_1}}
                          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {{$exprofile->About_and_Experience_2}}
                          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {{$exprofile->About_and_Experience_3}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- end of about and experience -->
              <!-- 3 biggest masterpiece -->
                <div class="col-md-12">
                  <div class= "row">
                    <div class="col-md-12">
                      <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                          <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>&nbsp; <h4 class="box-title">3 Biggest Masterpiece</h4>
                        </div>
                        <div class="box-body">
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
              <!-- end of 3 biggest masterpiece -->
              <!-- button edit & pdf -->
                <div class="col-md-12">
                  <div class= "row">
                    <div class="box-body">
                      <div class="col-md-4">
                        
                      </div>
                      <div class="col-md-4">
                        <a href="{{route('form.view')}}"><button type="button" class="btn btn-block btn-info btn-flat">Edit</button></a>
                      </div>
                      <div class="col-md-4">
                        <a href="{{action('PdfGenerateController@download')}}"<button type="button" class="btn btn-block btn-info btn-flat">Download as PDF</button></a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              <!-- end of button edit & pdf -->
              </div>
            </div>
          </div>
        </div>
      <!-- end of about and experience + 3 biggest masterpiece -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
