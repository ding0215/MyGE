<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\VoterAddress;

class VoterAddressController extends Controller
{
    public function insert($data){
        $voterAddress = VoterAddress::create([
            "Voter_id" => $data["Voter_id"],
            "Address" => $data["Address"],
            "City" => $data["City"],
            "Zip_Code" => $data["Zip_code"],
            "State" => $data["State"],
            "Country" => $data["Country"],
        ]);

        if($voterAddress){
            return $voterAddress;
        }
    }
}
