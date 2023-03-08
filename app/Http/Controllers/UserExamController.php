<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Courses;
use App\Models\Examquestions;

class UserExamController extends Controller
{
    public function index($data){
    if (Auth::guard('web')->check()) {
    $data=Crypt::decrypt($data);
     $tutor_email=$data['tutor_email'];
     $course_title=$data['course_title'];
       $fetch_user_exam_questions=DB::table('examquestions')->where(['tutor_email'=>$tutor_email, 'course_title'=>$course_title])->get();
        return view('auth.user_exam')->with('exam_questions',$fetch_user_exam_questions);

    }else{
       return view('auth.login');
    }
    }
}
 
