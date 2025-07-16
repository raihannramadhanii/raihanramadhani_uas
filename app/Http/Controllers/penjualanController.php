<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Penitipan; 


class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data penjualan
        $nomor = 1;
        $penjualan = Penjualan::all();
        return view('penjualan.index',compact('penjualan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form tambah
        $penitipan = Penitipan::all();
        return view('penjualan.tambah', compact('pasien'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses tambah
        $penjualan = new Penjualan;
        $penjualan->kd_penjualan = $request->kd_penjualan;
        $penjualan->penitipans_id = $request->penitipan;
        $penjualan->tgl_transaksi = $request->tgl_transaksi;
        $penjualan->jml_penjualan = $request->jml_penjualan;
        $penjualan->save();

        return redirect('/penjualan');
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
         $penjualan = Penjualan::find($id);
         $penitipans = Penitipan::all();
        return view('Penjualan.edit', compact('penjualan','penitipans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit
        $penjualan = Penjualan::find($id);
        $penjualan->kd_penjualan = $request->kd_penjualan;
        $penjualan->penitipans_id = $request->penitipans_id;
        $penjualan->tgl_transaksi = $request->tgl_transaksi;
        $penjualan->jml_penjualan = $request->jml_penjualan;
        $penjualan->save();

        return redirect('/penjualan')->with('success', 'Penjualan berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }
}
