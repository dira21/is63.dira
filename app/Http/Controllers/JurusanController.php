<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.index', compact('jurusan'));
    }

    public function create()
    {
        return view('jurusan.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:jurusans,kode',
            'nama' => 'required|unique:jurusans,nama',
        ]);

        Jurusan::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect('/jurusan')->with(['success' => 'Data jurusan berhasil ditambahkan.']);
    }

    public function edit(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required|unique:jurusans,kode,' . $id,
            'nama' => 'required|unique:jurusans,nama,' . $id,
        ]);

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect('/jurusan')->with(['success' => 'Data jurusan berhasil diupdate.']);
    }

    public function destroy(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        return redirect('/jurusan')->with(['success' => 'Data jurusan berhasil dihapus.']);
    }
}
