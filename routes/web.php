<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
// use App\Http\Controllers\User4Controller;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\StudentController;
// use App\Http\Controllers\User2Controller;
// use App\Http\Controllers\StudentsController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\Student2Controller;

Route::view('/', 'welcome');
Route::view('home', 'home');
Route::view('login', 'login');
Route::view('about', 'about');
Route::view('admin', 'admin');


// Route::middleware('Setlang')->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });
//     Route::get('about/{lang}', function ($lang) {
//         App::setlocale($lang);
//         return view('about');
//     });
//     Route::get('setlang/{lang}', function ($lang) {
//         Session::put('lang', $lang);
//         return redirect('/');
//     });
// });

// 41
Route::view('add', 'addStudent');
Route::post('add', [Student2Controller::class, 'add']);
Route::get('list', [Student2Controller::class, 'list']);
Route::get('delete/{id}', [Student2Controller::class, 'edit']);
Route::get('edit/{id}', [Student2Controller::class, 'edit']);
Route::put('edit-student/{id}', [Student2Controller::class, 'editStudent']);
Route::get('search', [Student2Controller::class, 'search']);

Route::post('delete-multi', [Student2Controller::class, 'delete-multiple']);
// Route::post('add',[User4Controller::class,'addUser']);
// Route::view('addUser','addUser');

Route::view('upload','upload');
Route::post('upload',[UploadController::class,'upload']);
Route::get('list',[UploadController::class,'list']);

// Route::view('login','login');
// Route::view('profile','profile');
// Route::view('about','about');
// Route::post('login',[UserController::class,'login']);

// Route::get('logout',[UserController::class,'logout']);
// Route::view('form','user');
// Route::post('user',[UserController::class,'login']);
// single or multiple middleware Application

// Route::view('home','home')->middleware([AgeCheck::class,CountryCheck::class]);
// Route::view('about','about')->middleware([AgeCheck::class]);

// Route::view('home','home')->middleware('check1');
// Route::view('about','about')->middleware('check1');
// Route::view('list','about')->middleware('check1');
// Route::view('contact','about')->middleware('check1');

// groupe of middleware

// Route::get('users',[UserController::class,'users']);
// Route::get('users',[UserController::class,'queries']);
// Route::get('user',[User2Controller::class,'queries']);

// Route::get('user',[UserController::class,'get']);
// Route::post('user',[UserController::class,'post']);

// Route::put('user',[UserController::class,'put']);
// Route::delete('user',[UserController::class,'delete']);

// Route::any('user',[UserController::class,'any']);
// Route::match(['post', 'get'],'/user',[UserController::class,'group1']);




// Route::get('/students',[StudentsController::class,'getStudents']);


// Route::middleware('check1')->group(function(){
//     Route::view('home','home');
//     Route::view('about','about');
//     Route::view('list','about');
//     Route::view('contact','about');

// });

// Route::prefix('student')->group(function(){
  
//     Route::get('/show',[HomeController::class, 'show']);
//     Route::get('/add',[HomeController::class, 'add']);
// });

// route grouping with controller

// Route::controller(StudentController::class)->group(function(){
//     Route::get('/show','show');
//     Route::get('/add','add');
//     Route::get('/delete','delete');
//     Route::get('about/{name}','about');
// });

// Route::get('about/{name}',[StudentController::class,'about']);