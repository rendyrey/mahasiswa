<table>
  <tr>
    <th>Nama Mahasiswa</th>
    <th>Mata Kuliah yg dikontrak</th>
    <th>Aksi</th>
  </tr>

</table>

@if (count($errors)>0)
  @foreach ($errors->all() as $error)
    {{$error}}
  @endforeach
@endif

@if ($message=session('message'))
  {{$message}}<br>
@endif
{{Form::open(array('action'=>'KontrakController@store','method'=>'post'))}}
<table>
  <tr>
    <td>{{Form::label('id_mahasiswa','Nama: ')}}</td>
    <td>{{Form::select('id_mahasiswa',$mhs_opt,'',['style'=>'width:200pt'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('jenis_kelamin','Jenis Kelamin: ')}}</td>
    <td>{{Form::select('mata_kuliah',['Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan'],'',['style'=>'width:200pt'])}}
  </tr>
  <tr>
    <td colspan='2' align='center'>{{Form::submit('Simpan Mahasiswa')}}</td>
  </tr>
</table>
{{Form::close()}}
