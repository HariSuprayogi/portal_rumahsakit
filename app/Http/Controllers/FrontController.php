<?php

namespace App\Http\Controllers;

use App\Models\IdentitasModel;
use App\Models\JadwalDokterModel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.home');
    }
    //

    public function sambutan(){
        return view('front.sambutan');
    }

    public function jadwal_dokter(){
        $jadwal_dokter = JadwalDokterModel::get();
        return view ('front.jadwal_dokter.index', compact('jadwal_dokter'));
    }

     public function tambah(){
        return view('front.jadwal_dokter.tambah');
    }

     public function store(Request $request){
        $jadwal = new JadwalDokterModel();
        $jadwal->hari = $request->hari;
        $jadwal->jam = $request->jam;
        $jadwal->namadokter = $request->namadokter;
        $jadwal->departemen = $request->departemen;
        $jadwal->save();
        return redirect()->route('front.jadwal_dokter.index')->with('status', 'Data Berhasil Ditambahkan');

    }

    public function edit($id)
{
    $jadwal = JadwalDokterModel::findOrFail($id);
    return view('front.jadwal_dokter.edit', compact('jadwal'));
}

public function update(Request $request, $id)
{
    $jadwal = JadwalDokterModel::findOrFail($id);
    $jadwal->Hari = $request->hari;
    $jadwal->Jam = $request->jam;
    $jadwal->NamaDokter = $request->namadokter;
    $jadwal->Departemen = $request->departemen;
    $jadwal->save();

    return redirect()->route('front.jadwal_dokter.index')->with('status', 'Data berhasil diupdate');
}

public function destroy($id)
{
    $jadwal = JadwalDokterModel::findOrFail($id);
    $jadwal->delete();

    return redirect()->route('front.jadwal_dokter.index')->with('status', 'Data berhasil dihapus');
}
}