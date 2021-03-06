<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <style>
    <?php include(public_path().'/dist/bower_components/bootstrap/dist/css/bootstrap.css');?>
    <?php include(public_path().'/dist/bower_components/font-awesome/css/font-awesome.css');?>
    <?php include(public_path().'/dist/bower_components/Ionicons/css/ionicons.css');?>
    <?php include(public_path().'/dist/dist/css/AdminLTE.css');?>
    @page {
      padding: 0px;
      margin-bottom: -10px;
    }
    td {
      font-size: 11px;
      padding: 0px;
    }
    p {
      padding: 0px;
    }
    @page {
                margin: 0cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 1cm;
                margin-left: -5.5cm;
                margin-right: 0.5cm;
                margin-bottom: 0cm;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 7cm;
                right: 0cm;
                height: 1.3cm;
            }

.table-pdf > thead > tr > td,
.table-pdf > tbody > tr > td,
.table-pdf > tfoot > tr > td {
  padding: 1.7px 5px;
}
.table-pdf > thead > tr > th,
.table-pdf > tbody > tr > th,
.table-pdf > tfoot > tr > th,{
  padding: 2px 5px;
}
tr > th {
  background-color: #d2d6de;
}
   </style>
  </head>
  <body>
    <header>
        <img src="{{ base_path() }}/public/img/header.png" width="100%" height="100%">
    </header>
    <main>
      <div class="content-wrapper">
        <section class="content">
          <div class="row" style="border-top: 3px solid #03a9f4;">
                <table class="table table-pdf table-responsive">
                  <tr style="height: 4cm;">
                    <td style="width: 50%;" valign="top">
                        <table class="table table-pdf" style="table-layout: fixed;">
                        <!-- biodata -->
                          <tr><th colspan="3">BIO</th></tr>
                          <!-- foto profil & nip/grade -->
                          <tr style="padding: 0px;">
                            <!-- foto profil -->
                            <td rowspan="5" style="width: 40%; vertical-align: bottom;" align="center">
                              @if(File::exists(base_path("public/fotoupload/".$exprofile->File_Foto.".JPG")))
                              <img src="{{ base_path() }}/public/fotoupload/{{$exprofile->File_Foto}}.JPG" alt="Photo" style="width: 4.8cm; height: 6.8cm; margin-top: 16px;">
                              @elseif(File::exists(base_path("public/fotoupload/".$exprofile->File_Foto.".PNG")))
                              <img src="{{ base_path() }}/public/fotoupload/{{$exprofile->File_Foto}}.PNG" alt="Photo" style="width: 4.8cm; height: 6.8cm; margin-top: 16px;">
                              @elseif(File::exists(base_path("public/fotoupload/".$exprofile->File_Foto.".jpg")))
                              <img src="{{ base_path() }}/public/fotoupload/{{$exprofile->File_Foto}}.jpg" alt="Photo" style="width: 4.8cm; height: 6.8cm; margin-top: 16px;">
                              @elseif(File::exists(base_path("public/fotoupload/".$exprofile->File_Foto.".png")))
                              <img src="{{ base_path() }}/public/fotoupload/{{$exprofile->File_Foto}}.png" alt="Photo" style="width: 4.8cm; height: 6.8cm; margin-top: 16px;">
                              @elseif(File::exists(base_path("public/fotoupload/".$exprofile->File_Foto.".jpeg")))
                              <img src="{{ base_path() }}/public/fotoupload/{{$exprofile->File_Foto}}.jpeg" alt="Photo" style="width: 4.8cm; height: 6.8cm; margin-top: 16px;">
                              @else
                              <img src="{{ base_path() }}/public/img/user-profile.png" alt="Photo" style="width: 4.8cm; height: 6.8cm; margin-top: 16px;">
                              @endif
                            </td>
                            <!-- nama lengkap -->
                            <td colspan="2" style="width: 60%; vertical-align: middle;">
                              <b style="font-size: 16px;">{{$exprofile->Nama_Lengkap}}</b>
                            </td>                      
                          </tr>
                          <!-- nip/grade -->
                          <tr>
                            <td colspan="2" style="vertical-align: middle; text-align: center; background-color: #03a9f4; color: white;">
                              <table>
                                <tr><td class="text-center"><b style="font-size: 16px; text-align: center;">
                                ITMS Stat : 
                                @if ($exprofile->Jenjang == 'Manajemen Atas') BOD-1 ({{$exprofile->Jenjang}})
                                @elseif ($exprofile->Jenjang == 'Manajemen Menengah') BOD-2 ({{$exprofile->Jenjang}})
                                @elseif ($exprofile->Jenjang == 'Manajemen Dasar') BOD-3 ({{$exprofile->Jenjang}})
                                @elseif ($exprofile->Jenjang == 'Supervisori Atas') BOD-4 ({{$exprofile->Jenjang}})
                                @elseif ($exprofile->Jenjang == 'Supervisori Dasar') BOD-5 ({{$exprofile->Jenjang}})
                                @else
                                Fungsional
                                @endif</b></td></tr>
                                <tr><td><b style="font-size: 16px; text-align: center;">{{$exprofile->NIP}} / {{$exprofile->Grade}}</b></td></tr>
                              </table>
                            </td>  
                          </tr>
                          <!-- jabatan saat ini -->
                          <tr>
                            <td colspan="2" style="vertical-align: middle;">
                              <p class="text-muted text-left">{{$exprofile->Jabatan_Saat_ini}}</p>
                            </td>
                          </tr>
                          <!-- divisi satuan -->
                          <tr>
                            <td colspan="2" style="vertical-align: middle;">
                              <p class="text-muted text-left">{{$exprofile->Divisi_Satuan}}</p>
                            </td>
                          </tr>
                          <!-- keterangan -->
                          <tr>
                            <td colspan="2">
                              <b>{{$exprofile->Gender}}</b>, lahir di <b>{{$exprofile->Kota_Lahir }}</b>, <b>{{$exprofile-> tgl_lahir}}</b>, <b>{{$exprofile->Religion}}</b><br>
                            Email: {{$exprofile->email_korporat}}; HP: {{$exprofile->handphone}};<br>@if(!empty($exprofile->Akun_Facebook))Facebook: {{$exprofile->Akun_Facebook}};
                            @else
                            @endif
                            @if(!empty($exprofile->Akun_Twitter))Twitter: {{$exprofile->Akun_Twitter}};<br>
                            @else
                            @endif
                            @if(!empty($exprofile->Akun_Instagram))Instagram: &nbsp;{{$exprofile->Akun_Instagram}};
                            @else
                            @endif
                            @if(!empty($exprofile->Akun_LinkedIn))LinkedIn: {{$exprofile->Akun_LinkedIn}};
                            @else
                            @endif
                          </td>
                          </tr>
                        <!-- end of biodata -->

                        <!-- certification -->
                          <tr><th colspan="3">CERTIFICATION</th></tr>
                          @if (!empty($exprofile->Professional_Certification_1))
                          <tr>
                            <td>1<sub>st</sub>&nbsp;&nbsp;&nbsp;Professional Certification&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Professional_Certification_1}}</td>
                          </tr>
                          @elseif ($exprofile->Professional_Certification_1 == '-')
                          @else
                          @endif
                          @if (!empty($exprofile->Professional_Certification_2))
                          <tr>
                            <td>2<sup>nd</sup>&nbsp;&nbsp;Professional Certification&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Professional_Certification_2}}</td>
                          </tr>
                          @else
                          @endif
                          @if (!empty($exprofile->Professional_Certification_3))
                          <tr>
                            <td>3<sup>rd</sup>&nbsp;&nbsp;&nbsp;Professional Certification&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Professional_Certification_3}}</td>
                          </tr>
                          @else
                          @endif
                        <!-- end of certification -->

                        <!-- education -->
                          <tr><th colspan="3" class="judul3">EDUCATION</th></tr>
                          <tr>
                            <td colspan="3">
                            @if (!empty($exprofile->Education_1))
                              {{$exprofile->Education_1}}<br>
                            @else
                            @endif
                            @if (!empty($exprofile->Education_2))
                              {{$exprofile->Education_2}}
                            @else
                            @endif
                            </td>
                          </tr>
                        <!-- end of education -->

                        <!-- area of expertise -->
                          <tr><th colspan="3">AREA OF EXPERTISE</th></tr>
                          @if (!empty($exprofile->Area_of_Expertise_1))
                          <tr>
                            <td>1<sup>st</sup>&nbsp;&nbsp;&nbsp;Area of Expertise&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Area_of_Expertise_1}}</td>
                          </tr>
                          @else
                          @endif
                          @if (!empty($exprofile->Area_of_Expertise_2))
                          <tr>
                            <td>2<sup>nd</sup>&nbsp;&nbsp;Area of Expertise&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Area_of_Expertise_2}}</td>
                          </tr>
                          @else
                          @endif
                          @if (!empty($exprofile->Area_of_Expertise_3))
                          <tr>
                            <td>3<sup>rd</sup>&nbsp;&nbsp;&nbsp;Area of Expertise&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Area_of_Expertise_3}}</td>
                          </tr>
                          @else
                          @endif
                        <!-- end of area of expertise -->

                        <!-- career interest -->
                          <tr><th colspan="3">CAREER INTEREST</th></tr>
                          @if (!empty($exprofile->Career_Interest_1))
                          <tr>
                            <td>1<sup>st</sup>&nbsp;&nbsp;&nbsp;Career Interest&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Career_Interest_1}}</td>
                          </tr>
                          @else
                          @endif
                          @if (!empty($exprofile->Career_Interest_2))
                          <tr>
                            <td>2<sup>nd</sup>&nbsp;&nbsp;Career Interest&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Career_Interest_2}}</td>
                          </tr>
                          @else
                          @endif
                          @if (!empty($exprofile->Career_Interest_3))
                          <tr>
                            <td>3<sup>rd</sup>&nbsp;&nbsp;&nbsp;Career Interest&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Career_Interest_3}}</td>
                          </tr>
                          @else
                          @endif
                        <!-- end of career interest -->
                        </table>
                    </td>
                    <td style="width: 50%;" valign="top">
                      <table class="table table-pdf">
                        <tr><th style="text-align: center;">ABOUT AND EXPERIENCE</th></tr>
                        <tr>
                          <td><p style="text-align: justify;text-justify: inter-word;font-size: 13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{$exprofile->About_and_Experience_1}}
                              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{$exprofile->About_and_Experience_2}}
                              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{$exprofile->About_and_Experience_3}}</p></td>
                        </tr>
                      <!-- masterpiece -->
                        <tr><th style="text-align: center;">3 BIGGEST MASTERPIECE</th></tr>
                        <tr>
                          <td>
                            <ul style="padding-left: 10px;">
                              <li><p style="text-align: justify;text-justify: inter-word;font-size: 12px;">{{$exprofile->Masterpiece_1}}</p></li>
                              <li><p style="text-align: justify;text-justify: inter-word;font-size: 12px;">{{$exprofile->Masterpiece_2}}</p></li>
                              <li><p style="text-align: justify;text-justify: inter-word;font-size: 12px;">{{$exprofile->Masterpiece_3}}</p></li>
                            </ul>
                          </td>
                        </tr>
                      <!-- end of masterpiece -->
                      </table>
                    </td>
                  </tr>
                </table>
          </div>
        </section>
      </div>
    </main>
  </body>

</html>