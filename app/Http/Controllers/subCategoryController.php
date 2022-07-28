<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subCategoryController extends Controller
{
    public function subcategory(){
        return view('superAdmin/subcategory');
    }
}
