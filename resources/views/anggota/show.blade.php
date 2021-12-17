@extends('layouts.app')

@section('title', 'TAMPIL DATA')

@section('title1')
<div> {{_('Data dari anggota')}} {{ $anggota->nama }} </div>
@endsection

@section('content')
<img width="150px" src="{{asset('storage/'.$anggota->photo)}}" alt="image" > <br><br>
<table class="table table-responsive">
    <tr><th>ID Anggota</th><td>{{ $anggota->id }}</td></tr>
    <tr><th>Nama</th><td>{{ $anggota->nama }}</td></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $anggota->jenis_kelamin }}</td></tr>
    <tr><th>Alamat</th><td>{{ $anggota->alamat }}</td></tr>
</table>
<a href='/anggota' class="btn btn-dark">Back</a>
@endsection