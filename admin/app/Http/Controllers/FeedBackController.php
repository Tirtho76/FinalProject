<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedBackModel;

class FeedBackController extends Controller
{
    function FeedBackIndex(){
        return view('FeedBack');	
    }

    // select all data from database
    function getFeedBackData(){
        $result=json_encode(FeedBackModel::all());
        return $result;
    }

    // course er details return korbe
    function getFeedBackDetails(Request $req){
        $id= $req->input('id');
        $result=json_encode(FeedBackModel::where('id','=',$id)->get());
        return $result;
    }

    // Course Delete 
    function FeedBackDelete(Request $req){
        $id= $req->input('id');
        $result= FeedBackModel::where('id','=',$id)->delete();
        if($result==true){      
          return 1;
        }
        else{
            return 0;
        }
    }

    // Course Update 
    function FeedBackUpdate(Request $req){
        $id= $req->input('id');
        $blog_name= $req->input('blog_name');
        $blog_contributor = $req->input('blog_contributor');
        $blog_link= $req->input('blog_link');              
   
        $result= FeedBackModel::where('id','=',$id)->update([
            'blog_name'=>$blog_name,
            'blog_contributor'=>$blog_contributor,
            'blog_link'=>$blog_link,            
        ]);
   
        if($result==true){      
          return 1;
        }
        else{
         return 0;
        }
    }

    // Course Add 
    function FeedBackAdd(Request $req){
        $blog_name= $req->input('blog_name');
        $blog_contributor = $req->input('blog_contributor');
        $blog_link= $req->input('blog_link');
        
        $result= FeedBackModel::insert([
            'blog_name'=>$blog_name,
            'blog_contributor'=>$blog_contributor,
            'blog_link'=>$blog_link, 
        ]);
   
        if($result==true){      
          return 1;
        }
        else{
         return 0;
        }
    }
}
