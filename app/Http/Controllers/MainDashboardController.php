<?php

namespace App\Http\Controllers;
use App\Models\Tutor;
use App\Models\Courses;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;



class MainDashboardController extends Controller
{
    public function index(){
         if (Auth::guard('admin')->check()) {
            $fetchuser=Auth::guard('admin')->user()->email;
            $getusercourses=DB::table('courses')->where('unique_id',$fetchuser)->orderByRaw('id DESC')->get();
            $users=DB::table('tutors')->where('email',$fetchuser)->first();
            return view('auth.main_dashboard')->with(["users"=>$users,"courses"=>$getusercourses]);


        }else{
            return view('auth.admin_login');

       
        }
    }
    public function createCourse(Request $request){
        /**
        $messages=[
            'required' => 'please select file to upload',
        ];
        $this->validate($request,['unique_id' => '', 
            'tutors_name' => '', 
            'course_title' => 'required', 
            'price' => 'required',   
            'files' => 'required'],$messages);
        foreach ($request->file as $file){
            $filename=time().'_'.$file->getClientOriginalName();
            $filesize=$file->getSize();
            $file->store('upload','public');
            DB::insert('insert into courses (course_title,file1,tutors_name,unique_id,price) values(?,?,?,?,?)',[$request->course_title,$filename,$request->tutors_name,$request->unique_id,$request->price]);
           

        }
        return response()->json(['success'=>'File Uploaded Successfully']);
        **/
        $validatedData = $request->validate([
            'unique_id' => '',
            'tutors_name' => '', 
            'course_title' => 'required', 
            'price' => 'required',   
            'files' => 'required',
            'preview' => 'required',
            'category' => 'required',
            

        'files.*' => 'mimes:mp4',
        'preview.*' => 'mimes:jpeg,jpg,png',
        'module_title' => 'required'
        ]);
        if($request->TotalFiles > 0)
        {
            $firstfile=$request->file('preview');
        $firstfileName=time().'_'.$firstfile->getClientOriginalName();
        Storage::disk('thumbnail')->put($firstfileName, file_get_contents($firstfile));
            $date=date('Y-m-d H:i:s');
           for ($x = 0; $x < $request->TotalFiles; $x++) 
           {
    
               if ($request->hasFile('files'.$x)) 
                {
                    
                    $file = $request->file('files'.$x);
                    $filename=time().'_'.$file->getClientOriginalName();
                    $filesize=$file->getSize();
                    $module_title=$request->module_title."$x";
                    DB::insert('insert into courses (created_at,course_title,file1,tutors_name,unique_id,price,preview,module_title,category,description) values(?,?,?,?,?,?,?,?,?,?)',[$date,$request->course_title,$filename,$request->tutors_name,$request->unique_id,$request->price,$firstfileName,$module_title,$request->category,$request->description]);
                    Storage::disk('courses')->put($filename, file_get_contents($file));
                   // $path=$file->store('upload','public');
                    
                }
           }
 
            
 
            return response()->json(['success'=>'Ajax Multiple fIle has been uploaded']);
 
          
        }
        else
        {
           return response()->json(["message" => "Please try again."]);
        }
    }
}