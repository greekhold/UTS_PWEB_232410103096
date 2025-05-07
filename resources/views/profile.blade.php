@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card shadow-sm">
            <div class="card-body text-center p-4">
                <div class="mb-3">
                    <div class="avatar-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px; border-radius: 50%;">
                        <i class="fas fa-user-circle text-primary" style="font-size: 3rem;"></i>
                    </div>
                    <h4 class="fw-bold mb-1">{{ $username ?? 'Admin' }}</h4>
                    <p class="text-muted mb-3">Admin iq.es</p>
                    <div class="d-grid">
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-camera me-2"></i> Ubah Foto
                        </button>
                    </div>
                </div>
                <hr>
                <div class="text-start">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-calendar-alt text-primary me-3"></i>
                        <div>
                            <div class="small text-muted">Terdaftar Sejak</div>
                            <div>1 Januari 2024</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <div>
                            <div class="small text-muted">Email</div>
                            <div>admin@iqes.com</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt text-primary me-3"></i>
                        <div>
                            <div class="small text-muted">Telepon</div>
                            <div>0987654312</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8">
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0 fw-semibold"><i class="fas fa-user-edit me-2 text-primary"></i>Informasi Profil</h5>
            </div>
            <div class="card-body p-4">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" value="{{ $username ?? 'Admin' }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control" id="role" value="Admin iq.es" readonly>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="fullName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="phone" class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" id="phone" placeholder="Masukkan no. telepon">
                        </div>
                        <div class="col-md-6">
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="location" placeholder="Masukkan lokasi">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea class="form-control" id="bio" rows="3" placeholder="Tulis bio singkat tentang Anda"></textarea>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-secondary me-2">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0 fw-semibold"><i class="fas fa-lock me-2 text-primary"></i>Keamanan</h5>
            </div>
            <div class="card-body p-4">
                <form>
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Password Saat Ini</label>
                        <input type="password" class="form-control" id="currentPassword" placeholder="Masukkan password saat ini">
                    </div>
                    
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Masukkan password baru">
                    </div>
                    
                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi password baru">
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Perbarui Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection