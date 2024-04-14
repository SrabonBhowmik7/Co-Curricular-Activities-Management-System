<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class Singer extends Controller
{
    //

    public function search(Request $request){

        $search = $request->get('search');
        $posts = DB::table('student_tbl')->where ('student_name','like','%'.$search.'%')->paginate(5);
        
        return view('admin.allstudent',['student_tbl'=> $posts]);
       // return Redirect::to('/addstudent'); 


    }


    public function singerfunction()
    {

    	
    	$singerstudent_info=DB::table('student_tbl')
    						->where(['student_activity'=>1])
    						->get();

    	$manage_student=view('admin.singer')
    						->with('singer_student_info',$singerstudent_info);
    	return view('layout')
    				->with('singer',$manage_student);



    	return view('admin.singer');
    }

    public function dancerfunction()
    {

    	$singerstudent_info=DB::table('student_tbl')
    						->where(['student_activity'=>4])
    						->get();

    	$manage_student=view('admin.dancer')
    						->with('singer_student_info',$singerstudent_info);
    	return view('layout')
    				->with('dancer',$manage_student);



    	return view('admin.dancer');
    }

    public function designerfunction()
    {

    	$singerstudent_info=DB::table('student_tbl')
    						->where(['student_activity'=>2])
    						->get();

    	$manage_student=view('admin.anchor')
    						->with('singer_student_info',$singerstudent_info);
    	return view('layout')
    				->with('anchor',$manage_student);


    	return view('admin.designer');
    }

    public function anchorfunction()
    {


    	$singerstudent_info=DB::table('student_tbl')
    						->where(['student_activity'=>3])
    						->get();

    	$manage_student=view('admin.anchor')
    						->with('singer_student_info',$singerstudent_info);
    	return view('layout')
    				->with('anchor',$manage_student);



    	return view('admin.anchor');
    }

    public function speakerfunction()
    {

    	
    	$singerstudent_info=DB::table('student_tbl')
    						->where(['student_activity'=>5])
    						->get();

    	$manage_student=view('admin.speaker')
    						->with('singer_student_info',$singerstudent_info);
    	return view('layout')
    				->with('speaker',$manage_student);



    	return view('admin.speaker');
    }
}
