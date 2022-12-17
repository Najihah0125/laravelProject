<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

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
        return view('fypcoord.createpage'); //page
    }

    function addProj(Request $req){
        $proj = new Project;
        $proj->project_id = $req->project_id;
        $proj->title = $req->title;
        $proj->category = $req->category;
        $proj->student_id = $req->student_id;
        $proj->supervisor_id = $req->supervisor_id;
        $proj->examineer1_id = $req->examineer1_id;
        $proj->examineer2_id = $req->examineer2_id;
        $proj->start_date = $req->start_date;
        $proj->end_date = $req->end_date;
        $proj->duration = $req->duration;
        $proj->progress = $req->progress;
        $proj->status = $req->status;

        $proj->save();

        return redirect('createpage'); //url
    }
}
