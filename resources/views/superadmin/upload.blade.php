@extends('superadmin.app')

@section('content')

@include('superadmin.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Upload File
        <small>Data Pegawai</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
          <br>
          <br>
          @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('success') }}</strong>
        </div>
        @endif
 
    @if ( Session::has('error') )
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('error') }}</strong>
    </div>
    @endif
 
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <div>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
</div>
@endif
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  Choose your xls/csv File : <input type="file" name="file" class="form-control">
                  <input type="submit" class="btn btn-primary btn-md" style="margin-top: 3%">
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
      </section>
    <!-- /.content -->
  </div>
@endsection