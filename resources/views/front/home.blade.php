@extends('front.layout.main_front') {{-- Menggunakan layout aplikasi yang mungkin sudah ada --}}

@section('content')

<div class="container mt-4">
    <h1 class="text-center mb-5">PORTAL RSUD KEPULAUAN MERANTI</h1>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Informasi PORTAL BERITA KEPULAUAN MERANTI
        </div>
    <div class="card-body">
        <div class="row align-items-center">
            <!-- Slide Teks Informasi Kamar -->
            <div class="col-md-6 pe-md-4 border-end">
                <div id="textCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div id="textCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  
    <h4 class="mb-4 text-center">Informasi Ketersediaan Kamar</h4>

    <div id="kamarCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">

            @foreach($data as $index => $kamar)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="card shadow mx-auto" style="max-width: 600px;">
                        <div class="card-header text-white fw-bold" style="background-color: #0d6efd;">
                            {{ $kamar->nama_kamar }}
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless mb-0">
                                <tr>
                                    <td class="w-50">Kelas Kamar</td>
                                    <td>: {{ $kamar->tipe_kamar }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Kamar</td>
                                    <td>: {{ $kamar->jumlah_kamar }} Kamar</td>
                                </tr>
                                <tr>
                                    <td>Terpakai</td>
                                    <td>: {{ $kamar->terpakai }} Kamar</td>
                                </tr>
                                <tr>
                                    <td>Ketersediaan</td>
                                    <td>: {{ $kamar->jumlah_kamar - $kamar->terpakai }} Kamar</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        :
                                        @if($kamar->status == 'Tersedia')
                                            <span class="badge bg-success px-3 py-2">Tersedia</span>
                                        @else
                                            <span class="badge bg-danger px-3 py-2">Penuh</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Navigasi Carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#kamarCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#kamarCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

                    <!-- Tombol Navigasi -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#textCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#textCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <!-- Slide Gambar Rumah Sakit -->
            <div class="col-md-6">
    <img src="{{ asset('img/slide2.png') }}" alt="Gambar Rumah Sakit" class="img-fluid rounded shadow-sm">
</div>


    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-heart-pulse-fill text-primary fs-2 mb-2"></i>
                    <h5 class="card-title">Pendaftaran Pasien</h5>
                    <p class="card-text">Formulir pendaftaran pasien baru dan lama.</p>
                    <a href="{{ url('pendaftaran') }}" class="btn btn-primary btn-sm">Lihat Formulir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-list-check text-success fs-2 mb-2"></i>
                    <h5 class="card-title">Jadwal Dokter</h5>
                    <p class="card-text">Informasi lengkap mengenai jadwal praktik dokter spesialis.</p>
                    <a href="{{ route('front.jadwal_dokter.index') }}" class="btn btn-success btn-sm">Lihat Jadwal</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-hospital-fill text-info fs-2 mb-2"></i>
                    <h5 class="card-title">Informasi Kamar</h5>
                    <p class="card-text">Ketersediaan dan status kamar rawat inap.</p>
                    <a href="{{ route('front.informasi_kamar.index') }}" class="btn btn-info btn-sm">Lihat Ketersediaan</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-prescription2 text-warning fs-2 mb-2"></i>
                    <h5 class="card-title">Farmasi</h5>
                    <p class="card-text">Informasi obat-obatan dan layanan farmasi.</p>
                    <a href="{{ url('farmasi') }}" class="btn btn-warning btn-sm">Akses Farmasi</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-cash-coin text-secondary fs-2 mb-2"></i>
                    <h5 class="card-title">Pembayaran</h5>
                    <p class="card-text">Informasi tagihan dan metode pembayaran.</p>
                    <a href="{{ url('pembayaran') }}" class="btn btn-secondary btn-sm">Lihat Tagihan</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-file-earmark-medical-fill text-danger fs-2 mb-2"></i>
                    <h5 class="card-title">Rekam Medis</h5>
                    <p class="card-text">Akses rekam medis pasien (membutuhkan otentikasi).</p>
                    <a href="{{ url('rekam-medis') }}" class="btn btn-danger btn-sm">Akses Rekam Medis</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Hubungi Kami</h3>
            <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui informasi di bawah ini:</p>
            <ul class="list-unstyled">
                <li><i class="bi bi-telephone-fill me-2"></i> (0761) 123456</li>
                <li><i class="bi bi-envelope-fill me-2"></i> info@rssehatselalu.com</li>
                <li><i class="bi bi-clock-fill me-2"></i> Buka 24 Jam</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3>Lokasi Kami</h3>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.784897897898!2d101.4457609747895!3d0.516749994987456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a98a7c7c7c7d%3A0x8e3e3e3e3e3e3e3e!2sRumah+Sakit+Sehat+Selalu!5e0!3m2!1sid!2sid!4v1633030303030!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection