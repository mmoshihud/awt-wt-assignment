<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentAPIController extends Controller
{
    public function get_all_student()
    {
        $students = Student::with('departments')->get();
        return response()->json($students);
    }
    public function add_student(Request $req){
        $students = new Student();
        $students->name = $req->name;
        $students->s_id = $req->s_id;
        $students->d_id = $req->d_id;
        $students->blood_group = $req->blood_group;
        $students->save();
        return response()->json(["msg"=>"Course Created","Values are below"=>$students],200);
    }
    public function edit_student(Request $req){
        $students = Student::where('id',$req->id)->first();
        if($students){
            $students->name = $req->name;
            $students->s_id = $req->s_id;
            $students->d_id = $req->d_id;
            $students->blood_group = $req->blood_group;
            $students->save();
            return response()->json(["msg"=>"Course Updated","The Updated Values"=>$students],200);
        }
        else{
            return response()->json(["msg"=>"Student not found"],404);
        }
        
    }
    public function delete_course(Request $req){
        $students = Student::where('id',$req->id)->first();
        if($students){
            $students->delete();
            return response()->json(["msg"=>"Student deleted from database"],200);
        }
        else{
            return response()->json(["msg"=>"Student not found"],404);
        }
        
    }
}
