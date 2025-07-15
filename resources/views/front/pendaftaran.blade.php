@extends('front.layout.main_front')
@section('content')


<div class="container mt-5">
    <h1 class="mb-4">Formulir Pendaftaran</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <form method="POST">
        @csrf

        <div class="mb-3">
            <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="Isikan NIK" >
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" >
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control" >
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" id="agama" class="form-control" >
                <option value="">-- Pilih --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Contoh: 081234567890" >
        </div>
         <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Lengkap</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap Anda" ></textarea>
        </div>

        <button type="submit" class="btn btn-success">Daftar Sekarang</button>
    </form>
</div>

@endsection