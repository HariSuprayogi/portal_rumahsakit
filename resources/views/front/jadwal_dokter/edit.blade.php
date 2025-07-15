@extends('front.layout.main_front')

@section('content')
<div class="container mt-5">
    <h3>Edit Jadwal Dokter</h3>
    <form action="{{ route('front.jadwal_dokter.update', $jadwal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- input -->
        <div class="mb-2">
            <label>Hari</label>
            <input type="text" name="hari" value="{{ $jadwal->hari }}" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Jam</label>
            <input type="text" name="jam" value="{{ $jadwal->jam }}" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Nama Dokter</label>
            <input type="text" name="namadokter" value="{{ $jadwal->namadokter }}" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Departemen / Poly</label>
            <input type="text" name="departemen" value="{{ $jadwal->departemen }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('front.jadwal_dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
