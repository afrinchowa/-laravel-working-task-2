<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class User2Controller extends Controller
{
    //
    function queries(){
        // $response=User::get();
        // $response=User::all();
        // return $response;
            //   insert operation
        $response =User::where('name','kate')->delete(['phone'=>'2222']);
        if($response){
            return 'data deleted';
        }else{
            return "data not deleted";
        }
        // $response =User::where('name','kate')->update(['phone'=>'2222']);
        // if($response){
        //     return 'data updated';
        // }else{
        //     return "data not updated";
        // }
        // $response =User::insert([
        //     'name'=> 'kate',
        //     'email'=>'kate@test.com',
        //     'phone'=>'123443',
        // ]);
        // if($response){
        //     return 'data inserted';
        // }else{
        //     return "data not inserted";
        // }
        return view('user3',['users'=>$response]);
    }
}
