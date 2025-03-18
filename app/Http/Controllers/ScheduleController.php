<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Department;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::all();

        return view('schedule', ['schedules' => $schedules]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        $departments = Department::all();
        return view('add-schedule', [
            'doctors' => $doctors,
            'departments' => $departments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $selectedDoctor = $request->input('doctors');
        $selectedDepartment = $request->input('departments');

        $input = $request->all('days');
        $days = $input['days'];

        $credentials = $request->validate([
            'days' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'message' => 'required',
            'status' => 'required'
        ]);


        $schedule = Schedule::create([
            'doctor_id' => $selectedDoctor,
            'department_id' => $selectedDepartment,
            'days' => $input['days'] = implode(',',$days),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'message' => $request->input('message'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('schedule.index')->with('success', 'Schedule created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $scheduleId = Schedule::find($id);
        return view('edit-schedule',['scheduleId'=> $scheduleId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $selectedDoctor = $request->input('doctors');
        $selectedDepartment = $request->input('departments');

        $input = $request->all('days');
        $days = $input['days'];


        $credentials = $request->validate([
            'days' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'message' => 'required',
            'status' => 'required'
        ]);


        $schedule = Schedule::find($id)->update([
            'doctor_id' => $selectedDoctor,
            'department_id' => $selectedDepartment,
            'days' => $days = implode(',', $days),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'message' => $request->input('message'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Schedule::destroy($id);
        return redirect()->route('schedule.index')->with('success','Schedule deleted successfully');
    }
}
