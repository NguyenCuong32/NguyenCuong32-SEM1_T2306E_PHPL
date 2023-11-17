<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function store(Request $request){
        echo'begin store to database';
        $data = $request ->all();
        $data['name'] = $request -> name;
        $data['email'] = $request -> email;
        $data['password'] = Hash::make($request -> password);
        User::create($data);
        echo'thêm database thành công';
        return \redirect('users/index')-> with('success','');
    }   
    public function create(){
        return view('user');
    }
    public function index(){
        $users = User::all();
        return view('users/index', compact('users'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('users/edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
       return \redirect('users/index')-> with('success','');
}
}
