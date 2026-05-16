@extends('layout.master')
@section('title')
    Tambah Jurusan
@endsection

@section('judul')
    Tambah Jurusan
@endsection

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Jurusan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="/jurusan">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Jurusan</label>
                    <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}">
                    @error('kode')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Jurusan</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan Jurusan</button>
            </form>
        </div>
    </div>
@endsection
