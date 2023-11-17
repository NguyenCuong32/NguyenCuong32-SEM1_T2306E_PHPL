<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function edit($id){
        $students = Student::find($id);
        return view("students.edit",compact("students"));
    }
    public function index(){
        $students= Student::all();
        return view('students.index', compact("students"));
    }
    //
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        $data = $request->all();
        $data['studentname']=$request->studentname;
        $data['studentage']=$request->studentage;
        $data['address']= ($request->address);
        Student::create($data);
       echo "Save to database done";
    }
    public function update(Request $request, $id){
        $student= Student::find($id);
        $student->studentname=$request->studentname;
        $student->studentage=$request->studentage;
        $student->address= ($request->address);
        $student->save();
       echo "update";
       return redirect("student/index") -> with('success','');
    }
}
