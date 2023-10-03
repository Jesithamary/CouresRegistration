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

Route::get('/', function () {
    return view('frontend.layout.main');
});

Route::get('aboutsection','App\Http\Controllers\CourseController@aboutsection')->name('aboutsection');

Route::get('product','App\Http\Controllers\CourseController@product')->name('product');

Route::get('productsection','App\Http\Controllers\CourseController@productsection')->name('productsection');

Route::get('slideshow','App\Http\Controllers\CourseController@slideshow')->name('slideshow');


Route::get('admin','App\Http\Controllers\CourseController@admin')->name('admin');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix'=>'student','as'=>'student.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'studentIndex'])->name('dashboard');
});

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('dashboard');
});

Route::group(['prefix'=>'teacher','as'=>'teacher.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'teacherIndex'])->name('dashboard');
});





 Route::get('student/list','App\Http\Controllers\StudentController@index')->name('student.list');
Route::get('student/create','App\Http\Controllers\StudentController@create')->name('student.create');
Route::post('student/store','App\Http\Controllers\StudentController@store')->name('student.store');
Route::get('student/edit/{id}','App\Http\Controllers\StudentController@edit')->name('student.edit');
Route::put('student/update/{id}','App\Http\Controllers\StudentController@update')->name('student.update');
Route::get('student/show/{id}','App\Http\Controllers\StudentController@show')->name('student.show');
Route::get('student/destroy/{id}','App\Http\Controllers\StudentController@destroy')->name('student.destroy');