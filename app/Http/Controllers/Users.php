<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($username){
        echo $username;
        echo " This is my User Controller (index func() )!";
    }
}
