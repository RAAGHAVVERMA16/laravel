<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index()
    {
    return view("student");
    }
    public function add()
    {
        $student  = new Student();
        $student->name = $request->name;
        $student->email = $request->email; 
        $student->class = $request->class;
        $student->section = $request->section;
        $student->address = $request->address;
        $student->gender = $request->gender;
        
        $student->save();
    }

}
