<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caregory;

class studentController extends Controller
{
    public function index(){
    	$students = Caregory::all();
    	return view('studentDataEntry')->with('students',$students);
    }
    public function store(Request $request){
    	$student = new Caregory;

    	$student->fname = $request->input('fname');
    	$student->lname = $request->input('lname');
    	$student->course = $request->input('course');
    	$student->section = $request->input('section');

    	$student->save();

    }
    public function update(Request $request, $id){
    	$student = Caregory::find($id);

    	$student->fname = $request->input('fname');
    	$student->lname = $request->input('lname');
    	$student->course = $request->input('course');
    	$student->section = $request->input('section');

    	$student->save();
    }
    public function delete($id){
    	$student1 = Caregory::find($id);
    	$student1->Delete();
    	return $student1; 
    }
}
