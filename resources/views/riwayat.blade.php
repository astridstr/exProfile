@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <br>
              <img style="margin: 0 auto; width: 160px; height: 240px; border-style: groove;" class="img-responsive" src="{{ asset('img/user-profile.png') }}" alt="User profile picture">
              <h4 class="text-center"><strong>IDA BAGUS ARI WARDANA</strong><span style="font-size: 16px;"> (Ir., M.T.)</span></h4>
              <p class="text-muted text-center">NIK. 5171040306680009<br>NPWP</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <i class="fa fa-info fa-fw" aria-hidden="true"></i>&nbsp; Banyuwangi, 1968-06-03
                </li>
                <li class="list-group-item">
                  <i class="fa fa-black-tie fa-fw" aria-hidden="true"></i>&nbsp; Kepala Divisi Operasi Jawa Timur, Bali dan Nusa Tenggara PT PLN (Persero)
                </li>
                <li class="list-group-item">
                  <i class="fa fa-phone fa-fw" aria-hidden="true"></i>&nbsp; 087980872323
                </li>
                <li class="list-group-item">
                  <i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i>&nbsp; bagus.wardana68@gmail.com
                </li>
                <li class="list-group-item">
                  <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Delta Sari Indah Blok AD-12 Waru Sidoarjo Jawa Timur
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-users margin-r-5"></i>&nbsp;<h3 class="box-title">Keterangan Keluarga dan Referensi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <h4><i class="fa fa-heart fa-fw" aria-hidden="true"></i>&nbsp; Istri / Suami</h4>

              <div class="box-body">
                <table id="example2" class="table table-bordered table-responsive table-hover">
                  <thead style="background-color: ">
                  <tr class="info">
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Menikah</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Yulistriati Dyah Anggraeni</td>
                    <td>Madiun</td>
                    <td>04/07/1971</td>
                    <td>23/06/1995</td>
                    <td>P</td>
                    <td>Ibu Rumah Tangga</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                </table>
              </div>


              <hr>

              <h4><i class="fa fa-heart fa-fw" aria-hidden="true"></i>&nbsp; Anak</h4>

              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover table-condensed">
                  <thead>
                  <tr class="info">
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Menikah</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Yulistriati Dyah Anggraeni</td>
                    <td>Madiun</td>
                    <td>04/07/1971</td>
                    <td>23/06/1995</td>
                    <td>P</td>
                    <td>Ibu Rumah Tangga</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                </table>

                <br>

                <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Lainnya</button>
                      </div>
                    </div>
                </form>
      
                <br>
        
                </div>


              


            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
