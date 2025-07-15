<?php

namespace App\Http\Controllers;

use App\Models\InformasiKamar;
use Illuminate\Http\Request;

class InformasiKamarController extends Controller
{
    public function informasi_kamar(Request $request)
{
    $query = InformasiKamar::query();

    if ($request->filled('tipe_kamar')) {
        $query->where('tipe_kamar', $request->tipe_kamar);
    }

    if ($request->filled('status')) {
        $query->where('status', $request->status);
    }

    $data = $query->get();

    return view('front.informasi_kamar.index', compact('data'));
}


    public function tambah()
    {
        return view('front.informasi_kamar.tambah');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_kamar' => 'required|string|max:255',
        'tipe_kamar' => 'required|in:Kelas I,Kelas II,Kelas III,VIP',
        'jumlah_kamar' => 'required|integer|min:0',
        'terpakai' => 'required|integer|min:0|lte:jumlah_kamar', // jumlah terpakai tidak boleh lebih besar dari jumlah kamar
    ]);

    // Tentukan status otomatis
    $status = ($request->terpakai >= $request->jumlah_kamar) ? 'Penuh' : 'Tersedia';

    InformasiKamar::create([
       'nama_kamar' => $request->nama_kamar,
    'tipe_kamar' => $request->tipe_kamar,  // ✅ tambahkan ini
    'jumlah_kamar' => $request->jumlah_kamar,
    'terpakai' => $request->terpakai,
    'status' => $status,
    ]);

    return redirect()->route('front.informasi_kamar.index')->with('success', 'Data kamar berhasil ditambahkan.');
}


    public function edit($id)
    {
        $kamar = InformasiKamar::findOrFail($id);
        return view('front.informasi_kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama_kamar' => 'required',
        'tipe_kamar' => 'required|in:Kelas I,Kelas II,Kelas III,VIP',
        'jumlah_kamar' => 'required|integer|min:0',
        'terpakai' => 'required|integer|min:0|lte:jumlah_kamar',
    ]);

    $status = ($request->terpakai >= $request->jumlah_kamar) ? 'Penuh' : 'Tersedia';

    $kamar = InformasiKamar::findOrFail($id);
    $kamar->update([
        'nama_kamar' => $request->nama_kamar,
        'tipe_kamar' => $request->tipe_kamar,
        'jumlah_kamar' => $request->jumlah_kamar,
        'terpakai' => $request->terpakai,
        'status' => $status,
    ]);

    return redirect()->route('front.informasi_kamar.index')->with('success', 'Data kamar berhasil diperbarui.');
}

    public function destroy($id)
    {
        $kamar = InformasiKamar::findOrFail($id);
        $kamar->delete();

        return redirect()->route('front.informasi_kamar.index')->with('success', 'Data kamar berhasil dihapus.');
    }
}
