<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\Constituency;
use App\Models\Political_Parties;

class CandidatesController extends Controller
{
    public function index(){

        $Candidates = Candidates::all();

        foreach($Candidates as $Candidate){
            $constituency_name = Constituency::find($Candidate->Constituency_id)->Constituency_name;
            $party_name = Political_Parties::find($Candidate->Party_id)->Party_name;

            $Candidate->setAttribute('Constituency_name', $constituency_name);
            $Candidate->setAttribute('Party_name', $party_name);
        }

        return view('Candidates.candidate' , ['candidates' => $Candidates]);
    }

    public function create(){
        $Constituencies = Constituency::all();
        $Political_Parties = Political_Parties::all();

        return view('Candidates.createCandidate' , ["constituencies" => $Constituencies , "parties" => $Political_Parties ]  );
    }

    public function insert(Request $req){
        $Candidates = new Candidates;

        $Candidate = $Candidates->create([
            "Candidate_name" => $req->input('candidate_name'),
            "Constituency_id" => $req->input('constituency_id'),
            "Party_id" => $req->input('party_id'),
            "Candidate_background" => $req->input('candidate_background')
        ]);

        if($Candidate){
            $Candidate->Candidate_id;
            return redirect('/candidates');
        }
    }

    public function edit($id){
        $Candidate = Candidates::find($id);
        $Constituencies = Constituency::all();
        $Political_Parties = Political_Parties::all();

        if($Candidate){
            return view('Candidates.editCandidate', [ 'Candidate' => $Candidate, "constituencies" => $Constituencies , "parties" => $Political_Parties ] );
        }
    }

    public function update(Request $req, $id){
        $Candidates = Candidates::find($id);

        if($Candidates){
            $Candidate = $Candidates->update([
                "Candidate_name" => $req->input('candidate_name'),
                "Constituency_id" => $req->input('constituency_id'),
                "Party_id" => $req->input('party_id'),
                "Candidate_background" => $req->input('candidate_background')
            ]);

            if($Candidate){
                return redirect('/candidates');
            }
        }
    }

    public function delete($id){
        $Candidates = Candidates::find($id);

        if($Candidates){
            $Candidates->delete();

            return redirect('/candidates');
        }
    }
}
