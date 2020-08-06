@extends('layouts.master')

@section('content')
<h1>Edit Data Dosen</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        Data berhasil ditambahkan 
        </div>
        @endif
            <div class="row">
            <div class="col-lg-12">
            <form action="{{ route('dosen') }}" method="post">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Dosen</label>
                    <input name="kode_dosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Dosen">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama dosen</label>
                    <input name="nama_dosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama dosen">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">NIDN</label>
                    <input name="nidn"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nidn">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">handphone</label>
                    <input name="handphone"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="handphone">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            </div>
    @endsection


