<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\JsonDecoder;

class TestController extends Controller
{
    //

    public function Index(){
        $temp_users_table = DB::table('_temp_users')->get();
        $result = json_decode($temp_users_table);
        return view('User')->with('results',$result);
    }

    public function User_List(){
        $data = DB::table('_temp_users')->get();
        // dd($data);
        return [
            "True"=>"Successfule",
             'results'=> $data
        ];
    }
}
