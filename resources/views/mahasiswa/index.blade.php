@extends('layouts.master')

@section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        Data berhasil ditambahkan 
        </div>
        @endif
            <div class="row">
                <div class="col-6">
                    <h1>Data Mahasiswa</h1>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Mahasiswa
                </button>

                    
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>NIM</th>
                        <th>NAMA LENGKAP</th>
                        <th>JENIS KELAMIN</th>
                        <th>PRODI</th>
                        <th>ALAMAT</th>
                        <th>AKSI</thr>
                    </tr>
                    @foreach($data_mahasiswa as $mahasiswa)
                    <tr>
                        <td>{{$mahasiswa->nim}}</td>
                        <td>{{$mahasiswa->nama_lengkap}}</td>
                        <td>{{$mahasiswa->jenis_kelamin}}</td>
                        <td>{{$mahasiswa->prodi}}</td>
                        <td>{{$mahasiswa->alamat}}</td>
                        <td>
                            <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Di hapus ?')">Delete</a>
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
                        <form action="{{ route('mahasiswa') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIM</label>
                                <input name="nim"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option Value="L">Laki-Laki</option>
                                <option Value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Program Studi</label>
                                <select name="prodi" class="form-control" id="exampleFormControlSelect1">
                                <option Value="TI">Teknik Informatika</option>
                                <option Value="TM">Teknik Mesin</option>
                                <option Value="TE">Teknik Elektro</option>
                                <option Value="TS">Teknik Sipil</option>
                                </select>
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


