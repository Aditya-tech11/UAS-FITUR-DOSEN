<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\mahasiswa::all();
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
        \App\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses','Data berhasil ditambahkan');
    }  

    public function edit($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        return view('/mahasiswa/edit',['mahasiswa' => $mahasiswa]);
    }
    public function update(Request $request,$id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('sukses','Data berhasil hapus');
    }
}
