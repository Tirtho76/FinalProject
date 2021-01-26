<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\CoursModel;
use App\Models\ContactModel;

class HomeController extends Controller
{
    function HomeIndex(){
        
        $UserIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $TimeDate = date('y-m-d h:i:sa');
        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$TimeDate]);

        $CoursData = json_decode(CoursModel::all());

        return view('Home',['CoursData'=>$CoursData]);
    }

    function ContactSend(Request $request){
        $contact_name = $request->input('contact_name');
        $contact_mobile = $request->input('contact_mobile');
        $contact_email = $request->input('contact_email');
        $contact_msg = $request->input('contact_msg');

        $result = ContactModel::insert([
            'contact_name'=>$contact_name,
            'contact_mobile'=>$contact_mobile,
            'contact_email'=>$contact_email,
            'contact_msg'=>$contact_msg,
        ]);

        if($result == true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
