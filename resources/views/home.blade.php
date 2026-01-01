@extends('layouts.volt')

@section('title', 'Dashboard')

@section('content')
<div class="py-4 px-4">
    <div class="container-fluid">
        <div class="row">
            <!-- Stats Cards -->
            <div class="col-12 col-xl-8">
                <div class="row">
                    <!-- Empleados -->
                    <div class="col-12 col-sm-6 col-xl-6 mb-4">
                        <div class="stat-card primary">
                            <div class="stat-icon primary">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                            </div>
                            <div class="stat-label">Empleados</div>
                            <div class="stat-value">0</div>
                        </div>
                    </div>

                    <!-- Parcelas -->
                    <div class="col-12 col-sm-6 col-xl-6 mb-4">
                        <div class="stat-card secondary">
                            <div class="stat-icon secondary">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="stat-label">Parcelas</div>
                            <div class="stat-value">0</div>
                        </div>
                    </div>

                    <!-- Trabajos -->
                    <div class="col-12 col-sm-6 col-xl-6 mb-4">
                        <div class="stat-card warning">
                            <div class="stat-icon warning">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="stat-label">Trabajos</div>
                            <div class="stat-value">0</div>
                        </div>
                    </div>

                    <!-- Anticipos -->
                    <div class="col-12 col-sm-6 col-xl-6 mb-4">
                        <div class="stat-card danger">
                            <div class="stat-icon danger">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="stat-label">Anticipos</div>
                            <div class="stat-value">Bs. 0.00</div>
                        </div>
                    </div>
                </div>
                
                <!-- Tabla Trabajos Recientes -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="fs-5 fw-bold mb-0">📋 Trabajos Recientes</h2>
                    </div>
                    <div class="card-body" style="padding: 0;">
                        <table class="table-modern">
                            <thead>
                                <tr>
                                    <th>Empleado</th>
                                    <th>Parcela</th>
                                    <th>Trabajo</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center" style="padding: 3rem; color: #9ca3af;">
                                        <div style="font-size: 3rem; margin-bottom: 1rem;">🌾</div>
                                        <div style="font-weight: 600; font-size: 1.125rem; margin-bottom: 0.5rem;">No hay trabajos registrados</div>
                                        <div style="font-size: 0.875rem;">¡Empieza a agregar datos para ver tus estadísticas!</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar Acciones Rápidas -->
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="fs-5 fw-bold mb-0">⚡ Acciones Rápidas</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-3">
                            <a href="#" class="btn-action primary">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                </svg>
                                Nuevo Empleado
                            </a>
                            <a href="#" class="btn-action secondary">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                </svg>
                                Nueva Parcela
                            </a>
                            <a href="#" class="btn-action warning">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                Registrar Trabajo
                            </a>
                            <a href="#" class="btn-action danger">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                </svg>
                                Nuevo Anticipo
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Summary Card -->
                <div class="card" style="margin-top: 1.5rem; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white;">
                    <div class="card-body">
                        <h3 style="font-size: 1.125rem; font-weight: 700; margin-bottom: 1rem;">📈 Resumen del Mes</h3>
                        <div style="display: grid; gap: 1rem;">
                            <div>
                                <div style="font-size: 0.875rem; opacity: 0.9;">Total Trabajos</div>
                                <div style="font-size: 1.5rem; font-weight: 800;">0</div>
                            </div>
                            <div>
                                <div style="font-size: 0.875rem; opacity: 0.9;">Total Anticipos</div>
                                <div style="font-size: 1.5rem; font-weight: 800;">Bs. 0.00</div>
                            </div>
                            <div>
                                <div style="font-size: 0.875rem; opacity: 0.9;">Empleados Activos</div>
                                <div style="font-size: 1.5rem; font-weight: 800;">0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection