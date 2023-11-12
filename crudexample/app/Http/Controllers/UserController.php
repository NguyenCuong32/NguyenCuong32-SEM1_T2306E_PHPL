<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("users.read",compact("users"));
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password'=> 'required',
        ]);
        User::create($data);
        return redirect()->action([UserController::class,'index']);
        // echo "Create new user success";
    }
    public function edit($id){
        $user = User::find($id);
        return view("users.edit",compact("user"));
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        // User::updated($user);
       return redirect()->action([UserController::class,'index']);
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->action([UserController::class,'index']);
    }
}
