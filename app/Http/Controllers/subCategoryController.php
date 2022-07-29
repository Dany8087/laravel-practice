<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subCategory;

class subCategoryController extends Controller
{
    public function subcategory(){
        $sub_categoriesdata = subCategory::all();
        return view('superAdmin/subcategory',['sub_categories'=>$sub_categoriesdata]);
    }

    public function deletesc(){
        $sub_categoriesdata=subCategory::find($id);
        dd($sub_categoriesdata);
        $sub_categoriesdata->delete();
        $res = $sub_categories->save();
        if($res){
            return back()->with('success','Category deleted successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }
}
