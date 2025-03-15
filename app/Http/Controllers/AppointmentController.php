<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('appoint' , [
            'appointments' => $appointments,
        ]);
        // dd($appointments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $doctors = Doctor::all();
        $departments = Department::all();
        $patients = Patient::all();

        return view('add-appointment', [
            'doctors' => $doctors,
            'departments' => $departments,
            'patients' => $patients,
        ]);
        // return dd($doctors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $selectedDoctor = $request->input('doctors');
        $selectedDepartment = $request->input('departments');
        $selectedPatient = $request->input('patients');


        $appointment = Appointment::create([
            'appointment_id' => $request->appointment_id,
            'age' => $request->age,
            'time' => $request->time,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'status' => $request->status,
            'patient_id' => $selectedPatient,
            'doctor_id' => $selectedDoctor,
            'department_id' => $selectedDepartment,
            'date' => date($request->date),
        ]);
        // dd($request->all());
        return redirect()->route('appointments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $app = Appointment::find($id);
        return view('edit-appointment', [
            'app' => $app,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $selectedDoctor = $request->input('doctors');
        $selectedDepartment = $request->input('departments');
        $selectedPatient = $request->input('patients');



    //    $credentials = $request->validate([
    //         'id'=>'required',
    //         'appointment_id' => 'required|string',
    //         'time' => 'required|string',
    //         'age' => 'required|string',
    //         'email' => 'required|string',
    //         'phone' => 'required|string',
    //         'message' => 'required|string',
    //         'status' => 'required|string',
    //         'patient_id' => 'required|string',
    //         'doctor_id' => 'required|string',
    //         'department_id' => 'required|string',
    //         'date' => 'required|string',
    //     ]);



        $upadte = Appointment::find($id)->update([
            'appointment_id'=>$request->appointment_id,
            'doctor_id' => $request->doctor_id,
            'department_id'=> $request->department_id,
            'patient_id'=> $request->patient_id,
            'email'=> $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'time' => $request->time,
            'date' => date($request->date),
            'status' => $request->status,
        ]);

        return redirect()->route('appointments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Appointment::destroy($id);
        return redirect()->route('appointments.index');
    }
}
