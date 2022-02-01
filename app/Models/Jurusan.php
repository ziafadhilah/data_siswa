<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ['nama'];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}
