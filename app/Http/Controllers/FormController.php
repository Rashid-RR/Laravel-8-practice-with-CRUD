<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function getData(Request $req){
        //return 'Data is submitted';
        $req->validate([
            'fname'=>'required | max:8',
            'lname'=>'required | max:8',
            'password'=>'required | min:7'
        ]);
        return $req->input();
    }
}
