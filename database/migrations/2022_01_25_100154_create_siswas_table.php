<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('tingkats_id');
            $table->foreignId('jurusans_id');
            $table->integer('nisn');
            $table->string('nama', 255);
            $table->string('nama_ayah', 255);
            $table->string('nama_ibu', 255);
            $table->string('nama_wali', 255)->nullable();
            $table->string('tempat_lahir', 255);
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin', 20);
            $table->string('agama', 20);
            $table->string('status', 255);
            $table->string('anak_ke', 255);
            $table->string('alamat_1', 255);
            $table->string('alamat_2', 255);
            $table->string('alamat_3', 255)->nullable();
            $table->bigInteger('no_tlp_1');
            $table->bigInteger('no_tlp_2');
            $table->bigInteger('no_tlp_3')->nullable();
            $table->string('sekolah_asal', 255);
            $table->date('pada_tanggal');
            $table->string('pekerjaan_ayah', 255);
            $table->string('pekerjaan_ibu', 255);
            $table->string('pekerjaan_wali', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
