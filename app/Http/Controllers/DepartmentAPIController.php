<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentAPIController extends Controller
{
    public function get_dept_info()
    {
        $dept = Department::all();
        return response()->json($dept);
    }
}
