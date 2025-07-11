@extends('layouts.template')

@section('title', 'Data Pembayaran')

@section('headline', 'Data Pembayaran')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">
            <a href="/pembayaran/tambah" class="btn btn-primary btn-sm">
                <i class="fa fa-user-plus"></i> Tambah Data
            </a>
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover" >
            <thead class="table-light">
                <tr>
                    <th scope="col"><b>#</b></th>
                    <th scope="col"><b>Kode Pembayaran</b></th>
                    <th scope="col"><b>Total Pembayaran</b></th>
                    <th scope="col"><b>Jenis Pembayaran</b></th>
                    <th scope="col" class="text-end"><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pembayaran as $index => $data)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $data->kd_pembayaran }}</td>
                    <td>{{ $data->total_pembayaran }}</td>
                    <td>{{ $data->jns_pembayaran }}</td>
                    {{-- <td>1</td>
                    <td>Dini</td>
                    <td>Mibo</td>
                    <td>098765</td> --}}
                    <td class="text-end">
                        {{-- <a href="{{ url('/pendaftaran') }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-circle-info"></i>
                        </a> --}}
                        <a href="{{ route('pembayaran.edit', $data->id) }}" class="btn btn-success btn-sm">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>



                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fa-solid fa-trash"></i>
                        </button>

                        <!-- Modal --> 
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deleteModalLabel">Peringatan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin ingin menghapus data pembayaran <strong></strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ url('/pembayaran/' . $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Data tidak tersedia.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
