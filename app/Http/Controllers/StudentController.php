<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    public function index()
    {
    return view("Student");
    }
    public function add(Request $request)
    {
        $student  = new Student();
        $student->name = $request->name;
        $student->email = $request->email; 
        $student->class = $request->class;
        $student->section = $request->section;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->phone_number = $request->phone;
        
        $student->password = Hash::make('123456');
        $student->save();
        echo"Form submiitted suucessfully";
        return redirect()->route("login");
    }
    public function getData()
    {

    $student = Student::all();// we bring data from database
    return view ('List',['student'=>$student]);



    }
    public function log(Request $request){
        return view('login');   
        
    }

}
