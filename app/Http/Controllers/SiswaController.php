<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Siswa;
use App\Models\Tingkat;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::with('jurusan')->with('tingkat')->get();
        return view('/siswa/index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $tingkat = Tingkat::all();
        return view('/siswa/create', [
            'jurusans' => $jurusan,
            'tingkats' => $tingkat,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nisn' => 'required',
        //     'nama' => 'required',
        //     'nama_ayah' => 'required',
        //     'nama_ibu' => 'required',
        //     'no_tlp_1' => 'required',
        //     'no_tlp_2' => 'required',
        //     'no_tlp_3' => 'required',
        // ]);
        Siswa::create($request->all());
        return redirect('/siswa')->with('status', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tingkat = Tingkat::all();
        $jurusan = Jurusan::all();
        $siswa = Siswa::findOrFail($id);
        return view('/siswa/edit', [
            'siswa' => $siswa,
            'tingkat' => $tingkat,
            'jurusan' => $jurusan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->tingkats_id = $request->tingkats_id;
        $siswa->jurusans_id = $request->jurusans_id;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->nama_wali = $request->nama_wali;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->status = $request->status;
        $siswa->anak_ke = $request->anak_ke;
        $siswa->alamat_1 = $request->alamat_1;
        $siswa->alamat_2 = $request->alamat_2;
        $siswa->alamat_3 = $request->alamat_3;
        $siswa->no_tlp_1 = $request->no_tlp_1;
        $siswa->no_tlp_2 = $request->no_tlp_2;
        $siswa->no_tlp_3 = $request->no_tlp_3;
        $siswa->sekolah_asal = $request->sekolah_asal;
        $siswa->pada_tanggal = $request->pada_tanggal;
        $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
        $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
        $siswa->pekerjaan_wali = $request->pekerjaan_wali;
        $siswa->update();
        return redirect('/siswa')->with('status', 'Data berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect('/siswa')->with('status', 'Data telah terhapus!');
    }
}
