@extends('layout.master')
@section('title')
    Data Tambah Mahasiswa
@endsection

@section('judul')
    Data Tambah Mahasiswa
@endsection

@section('konten')
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/mahasiswa">
                                @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim" value="{{ old('nim') }}">
    @error('nim')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ old('nama') }}">
    @error('nama')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="">
      <option value="">--Pilih Jurusan--</option>
      @foreach($jurusan as $item)
        <option value="{{ $item->nama }}" {{ old('jurusan') == $item->nama ? 'selected' : '' }}>{{ $item->nama }}</option>
      @endforeach
    </select>
    @error('jurusan')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
    @error('tempat_lahir')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
    @error('tanggal_lahir')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No. Hp</label>
    <input type="text" class="form-control @error('no_handphone') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_handphone" value="{{ old('no_handphone') }}">
    @error('no_handphone')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Domisili</label>
    <input type="text" class="form-control @error('domisili') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="domisili" value="{{ old('domisili') }}">
    @error('domisili')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
    @error('email')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="radioDefault1" value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}>
  <label class="form-check-label" for="radioDefault1">
    Perempuan
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="radioDefault2" value="Laki-Laki" {{ old('jenis_kelamin', 'Laki-Laki') == 'Laki-Laki' ? 'checked' : '' }}>
  <label class="form-check-label" for="radioDefault2">
    Laki-Laki
  </label>
</div>
  @error('jenis_kelamin')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
</div>
   
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tahun Masuk</label>
    <input type="number" class="form-control @error('tahun_masuk') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun_masuk" value="{{ old('tahun_masuk') }}">
    @error('tahun_masuk')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Tambah Data Baru</button>
</form>
                        </div>
                    </div>
@endsection