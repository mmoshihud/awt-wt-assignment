<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentApiController;

Route::get('/', function () {
    return view('welcome');
});