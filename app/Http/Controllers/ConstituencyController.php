<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Constituency;
use App\Models\ConstituencyType;
use Illuminate\Contracts\Encryption\DecryptException;

class ConstituencyController extends Controller
{
    public function testing(){
        $Constituency = Constituency::all();
        $FederalConsti = Constituency::whereIn('Constituency_type',  [ConstituencyType::where('Ctype_name', 'Federal')->value('Ctype_id')])->get();
        return view('/try', ['Constituency' => $Constituency, 'FederalConsti' => $FederalConsti]);
    }
    
    public function testing2(Request $req){
        $a = encrypt('abcd');
        
        try {
            $decrypted = decrypt($a);
            dd($decrypted);
         } catch (DecryptException $e) {
            dd($e);
         }
    }

    public function index(){
        $constituencies = Constituency::all();

        foreach($constituencies as $consti){
            $ctype_name = ConstituencyType::find($consti->Constituency_type)->Ctype_name;
            $state_name = States::find($consti->State)->State_name;

            $consti->setAttribute('state_name', $state_name);
            $consti->setAttribute('ctype_name', $ctype_name);
        }

        return view('Constituency.constituency' , ['constituencies' => $constituencies]);
    }

    public function create(){
        $states = States::all();
        $Ctype = ConstituencyType::all();
        return view('Constituency.createConstituency', ['states' => $states, 'ctype' => $Ctype]);
    }

    public function insert(Request $req){
        $Constituency = new Constituency;

        $Consti = $Constituency->create([
            "Constituency_name" => $req->input('C_name'),
            "Constituency_code" => $req->input('C_code'),
            "Constituency_type" => $req->input('C_type'),
            "C_postcode" => json_encode($req->input('poscode')),
            "State" => $req->input('C_state'),
        ]);

        if($Consti){
            $Consti->Constituency_id;
            return redirect('/Constituency');
        }
    }

    public function edit($id){
        $Constituency = Constituency::find($id);
        $states = States::all();
        $Ctype = ConstituencyType::all();

        if($Constituency){
            return view('Constituency.editConstituency', ['constituency' => $Constituency, 'states' => $states, 'ctype' => $Ctype] );
        }
    }

    public function update(Request $req, $id){
        $Constituency = Constituency::find($id);

        if($Constituency){
            $consti = $Constituency->update([
                "Constituency_name" => $req->input('C_name'),
                "Constituency_code" => $req->input('C_code'),
                "Constituency_type" => $req->input('C_type'),
                "C_postcode" => json_encode($req->input('poscode')),
                "State" => $req->input('C_state'),
            ]);

            if($consti){
                return redirect('/Constituency');
            }
        }
    }

    public function delete($id){
        $Constituency = Constituency::find($id);

        if($Constituency){
            $Constituency->delete();

            return redirect('/Constituency');
        }
    }
}
