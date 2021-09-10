<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ballots;
use App\Http\Controllers\BallotsCandidateController;

class BallotsController extends Controller
{
    public function insert($id, $data){


        $index = 0;
        $arr = [];
        for($i = 1; $i <= count($data); $i++){

            $Ballots = new Ballots;
            $Ballot = $Ballots->create([
                "Ballot_title" => $data["name"][$index],
                "Election_id" => $id,
                "Constituency_id" => $data["constituency"][$index],
            ]);

            if($Ballot){
                array_push($arr, $Ballot->Ballot_id);
            }

            $index++;
        }

        $Ballot_candidate_controller = new BallotsCandidateController;
        $Ballot_candidate_insert = $Ballot_candidate_controller->insert(["Ballot_id" => $arr, "constituency" => $data["constituency"]]);

        if(!empty($Ballot_candidate_insert)){
            return $arr;
        }

        


    }

    public function update($data){

    }

    public function delete($data){

    }
}
