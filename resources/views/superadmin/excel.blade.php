<!doctype html>
<html>
  <head>

  </head>
  <body>
  <div>
      <p>Data Executive Profile</p>

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
                  <td> Belum </td>
                  @else
                  <td> Sudah </td>
                  @endif
                  @if($peg->Professional_Certification_1 === null)
                  <td> Belum </td>
                  @else
                  <td> Sudah </td>
                  @endif
                  @if($peg->Area_of_Expertise_1 === null)
                  <td> Belum </td>
                  @else
                  <td> Sudah </td>
                  @endif
                  @if($peg->Career_Interest_1 === null)
                  <td> Belum </td>
                  @else
                  <td> Sudah </td>
                  @endif
                  @if($peg->About_and_Experience_1 === null)
                  <td> Belum </td>
                  @else
                  <td> Sudah </td>
                  @endif
                  @if($peg->Masterpiece_1 === null)
                  <td> Belum </td>
                  @else
                  <td> Sudah </td>
                  @endif
                  @if(File::exists(base_path("public/fotoupload/".$peg->File_Foto.".JPG")))
                  <td> Sudah </td>
                  @elseif(File::exists(base_path("public/fotoupload/".$peg->File_Foto.".jpg")))
                  <td> Sudah </td>
                  @elseif(File::exists(base_path("public/fotoupload/".$peg->File_Foto.".png")))
                  <td> Sudah </td>
                  @elseif(File::exists(base_path("public/fotoupload/".$peg->File_Foto.".PNG")))
                  <td> Sudah </td>
                  @elseif(File::exists(base_path("public/fotoupload/".$peg->File_Foto.".JPEG")))
                  <td> Sudah </td>
                  @elseif(File::exists(base_path("public/fotoupload/".$peg->File_Foto.".jpeg")))
                  <td> Sudah </td>
                  @else
                  <td> Belum </td>
                  @endif                    
                </tr>
                @endforeach
              </tbody>
              </table>
              </div>

  </body>
</html>
