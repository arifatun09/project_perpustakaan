@extends('layouts.app')

@section('title')
<div>
DASHBOARD @can('manage-users') ADMIN @endcan
</div>
@endsection

@section('title1', 'Selamat Datang!')

@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>        
    @endif

    <center>
        <h3>
            <b>
                {{ __('SISTEM INFORMASI PERPUSTAKAAN') }}  <br>
                {{ __('MYDAY') }}  
            </b>
        </h3>
    </center>
    <table class="table table-responsive">
        <tr><th>Name</th><td>{{ $user->name }}</td></tr>
        <tr><th>Email</th><td>{{ $user->email }}</td></tr>
        <tr><th>Created At</th><td>{{ $user->created_at }}</td></tr>
    </table>
                            
</div>
@endsection