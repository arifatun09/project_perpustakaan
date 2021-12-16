@extends('layouts.app')

@section('title', 'TAMBAH DATA')

@section('title1', 'Tambah Data Transaksi')

@section('content')
<form action="/transaksi" method="post"  enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <label for="anggota_id">Nama Peminjam</label>
                <div class="col-sm-12">
                    <div class="form-group">
                        <select class="form-control" name="anggota_id">
                            @foreach($anggota as $a)
                             <option value='{{ $a->id }}'>{{ $a->id }} - {{ $a->nama }}</option>
                            @endforeach
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
                            @foreach($buku as $b)
                             <option value='{{ $b->id }}'>{{ $b->id }} - {{ $b->judul }}</option>
                            @endforeach
                        </select>  
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tgl_pinjam">Tanggal Peminjaman</label>
            <input type="date" class="form-control" required="required" name="tgl_pinjam" placeholder="Masukkan Tanggal Peminjaman">
        </div>
        <div class="form-group">
            <label for="tgl_kembali">Tanggal Pengembalian</label>
            <input type="date" class="form-control" required="required" name="tgl_kembali" placeholder="Masukkan Tanggal Pengembalian">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <div class="col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="status">
                        <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                        <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                    </select>  
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection