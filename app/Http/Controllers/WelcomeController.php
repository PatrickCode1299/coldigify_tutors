<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function showWelcome(){
        $allcourses=Courses::all()->unique('course_title');
        $fetchcategory=Courses::all()->unique('category');
        return view('welcome')->with(["courses"=>$allcourses, "category"=>$fetchcategory]);
    }
}
