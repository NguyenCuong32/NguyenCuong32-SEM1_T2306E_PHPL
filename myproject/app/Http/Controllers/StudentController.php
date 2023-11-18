<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\student;

class StudentController extends Controller
{
    public function create(){
        return view("student");
    }
    public function index(){
        $students=Student::all();
        return view("students/index",compact("students"));
    }
    public function store(Request $request){
        // echo "begin store";
        $data=$request->all();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['adress']=$request->adress;
        $data['age']=$request->age;
        student::create($data);  
        echo "sdasd";
        return \redirect('student/index')-> with('success','');      
    }
    public function edit($id){
        $student=Student::find($id);
        return view("students/edit",compact('student'));
    }
    public function update(Request $request, $id){        
        $student=Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=Hash::make($request->password);
        $student->save();
        return \redirect('student/index')-> with('success','');
    }
}
