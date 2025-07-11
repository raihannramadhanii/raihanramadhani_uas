<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class makananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data makanan
        $nomor = 1;
        $makanan = Makanan::all();
        return view('makanan.index',compact('makanan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form tambah
        return view('Makanan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses tambah
        $makanan = new Makanan;
        $makanan->kd_makanan = $request->kd_makanan;
        $makanan->nm_makanan = $request->nm_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        $makanan->save();

        return redirect('/makanan');
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
        $makanan = Makanan::find($id);
        return view('Makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit
        $makanan = Makanan::find($id);
        $makanan->kd_makanan = $request->kd_makanan;
        $makanan->nm_makanan = $request->nm_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        $makanan->save();

        return redirect('/makanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $makanan = Makanan::find($id);
        $makanan->delete();
        return redirect('/makanan');
    }
}
