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

    tr {

    }

    td {
      font-size: 10.5px;
    }
    header {
                position: fixed;
                top: -1cm;
                left: 0cm;
                right: 0cm;
                height: 1.2cm;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 1cm;
            }

    footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }
   </style>
  </head>
  <body>
    <header>
      <h4><b></b></h4>
    </header>
    <footer>
      <h4><b></b></h4>
    </footer>
    <main>
      <div class="content-wrapper">
        <section class="content">
          <div class="row" style="border-top: 3px solid #03a9f4;">
            <div class="col-xs-12">
                <table class="table table-condensed">
                  <tr>
                    <td style="width: 50%;" valign="top">
                        <table class="table table-condensed">
                          <tr><th colspan="2">EXECUTIVE PROFILE</th></tr>
                          <tr>
                            <!-- biodata -->
                            <td rowspan="3" style="width: 36%">
                              <img src="{{ base_path() }}/public/img/user-profile.png" class="img-responsive" alt="Photo" width="1200">
                            </td>
                            <td style="width: 64%">
                              <p style="font-size: 13px;"><b>{{$exprofile->Nama_Lengkap}}</b><span class="pull-right">{{$exprofile->NIP}} / ADV02</span></p>
                              <p class="text-muted text-left">{{$exprofile->Jabatan_Saat_ini}}</p>
                              <p class="text-muted text-left">{{$exprofile->Divisi_Satuan}}</p>
                            </td>
                          </tr>
                          <tr>
                            <td><b>{{$exprofile->Gender}}</b>, lahir di <b>{{$exprofile->Kota_Lahir }}</b>, <b>{{$exprofile-> tgl_lahir}}</b>, <b>{{$exprofile->Religion}}</b></td>
                          </tr>
                          <tr>
                            <td>Email: {{$exprofile->email_korporat}}; HP: {{$exprofile->handphone}}<br>{{$exprofile->Sosmed_Aktif}}: {{$exprofile-> akun_sosmed_aktif_twitter_instagram_facebook}};</td>
                          </tr>
                          <!-- end of biodata -->

                          <!-- certification -->
                          <tr><th colspan="2">CERTIFICATION</th></tr>
                          <tr>
                            <td>1<sub>st</sub>&nbsp;&nbsp;&nbsp;Professional Certification&nbsp;&nbsp;:</td>
                            <td class="text-right">{{$exprofile->Professional_Certification_1}}</td>
                          </tr>
                          <tr>
                            <td>2<sup>nd</sup>&nbsp;&nbsp;Professional Certification&nbsp;&nbsp;:</td>
                            <td class="text-right">{{$exprofile->Professional_Certification_2}}</td>
                          </tr>
                          <tr>
                            <td>3<sup>rd</sup>&nbsp;&nbsp;&nbsp;Professional Certification&nbsp;&nbsp;:</td>
                            <td class="text-right">{{$exprofile->Professional_Certification_3}}</td>
                          </tr>
                          <!-- end of certification -->

                          <!-- education -->
                          <tr><th colspan="2" class="judul3">EDUCATION</th></tr>
                          <tr><td colspan="2">{{$exprofile->Education_1}}</td></tr>
                          <tr><td colspan="2">{{$exprofile->Education_2}}</td></tr>
                          <!-- end of education -->

                          <!-- area of expertise -->
                          <tr>
                            <th colspan="2">AREA OF EXPERTISE</th>
                          </tr>
                          <tr>
                            <td>1<sup>st</sup>&nbsp;&nbsp;&nbsp;Area of Expertise&nbsp;&nbsp;:</td>
                            <td>{{$exprofile->Area_of_Expertise_1}}</td>
                          </tr>
                          <tr>
                            <td>2<sup>nd</sup>&nbsp;&nbsp;Area of Expertise&nbsp;&nbsp;:</td>
                            <td>{{$exprofile->Area_of_Expertise_2}}</td>
                          </tr>
                          <tr>
                            <td>3<sup>rd</sup>&nbsp;&nbsp;&nbsp;Area of Expertise&nbsp;&nbsp;:</td>
                            <td>{{$exprofile->Area_of_Expertise_3}}</td>
                          </tr>
                          <!-- end of area of expertise -->

                          <!-- career interest -->
                          <tr>
                            <th colspan="2">CAREER INTEREST</th>
                          </tr>
                          <tr>
                            <td>1<sup>st</sup>&nbsp;&nbsp;&nbsp;Career Interest&nbsp;&nbsp;:</td>
                            <td>{{$exprofile->Career_Interest_1}}</td>
                          </tr>
                          <tr>
                            <td>2<sup>nd</sup>&nbsp;&nbsp;Career Interest&nbsp;&nbsp;:</td>
                            <td>{{$exprofile->Career_Interest_2}}</td>
                          </tr>
                          <tr>
                            <td>3<sup>rd</sup>&nbsp;&nbsp;&nbsp;Career Interest&nbsp;&nbsp;:</td>
                            <td>{{$exprofile->Career_Interest_3}}</td>
                          </tr>
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
                        <tr><th style="text-align: center;">3 BIGGEST MASTERPIECE</th></tr>
                        <tr>
                          <td>
                            <p style="text-align: justify;text-justify: inter-word;">
                                {{$exprofile->Masterpiece_1}}
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p style="text-align: justify;text-justify: inter-word;">
                                {{$exprofile->Masterpiece_2}}
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p style="text-align: justify;text-justify: inter-word;">
                                {{$exprofile->Masterpiece_3}}
                            </p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
            </div>
          </div>
        </section>
      </div>
    </main>
  </body>

</html>