<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Penjualan;



class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data pembayaran
        $nomor = 1;
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index',compact('pembayaran','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form tambah
        $penjualans = Penjualan::all();
        return view('pembayaran.tambah',compact('penjualans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses tambah
        $pembayaran = new Pembayaran;
        $pembayaran->kd_pembayaran = $request->kd_pembayaran;
        $pembayaran->penjualans_id = $request->penjualans_id;
        $pembayaran->total_pembayaran = $request->total_pembayaran;
        $pembayaran->jns_pembayaran = $request->jns_pembayaran;

        $pembayaran->save();

        return redirect('/pembayaran');
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
        $pembayaran = Pembayaran::find($id);
        $penjualans = Penjualan::all();
        return view('Pembayaran.edit', compact('pembayaran','penjualans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit
        $request->validate([
        'kd_pembayaran' => 'required',
        'penjualans_id' => 'required',
        'total_pembayaran' => 'required',
        'jns_pembayaran' => 'required',
    ]);

    $pembayaran = Pembayaran::findOrFail($id);

    $pembayaran->kd_pembayaran = $request->kd_pembayaran;
    $pembayaran->penjualans_id = $request->penjualans_id;
    $pembayaran->total_pembayaran = $request->total_pembayaran;
    $pembayaran->jns_pembayaran = $request->jns_pembayaran;

    $pembayaran->save();

    return redirect('/pembayaran')->with('success', 'Data pembayaran berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect('/pembayaran');
    }
}
