@extends('layouts.app')

@section('title', 'TAMBAH DATA')

@section('title1', 'Tambah Data Anggota')

@section('content')
<form action="/anggota" method="post"  enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" required="required" name="name" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <div class="input-group">
                <div class="custom-file">
                <input type="file" class="form-control" required="required" name="photo"></br>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="jenis_kelamin">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>  
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" required="required" name="alamat" placeholder="Masukkan Alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection