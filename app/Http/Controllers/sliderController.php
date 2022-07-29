<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class sliderController extends Controller
{
    public function slider(){
        return view('superAdmin/slider');
    }

    public function addSlider(Request $request){
        $request->validate([
            'Title'=>'required',
            'Subtitle'=>'required',
            'Description'=>'required',
            'sliderImg'=>'required|max:5048'
        ]);
        // dd($request->all());

        $image = $request->file('sliderImg')->store('public/sliderImgfolder');

        $sliders = new slider();
        $sliders->Title = $request->Title;
        $sliders->Subtitle = $request->Subtitle;
        $sliders->Description = $request->Description;
        $sliders->sliderImg = $image;
        $res = $sliders->save();
    //    echo ('successful!!!');

    if($res){
        return back()->with('success','Category added successfully');
    }else{
        return back()->with('fail', 'Something wrong');
    }
    
    }
}
