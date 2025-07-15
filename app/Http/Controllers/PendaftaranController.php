<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranModel;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.pendaftaran');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $pendaftaran = new PendaftaranModel();
        $pendaftaran->nik=$request->nik;
        $pendaftaran->nama=$request->nama;
        $pendaftaran->jk=$request->jk;
        $pendaftaran->agama=$request->agama;
        $pendaftaran->alamat=$request->alamat;
        $pendaftaran->telepon=$request->telepon;
        $pendaftaran->email=$request->email;
        $pendaftaran->save();
        return redirect()->back()->with('status', 'Data Berhasil Disimpan !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
