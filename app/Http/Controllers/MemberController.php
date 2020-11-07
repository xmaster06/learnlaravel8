<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function addData(Request $req){
        $member = new Member();
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect("add");
    }

    function list(){
        $list = Member::all();
        return view('listmember',['list'=>$list]);
    }

    function delete($id){
        $el = Member::find($id);
        $el->delete();
        return redirect("list");
    }

    function edit($id){
        $el = Member::find($id);
        return view('editmember', ['el' => $el]);        
    }

    function update(Request $req){
        $el = Member::find($req->_id);
        $el->name = $req->name;
        $el->email = $req->email;
        $el->address = $req->address;
        $el->save();
        return redirect("list/edit/".$req->_id);
    }

}
