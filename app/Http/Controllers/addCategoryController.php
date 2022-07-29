<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class addCategoryController extends Controller
{
    public function addcategory(){
        return view('superAdmin/addcategory');
    }

    public function addingcategory(Request $request){
    //   return $request->input();
        $request->validate([
        'CategoryTitle'=>'required',
        'CategorySubtitle'=>'required',
        'CategoryDescription'=>'required',
        'categoryImg'=>'required|mimes:jpg,png,jpeg|max:5048',
        'blogDetails'=>'max:100'
    ]);
    $image = $request->file('categoryImg')->store('public/categoryImgfolder');

    $categories = new Category();
    $categories->CategoryTitle = $request->CategoryTitle;
    $categories->CategorySubtitle = $request->CategorySubtitle;
    $categories->CategoryDescription = $request->CategoryDescription;
    $categories->categoryImg = $image;
    $categories->blogDetails = $request->blogDetails;
    $categories->Facebook = $request->Facebook;
    $categories->Twitter = $request->Twitter;
    $categories->Instagram = $request->Instagram;
    $categories->Linkedin = $request->Linkedin;

    $res = $categories->save();
    
    if($res){
        return back()->with('success','Category added successfully');
    }else{
        return back()->with('fail', 'Something wrong');
    }

    }
}
