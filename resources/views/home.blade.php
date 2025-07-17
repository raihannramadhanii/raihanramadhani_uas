@extends('layouts.template')

@section('title')
    Dashboard
@endsection

@section('headline')
    Dashboard
@endsection

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Selamat Datang, Admin 👋</h1>
        <p class="text-muted fs-5">Semoga harimu menyenangkan dan penuh semangat 🌼</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="p-4 bg-light rounded shadow-sm text-center">
                <h5 class="text-secondary">Total Penjualan</h5>
                <h2 class="fw-bold text-success">120</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-light rounded shadow-sm text-center">
                <h5 class="text-secondary">Jumlah Penitipan</h5>
                <h2 class="fw-bold text-info">35</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-light rounded shadow-sm text-center">
                <h5 class="text-secondary">Admin Aktif</h5>
                <h2 class="fw-bold text-warning">1</h2>
            </div>
        </div>
    </div>
</div>
@endsection
