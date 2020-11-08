<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbcon extends Controller
{
    //
    public function file_upload(Request $req)
    {
      //echo $req->file('file1')->store('news');
      echo " Your News is Sucessfully Uploaded ";
    }
     
}
