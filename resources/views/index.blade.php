<table>
  <tr>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Aksi</th>
  </tr>
    @foreach ($mahasiswa as $value)
      <tr>
      <td>{{$value->nama}}</td>
      <td>{{$value->jenis_kelamin}}</td>
      <td>
        {!! Form::open(['method' => 'delete','route' => ['mahasiswa.destroy', $value->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        |
        {!! Form::open(['method' => 'get','route' => ['mahasiswa.edit', $value->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Edit', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
      </tr>
    @endforeach
</table>

@if (count($errors)>0)
  @foreach ($errors->all() as $error)
    {{$error}}
  @endforeach
@endif

@if ($message=session('message'))
  {{$message}}<br>
@endif
{{Form::open(array('action'=>'MahasiswaController@store','method'=>'post'))}}
<table>
  <tr>
    <td>{{Form::label('nama','Nama: ')}}</td>
    <td>{{Form::text('nama','',['style'=>'width:200pt;'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('jenis_kelamin','Jenis Kelamin: ')}}</td>
    <td>{{Form::select('jenis_kelamin',['Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan'],'',['style'=>'width:200pt'])}}
  </tr>
  <tr>
    <td colspan='2' align='center'>{{Form::submit('Simpan Mahasiswa')}}</td>
  </tr>
</table>
{{Form::close()}}
