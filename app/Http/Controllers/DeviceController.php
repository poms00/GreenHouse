<?php

namespace App\Http\Controllers;

use App\Models\device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    private array $devices = [
        [
            'code' => 'GH-01',
            'name' => 'Sensor Utama',
            'type' => 'sensor',
            'location' => 'Blok A',
            'status' => 'active',
        ],
        [
            'code' => 'GH-02',
            'name' => 'Sensor Timur',
            'type' => 'sensor',
            'location' => 'Blok B',
            'status' => 'maintenance',
        ],
        [
            'code' => 'GH-03',
            'name' => 'Controller Irigasi',
            'type' => 'controller',
            'location' => 'Blok C',
            'status' => 'active',
        ],
    ];
    public function index()
    {
        $devices = $this->devices;

        return view('devices.index', compact('devices'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $code)
    {
        $device = collect($this->devices)->firstWhere('code', $code);

        abort_if(!$device, 404);

        return view('devices.show', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(device $device)
    {
        //
    }
}
