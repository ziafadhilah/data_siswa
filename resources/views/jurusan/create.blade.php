@extends('layouts/main')
@section('title', 'Tambah Jurusan')
@section('container')
<div class="container mt-3">
    <div class="card-title">
        <h4>Form Tambah Jurusan</h4>
    </div>
    <form method="post" action="/jurusan/create">
        @csrf
        <div class="card-body">
            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">
                        Nama Jurusan
                    </span>
                    <input type="text" name="nama" placeholder="Masukan Nama Jurusan" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success" onclick="return confirm('Tambah Data ?')">Tambah</button>
    </form>
</div>
@endsection