<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') - Sistema Agrícola</title>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        :root {
            --primary: #10b981;
            --primary-dark: #059669;
            --primary-light: #34d399;
            --secondary: #6366f1;
            --accent: #f59e0b;
            --danger: #ef4444;
            --dark: #1f2937;
            --darker: #111827;
            --light: #f9fafb;
            --gray: #6b7280;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
            color: var(--dark);
            overflow-x: hidden;
        }
        
        /* Sidebar Premium */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 280px;
            background: linear-gradient(180deg, #1a1f36 0%, #0f1419 100%);
            backdrop-filter: blur(10px);
            box-shadow: 4px 0 24px rgba(0, 0, 0, 0.12);
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, 0.5);
            border-radius: 10px;
        }
        
        .sidebar-header {
            padding: 2rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%);
        }
        
        .sidebar-logo {
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }
        
        .sidebar-subtitle {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .sidebar-user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 1.5rem;
            background: rgba(16, 185, 129, 0.1);
            border-radius: 12px;
            margin: 1rem;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1.125rem;
        }
        
        .user-info h6 {
            color: white;
            font-weight: 600;
            font-size: 0.875rem;
            margin: 0;
        }
        
        .user-info p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.75rem;
            margin: 0;
        }
        
        .nav-section {
            padding: 1.5rem 1rem;
        }
        
        .nav-section-title {
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 0.5rem;
            margin-bottom: 0.75rem;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.875rem 1rem;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.9375rem;
            margin-bottom: 0.25rem;
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: linear-gradient(180deg, #10b981 0%, #059669 100%);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        
        .nav-link:hover {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            transform: translateX(4px);
        }
        
        .nav-link:hover::before {
            transform: scaleY(1);
        }
        
        .nav-link.active {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(5, 150, 105, 0.1) 100%);
            color: #10b981;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2);
        }
        
        .nav-link.active::before {
            transform: scaleY(1);
        }
        
        .nav-link svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }
        
        .nav-link.danger {
            color: rgba(239, 68, 68, 0.8);
        }
        
        .nav-link.danger:hover {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }
        
        /* Content Area */
        .content {
            margin-left: 280px;
            min-height: 100vh;
            transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Topbar Premium */
        .topbar {
            background: white;
            padding: 1.25rem 2rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 999;
        }
        
        .topbar-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .topbar-user {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .topbar-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.875rem;
        }
        
        /* Cards Premium */
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .card:hover {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        
        .card-header {
            background: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        /* Stats Cards */
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--color-start) 0%, var(--color-end) 100%);
        }
        
        .stat-card:hover {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transform: translateY(-4px);
        }
        
        .stat-card.primary { --color-start: #10b981; --color-end: #059669; }
        .stat-card.secondary { --color-start: #6366f1; --color-end: #4f46e5; }
        .stat-card.warning { --color-start: #f59e0b; --color-end: #d97706; }
        .stat-card.danger { --color-start: #ef4444; --color-end: #dc2626; }
        
        .stat-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .stat-icon.primary { background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%); color: #10b981; }
        .stat-icon.secondary { background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(79, 70, 229, 0.05) 100%); color: #6366f1; }
        .stat-icon.warning { background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(217, 119, 6, 0.05) 100%); color: #f59e0b; }
        .stat-icon.danger { background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%); color: #ef4444; }
        
        .stat-icon svg {
            width: 28px;
            height: 28px;
        }
        
        .stat-label {
            font-size: 0.875rem;
            color: var(--gray);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }
        
        .stat-value {
            font-size: 2rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1;
        }
        
        /* Action Buttons */
        .btn-action {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9375rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
        }
        
        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        
        .btn-action.primary { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
        .btn-action.secondary { background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%); }
        .btn-action.warning { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }
        .btn-action.danger { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); }
        
        .btn-action svg {
            width: 20px;
            height: 20px;
        }
        
        /* Table */
        .table-modern {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table-modern thead th {
            background: #f9fafb;
            padding: 1rem 1.5rem;
            text-align: left;
            font-weight: 700;
            font-size: 0.75rem;
            color: var(--gray);
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #e5e7eb;
        }
        
        .table-modern tbody td {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid #f3f4f6;
            color: var(--dark);
        }
        
        .table-modern tbody tr:hover {
            background: #f9fafb;
        }
        
        /* Utilities */
        .mb-4 { margin-bottom: 1.5rem; }
        .py-4 { padding-top: 2rem; padding-bottom: 2rem; }
        .px-4 { padding-left: 2rem; padding-right: 2rem; }
        .d-grid { display: grid; }
        .gap-3 { gap: 1rem; }
        .text-center { text-align: center; }
        .fw-bold { font-weight: 700; }
        .fs-5 { font-size: 1.25rem; }
        
        /* Responsive */
        @media (max-width: 991px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Premium -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <span>🌾</span>
                <span>Sistema Agrícola</span>
            </div>
            <div class="sidebar-subtitle">Gestión Profesional</div>
        </div>
        
        <div class="sidebar-user">
            <div class="user-avatar">{{ substr(Auth::user()->name, 0, 1) }}</div>
            <div class="user-info">
                <h6>{{ Auth::user()->name }}</h6>
                <p>Administrador</p>
            </div>
        </div>
        
        <div class="nav-section">
            <div class="nav-section-title">Principal</div>
            <a href="{{ route('home') }}" class="nav-link active">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                Dashboard
            </a>
        </div>
        
        <div class="nav-section">
            <div class="nav-section-title">Gestión</div>
            <a href="#" class="nav-link">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                </svg>
                Empleados
            </a>
            <a href="#" class="nav-link">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                </svg>
                Parcelas
            </a>
            <a href="#" class="nav-link">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
                Trabajos
            </a>
            <a href="#" class="nav-link">
                <svg fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                </svg>
                Anticipos
            </a>
        </div>
        
        <div class="nav-section">
            <a href="{{ route('logout') }}" class="nav-link danger"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Cerrar Sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

    <main class="content">
        <!-- Topbar Premium -->
        <div class="topbar">
            <div class="topbar-title">
                <span>🌾</span>
                <span>Dashboard</span>
            </div>
            <div class="topbar-user">
                <div class="topbar-badge">{{ Auth::user()->name }}</div>
            </div>
        </div>

        @yield('content')
    </main>
</body>
</html>