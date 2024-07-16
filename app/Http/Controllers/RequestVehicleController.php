<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vehicle\RequestForVehicle;
use Illuminate\View\View;
use App\Models\RequestVehicle;
use App\Models\Vehicle;

class RequestVehicleController extends Controller
{
    function create(): View
    {
        return view('vehicle.request');
    }

    function specific_create(Vehicle $vehicle): View
    {
        return view('vehicle.request', ['vehicle' => $vehicle]);
    }

    function store(RequestForVehicle $request) {
        $request = $request->validated();
        $vehicleRequest = new RequestVehicle($request);
        $vehicleRequest->save();
        return redirect()->route('dashboard')->with('success', 'Vehicle request successful')->with('vehicle', $vehicleRequest->nameOfVehicle);
    }

    function viewRequests(): View
    {
        $requests = RequestVehicle::all();
        return view('admin.requests', ['vehicle_requests' => $requests]);
    }
}
