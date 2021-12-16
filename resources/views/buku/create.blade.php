@extends('layouts.app')

@section('title', 'TAMBAH DATA')

@section('title1', 'Tambah Data Buku')

@section('content')
<form action="/buku" method="post"  enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" required="required" name="judul" placeholder="Masukkan Judul Buku">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" required="required" name="kategori" placeholder="Masukkan kategori">
        </div>
        <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" required="required" name="pengarang" placeholder="Masukkan pengarang">
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" required="required" name="penerbit" placeholder="Masukkan penerbit">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection