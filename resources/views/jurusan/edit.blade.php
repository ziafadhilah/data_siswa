@extends('layouts/main')
@section('title', 'Edit Jurusan')
@section('container')
<div class="container mt-3">
    <div class="card-title">
        <h4>Form Edit Jurusan</h4>
    </div>
    <form method="post" action="/jurusan/{{$jurusan->id}}">
        @method('patch')
        @csrf
        <div class="card-body">
            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">
                        Nama Jurusan
                    </span>
                    <input type="text" name="nama" placeholder="Masukan Nama Jurusan" class="form-control" value="{{$jurusan->nama}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success" onclick="return confirm('Yakin data ini akan di ubah ?')">Simpan</button>
    </form>
</div>
@endsection