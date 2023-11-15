<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("CRUD.read",compact("users"));
    }
    public function create(){
        return view("CRUD.add");
    }
    public function add(Request $request){
        $rule =[
            "username"=> "required|string|min:6",
            "email"=> "required|email:rfc,dns",
            "fullname"=>"required|string",
            "password"=> "required|string",
        ];
        $message=[
            "required"=> "Vui lòng nhập :attribute",
            "email"=> "nhâp lại email",
            "min"=> ":attribute tối thiểu :min ký tự",
            "string"=> "định hack phải không",
        ];
        $request->validate($rule,$message);

        $data= $request->All() ;
        $data['username']=$request->username;
        $data['fullname']=$request->fullname;
        $data['date']=$request->date;
        $data['email']=$request->email;
        $data['password']=bcrypt($request->password);
        User::create($data) ;
        return redirect()->route('index');
    }
    public function edit($id){
        $user = User::find($id);
        return view('CRUD.edit',compact('user'));
    }
    public function update(Request $request, $id){
        $data= $request->All() ;
        $user=User::find($id);
        $user->update($data) ;
        return redirect()->route('index');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('index');
    }
}
