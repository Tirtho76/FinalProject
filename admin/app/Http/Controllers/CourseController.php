<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;

class CourseController extends Controller
{
    function CourseIndex(){
        return view('Course');
    }

    function getCourseData(){
        $result = json_encode(CourseModel::all());
        return $result;
    }

    function getCourseDetails(Request $req){
        $id = $req->input('id');
        $result = json_encode(CourseModel::where('id','=',$id)->get());
        return $result;
    }
    
    function CourseDelete(Request $req){
        $id = $req->input('id');
        $result = CourseModel::where('id','=',$id)->delete();
        if($result == true){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    function CourseUpdate(Request $req){
        $id          = $req->input('id');
        $course_name = $req->input('course_name');
        $course_des  = $req->input('course_des');
        $course_img  = $req->input('course_img');
        $course_link = $req->input('course_link');
        $result = CourseModel::where('id','=',$id)->update([
            'course_name'=>$course_name,
            'course_des'=>$course_des,
            'course_img'=>$course_img,
            'course_link'=>$course_link,
            ]);
        if($result == true){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    function CourseAdd(Request $req){
        $course_name = $req->input('course_name');
        $course_des  = $req->input('course_des');
        $course_img  = $req->input('course_img');
        $course_link = $req->input('course_link');
        $result = CourseModel::insert([
            'course_name'=>$course_name,
            'course_des'=>$course_des,
            'course_img'=>$course_img,
            'course_link'=>$course_link,
        ]);
        if($result == true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
