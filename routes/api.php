<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GradeController;
use App\Http\Controllers\Api\ClasessController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// grades
Route::get('grades' , [GradeController::class , 'index']);
Route::get('grade/{id}' , [GradeController::class , 'show']);
Route::post('grade/create' , [GradeController::class , 'store']);
Route::get('grade/edit/{id}' , [GradeController::class , 'update']);
Route::post('grade/delete/{id}' , [GradeController::class , 'destroy']);

// classes
Route::get('classes' , [ClasessController::class , 'index']);
Route::get('classes/{id}' , [ClasessController::class , 'show']);
Route::post('classes/create' , [ClasessController::class , 'store']);
Route::get('classes/edit/{id}' , [ClasessController::class , 'update']);
Route::post('classes/delete/{id}' , [ClasessController::class , 'destroy']);




