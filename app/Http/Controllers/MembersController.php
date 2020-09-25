<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    function getMember(){
        //$data = Member::all();
        $data = Member::paginate(5);
        return view('membersList',['members'=>$data]);
    }
    function addMember(Request $req){

        $req->validate([
            'name'=>'required | max:20',
            'email'=>'required | max:30',
            'address'=>'required'
        ]);

        $member = new Member;
        $member->Name = $req->name;
        $member->Email = $req->email;
        $member->Address = $req->address;
        $member->save();
    }
    function deleteMember($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('membersList');
    }
    function getMemberById($id){
        $data = Member::find($id);
        return view('edit',['data'=>$data]);
    }
    function updateMember(Request $req){
        $data = Member::find($req->id);
        $data->Name = $req->name;
        $data->Email = $req->email;
        $data->Address = $req->address;
        $data->save();

        return redirect('membersList');
    }
    function detailMemberById($id){
        $data = Member::find($id);
        return view('detail',['data'=>$data]);
    }
}
