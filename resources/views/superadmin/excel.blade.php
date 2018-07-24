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