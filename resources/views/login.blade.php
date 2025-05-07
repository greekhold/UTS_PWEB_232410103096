@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="text-center mb-4">
            <img src="{{ asset('images/iqes-logo.png') }}" alt="iq.es" height="60" class="mb-3">
            <h3 class="fw-bold text-primary">iq.es</h3>
            <p class="text-muted">Manajemen Penjualan Es Kristal</p>
        </div>
        
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0"><i class="fas fa-sign-in-alt me-2 text-primary"></i>Login</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-user text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="username" name="username" placeholder="Masukkan username" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-lock text-muted"></i>
                            </span>
                            <input type="password" class="form-control border-start-0" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary py-2">
                            <i class="fas fa-sign-in-alt me-2"></i> Masuk
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <p class="text-muted small">© 2024 iq.es. All rights reserved.</p>
        </div>
    </div>
</div>
@endsection
