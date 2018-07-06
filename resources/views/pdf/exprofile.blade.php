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
                <table class="table table-condensed table-responsive">
                  <tr style="height: 4cm;">
                    <td style="width: 50%;" valign="top">
                        <table class="table table-condensed" style="table-layout: fixed;">
                        <!-- biodata -->
                          <tr><th colspan="3">BIO</th></tr>
                          <!-- foto profil & nip/grade -->
                          <tr style="padding: 0px;">
                            <!-- foto profil -->
                            <td rowspan="5" style="width: 40%; vertical-align: bottom;" align="center">
                              <img src="{{ base_path() }}/public/foto/6693081Z1_Didik Mardiyanto.JPG" alt="Photo" style="width: 4.8cm; height: 6.8cm; margin-top: 16px;">
                            </td>
                            <!-- nip/grade -->
                            <td colspan="2" style="vertical-align: middle; text-align: center; background-color: #03a9f4; color: white;">
                              <b style="font-size: 16px; text-align: center;">{{$exprofile->NIP}} / {{$exprofile->Grade}}</b>
                            </td>                          
                          </tr>
                          <!-- nama lengkap -->
                          <tr>
                            <td colspan="2" style="width: 60%; vertical-align: middle;">
                              <b style="font-size: 16px;">{{$exprofile->Nama_Lengkap}}</b>
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
                            Email: {{$exprofile->email_korporat}}; HP: {{$exprofile->handphone}}<br>{{$exprofile->Sosmed_Aktif}}: {{$exprofile-> akun_sosmed_aktif_twitter_instagram_facebook}};</td>
                          </tr>
                        <!-- end of biodata -->

                        <!-- certification -->
                          <tr><th colspan="3">CERTIFICATION</th></tr>
                          @if (!empty($exprofile->Professional_Certification_1))
                          <tr>
                            <td>1<sub>st</sub>&nbsp;&nbsp;&nbsp;Professional Certification&nbsp;&nbsp;:</td>
                            <td colspan="2">{{$exprofile->Professional_Certification_1}}</td>
                          </tr>
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
                      <table class="table table-condensed">
                        <tr><th style="text-align: center;">ABOUT AND EXPERIENCE</th></tr>
                        <tr>
                          <td><p style="text-align: justify;text-justify: inter-word;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Ahmad Fulan mengawali karir sebagai staff bidang Distribusi di PLN WILSUMUT. Sebelum menjabat sebagai MS Administrasi Perencanaan dan Pelaksanaan Pengadaan, beberapa penugasan yang pernah dimandatkan kepada yang bersangkutan antara lain sebagai MS Rekrutmen, MB SDMDISJAYA, MB SDM Umum WILSUMBAR, Manajer Area Purwokerto, Samarinda dan KendariManajer Ranting Belawan, SPV Pemasaran, dan Kabag Pelayanan Pelanggan. Melalui perjalanan karir tesebut, tercatatAhmad Fulan memiliki kekayaan profesi bidang, antara laiin dari profesi awal Distribusi, Pemasaran, dan SDM. Kekayaan profesi dan jenjang karir tersebut membuat Ahmad Fulan memahami proses bisnis PLN secara keseluruhan.
                              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Ahmad Fulan adalah orang yang berorientasi pada proses, namun tidak mengesampingkan hasil. Orientasi pada proses ini dilakukan Fulan dalam mendidik Staff. Selain itu, kreatifitas menjadi modal utama daam mengeksekusi setiap pekerjaannya. Prinsip "Setiap Eksekutor Paham Sebab Akibatnya", menjadi kunci Fulan dalam memberikan keleluasaan pada setiap staff-nya untuk melakukan pengambilankeputusan hingga mengeksekusi pekerjaan di timnya. Fulan unggul dalam kemampuan gathering hingga olah data, hal ini membuat setiap keputusan selalu didukung dengan landasan yang kuat.
                              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Selain berkarir di PLN, Fulan adalah orang yang aktif menjadi narasumber di luar lingkungan PLN. Salah satu di antaranya adalah sebagai Pembicara dalam Supply Chain International Forum (SCIF) 2017, beberapa karya tulis telah dihasilkan oleh Fulan dengan tema yang berkaitan dengan Supply Chain dan Pengembangan Mutu SDM.</p></td>
                        </tr>
                      <!-- masterpiece -->
                        <tr><th style="text-align: center;">3 BIGGEST MASTERPIECE</th></tr>
                        <tr>
                          <td>
                            <ul style="padding-left: 10px;">
                              <li><p style="text-align: justify;text-justify: inter-word;">{{$exprofile->Masterpiece_1}}</p></li>
                              <li><p style="text-align: justify;text-justify: inter-word;">{{$exprofile->Masterpiece_2}}</p></li>
                              <li><p style="text-align: justify;text-justify: inter-word;">{{$exprofile->Masterpiece_3}}</p></li>
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