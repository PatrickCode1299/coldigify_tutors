<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
class ValidateController extends Controller
{
    public function gotoValidate()
    {
     return view('validate');
    } 
    public function validatePay(Request $request)
    {
    $data = $request->all();
    $this->create($data);
    } 
    public function create(array $data)
    {
      return Payment::create([
        'student_name' => $data['student_name'],
        'student_email' => $data['student_email'],
        'course_name' => $data['student_course'],
        'instructor_name' =>$data['tutor_email'],
        'status' => 1
      ]);
    } 
}
