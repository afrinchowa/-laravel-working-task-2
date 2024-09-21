<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Student2;

class Student2Controller extends Controller
{
    //
    function add(Request $request)
    {
        $student = new Student2();
        $student->name = $request->username;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        if ($student) {
            // echo "New student added";
            // return "add Function Called";
            return redirect('list');
        } else {
            echo "No student added";
            return "add Function Called failed";
        }
        // return $request->input();
    }
    function list()
    {
        $student2Data = Student2::paginate(10);
        return view("list-student", ['student2s' => $student2Data]);
    }
    function delete($id)
    {
        $isDeleted = Student2::destroy($id);
        if ($isDeleted) {
            return redirect('list');
        }
    }
    function edit($id)
    {
        $student = Student2::find($id);
        return view('edit-student', ['data' => $student]);
    }
    function editStudent(Request $request, $id)
    {
        $student = Student2::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        if($student->save()){
            return redirect('list');
        }else{
            return "update operation failed";
        }
        // return $request->input();
    }
    function search(Request $request){
        $student3Data = Student2::where('name', 'like',"%$request->search%")->get();
        return view('list-student',['student2s'=>$student3Data, 'search'=>$request->search]);

    }
    function deleteMultiple(Request $request){
       $result= Student2::destroy($request->ids);
       if($result){
        return redirect(('list'));
       }else{
        return "student data not deleted";
       }
        return $request->ids;

    }
}
