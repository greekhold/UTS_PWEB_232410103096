<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iq.es - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1e40af;
            --secondary: #f8fafc;
            --accent: #3b82f6;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --border: #e2e8f0;
            --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        body {
            background-color: var(--secondary);
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 0.75rem 0;
        }
        
        .navbar-brand {
            font-weight: 600;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--text-dark);
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: all 0.2s;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary);
            background-color: rgba(37, 99, 235, 0.1);
        }
        
        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: var(--card-shadow);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid var(--border);
            padding: 1rem 1.25rem;
            font-weight: 600;
            border-top-left-radius: 0.5rem !important;
            border-top-right-radius: 0.5rem !important;
        }
        
        .card-statistik {
            border-left: 4px solid var(--primary);
            transition: transform 0.2s;
        }
        
        .card-statistik:hover {
            transform: translateY(-5px);
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        
        .text-primary {
            color: var(--primary) !important;
        }
        
        .bg-primary {
            background-color: var(--primary) !important;
        }
        
        .badge-terlaris {
            background-color: var(--warning);
            color: white;
            font-weight: 500;
            padding: 0.35em 0.65em;
        }
        
        .table {
            color: var(--text-dark);
        }
        
        .table-light {
            background-color: var(--secondary);
        }
        
        .form-control {
            border: 1px solid var(--border);
            padding: 0.6rem 0.75rem;
        }
        
        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25);
        }
        
        .alert {
            border: none;
            border-radius: 0.5rem;
        }
        
        .display-6 {
            font-weight: 600;
            color: var(--primary);
        }
        
        footer {
            background-color: white;
            border-top: 1px solid var(--border);
        }
        
        .page-container {
            min-height: calc(100vh - 180px);
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <div class="container py-4 page-container">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Highlight active navbar link
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.navbar .nav-link');
            
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPath || (currentPath.includes(href) && href !== '/')) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
