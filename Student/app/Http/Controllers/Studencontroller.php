<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\Studentrequest;

class Studencontroller extends Controller
{
    //
    public function index(){
        $students=Student::all();
        return view("studentmanage.index",compact("students"));
        
    }
    public function create(Request $request,Studentrequest $studentrequest){
        $data= $request->all();
        $data['studentname']=$request->studentname;
        $data['studentage']=$request->studentage;
        $data['address']=$request->address;
        Student::create($data);
        $studentrequest;
        return redirect('/create');
    }
    public function edit($id){
        $student=Student::find($id);
        return view('studentmanage.update',compact('student'));
    }
    public function update(Request $request, $id,Studentrequest $studentrequest){
        $student=Student::find($id);
        $student->studentname= $request->studentname;
        $student->studentage= $request->studentage;
        $student->address= $request->address;
        $student->save();
        $studentrequest;
        return redirect('/');
    }
    public function destroy($id){
        $data = Student::find($id);
        $data->delete();
        return redirect('/');
    }
}
