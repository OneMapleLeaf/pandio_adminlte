<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    
    public function index()
    {   
        $employees = employee::get();
        return view ('employee.index', compact('employees'));
    }

    public function create()
    {
        return view ('employee.create');
    }


    public function store(Request $request)
    {
    $request->validate([
        'emp_fname' => 'required|max:255|string',
        'emp_lname' => 'required|max:255|string',
        'emp_midname' => 'required|max:255|string',
        'emp_age' => 'required|integer',
        'emp_address' => 'required|max:255|string',
        'emp_zip' => 'required|integer',
    ]);

    employee::create($request->all());
    return view ('employee.create');
    }

    public function edit( int $id)
    {
        $employees = employee::find($id);
        return view ('employee.edit',compact('employees'));
    }

    public function update(Request $request, int $id) {
        {
            $request->validate([
                'emp_fname' => 'required|max:255|string',
                'emp_lname' => 'required|max:255|string',
                'emp_midname' => 'required|max:255|string',
                'emp_age' => 'required|integer',
                'emp_address' => 'required|max:255|string',
                'emp_zip' => 'required|integer',

            ]);
        
            employee::findOrFail($id)->update($request->all());
            return redirect ()->back()->with('status','Employee Updated Successfully!');
            }
    }

    public function destroy(int $id){
        $employees = employee::findOrFail($id);
        $employees->delete();
        return redirect ()->back()->with('status','Employee Deleted');
    }
}
