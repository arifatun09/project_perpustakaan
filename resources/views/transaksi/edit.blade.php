@extends('layouts.app')

@section('title', 'EDIT DATA')

@section('title1', 'Edit Data Transaksi')

@section('content')
<form action="/buku" method="post"  enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <label for="anggota_id">Nama Peminjam</label>
                <div class="col-sm-12">
                    <div class="form-group">
                        <select class="form-control" name="anggota_id">
                            <option value='{{ $transaksi->anggota_id }} - {{ $transaksi->nama }}'readonly>{{ $transaksi->anggota_id }} - {{ $transaksi->nama }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">                
            <div class="form-group">
                <label for="buku_id">Judul Buku</label>
                <div class="col-sm-12">
                    <div class="form-group">
                        <select class="form-control" name="buku_id">
                            <option value='{{ $transaksi->buku_id }}'readonly>{{ $transaksi->buku_id }} - {{ $transaksi->judul }}</option>
                        </select>  
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tgl_pinjam">Tanggal Peminjaman</label>
            <input type="date" class="form-control" required="required" name="tgl_pinjam"  value="{{ $transaksi->tgl_pinjam }}">
        </div>
        <div class="form-group">
            <label for="tgl_kembali">Tanggal Pengembalian</label>
            <input type="date" class="form-control" required="required" name="kategori" value="{{ $transaksi->tgl_kembali }}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="Status">
                        <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                        <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                    </select>  
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection