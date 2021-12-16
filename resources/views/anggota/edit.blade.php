@extends('layouts.app')

@section('title', 'EDIT DATA')

@section('title1', 'Edit Data Anggota')

@section('content')
<form action="/anggota/{{$anggota->id}}" method="post"  enctype="multipart/form-data">
{{csrf_field()}}
@method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" required="required" name="name" value="{{$anggota->nama}}">
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="form-control" required="required" id="photo" name="photo" value="{{$anggota->photo}}">
                    <img width="150px" src="{{asset('storage/'.$anggota->photo)}}">
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
            <input type="text" class="form-control" required="required" name="alamat" value="{{$anggota->alamat}}">
        </div>
        <button type="edit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection