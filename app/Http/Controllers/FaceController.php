<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;


class FaceController extends Controller
{
    protected $key;
    protected $endpoint;
    protected $persongroup;

    public function __construct(){
        $this->key = env("OPMKEY");
        $this->endpoint = env("ENDPOINT");
        $this->persongroup = env("PERSONGROUP");
    }

    public function try(Request $req){
        $a = json_encode($req->input('poscode'));
        echo $a;
    }

    public function testing(Request $req, $name){
        $image = explode(";base64,", $req->input('image'));
        $image_base64 = base64_decode($image[1]);

        $parameters = array(
            // Request parameters
            'returnFaceId' => 'true',
            'returnFaceLandmarks' => 'false',
            'returnFaceAttributes' => 'headpose,mask',  
            'recognitionModel' => 'recognition_04',
            'returnRecognitionModel' => 'false',
            'detectionModel' => 'detection_03',
            'faceIdTimeToLive' => '86400',
        );
        $querystring = http_build_query($parameters);

        $response = Http::withHeaders([ 
            'Content-Type' => 'application/octet-stream',
            'Ocp-Apim-Subscription-Key' => $this->key
        ]) 
        -> withBody($image_base64, 'application/octet-stream') 
        -> post($this->endpoint.'detect?'.$querystring );

        if($response->failed()){
            $error = json_decode($response->body(), true);
            echo $error['error']['message'];
        }else{
            $result = json_decode($response->body(), true);
            print_r($result[0]['faceId']);
        }
    }

    public function detectFace($img){

        
        $image = explode(";base64,", $img);
        $image_base64 = base64_decode($image[1]);
    

        $parameters = array(
            // Request parameters
            'returnFaceId' => 'true',
            'returnFaceLandmarks' => 'false',
            'returnFaceAttributes' => 'headpose,mask',  
            'recognitionModel' => 'recognition_04',
            'returnRecognitionModel' => 'false',
            'detectionModel' => 'detection_03',
            'faceIdTimeToLive' => '86400',
        );
        $querystring = http_build_query($parameters);

        $response = Http::withHeaders([ 
            'Content-Type' => 'application/octet-stream',
            'Ocp-Apim-Subscription-Key' => $this->key
        ]) 
        -> withBody($image_base64, 'application/octet-stream') 
        -> post($this->endpoint.'detect?'.$querystring );

        if($response->failed()){
            $error = json_decode($response->body(), true);
            return $error['error']['message']; 
        }
        if($response->successful()){
            $result = json_decode($response->body(), true);
            return($result[0]['faceId']);
        }
    }
    
    public function registerPerson($voters){

        if(!is_object($voters)){
            return "Object required";
        }

        $response = Http::withHeaders([ 
            'Ocp-Apim-Subscription-Key' => $this->key
        ]) 
        -> withBody("{'name': '".$voters->Name. "', 'userData':'" .json_encode(["Voter_id"=> $voters->Voter_id, "Ic"=> $voters->Ic, "Name"=> $voters->Name]). "'}", 'application/json') 
        -> post($this->endpoint.'largepersongroups/'.$this->persongroup.'/persons');

        if($response->failed()){
            $error = json_decode($response->body(), true);
            return $error['error']['message']; 
        }
        if($response->successful()){
            $result = json_decode($response->body(), true);
            return $result['personId'];
        }


    }


    public function addFace($img, $person_id){

        $image = explode(";base64,", $img);
        $image_base64 = base64_decode($image[1]);

        $response = Http::withHeaders([ 
            'Ocp-Apim-Subscription-Key' => $this->key
        ]) 
        -> withBody($image_base64, 'application/octet-stream') 
        -> post($this->endpoint.'largepersongroups/'.$this->persongroup.'/persons'.'/'.$person_id.'/persistedfaces');

        if($response->failed()){
            $error = json_decode($response->body(), true);
            return $error['error']['message']; 
        }
        if($response->successful()){
            $result = json_decode($response->body(), true);
            return($result);
        }

    }

    public function CheckFace(Request $req, $person_id){

        $faceId = $this->detectFace($req->input('image'));

        $response = Http::withHeaders([ 
            'Content-Type' => 'application/json',
            'Ocp-Apim-Subscription-Key' => $this->key
        ]) 
        -> withBody("{'faceId': '".$faceId. "', 'personId':'" .$person_id. "', 'largePersonGroupId':'".$this->persongroup."'}", 'application/json') 
        -> post($this->endpoint.'verify');

        if($response->failed()){
            $error = json_decode($response->body(), true);
            // return $error['error']['message']; 
            return $error;
        }
        if($response->successful()){
            $result = json_decode($response->body(), true);
            return($result);
        }

        
    }
}
