@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-0">Dashboard</h2>
        <p class="text-muted">Ringkasan performa bisnis</p>
    </div>
    @if(isset($username))
        <div class="alert alert-primary mb-0 py-2 px-3 d-flex align-items-center">
            <i class="fas fa-user-circle me-2 fs-5"></i>
            <div>
                <span class="small">Selamat datang,</span>
                <div class="fw-bold">{{ $username }}</div>
            </div>
        </div>
    @endif
</div>

<div class="row">
    <!-- Card Statistik -->
    <div class="col-md-4 mb-4">
        <div class="card card-statistik h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title mb-0 fw-semibold">Total Penjualan</h5>
                    <div class="rounded-circle bg-primary bg-opacity-10 p-2">
                        <i class="fas fa-shopping-cart text-primary"></i>
                    </div>
                </div>
                <p class="display-6 mb-0">{{ $statistik['total_penjualan'] }}</p>
                <p class="text-muted small">Transaksi</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card card-statistik h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title mb-0 fw-semibold">Pesanan Hari Ini</h5>
                    <div class="rounded-circle bg-primary bg-opacity-10 p-2">
                        <i class="fas fa-calendar-day text-primary"></i>
                    </div>
                </div>
                <p class="display-6 mb-0">{{ $statistik['pesanan_hari_ini'] }}</p>
                <p class="text-muted small">Pesanan</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card card-statistik h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title mb-0 fw-semibold">Varian Es</h5>
                    <div class="rounded-circle bg-primary bg-opacity-10 p-2">
                        <i class="fas fa-ice-cream text-primary"></i>
                    </div>
                </div>
                <p class="display-6 mb-0">{{ $statistik['varian_es'] }}</p>
                <p class="text-muted small">Jenis</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-semibold"><i class="fas fa-chart-line me-2 text-primary"></i>Grafik Penjualan</h5>
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-primary active">Minggu</button>
                    <button class="btn btn-outline-primary">Bulan</button>
                    <button class="btn btn-outline-primary">Tahun</button>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center py-5 text-muted">
                    <i class="fas fa-chart-area fs-1 mb-3 text-primary opacity-50"></i>
                    <p>Data grafik penjualan akan ditampilkan di sini</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                <h5 class="mb-0 fw-semibold"><i class="fas fa-star me-2 text-warning"></i>Es Terlaris</h5>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-4 py-3">
                        <div>
                            <span class="badge bg-primary me-2">1</span>
                            Es Serut Coklat
                        </div>
                        <span class="badge badge-terlaris">124 Terjual</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-4 py-3">
                        <div>
                            <span class="badge bg-primary me-2">2</span>
                            Es Serut Strawberry
                        </div>
                        <span class="badge badge-terlaris">98 Terjual</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-4 py-3">
                        <div>
                            <span class="badge bg-primary me-2">3</span>
                            Es Batu Kristal
                        </div>
                        <span class="badge badge-terlaris">87 Terjual</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
