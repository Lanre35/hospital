<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaveType = LeaveType::all();
        return view('leave-type',['leaveType'=>$leaveType]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('add-leave-type');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentails = $request->validate([
            'leaveType'=>'required|min:5|max:255',
            'numberOfDays'=>'required|min:1|numeric',
        ]);

        $save = LeaveType::create($credentails);
        return redirect()->route('leave-type.index')->with('success','Leave type save successfully');
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
        $leaveTypeId = LeaveType::find($id);

        return view('edit-leave-type',['leaveTypeId'=>$leaveTypeId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credentails = $request->validate([
            'leaveType' => 'required',
            'numberOfDays' => 'required|min:1|numeric',
        ]);

        $update = LeaveType::find($id)->update($credentails);
        return redirect()->route('leave-type.index')->with('success','Leave Type Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
