<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'class' => 'required',
        //     'address' => 'required',
        //     'birthdate' => 'required|date',
        //     'gender' => 'required',
        // ]);
        echo'begin store to database';
        $data = $request ->all();
        $data['name'] = $request -> name;
        $data['class'] = $request -> class;
        $data['address'] = $request -> address;
        $data['birthdate'] = $request -> birthdate;
        $data['gender'] = $request -> gender;
        
        Student ::create($data);
        echo'thêm database thành công';

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'class' => 'required',
        //     'address' => 'required',
        //     'birthdate' => 'required|date',
        //     'gender' => 'required',
        // ]);
        $student=Student::find($id);
        $student->name=$request->name;
        $student->class=$request->class;
        $student->birthdate=$request->birthdate;
        $student->gender=$request->gender;
        
        
        
        $student->save();
        echo'update';



        $student = Student::find($id);
        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully');
    }
}
