<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;

class BlogController extends Controller
{
    function BlogIndex(){
        return view('Blog');	
    }

    // select all data from database
    function getBlogData(){
        $result=json_encode(BlogModel::all());
        return $result;
    }

    // course er details return korbe
    function getBlogDetails(Request $req){
        $id= $req->input('id');
        $result=json_encode(BlogModel::where('id','=',$id)->get());
        return $result;
    }

    // Course Delete 
    function BlogDelete(Request $req){
        $id= $req->input('id');
        $result= BlogModel::where('id','=',$id)->delete();
        if($result==true){      
          return 1;
        }
        else{
            return 0;
        }
    }

    // Course Update 
    function BlogUpdate(Request $req){
        $id= $req->input('id');
        $blog_name= $req->input('blog_name');
        $blog_contributor = $req->input('blog_contributor');
        $blog_link= $req->input('blog_link');              
   
        $result= BlogModel::where('id','=',$id)->update([
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
    function BlogAdd(Request $req){
        $blog_name= $req->input('blog_name');
        $blog_contributor = $req->input('blog_contributor');
        $blog_link= $req->input('blog_link');
        
        $result= BlogModel::insert([
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
