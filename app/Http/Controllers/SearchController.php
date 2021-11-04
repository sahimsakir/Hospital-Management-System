<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;



class SearchController extends Controller
{
    public function index(Request $req)
    {
       $patient = DB::table('users');
	   return view('dindex', ['patient' => $patient]);
    }

   

public function searchpatient(Request $request){


   $serach = $request -> get('search');
   $patient =DB::table('users')->where('name', 'like', '%'.$search.'%');
   return view('dindex', ['patient' => $patient]);


   


}

    }
