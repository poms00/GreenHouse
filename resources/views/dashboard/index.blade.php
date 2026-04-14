@extends('layouts.app')

@section('title', 'Dashboard Greenhouse')

@section('content')
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Alat</h5>
                    <h2>{{ $summary['total_devices'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Alat Aktif</h5>
                    <h2>{{ $summary['active_devices'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h5 class="card-title">Total Tanaman</h5>
                    <h2>{{ $summary['total_plants'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Alat Nonaktif</h5>
                    <h2>{{ $summary['total_devices'] - $summary['active_devices'] }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rata-rata Suhu</h5>
                    <p class="display-4">{{ number_format($summary['avg_temperature'], 1) }}°C</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rata-rata Kelembaban</h5>
                    <p class="display-4">{{ number_format($summary['avg_humidity'], 1) }}%</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Peringatan</h5>
        </div>
        <ul class="list-group list-group-flush">
            @forelse ($alerts as $alert)
                <li class="list-group-item list-group-item-warning d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ $alert }}
                </li>
            @empty
                <li class="list-group-item text-success">Tidak ada peringatan</li>
            @endforelse
        </ul>
    </div>

    <div class="mt-4">
        <a href="{{ route('devices.index') }}" class="btn btn-primary btn-lg">
            <i class="bi bi-list-ul"></i> Lihat Daftar Alat
        </a>
    </div>
@endsection
