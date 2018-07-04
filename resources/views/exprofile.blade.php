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
              <div class="row">
              <div class="col-md-4">
              <img class="img-responsive" src="dist/img/images.jpg" style="width: 150px; height: 200px;" alt="Photo">
              </div>
              <div class="col-md-8 box-comment">
              <div class= "comment-text">
              <h2 class="profile-username text-left"><b>IDA BAGUS ARI WARDANA</b></h2>
              <p class="text-muted text-left">Kepala Divisi Operasi Jawa Timur, Bali dan Nusa Tenggara PT.PLN (Persero)</p>
              </div>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <i class="fa fa-birthday-cake margin-r-5"></i> Banyuwangi, 03 Juni 1968 <br>
                  <i class="fa fa-phone margin-r-5"></i>+6282335619807 <br>
                  <i class="fa fa-heart margin-r-5"></i> Hindu <br>
                </li>
              </ul>
                      <div class="col-md-12">
                        <a href="{{action('PdfGenerateController@download')}}" class="pull-right">
                          <button type="submit" class="btn btn-primary pull-right btn-block btn-sm">Download as PDF
                          </button>
                        </a>
                      </div>
              </div>
              </div>
            <div class="box-header with-border">
              <i class="fa fa-file-text margin-r-5"></i>&nbsp;<h3 class="box-title">Hasil Assesment</h3>
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
          <div class= "row">
          <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="box-header with-border">
              <i class="fa fa-file-text margin-r-5"></i>&nbsp;<h3 class="box-title">Certification</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">1st Professional Certification <span class="pull-right">Certified of Supply Chain Expert</span></a>
                <a href="#">2nd Professional Certification <span class="pull-right">Certified of Supply Chain Expert</span></a>
                <a href="#">3rd Professional Certification <span class="pull-right">Certified of Supply Chain Expert</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        </div>
        <div class= "row">
          <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="box-header with-border">
              <i class="fa fa-file-text margin-r-5"></i><h3 class="box-title">Education</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">S2 Elektro <span class="pull-right">Institut Teknologi Sepuluh Nopember</span></a>
                <a href="#">S1 Industri <span class="pull-right">Institut Teknologi Sepuluh Nopember</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        </div>
         <div class= "row">
          <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="box-header with-border">
              <i class="fa fa-file-text margin-r-5"></i>&nbsp;<h3 class="box-title">Area of Expertise</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">1st Area of Expertise <span class="pull-right">Supply Chain Expert</span></a>
                <a href="#">2nd Area of Expertise <span class="pull-right">Teknologi Informasi </span></a>
                <a href="#">3rd Area of Expertise <span class="pull-right">Pengembangan SDM</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        </div>
         <div class= "row">
          <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="box-header with-border">
              <i class="fa fa-file-text margin-r-5"></i>&nbsp;<h3 class="box-title">Career Interest</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">1st Career Interest <span class="pull-right">Bussines Planning</span></a>
                <a href="#">2nd Career Interest <span class="pull-right">Human Capital</span></a>
                <a href="#">3rd Career Interest <span class="pull-right"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        </div>
             
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
              <i class="fa fa-bars margin-r-5"></i><h3 class="box-title">About and Experience</h3>
            </div>
            <p class="text-muted text-left" style="padding-left: 10px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
           <div class="box box-primary"><div class="box-header with-border">
              <i class="fa fa-bars margin-r-5"></i><h3 class="box-title">3 Masterpiece</h3>
            </div>
            <div class="box-footer ">
              <ul class="nav nav-stacked">
                <li><a href="#">1st Masterpiece <span class="pull-right">Supply Chain Expert</span></a></li>
                 <div class = "col-md -12">
                 <p class="text-muted text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 </div>
                <li><a href="#">2nd Masterpiece <span class="pull-right">Teknologi Innformasi </span></a></li>
                 <p class="text-muted text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <li><a href="#">3rd Masterpiece <span class="pull-right">Pengembangan SDM</span></a></li>
                 <p class="text-muted text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
