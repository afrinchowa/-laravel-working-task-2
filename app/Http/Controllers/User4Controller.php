<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User4Controller extends Controller
{
    //
    function addUser(Request $request){
        // your db code
        $request->session()->flash('message','User Has been added successfully');
        return redirect('addUser');
    }
}
