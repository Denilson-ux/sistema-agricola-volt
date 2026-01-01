<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') - Sistema Agrícola</title>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <style>
        :root {
            --bs-primary: #28a745;
            --bs-primary-rgb: 40, 167, 69;
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
        }
        
        /* Sidebar verde */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 260px;
            background: linear-gradient(135deg, #1e4620 0%, #28a745 100%);
            color: white;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.9);
            padding: 0.75rem 1rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        
        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .sidebar svg {
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 0.5rem;
        }
        
        /* Content area */
        .content {
            margin-left: 260px;
            min-height: 100vh;
        }
        
        /* Topbar */
        .navbar-top {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Cards */
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
            margin-bottom: 1.5rem;
        }
        
        .card-header {
            background-color: transparent;
            border-bottom: 1px solid #e9ecef;
            padding: 1.25rem;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        /* Icon shapes */
        .icon-shape {
            width: 48px;
            height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.55rem;
        }
        
        .icon-shape-primary {
            background-color: rgba(40, 167, 69, 0.2);
            color: #28a745;
        }
        
        .icon-shape-secondary {
            background-color: rgba(108, 117, 125, 0.2);
            color: #6c757d;
        }
        
        .icon-shape-tertiary {
            background-color: rgba(23, 162, 184, 0.2);
            color: #17a2b8;
        }
        
        .icon-shape-quaternary {
            background-color: rgba(255, 193, 7, 0.2);
            color: #ffc107;
        }
        
        .icon {
            width: 1.5rem;
            height: 1.5rem;
        }
        
        /* Table */
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            color: #6c757d;
        }
        
        /* Buttons */
        .btn {
            border-radius: 0.375rem;
            padding: 0.625rem 1.25rem;
            font-weight: 500;
        }
        
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        
        /* Responsive */
        @media (max-width: 991.98px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s;
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .content {
                margin-left: 0;
            }
        }
        
        .h6 { font-size: 0.875rem; }
        .fw-extrabold { font-weight: 800; }
        .text-gray-400 { color: #94a3b8; }
        .fs-5 { font-size: 1.25rem; }
        .fw-bold { font-weight: 700; }
        .mb-0 { margin-bottom: 0; }
        .mb-4 { margin-bottom: 1.5rem; }
        .py-4 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
        .d-grid { display: grid; }
        .gap-2 { gap: 0.5rem; }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="p-4">
            <div class="text-center mb-4">
                <h5 class="text-white fw-bold">🌾 Sistema Agrícola</h5>
                <small class="text-white-50">Hola, {{ Auth::user()->name }}</small>
            </div>
            
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                
                <li class="nav-item mt-2">
                    <a href="#" class="nav-link">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                        Empleados
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                        </svg>
                        Parcelas
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Trabajos
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                        </svg>
                        Anticipos
                    </a>
                </li>
                
                <li class="nav-item mt-4">
                    <a href="{{ route('logout') }}" class="nav-link text-danger"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">
        <!-- Topbar -->
        <nav class="navbar-top text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0 text-white">🌾 Sistema Agrícola</h4>
                <span class="text-white">{{ Auth::user()->name }}</span>
            </div>
        </nav>

        @yield('content')
    </main>
</body>
</html>