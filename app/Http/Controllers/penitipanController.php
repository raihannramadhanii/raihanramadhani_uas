<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penitipan;

class penitipanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data penitipan
        $nomor = 1;
        $penitipan = Penitipan::all();
        return view('penitipan.index',compact('penitipan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form tambah
        return view('Penitipan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses tambah
        $penitipan = new Penitipan;
        $penitipan->jumlah = $request->jumlah;
        $penitipan->kd_makanan = $request->kd_makanan;
        $penitipan->save();

        return redirect('/penitipan');
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
        $penitipan = Penitipan::find($id);
        return view('Penitipan.edit', compact('penitipan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit
        $penitipan = Penitipan::find($id);
        $penitipan->jumlah = $request->jumlah;
        $penitipan->kd_makanan = $request->kd_makanan;
        $penitipan->save();

        return redirect('/penitipan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penitipan = Penitipan::find($id);
        $penitipan->delete();
        return redirect('/penitipan');
    }
}
