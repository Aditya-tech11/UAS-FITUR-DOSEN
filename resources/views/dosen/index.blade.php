@extends('layouts.master')

@section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        Data berhasil ditambahkan 
        </div>
        @endif
            <div class="row">
                <div class="col-6">
                    <h1>Data Dosen</h1>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Dosen
                </button>

                    
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>KODE DOSEN</th>
                        <th>NAMA DOSEN</th>
                        <th>NIDN</th>
                        <th>EMAIL</th>
                        <th>HANDPHONE</th>
                        <th>ALAMAT</th>
                        <th>AKSI</thr>
                    </tr>
                    @foreach($data_dosen as $dosen)
                    <tr>
                        <td>{{$dosen->kode_dosen}}</td>
                        <td>{{$dosen->nama_dosen}}</td>
                        <td>{{$dosen->nidn}}</td>
                        <td>{{$dosen->email}}</td>
                        <td>{{$dosen->handphone}}</td>
                        <td>{{$dosen->alamat}}</td>

                        <td>
                            <a href="/dosen/{{$dosen->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/dosen/{{$dosen->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Di hapus ?')">Delete</a> 
                    </tr>
                    @endforeach
                </table>  
            </div>
        </div>
 
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{ route('dosen') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kode Dosen</label>
                                <input name="kode_dosen"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Dosen">
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
                </div>
@endsection


