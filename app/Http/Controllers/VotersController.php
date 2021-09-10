<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Voters;
use App\Http\Controllers\FaceController;
use App\Http\Controllers\VoterAddressController;

class VotersController extends Controller
{
    public function index(){
        $voters = Voters::all();
        return view('voters', ['voters' => $voters]);
    }
    
    public function create(){
        return view('create');
    }

    public function register(Request $req){
        $voters = new Voters;

        $facecontroller = new FaceController;
        $vaddresscontroller = new VoterAddressController;

        $voter = $voters->create([
            "Ic" => $req->input('Ic'),
            "Name" => $req->input('Name'),
            "Birthday" => $req->input('Birthday'),
            "Phone_no" => $req->input('Phone_no'),
            "Email" => $req->input('Email'),
            "Person_id" => "",
        ]);

        if($voter){

            $insert_address = $vaddresscontroller->insert([
                "Voter_id" => $voter->Voter_id,
                "Address" => $req->input("Address"),
                "City" => $req->input("City"),
                "Zip_code" => $req->input("Zip_code"),
                "State" => $req->input("State"),
                "Country" => $req->input("Country"),
            ]);

            $person_id = $facecontroller->registerPerson($voter);

            $voter_update = $voter->update([
                "Person_id" => $person_id,
            ]);

            if($voter_update){
                $add_face = $facecontroller->addFace($req->input('image'),$person_id);
                dd($add_face);
            }
        }
    }
    
    public function insert(Request $req){
        $voters = new Voters;

        // $voters->Ic = $req->input('Ic');
        // $voters->Name = $req->input('Name');
        // $voters->Birthday = $req->input('Birthday');
        // $voters->Phone_no = $req->input('Phone_no');
        // $voters->Email = $req->input('Email');
        // $voters->Person_id = "";

        $voter = $voters->create([
            "Ic" => $req->input('Ic'),
            "Name" => $req->input('Name'),
            "Birthday" => $req->input('Birthday'),
            "Phone_no" => $req->input('Phone_no'),
            "Email" => $req->input('Email'),
            "Person_id" => "",
        ]);

        if($voter){
            dd($voter->Voter_id);
        }

    }

    public function delete($voter_id){
        $voters = Voters::find($voter_id);
        
        $voters->delete();

        return redirect('/voters');
    }
}
