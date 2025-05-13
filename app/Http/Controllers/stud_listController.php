<?php

namespace App\Http\Controllers;

use App\Models\studentsM;
use Illuminate\Http\Request;

class stud_listController extends Controller
{
    public function index(){
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:255|string',
            'mname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer|max:255',
        ]);
        studentsM::create($request->all());
        return view('students.create');

    }
}
