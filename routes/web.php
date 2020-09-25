<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MembersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/{name}', function ($name) {
//     return view('user',['what'=>$name]);
// });
Route::view("about",'about');
Route::view("contact",'contact');
//Route::get("user",[UsersController::class,'loadView']);
//Route::get("users",[UsersController::class,'getUsers']);
//Route::get("users",[UsersController::class,'getData']);
Route::get("users",[UsersController::class,'getFromThirdParty']);

Route::get('demo',[DemoController::class,'loadView']);
Route::post('form',[FormController::class,'getData']);
Route::view('signup','form');
Route::view('noaccess','noaccess');

Route::view('noaccess','noaccess')->middleware('protectedPage');

//This is for group middleware working
Route::group(['middleware'=>['protectedPage']],function(){
    Route::view('signup','form');
});

//This routing is for userAuthentication
Route::view("userForAuth","userForAuth");
Route::post("userForAuth",[UserAuthController::class,"userLogin"]);
Route::view('profile','profile');

Route::get('/logout',function(){
    if(session()->has('username')){
        session()->pull('username');
        return redirect('userForAuth');
    }
    return view('userForAuth');
}); 
// Route::get('/userForAuth',function(){
//     if(session()->has('username')){
//         return redirect('profile');
//     }
//     return view('userForAuth');
// });

Route::view("fileupload","fileupload");
Route::post('fileupload',[FileUploadController::class,'imageLoad']);

Route::get("membersList",[MembersController::class,'getMember']);

Route::view("addMember","addMember");
Route::post("addMember",[MembersController::class,'addMember']);
Route::get("delete/{id}",[MembersController::class,'deleteMember']);

Route::get("edit/{id}",[MembersController::class,'getMemberById']);
Route::post("edit",[MembersController::class,'updateMember']);

Route::get("detail/{id}",[MembersController::class,'detailMemberById']);