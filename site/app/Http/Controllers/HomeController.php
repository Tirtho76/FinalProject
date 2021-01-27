<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\CourseModel;

class HomeController extends Controller
{
    function HomeIndex(){
        
        $UserIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $TimeDate = date('y-m-d h:i:sa');
        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$TimeDate]);
                
        $CoursesData = json_decode(CourseModel::all());

        return view('Home',[
            'CoursesData'=>$CoursesData,
        ]);
    } 
}
