<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;




class registrationController extends Controller
{
    public function index()
    {
        return view ('registration.index');
    }

    public function signup(Request $req)
    {
        
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required|email',
            'type' => 'required',
            'number' => 'required',
            'address' => 'required',
            'username' =>'required',
            'password' =>'required|min:6',
            'department'=>'required',

        ]);
        $users = new User;
        $users->name= $req->input('name');
        $users->email= $req->input('email');
        $users->type= $req->input('type');
        $users->number= $req->input('number');
        $users->address= $req->input('address');
        $users->username= $req->input('username');
        $users->password= $req->input('password');
        $users->department= $req->input('department');
        $users->save();
        //return redirect()->route('login.index');

       
        return redirect()->route('login.index');
   

        
        
        
    
    }
        
}

