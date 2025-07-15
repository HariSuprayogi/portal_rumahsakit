@extends('front.layout.main_front')


@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
           
    <h3 class="mb-4">Data Informasi Kamar</h3>

    <a href="{{ route('front.informasi_kamar.tambah') }}" class="btn btn-primary mb-3">
         + Tambah Kamar</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="GET" action="{{ route('front.informasi_kamar.index') }}" class="row g-3 mb-3">
    <div class="col-md-4">
        <select name="tipe_kamar" class="form-select">
            <option value="">-- Filter Tipe Kamar --</option>
            <option value="Kelas I" {{ request('tipe_kamar') == 'Kelas I' ? 'selected' : '' }}>Kelas I</option>
            <option value="Kelas II" {{ request('tipe_kamar') == 'Kelas II' ? 'selected' : '' }}>Kelas II</option>
            <option value="Kelas III" {{ request('tipe_kamar') == 'Kelas III' ? 'selected' : '' }}>Kelas III</option>
            <option value="VIP" {{ request('tipe_kamar') == 'VIP' ? 'selected' : '' }}>VIP</option>
        </select>
    </div>

    <div class="col-md-4">
        <select name="status" class="form-select">
            <option value="">-- Filter Status --</option>
            <option value="Tersedia" {{ request('status') == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
            <option value="Penuh" {{ request('status') == 'Penuh' ? 'selected' : '' }}>Penuh</option>
        </select>
    </div>

    <div class="col-md-4 d-flex gap-2">
        <button type="submit" class="btn btn-primary">Filter</button>
        <a href="{{ route('front.informasi_kamar.index') }}" class="btn btn-secondary">Reset</a>
    </div>
</form>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Kamar</th>
            <th>Tipe Kamar</th> {{-- ✅ Tambahan --}}
            <th>Jumlah</th>
            <th>Terpakai</th>
            <th>Sisa</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->nama_kamar }}</td>
                <td>{{ $item->tipe_kamar }}</td> {{-- ✅ Tambahan --}}
                <td>{{ $item->jumlah_kamar }}</td>
                <td>{{ $item->terpakai }}</td>
                <td>{{ $item->jumlah_kamar - $item->terpakai }}</td>
                <td>
    @if($item->status == 'Tersedia')
        <span class="badge bg-success">Tersedia</span>
    @else
        <span class="badge bg-danger">Penuh</span>
    @endif
</td>

                <td>
                    <a href="{{ route('front.informasi_kamar.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('front.informasi_kamar.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection