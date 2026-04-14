@extends('layouts.app')

@section('title', 'Detail Alat ' . $device['code'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0"><i class="bi bi-gear-fill me-2"></i>{{ $device['name'] }} ({{ $device['code'] }})</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="bi bi-tag text-primary me-2"></i>Tipe</h5>
                            <p class="lead">{{ ucfirst($device['type']) }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="bi bi-geo-alt text-success me-2"></i>Lokasi</h5>
                            <p class="lead">{{ $device['location'] }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-md-6">
                            <h5>Status</h5>
                            @if ($device['status'] == 'active')
                                <div class="alert alert-success d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill fs-1 me-2"></i>
                                    <span class="fs-4 fw-bold">AKTIF</span>
                                </div>
                            @else
                                <div class="alert alert-danger d-flex align-items-center justify-content-center">
                                    <i class="bi bi-x-circle-fill fs-1 me-2"></i>
                                    <span class="fs-4 fw-bold">NONAKTIF</span>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <h5 class="mb-3">Data Terakhir</h5>
                            <p class="text-muted">Real-time data akan ditampilkan di sini</p>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <div class="d-flex gap-2">
                        <a href="{{ route('devices.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar
                        </a>
                        <button class="btn btn-outline-danger" disabled>
                            <i class="bi bi-power me-2"></i>Toggle Status
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
