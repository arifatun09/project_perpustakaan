@extends('layouts.app')

@section('title', 'BUKU')

@section('title1', 'Daftar Buku Perpustakaan!')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <a href="/buku/create" class="btn btn-success">+ Add Data</a>
          </div>
          <div class="card-tools">
            <form action="{{ route('searchbuku') }}" method="post" >
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="search" id="search"  class="form-control float-right" placeholder="Masukkan Judul">
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
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                @can('manage-users')
                <th>Opsi</th>
                @endcan
              </tr>
            </thead>
            <tbody>
              @foreach($buku as $b)
              <tr>
                <td>{{ $b->id}}</td>
                <td>{{ $b->judul}}</td>
                <td>{{ $b->kategori}}</td>
                <td>{{ $b->pengarang}}</td>
                <td>{{ $b->penerbit}}</td>
                @can('manage-users')
                <td>
                <form action="/buku/{{$b->id}}" method="post">
                  <a href="/buku/{{$b->id}}/edit" class="btn btn-warning">Edit</a>
                  <a href="/buku/{{$b->id}}" class="btn btn-info">View</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" name="delete" class="btn btn-danger">Delete</button><br><br>
                </form>
                </td>
                @endcan
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection