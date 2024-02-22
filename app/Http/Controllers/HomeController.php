<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    $data = array('title'=>'Home Page')
    return view ('home',$data);
}

