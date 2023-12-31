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
        // Create a new student instance
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->phone_number = $request->phone;

        // Hash a default password (you may want to change this)
        $student->password = Hash::make('123456');

        // Upload and store the image
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $location = 'uploads/users'; // Specify your desired storage location
            $file->move($location, $filename);

            // Set the image path in the student record
            $student->image = $location . '/' . $filename;
        }

        $student->save();

        // Redirect with a success message
        return redirect()->route("login")->with('success', 'Form submitted successfully');
    }
    public function getData()
    {

    $student = Student::all();// we bring data from database
    return view ('List',['student'=>$student]);



    }
    public function log(Request $request){
        return view('login');   
        
    }
    public function update(Request $request)
    {
       // echo $request->id;
        //die();
        $student = Student::find($request->id);
       // $student = Student::where("id",$request->id)->first();

        return view('update',compact('student'));

    }

    public function update_store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required|in:Male,Female', // Valid gender values
            'class' => 'required',
            'section' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);
    
        // Update the student record with the new data
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;
        $student->image= $request->image;
    // Upload and store the image
    if ($request->hasFile('image')) {
        $file = $request->file('image'); 
        $filename = time() . '_' . $file->getClientOriginalName();
        $location = 'uploads/users'; 
        $file->move($location, $filename);
    
        // Set the image path in the student record
        $student->image = $location . '/' . $filename;
    }
   
     $student->save();
    
        // Redirect back to the list view with a success message
        return redirect()->route('List')->with('success', 'Student data updated successfully');
    }
    
    
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('List')->with('success', 'Student data deleted successfully');
    }
    public function card()
    {
        $students = Student::all();
        return view('card', ['students' => $students]);
    }
}
