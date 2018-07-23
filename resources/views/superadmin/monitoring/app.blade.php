<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>XProfile | Monitoring</title>
  <!-- CSS -->
<style>
/* Scrollbar styles */
::-webkit-scrollbar {
width: 12px;
height: 12px;
}

::-webkit-scrollbar-track {
background: #f5f5f5;
border-radius: 10px;
}

::-webkit-scrollbar-thumb {
border-radius: 10px;
background: #ccc;  
}

::-webkit-scrollbar-thumb:hover {
background: #999;  
}

#myDiv.fullscreen{
      z-index: 9999; 
      width: 100%; 
      height: 100%; 
      position: fixed; 
      top: 0; 
      left: 0; 
   }

</style>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('dist/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('dist/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ URL::asset('dist/bower_components/Ionicons/css/ionicons.min.css')}}">
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
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Control Sidebar Toggle Button -->
          <li>
             <a class="dropdown-item" href="#">Selamat Datang, Superadmin</a>
          </li>
          <li>
             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
             </form>
          </li>
        </ul>
      </div>
    </nav>  
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  @include('superadmin.sidebar')

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
        <div class="col-md-6">
          <div id="myDiv" class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <div class="pull-right">
                <button class="btn btn-box-tool"><i class="glyphicon glyphicon-resize-full"></i></button>
              </div>
            </div>
            <div class="box-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">All</h3>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="chart">
                        <canvas id="barChart" style="height:200px"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Bar2 Chart</h3>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="chart">
                        <canvas id="barChart2" style="height:200px"></canvas>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Jenjang</h3>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="chart">
                        <canvas id="barChart3" style="height:200px"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Divisi/Satuan/Unit</h3>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="chart">
                        <canvas id="barChart4" style="height:200px"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
            </div>     
          </div>
        </div>
        <div class="col-md-6">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
              <li class="active"><a href="#done" data-toggle="tab">Sudah Mengisi</a></li>
              <li><a href="#yet" data-toggle="tab">Belum Mengisi</a></li>
          </ul>
        <div class="tab-content">
        <div class="active tab-pane" id="done">
          <div class="box" style="overflow: scroll; max-height: 600px;">
            <div class="box-header">
              <h3 class="box-title">Tabel Monitoring Pegawai</h3>
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
                  <td bgcolor="red"> </td>
                  @else
                  <td bgcolor="green"> </td>
                  @endif
                  @if($peg->Professional_Certification_1 === null)
                  <td bgcolor="red"> </td>
                  @else
                  <td bgcolor="green"> </td>
                  @endif
                  @if($peg->Area_of_Expertise_1 === null)
                  <td bgcolor="red"> </td>
                  @else
                  <td bgcolor="green"> </td>
                  @endif
                  @if($peg->Career_Interest_1 === null)
                  <td bgcolor="red"> </td>
                  @else
                  <td bgcolor="green"> </td>
                  @endif
                  @if($peg->About_and_Experience_1 === null)
                  <td bgcolor="red"> </td>
                  @else
                  <td bgcolor="green"> </td>
                  @endif
                  @if($peg->Masterpiece_1 === null)
                  <td bgcolor="red"> </td>
                  @else
                  <td bgcolor="green"> </td>
                  @endif
                  <td>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" checked>
                    </label>
                  </div> 
                  </td>
                  <td>
                  <div class="form-group">
                  @if(File::exists(public_path("fotoupload/".$peg->File_Foto.".JPG")))
                  <label>
                      <input type="checkbox" class="minimal" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".PNG")))
                  <label>
                    <input type="checkbox" class="minimal" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".JPEG")))
                  <label>
                    <input type="checkbox" class="minimal" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".jpg")))
                 <label>
                    <input type="checkbox" class="minimal" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".png")))
                  <label>
                      <input type="checkbox" class="minimal" checked>
                  </label>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".jpeg")))
                  <label>
                    <input type="checkbox" class="minimal" checked>
                  </label>
                  @else
                  <label>
                    <input type="checkbox" class="minimal">
                  </label>
                  @endif
                  </div>
                  </td>
                  <td>
                  @if(File::exists(public_path("fotoupload/".$peg->File_Foto.".JPG")))
                  <a href="fotoupload/{{$peg->File_Foto}}.JPG" href="{{action('PdfGenerateController@download')}}" download="{{$peg->File_Foto}}.JPG">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".PNG")))
                  <a href="fotoupload/{{$peg->File_Foto}}.PNG" href="{{action('PdfGenerateController@download')}}" download="{{$peg->File_Foto}}.PNG">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".JPEG")))
                  <a href="fotoupload/{{$peg->File_Foto}}.JPEG" href="{{action('PdfGenerateController@download')}}" download="{{$peg->File_Foto}}.JPEG">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".jpg")))
                  <a href="fotoupload/{{$peg->File_Foto}}.jpg" href="{{action('PdfGenerateController@download')}}" download="{{$peg->File_Foto}}.jpg">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".png")))
                  <a href="fotoupload/{{$peg->File_Foto}}.png" href="{{action('PdfGenerateController@download')}}" target="_blank" download="{{$peg->File_Foto}}.png">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".jpeg")))
                  <a href="fotoupload/{{$peg->File_Foto}}.jpeg" href="{{action('PdfGenerateController@download')}}" download="{{$peg->File_Foto}}.jpeg">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->          
          </div>
        </div>
        <div class="tab-pane" id="yet">
          <div class="box" style="overflow: scroll; max-height: 600px;">
            <div class="box-header">
              <h3 class="box-title">Tabel Monitoring Pegawai</h3>
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Divisi/Satuan Unit</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>EDU</th>
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
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" checked>
                    </label>
                  </div> 
                  </td>
                  <td>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" checked>
                    </label>
                  </div>
                  </td>
                  <td>
                  @if(File::exists(public_path("fotoupload/".$peg->File_Foto.".JPG")))
                  <a href="fotoupload/{{$peg->File_Foto}}.JPG" download="{{$peg->File_Foto}}.JPG">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".PNG")))
                  <a href="fotoupload/{{$peg->File_Foto}}.PNG" download="{{$peg->File_Foto}}.PNG">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".JPEG")))
                  <a href="fotoupload/{{$peg->File_Foto}}.JPEG" download="{{$peg->File_Foto}}.JPEG">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".jpg")))
                  <a href="fotoupload/{{$peg->File_Foto}}.jpg" download="{{$peg->File_Foto}}.jpg">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".png")))
                  <a href="fotoupload/{{$peg->File_Foto}}.png" download="{{$peg->File_Foto}}.png">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @elseif(File::exists(public_path("fotoupload/".$peg->File_Foto.".jpeg")))
                  <a href="fotoupload/{{$peg->File_Foto}}.jpeg" download="{{$peg->File_Foto}}.jpeg">
                  <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"></i></button>
                  </a>
                  @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
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


