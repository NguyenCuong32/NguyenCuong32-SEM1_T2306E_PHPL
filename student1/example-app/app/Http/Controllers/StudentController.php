<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudenModel;

class StudentController extends Controller
{
    public function index()
    {
        $student = StudenModel::all();
        return view("student.read", compact("student"));
    }
    public function create()
    {
        return view("student.add");
    }
    public function add(Request $request)
    {
        $data = request()->all();
        $data["id"] = $request->id;
        $data["name"] = $request->name;
        $data["age"] = $request->age;
        $data["address"] = $request->address;
        StudenModel::create($data);
        return redirect()->route("index");
    }
    public function edit($id)
    {
        $student = StudenModel::find($id);
        return view("student.edit", compact("student"));
    }
    public function update(Request $request, $id)
    {
        $data = request()->all();
        $student = StudenModel::fint($id);
        $student->update($data);
        return redirect()->route("index");
    }
    public function destroy(Request $request, $id)
    {
        $student = StudenModel::find($id);
        $student->delete();
        return redirect()->route("index");
    }
}
