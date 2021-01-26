<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoursModel;

class CoursController extends Controller
{
    function CoursIndex(){
        return view('Cours');	
    }
    //Select all data
    function getCoursData(){
        $result=json_encode(CoursModel::all());
        return $result;
    }
    // Show all data and return in a particular id 
    function getCoursDetails(Request $req){
        $id= $req->input('id');
        $result=json_encode(CoursModel::where('id','=',$id)->get());
        return $result;
    }
    // Delete Cours 
    function CoursDelete(Request $req){
        $id= $req->input('id');
        $result= CoursModel::where('id','=',$id)->delete();
        if($result==true){      
          return 1;
        }
        else{
            return 0;
        }
    }
    // Update Cours
    function CoursUpdate(Request $req){
        $id= $req->input('id');
        $course_name= $req->input('course_name');
        $course_des = $req->input('course_des');
        $course_fee= $req->input('course_fee');     
        $course_totalenroll = $req->input('course_totalenroll'); 
        $course_totalclass= $req->input('course_totalclass'); 
        $course_link= $req->input('course_link'); 
        $course_img = $req->input('course_img'); 
   
        $result= CoursModel::where('id','=',$id)->update([
            'course_name'=>$course_name,
            'course_des'=>$course_des,
            'course_fee'=>$course_fee,
            'course_totalenroll'=>$course_totalenroll,
            'course_totalclass'=>$course_totalclass,    	
            'course_link'=>$course_link,     
            'course_img'=>$course_img,
        ]);
   
        if($result==true){      
          return 1;
        }
        else{
         return 0;
        }
    }
    // Add Cours
    function CoursAdd(Request $req){
        $course_name= $req->input('course_name');
        $course_des = $req->input('course_des');
        $course_fee= $req->input('course_fee');     
        $course_totalenroll = $req->input('course_totalenroll'); 
        $course_totalclass= $req->input('course_totalclass'); 
        $course_link= $req->input('course_link'); 
        $course_img = $req->input('course_img'); 
        $result= CoursModel::insert([
           'course_name'=>$course_name,
            'course_des'=>$course_des,
            'course_fee'=>$course_fee,
            'course_totalenroll'=>$course_totalenroll,
            'course_totalclass'=>$course_totalclass,    	
            'course_link'=>$course_link,     
            'course_img'=>$course_img,
        ]);
   
        if($result==true){      
          return 1;
        }
        else{
         return 0;
        }
    } 
}
