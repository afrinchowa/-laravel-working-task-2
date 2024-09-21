<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show(){
        return "Page of Student list";
    }
    function add(){
        return "Page of New Student add";
    }
    function delete(){
        return "Page of Student deleted";
    }
    function about($name){
        return $name;
    }
}
