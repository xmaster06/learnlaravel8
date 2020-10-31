<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $req){
        $filename = time().'_'.$req->file->getClientOriginalName();
        return $req->file('file')->storeAs('docs',$filename);
    }
}
