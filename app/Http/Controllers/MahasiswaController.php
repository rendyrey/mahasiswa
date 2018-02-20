<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaM;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['mahasiswa'] = MahasiswaM::get();
        return view('index',$data);
    }

    public function home($k,$id){
      echo $k.$id;
    }

    public function coba(){

      for($i=0;$i<850000;$i++){
        $input = new MahasiswaM;
        $input->nama = 'Rendy';
        $input->jenis_kelamin = 'Laki-laki';
        $input->save();
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
          'nama'=>'required',
          'jenis_kelamin'=>'required'
        ]);
        $input = new MahasiswaM;
        $input->nama = $request->nama;
        $input->jenis_kelamin = $request->jenis_kelamin;
        $input->save();
        // echo dd($request->all());
        // return redirect()->route('mahasiswa.index')->with('message','Mahasiswa Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['mahasiswa'] = MahasiswaM::find($id);

        return view('edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'nama' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        // $data['']
        MahasiswaM::find($id)->update($request->all());
        //atau bis akaya gini
        // $mhs = MahasiswaM::find($id);
        // $mhs->nama = $request->nama;
        // $mhs->jenis_kelamin = $request->jenis_kelamin;
        // $mhs->save();
        // echo $request->input('body');
        // print_r($request);
        return redirect()->route('mahasiswa.index')
                        ->with('message','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        MahasiswaM::find($id)->delete();
        return redirect()->route('mahasiswa.index')->with('message','Mahasiswa Berhasil Dihapus!');
    }
}
