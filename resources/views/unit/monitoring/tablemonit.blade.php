<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>XProfile | Monitoring</title>
  <!-- CSS -->

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('dist/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('dist/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ URL::asset('dist/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{URL::asset('dist/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('dist/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ URL::asset('dist/dist/css/skins/_all-skins.min.css')}}">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('index')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PLN</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PLN</b>Pusat</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    @include('unit.nav') 
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  @include('unit.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Monitoring
        <small>Executive Profile</small>
      </h1>
    </section>
<div class="box box-primary" hidden="">
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px" hidden=""></canvas>
              </div>
            </div>
            <!-- /.box-body -->
</div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
              <li class="active"><a href="#done" data-toggle="tab">Sudah Mengisi</a></li>
              <li><a href="#yet" data-toggle="tab">Belum Mengisi</a></li>
          </ul>
        <div class="tab-content">
        <div class="active tab-pane" id="done">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Monitoring Pegawai</h3>
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row pull-right">
                  <div class="col-lg-12 ">
                    <form action="{{route('unit.showfilter')}}" class="form-inline" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="row"> 
                          <div class="col-lg-8">
                            <div class="form-group">
                            @if($unit == 'all')
                                <select class="form-control select2" style="width: 100%;" name="unit">
                                <option selected="selected" value="all" >Semua Unit</option>
                                @foreach($divisi as $div)
                                <option value="{{$div->nama_divisi}}">{{$div->nama_divisi}}</option>
                                @endforeach
                                </select>
                            @else
                                <select class="form-control select2" style="width: 100%;" name="unit">
                                <option selected="selected" value="$unit" >{{$unit}}</option>
                                @foreach($divisi as $div)
                                  @if($div == $unit)
                                  @else
                                  <option value="{{$div->nama_divisi}}">{{$div->nama_divisi}}</option>
                                  @endif
                                @endforeach
                                  <option value="all">Semua Unit</option>
                                </select>
                            @endif
                                </div>
                              </div>
                            <div class="col-lg-4">
                          <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
              <br>
              <br>          
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Divisi/Satuan Unit</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>EDU</th>
                  <th>PC</th>
                  <th>AE </th>
                  <th>CI </th>
                  <th>BIO</th>
                  <th>MP </th>
                  <th>PDF</th>
                  <th>Foto</th>
                  <th>Download</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pegawai as $peg)
                <tr>
                  <td>{{$peg->id}}</td>
                  <td>{{$peg->Divisi_Satuan}}</td>
                  <td>{{$peg->NIP}}</td>
                  <td>{{$peg->Nama_Lengkap}}</td>
                  @if($peg->Education_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg->Professional_Certification_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg->Area_of_Expertise_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg->Career_Interest_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg->About_and_Experience_1 === null && $peg->About_and_Experience_3 === null && $peg->About_and_Experience_2 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg->Masterpiece_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  <form action="{{route('monittable')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="nippeg" id="nippeg" value="{{$peg->NIP}}" />
                  <td>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" name="pdf[]" value="{{$peg->File_Foto}}" checked>
                    </label>
                  </div> 
                  </td>
                  <td>
                  <div class="form-group">
                  @if(File::exists(public_path("fotoupload/".$peg->File_Foto.".JPG")))
                  <label>
                      <input type="checkbox" class="minimal" name="foto[]" value="{{$peg->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".PNG")))
                  <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="{{$peg->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".JPEG")))
                  <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="{{$peg->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".jpg")))
                 <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="{{$peg->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".png")))
                  <label>
                      <input type="checkbox" class="minimal" name="foto[]" value="{{$peg->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".jpeg")))
                  <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="{{$peg->File_Foto}}" checked>
                  </label>
                  @else
                  <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="" disabled>
                  </label>
                  @endif
                  </div>
                  </td>
                  <td>
                  <button type="submit" class="btn btn-block btn-primary" name="submitbutton" value="1"><i class="fa fa-download"></i></button>
                  </td>
                </tr>
                </form>
                @endforeach
              </tbody>
              </table>
              <div class="row">
              <div class="col-md-3">
              <a href="{{action('UnitController@downloadfotoall')}}" class="btn btn-block btn-success"><i class="fa fa-download"></i>&nbsp; Download Foto</a>
              </div>
              <div class="col-md-3">
              <a href="{{action('UnitController@downloadpdfall')}}" class="btn btn-block btn-success"><i class="fa fa-download"></i>&nbsp; Download Pdf</a>
              </div>
              <div class="col-md-3">
              <form action="{{route('excelDownload')}}" method="post" enctype="multipart/form-data">
              <input name="unit" type="hidden" value="{{$unit}}">
               {{ csrf_field() }}
              <a href="{{action('UnitController@downloadexcel')}}"> <button type="submit" class="btn btn-block btn-success"><i class="fa fa-download"></i>&nbsp; Download Excel</button></a>
              </form>
              </div>
              <div class="col-md-3">
              <a href="{{action('UnitController@downloadlapor')}}" target="_blank"> <button type="button" class="btn btn-block btn-success"><i class="fa fa-download"></i>&nbsp; Download as PDF</button></a>
              </div>
              </div>
            </div>
            <!-- /.box-body -->          
          </div>
        </div>
        <div class="tab-pane" id="yet">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Monitoring Pegawai</h3>
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row pull-right">
                  <div class="col-lg-12 ">
                    <form action="{{route('showfilter')}}" class="form-inline" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="row"> 
                          <div class="col-lg-8">
                            <div class="form-group">
                            @if($unit == 'all')
                                <select class="form-control select2" style="width: 100%;" name="unit">
                                <option selected="selected" value="all" >Semua Unit</option>
                                @foreach($divisi as $div)
                                <option value="{{$div->nama_divisi}}">{{$div->nama_divisi}}</option>
                                @endforeach
                                </select>
                            @else
                                <select class="form-control select2" style="width: 100%;" name="unit">
                                <option selected="selected" value="$unit" >{{$unit}}</option>
                                @foreach($divisi as $div)
                                  @if($div == $unit)
                                  @else
                                  <option value="{{$div->nama_divisi}}">{{$div->nama_divisi}}</option>
                                  @endif
                                @endforeach
                                <option value="all">Semua Unit</option>
                                </select>
                            @endif
                            </div>
                          </div>
                            <div class="col-lg-4">
                          <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>          
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Divisi/Satuan Unit</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>EDU</th>
                  <th>PC</th>
                  <th>AE </th>
                  <th>CI </th>
                  <th>BIO</th>
                  <th>MP </th>
                  <th>PDF</th>
                  <th>Foto</th>
                  <th>Download</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pegawai2 as $peg2)
                <tr>
                  <td>{{$peg2->id}}</td>
                  <td>{{$peg2->Divisi_Satuan}}</td>
                  <td>{{$peg2->NIP}}</td>
                  <td>{{$peg2->Nama_Lengkap}}</td>
                  @if($peg2->Education_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg2->Professional_Certification_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg2->Area_of_Expertise_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg2->Career_Interest_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg2->About_and_Experience_1 === null && $peg2->About_and_Experience_3 === null && $peg2->About_and_Experience_2 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  @if($peg2->Masterpiece_1 === null)
                  <td> <span class="glyphicon glyphicon-remove-sign" style="font-size: 35px;color: red;"></span></td>
                  @else
                  <td> <span class="glyphicon glyphicon-ok-sign" style="font-size: 35px;color: green;"></span></td>
                  @endif
                  <form action="{{route('monittable')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="nippeg" id="nippeg" value="{{$peg2->NIP}}" />
                  <td>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" name="pdf[]" value="{{$peg2->File_Foto}}" checked>
                    </label>
                  </div> 
                  </td>
                  <td>
                  <div class="form-group">
                  @if(File::exists(public_path("fotoupload/".$peg2->File_Foto.".JPG")))
                  <label>
                      <input type="checkbox" class="minimal" name="foto[]" value="{{$peg2->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg2->File_Foto.".PNG")))
                  <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="{{$peg2->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg2->File_Foto.".JPEG")))
                  <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="{{$peg2->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg2->File_Foto.".jpg")))
                 <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="{{$peg2->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg2->File_Foto.".png")))
                  <label>
                      <input type="checkbox" class="minimal" name="foto[]" value="{{$peg2->File_Foto}}" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg2->File_Foto.".jpeg")))
                  <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="{{$peg2->File_Foto}}" checked>
                  </label>
                  @else
                  <label>
                    <input type="checkbox" class="minimal" name="foto[]" value="" disabled>
                  </label>
                  @endif
                  </div>
                  </td>
                  <td>
                  <button type="submit" class="btn btn-block btn-primary" name="submitbutton" value="1"><i class="fa fa-download"></i></button>
                  </td>
                </tr>
                </form>
                @endforeach
              </tbody>
              </table>
              <div class="row">
              <div class="col-md-3">
              <a href="{{action('UnitController@downloadfotoall')}}" class="btn btn-block btn-success"><i class="fa fa-download"></i>&nbsp; Download Foto</a>
              </div>
              <div class="col-md-3">
              <a href="{{action('UnitController@downloadpdfall')}}" class="btn btn-block btn-success"><i class="fa fa-download"></i>&nbsp; Download Pdf</a>
              </div>
              <div class="col-md-3">
              <form action="{{route('excelDownload')}}" method="post" enctype="multipart/form-data">
              <input name="unit" type="hidden" value="{{$unit}}">
               {{ csrf_field() }}
              <a href="{{action('UnitController@downloadexcel')}}"> <button type="submit" class="btn btn-block btn-success"><i class="fa fa-download"></i>&nbsp; Download Excel</button></a>
              </form>
              </div>
              <div class="col-md-3">
              <a href="{{action('UnitController@downloadlapor')}}" target="_blank"> <button type="button" class="btn btn-block btn-success"><i class="fa fa-download"></i>&nbsp; Download as PDF</button></a>
              </div>
              </div>
            </div>
            <!-- /.box-body -->          
          </div>
        </div>
        </div>
        </div>
        </div>
        <!-- /.col (LEFT) -->

        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ URL::asset('dist/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('dist/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('dist/bower_components/chart.js/Chart.js')}}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('dist/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/dist/js/demo.js')}}"></script>
<!-- page script -->
<!-- DataTables -->
<script src="{{ URL::asset('dist/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('dist/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
    })
  })
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
    })
  })
</script>
</body>
</html>