<script type="text/javascript">
    var areaChartData = {
      labels  : {!! json_encode($kategori) !!},
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : {!! json_encode($total) !!}
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : {!! json_encode($total) !!}
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

    //-------------
    //- BAR CHART 2-
    //-------------
    var barChartCanvas                   = $('#barChart2').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)


    //-------------
    //- BAR CHART 3-
    //-------------

    var jenjangChartData = {
      labels  : {!! json_encode($jenjang) !!},
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : {!! json_encode($total_per_jenjang) !!},
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : {!! json_encode($total_per_jenjang) !!},
        }
      ]
    }

    var barChartCanvas                   = $('#barChart3').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = jenjangChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
</script>

<script>
  $(document).ready(function () {
    //Toggle fullscreen
    $("#panel-fullscreen").click(function (e) {
        e.preventDefault();
        
        var $this = $(this);
    
        if ($this.children('i').hasClass('glyphicon-resize-full'))
        {
            $this.children('i').removeClass('glyphicon-resize-full');
            $this.children('i').addClass('glyphicon-resize-small');
        }
        else if ($this.children('i').hasClass('glyphicon-resize-small'))
        {
            $this.children('i').removeClass('glyphicon-resize-small');
            $this.children('i').addClass('glyphicon-resize-full');
        }
        $(this).closest('.panel').toggleClass('panel-fullscreen');
    });
});
</script>
<script>
$('button').click(function(e){
    $('#myDiv').toggleClass('fullscreen'); 
});
</script>
</body>
</html>
