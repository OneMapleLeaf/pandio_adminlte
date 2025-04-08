<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stud_listController extends Controller
{
    public function index(){
        return view('students.index');
    }
}
