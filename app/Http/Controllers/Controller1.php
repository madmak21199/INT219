<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Controller1 extends Controller
{
    //
    function valid(Request $req){  


    	$req->validate([
            
            'first_name'=>'required|regex:/^[A-Za-z\s]+$/',
            'last_name'=>'required|regex:/^[A-Za-z\s]+$/',
            'email_id'=>'required|email',
            'password1'=>'required|min:6',
            'password2'=>'same:password1',
            'phone'=>'required|lt:9999999999|gt:6000000000'
            ]);   

    $user = DB::table('newsportalusers')->where('email_id',$req->email_id)->count();
         if($user > 0){
              return view('signup',['error'=>'email already exists']);
         }
           
        else 
        {
    	       DB::table('newsportalusers')->insertorIgnore([
    		    'first_name'=>$req->first_name,
            'last_name'=>$req->last_name,
            'email_id'=>$req->email_id,
            'password'=>$req->password1,
            'phone'=>$req->phone
    	     ]);

          $sess_email = DB::table('newsportalusers')->select('email_id')->where('email_id',$req->email_id)->value('email_id');
          $sess_name = DB::table('newsportalusers')->select('first_name')->where('email_id',$req->email_id)->value('first_name');
          $sess_id = DB::table('newsportalusers')->select('id')->where('email_id',$req->email_id)->value('id');
          $req->session()->put('sess_email',$sess_email);
          $req->session()->put('sess_name',$sess_name);
          $req->session()->put('sess_id',$sess_id);
         
          return view('index2'); 
           }

    }



     public function login2(Request $req)
        {
          $req->validate([
            
            'email_id'=>'required|email',
            'pass1'=>'required',
            ]);



         $user = DB::table('newsportalusers')->select('*')->where([
            ['email_id','=',$req->email_id ],
            [ 'password','=',$req->pass1]
            ])->count();

          if($user==0){
            return view('login',['error'=>'please enter valid details']);
          }

          else{
          $sess_email = $req->input('email_id');
          $sess_name = DB::table('newsportalusers')->select('first_name')->where('email_id',$req->email_id)->value('first_name');
          $sess_id = DB::table('newsportalusers')->select('id')->where('email_id',$req->email_id)->value('id');
          $req->session()->put('sess_id',$sess_id);
          $req->session()->put('sess_email',$sess_email);
          $req->session()->put('sess_name',$sess_name);
          return view('index2');
          }
          
        }

        public function logout(Request $req){

            $req->session()->flush();
            return view('index');
        }

}
