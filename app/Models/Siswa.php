<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama',
        'nama_ayah',
        'nama_ibu',
        'nama_wali',
        'nisn',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'agama',
        'status',
        'anak_ke',
        'alamat_1',
        'alamat_2',
        'alamat_3',
        'no_tlp_1',
        'no_tlp_2',
        'no_tlp_3',
        'sekolah_asal',
        'pada_tanggal',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'pekerjaan_wali',
        'tingkats_id',
        'jurusans_id',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusans_id');
    }

    public function tingkat()
    {
        return $this->belongsTo(Tingkat::class, 'tingkats_id');
    }
}
