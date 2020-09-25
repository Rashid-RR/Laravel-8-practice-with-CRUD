<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    function loadView(){
        return view('user',['name'=>"Rashid"]);
    }
    function getUsers(){
        return DB::select("select * from users");
    }
    function getData(){
        return User::all();
    }
    function getFromThirdParty(){
        $collection = Http::get("https://reqres.in/api/users?page=1");
        return view('user',['collection'=>$collection['data']]);
    }
}
