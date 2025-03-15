<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patients',['patients'=>$patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:patients',
            'password' => 'required|string',
            'age' => 'required|min:1|max:2',
            'country'=> 'required',
            'state' => 'required',
            'phone' => 'required|max:11',
            'address' => 'required|string',
            'status' => 'required',
            'gender' => 'required'
        ]);

        $save = Patient::create($validator);
        return redirect()->route('patients.create')->with('success','Patient created succesfully');
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
        $patient = Patient::find($id);
        return view('edit-patient',['patient'=>$patient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = Patient::find($id);

        $validator = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'age' => 'required|min:1|max:2',
            'phone' => 'required|max:11',
            'status' => 'required',
        ]);

        $patient->update($validator);

        return redirect()->route('patients.index');

        // dd('okk');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::destroy($id);
        return redirect()->route('patients.index')
            ->with('success','Deleted successfully');
    }
}
