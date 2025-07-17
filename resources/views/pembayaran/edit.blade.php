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
                  <h2> Edit Data Pembayaran </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/pembayaran/{{ $pembayaran->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Pembayaran</label>
                        <input type="text" value="{{ $pembayaran->kd_pembayaran }}" name="kd_pembayaran" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                    <label for="penjualans_id" class="form-label">Kode Penjualan</label>
                    <select name="penjualans_id" class="form-control">
                        <option value="">-- Pilih Kode Penjualan --</option>
                        @foreach($penjualans as $penjualan)
                            <option value="{{ $penjualan->id }}"
                                {{ $pembayaran->penjualans_id == $penjualan->id ? 'selected' : '' }}>
                                {{ $penjualan->id_penjualan }} - {{ $penjualan->id_penjualan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total Pembayaran</label>
                        <input type="text" value="{{ $pembayaran->total_pembayaran }}" name="total_pembayaran" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Pembayaran</label>
                        <input type="text" value="{{ $pembayaran->jns_pembayaran }}" name="jns_pembayaran" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/pembayaran">  Tutup  </a> </button>
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
