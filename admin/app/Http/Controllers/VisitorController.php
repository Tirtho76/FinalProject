<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class VisitorController extends Controller
{
    function VisitorIndex(){
        // $VisitorData = json_decode(VisitorModel::orderBy('id','Desc')->take(10)->get());
        $VisitorData = json_decode(VisitorModel::all());

        return view('Visitor',['VisitorData'=>$VisitorData]);
    }
}
