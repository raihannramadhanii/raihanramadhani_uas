@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data</div>

                <div class="card-body">
                    <form method="post" action="/pembayaran" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kode Pembayaran</label>
                            <input type="text" name="kd_pembayaran" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Kode Penjualan</label>
                                    <select name="penjualans_id" class="form-control">
                                        <option value="">-Pilih-</option>
                                        @foreach ($penjualans as $item1)
                                            <option value="{{ $item1->id }}">{{ $item1->kd_penjualan }}</option>
                                        @endforeach
                                    </select>

                                </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Total Pembayaran</label>
                            <input type="text" name="total_pembayaran" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Pembayaran</label>
                            <select name="jns_pembayaran" class="form-control">
                                <option value="">-Pilih Metode Pembayaran-</option>

                                    <option value="transfer">Transfer</option>
                                    <option value="qris">Qris</option>
                                    <option value="qris">Tunai</option>


                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection