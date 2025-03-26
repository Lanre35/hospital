<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('add-roles');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'roleName' => 'required|min:5|max:255',
            'status' => 'required'
        ]);

        $save = Role::create($credentials);

        return redirect()->route('roles.index')->with('success','Role added successfully');
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
        $roleId = Role::find($id);
        return view('edit-role',['roleId'=>$roleId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credentials = $request->validate([
            'roleName' => 'required|min:5|max:255',
            'status' => 'required'
        ]);

        $update = Role::find($id)->update([
            'roleName' => $request->roleName,
            'status' => $request->status
        ]);

        return redirect()->route('roles.index')->with('success','Role edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteRole = Role::destroy($id);
        return redirect()->route('roles.index')->with('success','Role deleted successfully');
    }
}
