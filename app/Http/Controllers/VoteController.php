<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Election;
use App\Models\Ballots;
use App\Models\Ballots_candidate;
use App\Models\Candidates;
use App\Models\Political_parties;
use App\Models\Constituency;
use App\Models\ConstituencyType;
use App\Models\ballot_result;
use App\Models\ballot_winner;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class VoteController extends Controller
{
    public function index($hash = null){
        //Testing part
        
        // $consituency = Constituency::where([
        //     ["C_Postcode", "LIKE", "%47100%"],
        //     ["Constituency_type", ConstituencyType::where("Ctype_name", "Federal")->first()->Ctype_id],
        // ])->first();

        // $ballots = Ballots::where([
        //     ["Constituency_id", $consituency->Constituency_id],
        //     ["Election_id", 17]
        // ])->first();

        // $ballots_candidate = Ballots_candidate::where("Ballot_id", $ballots->Ballot_id)->get();

        // foreach($ballots_candidate as $bc){
        //     $candidate = Candidates::find($bc->Candidate_id);
        //     $candidate_name = $candidate->Candidate_name;
        //     $candidate_background = $candidate->Candidate_background;
        //     $candidate_party = Political_parties::find($candidate->Party_id)->Party_name;

        //     $bc->setAttribute("candidate_name" , $candidate_name);
        //     $bc->setAttribute("candidate_background" , $candidate_background);
        //     $bc->setAttribute("candidate_party" , $candidate_party);
        // }
        
        
        if($hash == null){
            return "haha";
        }

        $election = Election::where("Hash", $hash)->first();

        if($election){

            $consituency = Constituency::where([
                ["C_Postcode", "LIKE", "%47100%"],
                ["Constituency_type", ConstituencyType::where("Ctype_name", "Federal")->first()->Ctype_id],
            ])->first();
    
            $ballots = Ballots::where([
                ["Constituency_id", $consituency->Constituency_id],
                ["Election_id", 17]
            ])->first();
    
            $ballots_candidate = Ballots_candidate::where("Ballot_id", $ballots->Ballot_id)->get();
    
            foreach($ballots_candidate as $bc){
                $candidate = Candidates::find($bc->Candidate_id);
                $candidate_name = $candidate->Candidate_name;
                $candidate_background = $candidate->Candidate_background;
                $candidate_party = Political_parties::find($candidate->Party_id)->Party_name;
    
                $bc->setAttribute("candidate_name" , $candidate_name);
                $bc->setAttribute("candidate_background" , $candidate_background);
                $bc->setAttribute("candidate_party" , $candidate_party);
            }

            return view("Vote.vote", ["candidate_info" => $ballots_candidate, "ballot" => $ballots]);
        }


    }

    public function api(Request $req, $msg){
        if($req->header("key") != 'qwer1234'){
            return response()->json(["Error" => "Key incorrect"], 400);
        }
            return response()->json($req->data);
    }

    public function castVote(Request $req, $hash = null, $id){
        
        if($hash == null){
            return "haha";
        }

        $election = Election::where("Hash", $hash)->first();

        if($election){

            $ballots_candidate = Ballots_candidate::find($req->input("choice"));
            $candidate = Candidates::find($ballots_candidate->Candidate_id);
            $party = Political_parties::find($candidate->Party_id);

            $vote = new Vote;

            $cast_vote = $vote->create([
                "Ballot_id" => $id,
                "Chosen_Candidate_id" => $req->input("choice"),
                "Chosen_Party_id" => $party->Party_id,
            ]);

            if($cast_vote){
                return response()->json(["Success" => "Vote Cast Successfully"]);
            }
            
        }
    }


    public function countVote($id){

        $vote_result = Vote::select('Chosen_Candidate_id', DB::raw('count(*) as total_vote'))->where("Ballot_id", $id)->groupBy('Chosen_Candidate_id')->orderBy('total_vote', 'desc')->get();

        if($vote_result){

            $total_vote = Vote::where("Ballot_id", $id)->count();

            foreach($vote_result as $result){

                $setAttribute = $result->setAttribute("Vote_received_percentage", round($result->total_vote/$total_vote * 100 ,2));

            }
            
            return $vote_result;
        }

       
    }

    public function insertResult($id){
        
        $vote_result = $this->countVote($id);

        if($vote_result){


            $success = TRUE;

            foreach($vote_result as $result){

                $insert_success = FALSE;

                $ballots_candidate = Ballots_candidate::find($result->Chosen_Candidate_id);
                $candidate = Candidates::find($ballots_candidate->Candidate_id);
                $party = Political_parties::find($candidate->Party_id);


                $ballot_result = new ballot_result;

                $ballot_result_insert = $ballot_result->create([
                    "Ballot_id" => $id,
                    "Ballot_Candidate_id" => $result->Chosen_Candidate_id,
                    "Candidate_party_id" => $party->Party_id,
                    "Total_vote_received" => $result->total_vote,
                    "Vote_received_percentage" => $result->Vote_received_percentage,
                ]);

                if($ballot_result_insert){
                    $insert_success = TRUE;
                }

                if(!$insert_success){
                    $success = FALSE;
                    break;
                }
            }

            if($success){
                return "success";
            }
        }
    }

    public function getWinner($id){

        $vote_result = $this->countVote($id);

        return $vote_result->first();
    }

    
}



