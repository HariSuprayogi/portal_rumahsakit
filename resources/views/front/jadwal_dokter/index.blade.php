@extends('front.layout.main_front')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <h3 class="mb-4">Data Jadwal Dokter</h3>
           

            <a href="{{ route('front.jadwal_dokter.tambah') }}" class="btn btn-success mb-3">
                + Tambah Data
            </a>
            @if (session('status'))
                 <div class="alert alert-success">
                       {{ session('status') }}
                 </div>
            @endif

            <table class="table table-bordered table-hover table-sm">
                <thead class="table-success" style="background: purple; color: white;">
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Nama Dokter</th>
                        <th>Departemen / Poli</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal_dokter as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->hari }}</td>
                        <td>{{ $item->jam }}</td>
                        <td>{{ $item->namadokter }}</td>
                        <td>{{ $item->departemen }}</td>
                        <td>
                            <a href="{{ route('front.jadwal_dokter.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">
                                Edit
                            </a>

                            <form action="{{ route('front.jadwal_dokter.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @if($jadwal_dokter->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data jadwal dokter.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
