<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="{{ asset('images/iqes-logo.png') }}" alt="iq.es" height="36" class="me-2">
            <span class="text-primary">iq.es</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-1">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="fas fa-chart-line me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item me-1">
                    <a class="nav-link" href="{{ route('pengelolaan') }}">
                        <i class="fas fa-cube me-1"></i> Pengelolaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">
                        <i class="fas fa-user-circle me-1"></i> Profile
                    </a>
                </li>
            </ul>
            <div class="ms-3 d-none d-lg-block">
                <a href="http://127.0.0.1:8000/" class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </a>
            </div>
        </div>
    </div>
</nav>
