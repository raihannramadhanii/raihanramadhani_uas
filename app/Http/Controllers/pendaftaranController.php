<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class pendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data dosen
        $nomor = 1;
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.index',compact('pendaftaran','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form tambah
        return view('Pendaftaran.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses tambah
        $pendaftaran = new Pendaftaran;
        $pendaftaran->nm_pendaftar = $request->nm_pendaftar;
        $pendaftaran->al_pendaftar = $request->al_pendaftar;
        $pendaftaran->hp_pendaftar = $request->hp_pendaftar;
        $pendaftaran->save();

        return redirect('/pendaftaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //menampilkan data detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return view('Pendaftaran.edit', compact('pendaftaran'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->nm_pendaftar = $request->nm_pendaftar;
        $pendaftaran->al_pendaftar = $request->al_pendaftar;
        $pendaftaran->hp_pendaftar = $request->hp_pendaftar;
        $pendaftaran->save();


        return redirect('/pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        return redirect('/pendaftaran');
    }

}
