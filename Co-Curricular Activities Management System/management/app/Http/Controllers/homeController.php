<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function homefunction()
    {

    	return view('home');
    }

    public function newsfunction()
    {

    	return view('news');
    }
     public function galleryfunction()
    {

    	return view('gallery');
    }
     public function contactfunction()
    {

    	return view('contact');
    }

     public function loginfunction()
    {

    	return view('admin.admin_login');
    }
    
}
