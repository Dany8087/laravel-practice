<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class updateSubCategoryController extends Controller
{
    public function updatesubcategory(){
        return view('superAdmin/updatesubcategory/{$id}');
    }
}
