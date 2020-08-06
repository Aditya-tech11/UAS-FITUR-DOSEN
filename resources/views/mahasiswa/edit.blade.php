@extends('layouts.master')

@section('content')
        <h1>Edit Data Mahasiswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        Data berhasil ditambahkan 
        </div>
        @endif
            <div class="row">
            <div class="col-lg-12">
            <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">NIM</label>
                <input name="nim"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" value="{{$mahasiswa ->nim}}">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$mahasiswa ->nama_lengkap}}">
            </div>

            <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option Value="L" @if($mahasiswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
            <option Value="P" @if($mahasiswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
            </select>
            </div>

            <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Program Studi</label>
            <select name="prodi" class="form-control" id="exampleFormControlSelect1">
            <option Value="TI"@if($mahasiswa->prodi == 'TI') selected @endif>Teknik Informatika</option>
            <option Value="TM"@if($mahasiswa->prodi == 'TM') selected @endif>Teknik Mesin</option>
            <option Value="TE"@if($mahasiswa->prodi == 'TE') selected @endif>Teknik Elektro</option>
            <option Value="TS"@if($mahasiswa->prodi == 'TS') selected @endif>Teknik Sipil</option>
            </select>
            </div>

            <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mahasiswa->alamat}}</textarea>
            </div>
  
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-warning">Update</button>
             </form>
            </div>
            </div>
            </div>


