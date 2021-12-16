@extends('layouts.app')

@section('title', 'EDIT DATA')

@section('title1', 'Edit Data Buku')

@section('content')
<form action="/buku/{{$buku->id}}" method="post"  enctype="multipart/form-data">
{{csrf_field()}}
@method('PUT')
<form action="/buku" method="post"  enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" required="required" name="judul" value="{{$buku->judul}}">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" required="required" name="kategori" value="{{$buku->kategori}}">
        </div>
        <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" required="required" name="pengarang" value="{{$buku->pengarang}}">
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" required="required" name="penerbit" value="{{$buku->penerbit}}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
</form>
@endsection