<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        // dd($employees[0]['role']);
        return view('employees',['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('add-employee',['roles'=>$roles]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $selectRoles = $request->input('roles');
        $credentials = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:employees',
            'username' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'employee_id' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);



        $employeeId= rand(0, 99);
        $employ = str_pad($employeeId, 2, '0', STR_PAD_LEFT);

        $employee = Employee::create([
            'firstname' => $credentials['firstname'],
            'lastname' => $credentials['lastname'],
            'email' => $credentials['email'],
            'username' => $credentials['username'],
            'phone' => $credentials['phone'],
            'password' => bcrypt($credentials['password']),
            'role_id' => $selectRoles,
            'employee_id' => $credentials['employee_id'].'-000'.$employ,
            'date' => $credentials['date'],
            'status' => $credentials['status'],
        ]);

        return redirect()->route('employees.index')->with('success','Employee Created Successfully');
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
       $employee = Employee::find($id);
        return view('edit-employee',['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credentials = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'role' => 'required',
            'employee_id' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        $update = Employee::findOrFail($id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'username' => $request->username,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'employee_id' => $request->employee_id,
            'date' => $request->date,
            'status' => $request->status,
        ]);
        return redirect()->route('employees.index')->with('success','Employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = Employee::destroy($id);
        return redirect()->route('employees.index')->with('success','Employee Deleted Successfully.');
    }
}
