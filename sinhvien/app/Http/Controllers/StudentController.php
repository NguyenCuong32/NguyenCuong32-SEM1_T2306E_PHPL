<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Hash;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sinhvien = Student::all();
        return view("student/index", compact("student"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("sinhvien");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo'begin store to database';
        echo '<br>';
        $data = $request->all();
        $data['studentname'] = $request->studentname;
        $data['studentage'] = $request->studentage;
        $data['addredss'] = $request->address;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request -> password);
        Student::create($data);
        echo "Student info is added successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view("student.edit", compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->studentname=$request->studentname;
        $student->studentage=$request->studentage;
        $student->address=$request->address;
        $student->email=$request->email;
        $student->password=bcrypt($request->password);
        $student->save();
        echo "Student Info has been updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
