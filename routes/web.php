<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


// Dashboard
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');


// GradeController
Route::resource('grades', GradeController::class);


// Classroom
Route::post('delete_all' , [ClassroomController::class,'delete_all'])->name('delete_all');
Route::resource('classroom', ClassroomController::class);

// Section
Route::get('classes/{id}' , [SectionController::class, 'getclass'] );
Route::resource('sections', SectionController::class);

// add parent
Route::view('add-parent', 'livewire.show_form');

// teachers
Route::resource('teachers', TeacherController::class);

// students
Route::get('classes/{id}' , [StudentController::class, 'getclasses'] );
Route::get('getsections/{id}' , [StudentController::class, 'getsections'] );
Route::resource('students', StudentController::class);


















require __DIR__.'/auth.php';

    });

