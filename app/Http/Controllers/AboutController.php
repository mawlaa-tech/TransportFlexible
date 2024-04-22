<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAbout;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Image;

class AboutController extends Controller
{
    public function HomeAbout(){
        $homeabout = HomeAbout::latest()->get();
        return view('admin.home.index', compact('homeabout'));
    }

    public function AddAbout(){
        return view('admin.home.create');
    }

    public function StoreAbout(Request $request){
        
        $image =  $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1024,768)->save('image/about/'.$name_gen);
        $last_image = 'image/about/'.$name_gen;
        HomeAbout::insert([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'long_dis' => $request->long_dis,
            'title_value_1' => $request->title_value_1,
            'des_value_1'=> $request->des_value_1,
            'title_value_2' => $request->title_value_2,
            'des_value_2'=> $request->des_value_2,
            'title_value_2' => $request->title_value_2,
            'des_value_3'=> $request->des_value_3,
            'title_value_3' => $request->title_value_3,
            'image' => $last_image,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('success','About Inserted Successfully');
    }


    public function EditAbout($id){
        $homeabout = HomeAbout::find($id);
        return view('admin.home.edit',compact('homeabout'));
    }

    public function UpdateAbout(Request $request, $id){
        $old_image =  $request->old_image;
        $image =  $request->file('image');
        if($image){
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1024,768)->save('image/about/'.$name_gen);
        $last_image = 'image/about/'.$name_gen;
        unlink($old_image);
        HomeAbout::find($id)->update([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'long_dis' => $request->long_dis,
            'title_value_1' => $request->title_value_1,
            'des_value_1'=> $request->des_value_1,
            'title_value_2' => $request->title_value_2,
            'des_value_2'=> $request->des_value_2,
            'title_value_2' => $request->title_value_2,
            'des_value_3'=> $request->des_value_3,
            'title_value_3' => $request->title_value_3,
            'image' => $last_image,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('success','About Inserted Successfully');
    }else{
        HomeAbout::find($id)->update([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'long_dis' => $request->long_dis,
            'title_value_1' => $request->title_value_1,
            'des_value_1'=> $request->des_value_1,
            'title_value_2' => $request->title_value_2,
            'des_value_2'=> $request->des_value_2,
            'title_value_2' => $request->title_value_2,
            'des_value_3'=> $request->des_value_3,
            'title_value_3' => $request->title_value_3,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('success','About Inserted Successfully');

    }
}


    public function DeleteAbout($id){
        $image = HomeAbout::find($id);
        $old_image = $image->image;
        unlink($old_image);
        $delete = HomeAbout::find($id)->Delete();
        return Redirect()->back()->with('success','About Deleted Successfully');
    }

    public function Portfolio(){
        $images = Multipic::all();
        return view('pages.portfolio',compact('images'));
    }



}
