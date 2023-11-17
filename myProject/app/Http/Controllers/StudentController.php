<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
use Illuminate\Http\Request;
use App\models\student;
use App\Http\Requests\RuleSinhvien;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = 3;
        $students = Student::paginate($perPage);
        return view('students/index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RuleSinhvien $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'age' => 'required',
                'adress' => 'required'
            ]
        );
        
    
       $data = $request -> all();
       $data['name'] = $request -> name;
       $data['age'] = $request -> age;
       $data['address'] = $request -> adress;
       
       
       Student::create($data);
        
        return \redirect('student/index')->with('success','');
       
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
    public function edit(string $id)
    {
        $student = student::find($id);
        return view('students/update',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $student = student::find($id);
       $student -> name = $request -> name;
       $student -> age = $request -> age;
       $student -> address = $request -> adress;
        $student -> save();
       return \redirect('/student/index')-> with('success','') ;
       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $student = student::find($id);
       if ($student==null) {
   
       echo"bị lỗi";
    }
       $student -> delete();
       return \redirect('/student/index')->with('sucess','');
    }
}
