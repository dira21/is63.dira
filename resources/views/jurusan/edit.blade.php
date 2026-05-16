@extends('layout.master')
@section('title')
    Edit Jurusan
@endsection

@section('judul')
    Edit Jurusan
@endsection

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Jurusan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="/jurusan/{{ $jurusan->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Kode Jurusan</label>
                    <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode', $jurusan->kode) }}">
                    @error('kode')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Jurusan</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $jurusan->nama) }}">
                    @error('nama')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
@endsection
