<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('departments',['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-department');;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'department' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string',
        ]);

        $departments = Department::create($credentials);
        return redirect()->route('departments.index')
            ->with('success', 'Department added successfully');
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
        $department = Department::find($id);
        return view('edit-departmnt',['department'=>$department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = Department::find($id);
        $credentials = $request->validate([
            'department' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string',
        ]);

        $update = $department->update($credentials);

        return redirect()->route('departments.index')
            ->with('success','Department Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::destroy($id);
        return redirect()->route('departments.index');
    }
}
