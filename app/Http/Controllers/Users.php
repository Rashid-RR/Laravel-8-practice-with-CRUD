<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function index($username){
        echo $username;
        echo " This is my User Controller (index func() )!";
    }
    function dbOperation(){
        //return (array)DB::table('users')->find(4);
        //return (array)DB::table('users')->count();
        return DB::table('users')->get();
        // return DB::table('users')->max('id');
        // return DB::table('users')->min('id');
        // return DB::table('users')->avg('id');
        // return DB::table('users')->sum('id');
        //return DB::table('users')->where('id',2)->get();

        //this is for insert

        // return (array)DB::table('users')
        // ->insert(
        //     [
        //         'name' => 'Ahmed',
        //         'email' => 'ahmed@gmail.com',
        //         'address' => 'USA'
        //     ]
        // );

        //this is for update

        // return (array)DB::table('users')
        // ->where('id',9)
        // ->update(
        //     [
        //         'name' => 'Nabeel',
        //         'email' => 'Nabeel@gmail.com',
        //         'address' => 'Lahore'
        //     ]
        // );

        //return (array)DB::table('users')->where('id',10)->delete();
    }
    function dbOperation2(){
        return DB::table('employee')
        ->join('company','employee.id','=','company.employee_id')
        //->select('employee.*')
        ->where('employee.id',3)
        ->get();
    }
}
