@extends('layouts.app')

@section('title', 'TAMPIL DATA')

@section('title1')
<div> {{_('Tampil Data ')}} {{ $buku->judul }} </div>
@endsection

@section('content')
<table class="table table-responsive">
    <tr><th>ID buku</th><td>{{ $buku->id }}</td></tr>
    <tr><th>Judul</th><td>{{ $buku->judul }}</td></tr>
    <tr><th>Kategori</th><td>{{ $buku->kategori }}</td></tr>
    <tr><th>Pengarang</th><td>{{ $buku->pengarang }}</td></tr>
    <tr><th>Penerbit</th><td>{{ $buku->penerbit }}</td></tr>
</table>
<a href='/buku' class="btn btn-dark">Back</a>
@endsection