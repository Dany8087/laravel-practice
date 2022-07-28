<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddsubCategorController extends Controller
{
    public function addsubcategory(){
        return view('superAdmin/addsubcategory');
    }
}
