<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index($course){
        $get_course_price=DB::table('courses')->where('course_title',$course)->first();
           $id=Str::random(10);
           
       
        return view('checkout')->with(['course_info'=>$get_course_price, 'id'=>$id]);
    }
}
