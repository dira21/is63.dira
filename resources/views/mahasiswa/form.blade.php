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
                            <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim">
    @error('nim')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    @error('nama')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    {{-- < class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"> --}}
    <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="">
      <option value="">--Pilih Jurusan--</option>
      <option value="Informatika Komputer">Informatika</option>
      <option value="Sekretaris">Sistem Informasi</option>
      <option value="Komputer Akuntansi">Komputer Akuntansi</option>
      <option value="Digital Bisnis">Digital Bisnis</option>
      <option value="Manajemen">Manajemen</option>
    </select>
    @error('jurusan')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="tempat_lahir">
    @error('tempat_lahir')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_lahir">
    @error('tanggal_lahir')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Hp</label>
    <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="nohp">
    @error('nohp')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Domisili</label>
    <input type="text" class="form-control @error('domisili') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="domisili">
    @error('domisili')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    @error('email')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
  <label class="form-check-label" for="radioDefault1">
    Perempuan
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
  <label class="form-check-label" for="radioDefault2">
    Laki-Laki
  </label>
</div>
</div>
   
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tahun Masuk</label>
    <input type="number" class="form-control @error('tahun_masuk') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun_masuk">
    @error('tahun_masuk')
      <div class="alert">
        {{ $message }}
      </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                        </div>
                    </div>
@endsection