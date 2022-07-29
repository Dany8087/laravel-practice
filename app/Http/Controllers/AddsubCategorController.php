<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subCategory;

class AddsubCategorController extends Controller
{
    public function addsubcategory(){
        return view('superAdmin/addsubcategory');
    }

    public function addingsubcategory(Request $request){
        //   return $request->input();
            $request->validate([
            'subCategoryTitle'=>'required',
            'subCategorySubtitle'=>'required',
            'subCategoryDescription'=>'required',
            'subcategoryImg'=>'required|mimes:jpg,png,jpeg|max:5048',
            'blogDetails'=>'max:100'
        ]);
        $image = $request->file('subcategoryImg')->store('public/subcategoryImgfolder');
    
        $sub_categories = new subCategory();
        $sub_categories->subCategoryTitle = $request->subCategoryTitle;
        $sub_categories->subCategorySubtitle = $request->subCategorySubtitle;
        $sub_categories->subCategoryDescription = $request->subCategoryDescription;
        $sub_categories->subcategoryImg = $image;
        $sub_categories->blogDetails = $request->blogDetails;
        $sub_categories->Facebook = $request->Facebook;
        $sub_categories->Twitter = $request->blogDetails;
        $sub_categories->Instagram = $request->Instagram;
        $sub_categories->Linkedin = $request->Linkedin;
    
        $res = $sub_categories->save();
        
        if($res){
            return back()->with('success','Category added successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    
        }
}
