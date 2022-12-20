<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

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

        return redirect('listpage'); //url
    }

    function dispList(){
        $proj = Project::paginate(5);
        return view('fypcoord.listpage', ['list'=>$proj]);

    }

    function dispListUpd(){
        $lect = Auth::user()->lect_id;

        if($lect == 'L001'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L001']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else if ($lect == 'L002'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L002']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else if ($lect == 'L003'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L003']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else if ($lect == 'L004'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L004']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else if ($lect == 'L005'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L005']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else if ($lect == 'L006'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L006']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else if ($lect == 'L007'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L007']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else if ($lect == 'L008'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L008']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else if ($lect == 'L009'){
            $proj = DB::select('select * from projects where supervisor_id = ?', ['L009']);
            return view('supervisor.updateproject', ['list'=>$proj]);
        }
        else{
            return view('home');
        }
    }

    function editProj($id){
        $proj = Project::find($id);
        return view('supervisor.editprojectpage', ['x'=>$proj]);
    }

    function editedProj(Request $req){
        $proj = Project::find($req->project_id);
        
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

        return redirect('updatelistpage'); 
    }
}
