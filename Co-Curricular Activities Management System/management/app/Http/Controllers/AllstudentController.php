<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AllstudentController extends Controller
{
    
//dlt student
    public function studentdelete($student_id)

    {
    	DB::table('student_tbl')
    		->where('student_id',$student_id)
    		->delete();

    		return Redirect::to('/allstudent');
    	
    }

    // view student 

    public function viewstudent()

    {
    	   		

    		return view('admin.studentview');
    	
    }

    // student view profile 

     public function studentview($student_id)

    {
    		  
    		  $student_description_view = DB::table('student_tbl')
    		  ->select('*')
    		  ->where('student_id',$student_id)
    		  ->first();	

    		  //return view('admin.studentview');
    		  $manage_description_student=view('admin.studentview')
    		  	->with('student_description_profile',$student_description_view);
    		  	return view('layout')
    		  		->with('view',$manage_description_student);
    		  		
    	
    }

    // edit student 

public function studentedit($student_id)

    {
              
              $student_description_view = DB::table('student_tbl')
              ->select('*')
              ->where('student_id',$student_id)
              ->first();    

              //return view('admin.studentview');
              $manage_description_student=view('admin.student_edit')
                ->with('student_description_profile',$student_description_view);
                return view('layout')
                    ->with('student_edit',$manage_description_student);
}
}