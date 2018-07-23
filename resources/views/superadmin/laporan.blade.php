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
                  <th>Foto</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exprofile as $peg)
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
                    @if(File::exists(base_path("public/fotoupload/".$peg->File_Foto.".JPG")))
                    <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" name="pdf" value="{{$peg->File_Foto}}" checked>
                    </label>
                    </div>
                    @elseif(File::exists(base_path("public/fotoupload/".$peg->File_Foto.".jpg")))
                    <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" name="pdf" value="{{$peg->File_Foto}}" checked>
                    </label>
                    </div>
                    @endif  
                  </td>                  
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->          
          </div>
        </section>
      </div>
    </main>
  </body>

</html>