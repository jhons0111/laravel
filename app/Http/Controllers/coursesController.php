<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursesController extends Controller
{
    public function allCourses(){

        return view('courses.allCourses');
    }

    public function createCourses(){
        
        return view('courses.createCourses');
    }

    public function theCourse($course){
        
        return view('courses.theCourse', compact('course'));
    }
}
