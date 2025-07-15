@extends('front.layout.main_front')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Tambah Data Jadwal Dokter</h3>
    

    <form action="{{ route('front.jadwal_dokter.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="hari" class="form-label">Hari</label>
            <input type="text" name="hari" id="hari" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jam" class="form-label">Jam</label>
            <input type="text" name="jam" id="jam" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="namaDokter" class="form-label">Nama Dokter</label>
            <input type="text" name="namadokter" id="namadokter" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="departemen" class="form-label">Departemen / Poli</label>
            <input type="text" name="departemen" id="departemen" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
        <a href="{{ route('front.jadwal_dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
