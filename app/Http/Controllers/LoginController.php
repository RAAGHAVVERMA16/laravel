<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
use App\Models\Student; 

class LoginController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
// die('123');
    
    // if (Auth::attempt($credentials)) {
    //     // Authentication successful
    //     $request->session()->regenerate();
    //     // die('123');
    //     return redirect()->intended(route('dashboard'));
    // }

    // $student= Student::where('email', $credentials['email'])->first();
    // if(Hash::check('plain-text', $student->password)) {
    //     $request->session()->regenerate();
    //     return redirect()->intended(route('dashboard'));
    // }

     // $student = Student::where('email', $credentials['email'])->where('password','123456')->first();
    // if ($student) 
    //     {

    //         $request->session()->regenerate();
    //         // die('123');
    //         return redirect()->intended(route('dashboard'));
    //     }

    $student = Student::where('email', $credentials['email'])->first();
    if (!$student) {
        return back()->with('error', 'Login Fail, please check email id');
     }

if ($student && Hash::check($credentials['password'], $student->password)) {
    // Authentication successful
    $request->session()->regenerate();
    return redirect()->intended(route('dashboard'));
}
if (!Hash::check($credentials['password'], $student->password)) {
    return back()->with('error', 'Login Fail, please check password');
 }
    // Authentication failed
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');


}
}
