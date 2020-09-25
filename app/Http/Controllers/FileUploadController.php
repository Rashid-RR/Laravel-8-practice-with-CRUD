<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function imageLoad(Request $req){
        return $req->file('file')->store('doc');
    }
}
