<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <title>Edit <span class="oi oi[data-glyph=account-login]"></span></title>
</head>
<body>
    <div class="container center col-6 ">
        <div class="card mt-4">
            <div class="card-header text-center">
                  <h2> Edit Data Penjualan </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/penjualan/{{ $penjualan->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Penjualan</label>
                        <input type="text" value="{{ $penjualan->kd_penjualan }}" name="kd_penjualan" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                    <label for="penitipans_id" class="form-label">Id Penitipan</label>
                    <select name="penitipans_id" class="form-control">
                        <option value="">-- Pilih Id Penitipan --</option>
                        @foreach($penitipans as $penitipan)
                            <option value="{{ $penitipan->id }}"
                                {{ $penjualan->penitipans_id == $penitipan->id ? 'selected' : '' }}>
                                {{ $penitipan->id_penitipan }} - {{ $penitipan->id_penitipan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Transaksi</label>
                        <input type="text" value="{{ $penjualan->tgl_transaksi }}" name="tgl_transaksi" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Penjualan</label>
                        <input type="text" value="{{ $penjualan->jml_penjualan }}" name="jml_penjualan" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/penjualan">  Tutup  </a> </button>
                        <button type="submit" class="btn btn-outline-secondary">Edit</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
