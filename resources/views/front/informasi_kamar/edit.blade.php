@extends('front.layout.main_front')

@section('content')
<div class="container">
    <h3>Edit Data Kamar</h3>

    <form action="{{ route('front.informasi_kamar.update', $kamar->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_kamar" class="form-label">Nama Kamar</label>
            <input type="text" name="nama_kamar" id="nama_kamar" class="form-control" value="{{ old('nama_kamar', $kamar->nama_kamar) }}" required>
            @error('nama_kamar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
    <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
    <select name="tipe_kamar" id="tipe_kamar" class="form-select" required>
        <option value="" disabled>Pilih Tipe</option>
        <option value="Kelas I" {{ old('tipe_kamar', $kamar->tipe_kamar) == 'Kelas I' ? 'selected' : '' }}>Kelas I</option>
        <option value="Kelas II" {{ old('tipe_kamar', $kamar->tipe_kamar) == 'Kelas II' ? 'selected' : '' }}>Kelas II</option>
        <option value="Kelas III" {{ old('tipe_kamar', $kamar->tipe_kamar) == 'Kelas III' ? 'selected' : '' }}>Kelas III</option>
        <option value="VIP" {{ old('tipe_kamar', $kamar->tipe_kamar) == 'VIP' ? 'selected' : '' }}>VIP</option>
    </select>
    @error('tipe_kamar')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


        <div class="mb-3">
            <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
            <input type="number" name="jumlah_kamar" id="jumlah_kamar" class="form-control" min="0" value="{{ old('jumlah_kamar', $kamar->jumlah_kamar) }}" required>
            @error('jumlah_kamar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="terpakai" class="form-label">Terpakai</label>
            <input type="number" name="terpakai" id="terpakai" class="form-control" min="0" value="{{ old('terpakai', $kamar->terpakai) }}" required>
            @error('terpakai')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('front.informasi_kamar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
