@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data</div>

                <div class="card-body">
                    <form method="post" action="/penjualan" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kode Penjualan</label>
                            <input type="text" name="kd_penjualan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="pelanggans_id" class="form-label">Id Penitipan</label>
                            <select name="penitipans_id" id="penitipans_id" class="form-control">
                                <option value="">-- Pilih Penitapan --</option>
                                @foreach ($penitipan as $item)
                                    <option value="{{ $item->id }}">{{ $item->jumlah }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Transaksi</label>
                            <input type="date" name="tgl_transaksi" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah Penjualan</label>
                            <input type="text" name="jml_penjualan" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection