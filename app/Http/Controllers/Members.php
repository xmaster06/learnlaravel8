<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class Members extends Controller
{
    function tum(){
        $members = DB::table('members')->get();
        return view('list',['members'=>$members]);
    }

    function tek($id){
        //Çoklu liste içinde array çeker
        $members = DB::table('members')
                ->where('id',$id)
                ->get();
        //Direk tek array çeker View'i ona göre ayarla
        //$members = DB::table('members')->find(6);
        return view('list',['members'=>$members]);
    }

    function ekle(){
        return DB::table('members')
        ->insert(
            [
                'name'      =>  'Ali',
                'email'     =>  'ali@example.com',
                'address'   =>  'USA',
                'created_at'=>  date('Y-m-d H:i:s',time()),
                'updated_at' =>  date('Y-m-d H:i:s', time()),
            ]
        );
        // Model kullanılmadığından timestamps null girer
        // Üstteki formatta ekleyebiliriz
    }

    function guncelle($id){
        return DB::table('members')
            ->where('id',$id)
            ->update(
                [
                    'name'      =>  'Ali Baba', 
                    'email'     =>  'ali@example.com',
                    'address'   =>  'TR',  
                    'updated_at' =>  date('Y-m-d H:i:s', time()),
                ]
            );
    }

    function sil($id){
        return DB::table('members')
            ->where('id',$id)->delete();     
    }

}
