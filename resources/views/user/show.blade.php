@extends('layouts.app')

@section('title', 'TAMPIL DATA')

@section('title1')
<div> {{_('Tampil Data ')}} {{ $user->judul }} </div>
@endsection

@section('content')
<table class="table table-responsive">
    <tr><th>ID user</th><td>{{ $user->id }}</td></tr>
    <tr><th>Nama</th><td>{{ $user->name }}</td></tr>
    <tr><th>Email</th><td>{{ $user->email }}</td></tr>
    <tr><th>Role</th><td>{{ $user->role }}</td></tr>
    <tr><th>Created At</th><td>{{ $user->created_at }}</td></tr>
</table>
<a href='/user' class="btn btn-dark">Back</a>
@endsection