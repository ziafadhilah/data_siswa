@extends('layouts/main')
@section('title', 'Daftar Siswa')
@section('container')
<div class="container mt-3">
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-primary">
            <h3 style="color: aliceblue;">Daftar Siswa</h3>
        </div>
    </div>
    <div class="card-body" mt-3>
        <a href="{{url('/siswa/create')}}" class="btn btn-outline-success">Tambah Siswa</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NISN</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $siswa)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$siswa->nisn}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->tingkats_id}}</td>
                <td>{{$siswa->jurusans_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer bg-primary">
        &nbsp;
    </div>
</div>
@endsection