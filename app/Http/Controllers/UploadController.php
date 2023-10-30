<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class UploadController extends Controller

{
   
    public function index()
    {
        return view('upload');
    }
    public function upload(Request $request)
    {
        $file = $request->file("file");
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
      ]);

      if($request->file('file')) {
            $file = $request->file('file');
            $filename = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'uploads';

            // Upload file
            $file->move($location,$filename);

            Session::flash('success','Upload Successfully.');
            Session::flash('alert-class', 'alert-success');
      }else
      {
            Session::flash('error','File not uploaded.');
            Session::flash('alert-class', 'alert-danger');
      }
      return redirect('/');
 }
}

