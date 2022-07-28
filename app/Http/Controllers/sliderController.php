<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class sliderController extends Controller
{
    public function slider(){
        return view('superAdmin/slider');
    }

    public function addslider(Request $request){
        $request->validate([
            'Title'=>'required',
            'Subtitle'=>'required',
            'Description'=>'required',
            'sliderImg'=>'required|max:5048'
        ]);

        $image = $request->file('sliderImg')->store('public/sliderImgfolder');

        $sliders = new slider();
        $sliders->Title = $request->Title;
        $sliders->Subtitle = $request->Subtitle;
        $sliders->Description = $request->Description;
        $sliders->sliderImg = $image;
        $res = $sliders->save();
       echo ('successful!!!');
    }
}
