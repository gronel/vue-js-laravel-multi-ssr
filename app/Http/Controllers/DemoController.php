<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    
    public function index(){
        $data['name']="Ronel";
        $data['lastname']="Gonzales";
        return view('Home', $data);
    }
}
