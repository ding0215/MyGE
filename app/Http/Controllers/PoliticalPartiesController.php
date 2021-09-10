<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Political_parties;

class PoliticalPartiesController extends Controller
{
    public function index(){

        $Political_parties = Political_parties::all();

        return view('Party.party' , ['parties' => $Political_parties]);
    }

    public function create(){
        return view('Party.createParty');
    }

    public function insert(Request $req){
        $Political_parties = new Political_parties;

        $Party = $Political_parties->create([
            "Party_name" => $req->input('party_name'),
            "Party_background" => $req->input('party_background'),
            "Abbreviation" => $req->input('abbreviation'),
        ]);

        if($Party){
            $Party->Party_id;
            return redirect('/party');
        }
    }

    public function edit($id){
        $Political_parties = Political_parties::find($id);

        if($Political_parties){
            return view('Party.editParty', ['parties' => $Political_parties] );
        }
    }

    public function update(Request $req, $id){
        $Political_parties = Political_parties::find($id);

        if($Political_parties){
            $Party = $Political_parties->update([
                "Party_name" => $req->input('party_name'),
                "Party_background" => $req->input('party_background'),
                "Abbreviation" => $req->input('abbreviation'),
            ]);

            if($Party){
                return redirect('/party');
            }
        }
    }

    public function delete($id){
        $Political_parties = Political_parties::find($id);

        if($Political_parties){
            $Political_parties->delete();

            return redirect('/party');
        }
    }
}
