<?php

namespace App\Http\Controllers;
use App\Models\login;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function index(){
        return view('singup');
    }
    public function create(Request $request)
    {
       $save = new login;
        $save->name = $request->name;
        $save->email = $request->email;
        if ($request->password==$request->cpassword) {
            $save->password = $request->password;
        }else{
            return "Your Password Not Match";
        }
        
        $save->save();
        if($save){
            return redirect('login');
        } 
    }
    public function login(Request $request)
    {
        $select = login::all();
        if ($select->email==$request->email AND $select->password==$request->password) {
            return "OK";
        }else{
            return "Password Not OK";
        }
       
    }
}
