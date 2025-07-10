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
                  <h2> Edit Data Pendaftaran </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/pendaftaran/{{ $pendaftaran->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pendaftar</label>
                        <input type="text" value="{{ $pendaftaran->nm_pendaftar }}" name="nm_pendaftar" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" value="{{ $pendaftaran->al_pendaftar }}" name="al_pendaftar" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Handphone</label>
                        <input type="text" value="{{ $pendaftaran->hp_pendaftar }}" name="hp_pendaftar" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/pendaftaran">  Tutup  </a> </button>
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
