<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

use App\Http\Controllers\StudentController;


class StudentController extends Controller
{
    public function Showform(){
        return view('registration');
    }
    public function Insert(Request  $req){
        $object = new Student();
        $object->name=$req->input("name");
        $object->age=$req->input("age");
        $object->class=$req->input("class");
        $object->section=$req->input("section");
        $object->save();
        //return redirect()->route('showdata')->with('msg','Data inserted successfully!');
      //  return redirect('insert')->with('msg','Data inserted successfully!');
      return redirect("Form");
    }
    public function Fetch(){
       $result = Student::all();
       return view("fetch",compact('result'));
    }
    public function Delete($eid) {
        Student::find($eid)->delete();
        return redirect("fetch");
    }
    public function  Update($uid) {
        $result=Student::find($uid);
        return view("editstudents",compact("result"));
    }
    public function Edit(Request $req, $uid) {
        $obj=Student::find($uid);
        $obj->name=$req->input("name");
        $obj->age=$req->input("age");
        $obj->class=$req->input("class");
        $obj->section=$req->input("section");
        $obj->save();
        return redirect("fetch");
     }
    }

