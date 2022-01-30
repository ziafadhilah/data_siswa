@extends('layouts/main')
@section('title', 'Daftar Jurusan')
@section('container')
<div class="container mt-3">
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-primary">
            <h3 style="color: aliceblue;">Daftar Jurusan</h3>
        </div>
    </div>
    <div class="card-body" mt-3>
        <a href="{{url('/jurusan/create')}}" class="btn btn-outline-success">Tambah Jurusan</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr style="text-align: center;">
                <th scope="col" width="5%">No.</th>
                <th scope="col" width="30%">Nama Jurusan</th>
                <th scope="col" width="20%">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jurusans as $jurusan)
            <tr style="text-align: center;">
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$jurusan->nama}}</td>
                <td>
                    <a href="/jurusan/{{$jurusan->id}}" class="btn btn-outline-warning">Edit</a>
                    <form action="/jurusan/{{$jurusan->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Anda yakin mau menghapus?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer bg-primary">
        &nbsp;
    </div>
</div>
@endsection