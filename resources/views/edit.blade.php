{{Form::open(array('method'=>'post','route'=>['mhs_update',$mahasiswa->id]))}}
  Nama: {{Form::text('nama',$mahasiswa->nama)}}<br>
  Jenis kelamin: {{Form::select('jenis_kelamin',['Laki-laki'=>"Laki-laki",'Perempuan'=>"Perempuan"],$mahasiswa->jenis_kelamin)}}
{{Form::close()}}

<a href="{{route('home',['nama'=>'rendy','id'=>'aidi'])}}">Home</a>
