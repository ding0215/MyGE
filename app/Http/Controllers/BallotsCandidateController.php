<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ballots_Candidate;
use App\Models\Candidates;

class BallotsCandidateController extends Controller
{
    public function insert($data){
        $index = 0;
        $arr = [];
        
        for($i = 1; $i <= count($data); $i++){

            $Candidates_data = Candidates::where("Constituency_id", $data["constituency"][$index])->get();

            foreach($Candidates_data as $c_data){
                $Ballots_candidates = new Ballots_Candidate;
                $Ballots_candidate = $Ballots_candidates->create([
                    "Candidate_id" => $c_data->Candidate_id,
                    "Ballot_id" => $data["Ballot_id"][$index],
                ]);
    
                if($Ballots_candidate){
                    array_push($arr, ["Bc_id" => $Ballots_candidate->Bc_id]);
                }
            }

            $index++;
        }

        return $arr;

    }

    public function delete($data){

    }
}
