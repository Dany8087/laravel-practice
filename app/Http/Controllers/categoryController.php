<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class categoryController extends Controller
{
    public function category(){
        $categorydata = Category::all();
        return view('superAdmin/category',['categories'=>$categorydata]);
    }
}
