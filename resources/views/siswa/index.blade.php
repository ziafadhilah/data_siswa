@extends('layouts/main')
@section('title', 'Daftar Siswa')
@section('container')
<div class="container mt-3">
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header bg-primary">
        <h3 style="color: aliceblue;">Daftar Siswa</h3>
    </div>
    <div class="container mt-3">
        <a href="{{url('/siswa/create')}}" class="btn btn-outline-success">Tambah Siswa</a>
    </div>
    <table class="table table-sm mt-3">
        <thead>
            <tr class="text-center">
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
            <tr @if($loop->odd) class="bg-gray200 text-center" @endif>
                <th>{{$loop->iteration}}</th>
                <td>{{$siswa->nisn}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->tingkat->nama}}</td>
                <td>{{$siswa->jurusan->nama}}</td>
                <td>
                    <a href="/siswa/{{$siswa->id}}" class="btn btn-outline-success btn-sm">Detail</a>
                    <a href="/siswa/{{$siswa->id}}" class="btn btn-outline-warning btn-sm">Edit</a>
                    <form action="/siswa/{{$siswa->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Anda yakin mau menghapus?')">Delete</button>
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