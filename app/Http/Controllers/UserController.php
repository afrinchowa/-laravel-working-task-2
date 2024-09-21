<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
// function login(Request $request){
//     $request->session()->put('user', $request->input('user'));
//     // echo session('user');
//     return redirect('profile');
   
// }

// function logout(){
//     session()->pull('user');
//     return redirect('profile');
// }

    //
    // function users()
    // {
        // return DB::select('select * from users');
        //     $users=DB::select('select * from users');
        //     return view('users',['users'=>$users ]);
        // }
    //     $response=Http::get('https://jsonplaceholder.typicode.com/users/1');
    //     $response= $response->body();
    //     return view('user',['data'=>json_decode($response)]);
    // }


    // function queries(){
        // data shows on ui from database

        // $result =DB::table('users')->get();
        // $result =DB::table('users')->first();
        // $result =DB::table('users')->where('phone','1234')->get();[find any special value]
        // $result=[$result];
        // return  view('users',['users'=>$result]);

        // insert operation
        // $result =DB::table('users')->insert([
        //     'name'=> 'tony',
        //     'email'=>'tony@test.com',
        //     'phone'=>'1234',
        // ]);
        // if($result){
        //     return 'data inserted';
        // }else{
        //     return "data not inserted";
        // }
        // update operation
        //   $result =DB::table('users')->where('name','tony')->update(['phone'=>'2222']);
        // if($result){
        //     return 'data updated';
        // }else{
        //     return "data not updated";
        // }

    // }
    // function get(){
    //     return "Get Route Method";
    // }
    // function post(){
    //     return "post Route Method";
    // }
    // function put(){
    //     return "put Route Method";
    // }
    // function delete(){
    //     return "delete Route Method";
    // }
    // function any(){
    //     return "any Route Method";
    // }
    // function group1(){
    //     return "group1 Route Method";
    // }

}
