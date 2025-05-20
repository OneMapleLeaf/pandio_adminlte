<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee2;
class employee2Controller extends Controller
{
    public function index()
    {
        $employees = employee2::get();
        return view ('employee2.index', compact('employees'));
    }

    public function create()
    {
        return view ('employee2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'emp_fname' => 'required|max:255|string',
            'emp_lname' => 'required|max:255|string',
            'emp_address' => 'required|max:255|string',
            'emp_phone' => 'required|max:255|string',
        ]);

        employee2::create($request->all());
        return redirect()->route('employee2.index');
    }

    public function edit(int $id)
    {
        $employees = employee2::find($id);
        return view ('employee2.edit',compact('employees'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'emp_fname' => 'required|max:255|string',
            'emp_lname' => 'required|max:255|string',
            'emp_address' => 'required|max:255|string',
            'emp_phone' => 'required|max: 255|string',
        ]);

        employee2::find($id)->update($request->all());
        return redirect()->route('employee2.index');
    }

    public function destroy(int $id)
    {
        employee2::find($id)->delete();
        return redirect()->route('employee2.index')->with('status','Employee Deleted Successfully!');
    }
}
