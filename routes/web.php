<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
// return view('welcome');
// });
use \App\Http\Controllers\FormController;
use \App\Http\Controllers\StudentController;

Route::get('/users/{id?}', function ($id) {
    return 'this is user ' . $id;
});
Route::get('/counter', '\App\Http\Controllers\Counter@index');

Route::get('/', '\App\Http\Controllers\HomeController@index');
Route::get('/about', '\App\Http\Controllers\AboutController@index');
Route::get('/contact', '\App\Http\Controllers\ContactController@index');
Route::get('/form', '\App\Http\Controllers\formController@index');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', '\App\Http\Controllers\layoutController@welcome');

Route::get('/add-student', [FormController::class,'index'])->name('add-data');

Route::post('/store-data', [FormController::class,'store'])->name('store-data');
Route::get('/student-info', [StudentController::class,'index'])->name('details');
Route::post('/student', [StudentController::class,'add'])->name('details-store');