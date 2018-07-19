@extends('superadmin.app')

@section('content')

@include('superadmin.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Monitoring
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="col-md-6">
         <div class="row">
           <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div>
              </div>
            <!-- /.box -->
           </div>
           <div class="col-md-6">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div>
              </div>
            <!-- /.box -->
           </div>
         </div>
       </div>
       <div class="col-md-6">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Divisi/Satuan Unit</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Status Pengisian</th>
                  <th>PDF</th>
                  <th>Foto</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Divisi A
                  </td>
                  <td>6687902AD</td>
                  <td>Astrid</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Divisi B
                  </td>
                  <td>6687902AS</td>
                  <td>Sirria</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
       </div>
     </div>


    </section>
    <!-- /.content -->

  </div>
@endsection