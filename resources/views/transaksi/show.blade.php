@extends('layouts.app')

@section('title', 'TAMPIL DATA')

@section('title1')
<div> {{_('Detail Data Peminjaman')}}  </div>
@endsection

@section('content')
<h2>Identitas Peminjam</h2>
<table class="table table-responsive">
    <tr><th>Nama</th><td>{{ $transaksi[0]->nama }}</td></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $transaksi[0]->jenis_kelamin }}</td></tr>
    <tr><th>Alamat</th><td>{{ $transaksi[0]->alamat }}</td></tr>
</table>
<h2>Buku yang Dipinjam</h2>
<table class="table table-responsive">
    <tr><th>Judul</th><td>{{ $transaksi[0]->judul }}</td></tr>
    <tr><th>Kategori</th><td>{{ $transaksi[0]->kategori }}</td></tr>
    <tr><th>Pengarang</th><td>{{ $transaksi[0]->pengarang }}<td></td></tr>
    <tr><th>Penerbit</th><td>{{ $transaksi[0]->penerbit }}</td></tr>
</table>
<h2>Tanggal Peminjaman dan Pengembalian</h2>
<table class="table table-responsive">
    <tr><th>Tanggal Peminjaman</th><td>{{ $transaksi[0]->tgl_pinjam }}</td></tr>
    <tr><th>Tanggal Pengembalian</th><td>{{ $transaksi[0]->tgl_kembali }}</td></tr>
    <tr><th>Status</th><td>{{ $transaksi[0]->status }}</td></tr>
</table>
<a href="/transaksi/{{$transaksi[0]->transaksi_id}}/printtrans" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
<a href='/transaksi' class="btn btn-dark">Back</a>
@endsection