<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addCategoryController extends Controller
{
    public function addcategory(){
        return view('superAdmin/addcategory');
    }
}
