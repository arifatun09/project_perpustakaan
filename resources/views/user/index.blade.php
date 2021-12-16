@extends('layouts.app')

@section('title', 'USER')

@section('title1', 'Daftar User Perpustakaan!')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <form action="{{ route('searchuser') }}" method="post" >
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="searchuser" id="searchuser"  class="form-control float-right" placeholder="Masukkan Nama">
                @method('GET')
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID User</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $u)
              <tr>
                <td>{{ $u->id}}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->role }}</td>
                <td>
                <form action="/user/{{$u->id}}" method="post">
                  <a href="/user/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                  <a href="/user/{{$u->id}}" class="btn btn-info">View</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" name="delete" class="btn btn-danger">Delete</button><br><br>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection