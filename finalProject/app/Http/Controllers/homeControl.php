<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeControl extends Controller
{
    function index(){
        return view('home');
    }

    function redirectFunc(){
        $typeuser = Auth::user()->usertype;

        if($typeuser == '1'){
            return view('users.fypcoordpage');
        }
        else if ($typeuser == '2'){
            return view('users.supervisorpage');
        }
        else{
            return view('home');
        }
    }

    function create(){
        return view('fypcoord.createpage');
    }
}
