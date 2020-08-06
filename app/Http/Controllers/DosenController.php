<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data_dosen = \App\dosen::all();
        return view('dosen.index',['data_dosen' => $data_dosen]);
    }

    public function create(Request $request)
    {
        \App\dosen::create($request->all());
        return redirect('/dosen')->with('sukses','Data berhasil ditambahkan');
    }  

    public function edit($id)
    {
        $dosen = \App\dosen::find($id);
        return view('/dosen/edit',['dosen' => $dosen]);
    }
    public function update(Request $request,$id)
    {
        $dosen = \App\dosen::find($id);
        $dosen->update($request->all());
        return redirect('/mahdosenasiswa')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $dosen = \App\dosen::find($id);
        $dosen->delete();
        return redirect('/dosen')->with('sukses','Data berhasil hapus');
    }
}
