<?php

namespace App\Http\Controllers;

use App\Models\KontakModel;
use Illuminate\Http\Request;

class KontakController extends Controller
{
   
    public function index()
    {
        return view('front.kontak');
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $kontak = new KontakModel();
        $kontak->nama=$request->nama;
        $kontak->alamat=$request->alamat;
        $kontak->komentar=$request->komentar;
        $kontak->save();
        return redirect()->back();
    }

    
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
