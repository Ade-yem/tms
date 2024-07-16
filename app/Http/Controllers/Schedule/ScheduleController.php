<?php

namespace App\Http\Controllers\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\RequestVehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Vehicle;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $schedules = Schedule::all();
        $email = Auth::user()->email;
        $newArray = [];
        foreach ($schedules as $schedule) {
            if ($schedule->user_email == $email) {
                $newArray[] = $schedule;
            }
        }
        // sort the array by start_time
        usort($newArray, function ($a, $b) {
            return strtotime($a->start_time) - strtotime($b->start_time);
        });

        return view("user.schedule", ["schedules" => $newArray]);
    }

    /**
     * Display a listing of the resource.
     */
    public function admin_index():View
    {
        $schedules = Schedule::all();
        $newArray = [];
        foreach ($schedules as $schedule) {
            $newArray[] = $schedule;
        }
        usort($newArray, function ($a, $b) {
            return strtotime($a->start_time) - strtotime($b->start_time);
        });

        return view("admin.schedule", ["schedules" => $newArray]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('schedule.create');
    }

    public function create_specific(RequestVehicle $vehicleRequest):View
    {
        return view('schedule.create', ['vehicleRequest' => $vehicleRequest]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'vehicle' => 'required',
            'user_email' => 'required'
        ]);
        $schedule = new Schedule($request->all());
        $schedule->save();
        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        $vehicle = Vehicle::where('model', $schedule->vehicle)->first();
        return view('schedule.show', ['schedule' => $schedule, 'vehicle' => $vehicle]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        return view('schedule.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'vehicle' => 'required',
            'numOfPassengers' => 'required',
            'user_email' => 'required'
        ]);
        $schedule->update($request->all());
        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully!');
    }
}
