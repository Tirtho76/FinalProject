<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\CourseModel;
use App\Models\FeedBackModel;
use App\Models\BlogModel;

class HomeController extends Controller
{
    function HomeIndex(){  
        $UserIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $TimeDate = date('y-m-d h:i:sa');
        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$TimeDate]);
        $CoursesData = json_decode(CourseModel::all());
        $BlogData = json_decode(BlogModel::all());
        return view('Home',[
            'CoursesData'=>$CoursesData,
            'BlogData'=>$BlogData,
        ]);
    } 

    // Request class is used to receive data
    function FeedBackSend(Request $request){
        $name=$request->input('name');
        $email= $request->input('email');
        $feedback=$request->input('feedback');
        $result= FeedBackModel::insert([
            'name'=> $name,
            'email'=> $email,
            'feedback'=>$feedback,
        ]);
       if($result==true){
            return 1;
       }
       else{
           return 0;
       }
    }
}
