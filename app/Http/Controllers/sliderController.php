<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function slider(){
        return view('superAdmin/slider');
    }
}
