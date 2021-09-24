<?php

namespace App\Http\Controllers;
use App\Models\program;
use App\Models\Student; 

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
       // $program = Program::all();
        //$students = Student::paginate(10); 
        return view('students'); 

    }
}
