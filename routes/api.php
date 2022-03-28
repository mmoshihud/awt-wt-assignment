<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentAPIController;
use App\Http\Controllers\StudentAPIController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dept',[DepartmentAPIController::class,'get_dept_info']);
Route::get('/student',[StudentAPIController::class,'get_all_student']);
Route::post('/student/add',[StudentAPIController::class,'add_student']);
Route::post('/student/edit/{id}',[StudentAPIController::class,'edit_student']);
Route::post('/student/delete/{id}',[StudentAPIController::class,'delete_course']);