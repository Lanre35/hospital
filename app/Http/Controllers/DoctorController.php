<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Doctors = Doctor::all();
        return view('lists',['Doctors' => $Doctors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-doctor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'dateofbirth' => 'required',
            'state' => 'required',
            'phone' => 'required',
            'biography' => 'required',
            'status' => 'required',
            'gender' => 'required'
        ])->validate();

        Doctor::create($validator);

        return redirect()->route('doctors.create')
            ->with('success', 'Doctor added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $find = Doctor::find($id);
        return view('doc-profile',['find' => $find]);
        // dd($find);

    }

    public function editProfile(string $id)
    {
        $editProfile = Doctor::find($id);
        return view('editProfile',['editProfile'=>$editProfile]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getbyId = Doctor::find($id);
        return view('editDoc',['getbyId'=>$getbyId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator =  Validator::make($request->all(), [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'dateofbirth' => 'required',
            'state' => 'required',
            'phone' => 'required',
            'biography' => 'required',
            'status' => 'required',
            'gender' => 'required'
        ])->validate();

        $update = Doctor::find($id);

        $update->update($validator);

        return redirect()->route('doctors.index')
            ->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = Doctor::destroy($id);
        return redirect()->route('doctors.index')
            ->with('success','Deleted successfully');
    }
}
