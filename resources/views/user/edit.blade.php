@extends('layouts.app')

@section('title', 'EDIT DATA')

@section('title1', 'Edit Data user')

@section('content')
<form action="/user/{{$user->id}}" method="post"  enctype="multipart/form-data">
{{csrf_field()}}
@method('PUT')
<form action="/user" method="post"  enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="form-group">
            <label for="judul">Nama</label>
            <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="kategori">Email</label>
            <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="role">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>  
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
</form>
@endsection