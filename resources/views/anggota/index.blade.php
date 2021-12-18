@extends('layouts.app')

@section('title', 'ANGGOTA')

@section('title1', 'Daftar Anggota Perpustakaan!')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          @can('manage-users')
          <div class="card-title">
            <a href="/anggota/create" class="btn btn-success">+ Add Data</a>
            <a href="{{ route('print_all') }}" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
          </div>
          @endcan
          <div class="card-tools">
            <form action="{{ route('search') }}" method="post" >
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="search" class="form-control float-right" id="search" placeholder="Masukkan Nama">
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
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                @can('manage-users')
                <th>Action</th>
                @endcan
              </tr>
            </thead>
            <tbody>
              @foreach($anggota as $a)
              <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->nama }}</td>
                <td>
                <img width="150px" src="{{asset('storage/'.$a->photo)}}" alt="image" >
                </td>
                <td>{{ $a->jenis_kelamin }}</td>
                <td>{{ $a->alamat }}</td>
                @can('manage-users')
                <td>
                <form action="/anggota/{{$a->id}}" method="post">
                  <a href="/anggota/{{$a->id}}/edit" class="btn btn-warning">Edit</a>
                  <a href="/anggota/{{$a->id}}" class="btn btn-info">View</a>
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