<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class UserAuthController extends Controller
{
    function userLogin(Request $req){
        $data = $req->input();
        //$req->session()->put('username',$data['fname'] . ' ' . $data['lname']);
        $req->session()->flash('username',$data['fname'] . ' ' . $data['lname']);
        //return redirect('profile');
        return redirect('userForAuth');
    }
}
