<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users1 = User::all();
        return view('users.index',compact("users1"));
    }
    public function create(){
        return view("users.create");
    }
    public function store(Request $request){
        echo "Begin store to database";
        $data = $request->all();
        // echo $request->name; 
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['password']= bcrypt($request->password);
        User::create($data);
       return redirect('user/index')->with('success','');
        // return redirect("");
    }
    public function edit($id){
        $user = User::find($id);
        return view("users.edit",compact("user"));
    }
    public function update(Request $request, $id){
      $user = User::find($id);
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password=bcrypt($request->password);
      $user->save();
      return redirect('user/index');

    }
}
