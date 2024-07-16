<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vehicle\CreateVehicleRequest;
use App\Http\Requests\Vehicle\UpdateVehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $vehicles = Vehicle::all();
        return view("showcase", ["vehicles" => $vehicles]);
    }

    /**
     * Display a listing of the resource for admin.
     */
    public function admin_index(): View
    {
        $vehicles = Vehicle::all();
        return view("vehicle.index", ["vehicles" => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateVehicleRequest $request)
    {
        $vehicle = new Vehicle($request->validated());
        $vehicle->save();
        return redirect()->route('admin-vehicles')->with('success', 'Vehicle created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicle.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle): View
    {
        return view('vehicle.edit', compact('vehicle'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->forceFill($request->validated());
        return redirect()->route('admin-vehicles')->with('success', 'Vehicle updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('admin-vehicles')->with('success', 'Vehicle deleted successfully!');
    }
}
