@extends('layouts.app')

@section('title', 'Transaksi')

@section('title1', 'Daftar Transaksi Perpustakaan!')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        @can('manage-users')
        <div class="card-title">
          <a href="/transaksi/create" class="btn btn-success">+ Add Data</a>
        </div>
        @endcan
        <div class="card-tools">
          <form action="{{ route('searchtrans') }}" method="post" >
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="search" class="form-control float-right" placeholder="Nama/Judul">
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
              <th>Nomor</th>
              <th>Nama Peminjam</th>
              <th>Judul Buku</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Status</th>
              @can('manage-users')
              <th>Opsi</th>
              @endcan
            </tr>
          </thead>
          <tbody>
            @foreach($transaksis as $a => $t)
            <tr>
              <td>{{ $a + 1 }}</td>
              <td>{{ $t->nama }}</td>
              <td>{{ $t->judul }}</td>
              <td>{{ $t->tgl_pinjam }}</td>
              <td>{{ $t->tgl_kembali }}</td>
              <td>{{ $t->status }}</td>
              @can('manage-users')
              <td>
              <form action="/transaksi/{{$t->transaksi_id}}" method="post">
                <a href="/transaksi/{{$t->transaksi_id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/transaksi/{{$t->transaksi_id}}" class="btn btn-info">View</a>
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