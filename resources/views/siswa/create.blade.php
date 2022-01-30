@extends('layouts/main')
@section('title', 'Tambah Siswa')
@section('container')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <div class="card-header bg-primary text-white">
                <h4>Form Tambah Data Siswa</h4>
            </div>
            <form class="row g-3 mt-1" method="post" action="/siswa/create">
                @csrf
                <div class="col-md-6">
                    <label for="nisn" class="form-label">Nomor Induk Siswa Nasional (NISN)</label>
                    <input type="number" class="form-control" name="nisn" id="nisn" placeholder="NISN" required>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="card-header col-md-12 bg-white">Tempat Tanggal Lahir</div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">Tempat</span>
                        <input name="tempat_lahir" type="text" class="form-control" placeholder="Contoh : Jakarta" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">Tanggal Lahir</span>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">Jenis Kelamin</span>
                        <select name="jenis_kelamin" id="inputState" class="form-select" required>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-text">Sekolah Asal</span>
                            <input type="text" class="form-control" name="sekolah_asal" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer col-md-12 bg-white"></div>
                <div class="col-md-12">
                    <div class="col-4">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" name="agama" id="agama" class="form-control" placeholder="Agama">
                    </div>
                </div>
                <div class="col-4">
                    <label for="status" class="form-label">Status Dalam Keluarga</label>
                    <input type="text" name="status" class="form-control" id="status" placeholder="Contoh : Anak Kandung" required>
                </div>
                <div class="col-1">
                    <label for="anak_ke" class="form-label">Anak Ke</label>
                    <input type="number" name="anak_ke" class="form-control" id="anak_ke" placeholder="0" required>
                </div>
                <div class="col-3">
                    <label for="no_tlp_1" class="form-label">No Telepon</label>
                    <input type="number" name="no_tlp_1" class="form-control" id="no_tlp_1" required>
                </div>
                <div class="col-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat_1" placeholder="Alamat Siswa" required></textarea>
                </div>
                <div class="col-md-12">
                    <div class="card-header bg-white">Diterima di Sekolah ini:</div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">Kelas</span>
                        <input type="text" class="form-control" name="tingkats_id" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">Jurusan</span>
                        <input type="text" class="form-control" name="jurusans_id">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">Pada Tanggal</span>
                        <input type="date" name="pada_tanggal" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer col-md-12 bg-white"></div>
                <div class="card-header bg-primary text-white">
                    <h4>Form Tambah Data Orang Tua Siswa</h4>
                </div>
                <div class="col-md-6">
                    <label for="ayah" class="form-label">Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah" id="ayah" placeholder="Nama Lengkap Ayah" required>
                </div>
                <div class="col-md-6">
                    <label for="ibu" class="form-label">Nama Ibu</label>
                    <input type="text" class="form-control" name="nama_ibu" id="ibu" placeholder="Nama Lengkap Ibu" required>
                </div>
                <div class="col-sm-12">
                    <div class="col-5">
                        <label for="alamat" class="form-label">Alamat Orang Tua</label>
                        <textarea class="form-control" id="alamat" name="alamat_2" placeholder="Alamat Orang Tua" required></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="ayah_job" class="form-label">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" name="pekerjaan_ayah" id="ayah_job" placeholder="Pekerjaan Ayah" required>
                </div>
                <div class="col-md-4">
                    <label for="ibu_job" class="form-label">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" name="pekerjaan_ibu" id="ibu_job" placeholder="Pekerjaan Ibu" required>
                </div>
                <div class="col-md-4">
                    <label for="no_tlp_2" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" name="no_tlp_2" id="no_tlp_2" placeholder="Masukan Nomor Telepon" required>
                </div>
                <div class="card-footer col-md-12 bg-white"></div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4>Form Tambah Data Wali Siswa</h4>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="col-md-6">
                                    <label for="wali" class="form-label">Nama Wali Siswa</label>
                                    <input type="text" class="form-control" name="nama_wali" id="wali" placeholder="Nama Lengkap Wali">
                                </div>
                                &nbsp;
                                <div class="col-md-6">
                                    <label for="alamat" class="form-label">Alamat Wali Siswa</label>
                                    <textarea class="form-control" id="alamat" name="alamat_3" placeholder="Alamat Wali"></textarea>
                                </div>
                                &nbsp;
                                <div class="col-md-6">
                                    <label for="wali_job" class="form-label">Pekerjaan Wali</label>
                                    <input type="text" class="form-control" name="pekerjaan_wali" id="wali_job" placeholder="Pekerjaan Wali">
                                </div>
                                &nbsp;
                                <div class="col-md-4">
                                    <label for="no_tlp_3" class="form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control" name="no_tlp_3" id="no_tlp_3" placeholder="Masukan Nomor Telepon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <label style="color: red;">*Harap di periksa kembali, apakah data sudah sesuai atau belum!</label>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection