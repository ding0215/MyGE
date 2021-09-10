<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\States;
use App\Models\Constituency;
use App\Models\ConstituencyType;
use App\Models\Election;
use Carbon\Carbon;
use App\Http\Controllers\BallotsController;
use App\Http\Controllers\BallotsCandidateController;

class ElectionController extends Controller
{
    public function index(){
        $elections = Election::all();

        return view('Election.election', ['elections' => $elections]);
    }

    public function create(){
        $Constituency = Constituency::all();
        $FederalConsti = Constituency::whereIn('Constituency_type',  [ConstituencyType::where('Ctype_name', 'Federal')->value('Ctype_id')])->get();

        $randomstr = Str::random(32);

        return view('Election.addElection', ['Constituency' => $Constituency, 'FederalConsti' => $FederalConsti, 'Hash' => $randomstr ]);
    }

    public function insert(Request $req){

        $Elections = new Election;
        $Election = $Elections->create([
            "Election_title" => $req->input('title'),
            "Election_description" => $req->input('description'),
            "Start_date" => date('Y-m-d', strtotime($req->input('start_date'))),
            "End_date" => date('Y-m-d', strtotime($req->input('start_date'))),
            "Hash" => $req->input('hash'),
        ]);

        if($Election){
            $Ballot_controller = new BallotsController;
            $Ballot_insert = $Ballot_controller->insert($Election->Election_id, ["name" => $req->name, "constituency" => $req->Constituency]);

            if(!empty($Ballot_insert && $Election)){
                return redirect('/election');
            }
        }
        

        
    }

    public function edit(){

    }

    public function update(Request $req, $id){

    }

    public function delete(Request $req, $id){

    }
}
