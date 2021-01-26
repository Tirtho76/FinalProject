<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServiceController extends Controller
{
    function ServiceIndex(){
        return view('Services');
    }

    // Retrive data from database
    function getServicesData(){
        $result=json_encode(ServicesModel::all());
        return $result;
    }
}
