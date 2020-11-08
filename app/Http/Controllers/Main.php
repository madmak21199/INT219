<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class Main extends Controller
{   
   
    public function testfunction(){
    
        $data=DB::table('testtable')->get();

        return view('index',compact('data'));
     }
     public function dispv1(Request $req){
        $vari = $req->selectv;
       
        return view($vari);
     }
}