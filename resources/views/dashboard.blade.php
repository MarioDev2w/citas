@extends('adminlte::page') @section('title', 'Dashboard')
@section('content_header')

<svg viewBox="0 0 800 400" xmlns="http://www.w3.org/2000/svg">
    <!-- Fondo blanco -->
    <rect x="0" y="0" width="800" height="400" fill="#ffffff"/>
    
    <!-- Patrón de fondo sutil -->
    <pattern id="circuitPattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
        <path d="M15 0 L15 30 L30 30 L30 45 L45 45 L45 60" stroke="#f1f5f9" stroke-width="2" fill="none"/>
        <path d="M0 15 L30 15 L30 30 L45 30 L45 45 L60 45" stroke="#f1f5f9" stroke-width="2" fill="none"/>
    </pattern>
    <rect x="0" y="0" width="800" height="400" fill="url(#circuitPattern)"/>
    
    <!-- Elementos decorativos -->
    <circle cx="100" cy="100" r="60" fill="#3b82f6" opacity="0.1"/>
    <circle cx="700" cy="300" r="80" fill="#3b82f6" opacity="0.1"/>
    
    <!-- Icono de calendario estilizado -->
    <rect x="600" y="80" width="40" height="40" fill="none" stroke="#2563eb" stroke-width="3"/>
    <line x1="600" y1="95" x2="640" y2="95" stroke="#2563eb" stroke-width="3"/>
    <line x1="610" y1="105" x2="610" y2="115" stroke="#2563eb" stroke-width="3"/>
    <line x1="620" y1="105" x2="620" y2="115" stroke="#2563eb" stroke-width="3"/>
    <line x1="630" y1="105" x2="630" y2="115" stroke="#2563eb" stroke-width="3"/>
    
    <!-- Icono de reloj estilizado -->
    <circle cx="160" cy="100" r="20" fill="none" stroke="#2563eb" stroke-width="3"/>
    <line x1="160" y1="85" x2="160" y2="100" stroke="#2563eb" stroke-width="3"/>
    <line x1="160" y1="100" x2="170" y2="100" stroke="#2563eb" stroke-width="3"/>
    
    <!-- Título principal -->
    <text x="400" y="150" font-family="Arial Black, sans-serif" font-size="46" fill="#1e40af" text-anchor="middle">
        CDA PRADERA
    </text>
    
    <!-- Subtítulo -->
    <text x="400" y="220" font-family="Arial, sans-serif" font-size="32" fill="#1e3a8a" text-anchor="middle">
        BIENVENIDOS AL SISTEMA
    </text>
    <text x="400" y="270" font-family="Arial, sans-serif" font-size="32" fill="#1e3a8a" text-anchor="middle">
        DE AGENDAMIENTO DE CITAS
    </text>
    
    <!-- Líneas decorativas -->
    <line x1="250" y1="290" x2="550" y2="290" stroke="#3b82f6" stroke-width="2"/>
    
    <!-- Texto informativo -->
    <text x="400" y="340" font-family="Arial, sans-serif" font-size="20" fill="#2563eb" text-anchor="middle" font-style="italic">
        Programa tu revisión tecnico-mecánica de manera rápida y segura
    </text>
    
    <!-- Elementos tecnológicos decorativos -->
    <rect x="100" y="320" width="30" height="3" fill="#3b82f6"/>
    <rect x="140" y="320" width="20" height="3" fill="#3b82f6"/>
    <rect x="640" y="320" width="30" height="3" fill="#3b82f6"/>
    <rect x="680" y="320" width="20" height="3" fill="#3b82f6"/>
    
    <!-- Decoración adicional -->
    <path d="M50 50 L80 50 L80 80" fill="none" stroke="#3b82f6" stroke-width="2"/>
    <path d="M720 350 L750 350 L750 320" fill="none" stroke="#3b82f6" stroke-width="2"/>
</svg>


@stop @section('content') @stop @section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css" /> --}} @stop
@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
