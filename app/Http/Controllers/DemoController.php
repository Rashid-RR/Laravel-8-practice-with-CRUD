<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function loadView(){
        $data = ['anil','rashid','razab'];
        return view('demo',['name' => $data]);
    }
}
