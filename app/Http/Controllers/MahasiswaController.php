<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswas;
use App\Models\Jurusan;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswas::all();
        return view ('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('mahasiswa.form', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*disini hasil eksekusi dari klik tombol simpan data di form mahasiswa.form
        kita akan menampilkan data yg diinputkan di form mahasiswa.form*/

        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required',
            'jurusan' => 'required|exists:jurusans,nama',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_handphone' => 'required|numeric',
            'domisili' => 'required',
            'email' => 'required|email|unique:mahasiswas,email',
            'jenis_kelamin' => 'required',
            'tahun_masuk' => 'required|numeric',
        ]);

        $mahasiswa = Mahasiswas::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nohp' => $request->no_handphone,
            'domisili' => $request->domisili,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        return redirect('/mahasiswa')->with(['success' => 'Data mahasiswa berhasil ditambahkan.']);
        //return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    
    }

    public function show(string $id)
    {
        // $mahasiswa = Mahasiswas::findOrFail($id);

        // return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswas::find($id);
        $jurusan = Jurusan::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $id,
            'nama' => 'required',
            'jurusan' => 'required|exists:jurusans,nama',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_handphone' => 'required|numeric|unique:mahasiswas,nohp,' . $id,
            'domisili' => 'required',
            'email' => 'required|email|unique:mahasiswas,email,' . $id,
            'jenis_kelamin' => 'required',
            'tahun_masuk' => 'required|numeric',
        ]);

        $mahasiswa = Mahasiswas::findOrFail($id);
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nohp' => $request->no_handphone,
            'domisili' => $request->domisili,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        return redirect('/mahasiswa')->with(['success' => 'Data mahasiswa berhasil diupdate.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswas::findOrFail($id);
        $mahasiswa->delete();

        return redirect('/mahasiswa')->with(['success' => 'Data mahasiswa berhasil dihapus.']);
    }
}