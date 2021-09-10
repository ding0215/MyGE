<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $req){

        if($req->session()->has('Logged_in')){
            return redirect('/Constituency');
        }

        return view('adminlogin');
    }
    
    public function login(Request $req){
        $user = Admin::where("username", $req->input("Username"))->first();

        if($user){
            if(!Hash::check($req->input("Password"), $user->Password)){
                $req->session()->flash('Message', 'Password Wrong');
                return redirect('/admin');
            }

            $req->session()->put('Logged_in', $user->Admin_id);
            return redirect('/Constituency');

        }else{
            $req->session()->flash('Message', 'No Such username');
            return redirect('/admin');
        }
    }

    public function logout(Request $req){
        if($req->session()->has('Logged_in')){
            $req->session()->forget('Logged_in');
            return redirect('/admin');
        }
    }
}
