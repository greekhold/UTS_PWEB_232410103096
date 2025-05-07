@extends('layouts.app')

@section('title', 'Pengelolaan Es')

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
    <div>
        <h2 class="fw-bold mb-0">Pengelolaan Varian Es</h2>
        <p class="text-muted">Kelola daftar varian es yang tersedia</p>
    </div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
        <i class="fas fa-plus-circle me-2"></i> Tambah Varian Baru
    </button>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-white">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-semibold"><i class="fas fa-cube me-2 text-primary"></i>Daftar Varian</h5>
            <div class="input-group input-group-sm" style="width: 250px;">
                <input type="text" class="form-control" placeholder="Cari varian es...">
                <button class="btn btn-outline-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Nama Varian</th>
                        <th>Harga</th>
                        <th>Terjual</th>
                        <th>Status</th>
                        <th class="text-end pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_es as $es)
                        <tr>
                            <td class="ps-4">{{ $es['id'] }}</td>
                            <td class="fw-medium">{{ $es['nama'] }}</td>
                            <td>Rp {{ number_format((float)$es['harga'], 0, ',', '.') }}</td>
                            <td>{{ $es['terjual'] }} unit</td>
                            <td>
                                @if($es['is_terlaris'])
                                    <span class="badge badge-terlaris">Terlaris</span>
                                @else
                                    <span class="badge bg-light text-dark">Normal</span>
                                @endif
                            </td>
                            <td class="text-end pe-4">
                                <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Hapus">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer bg-white d-flex justify-content-between align-items-center py-3">
        <div class="small text-muted">Menampilkan {{ count($data_es) }} dari {{ count($data_es) }} varian</div>
        <nav>
            <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Modal Tambah Varian -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel"><i class="fas fa-plus-circle me-2 text-primary"></i>Tambah Varian Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Varian</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama varian">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga" placeholder="Masukkan harga">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi varian"></textarea>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="isAvailable">
                        <label class="form-check-label" for="isAvailable">
                            Tersedia untuk dijual
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection