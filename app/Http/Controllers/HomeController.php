<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class HomeController extends Controller
{
    public function HomeSlider(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function AddSlider(){
        return view('admin.slider.create');
    }

    public function StoreSlider(Request $request){

        $slider_image =  $request->file('image');

       
        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);

        $last_img = 'image/slider/'.$name_gen;
 
        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);
         
        return Redirect()->route('home.slider')->with('success','Slider Inserted Successfully');

    }
    public function Edit($id){
        $sliders = Slider::find($id);
        return view('admin.slider.edit', compact('sliders'));
    
    }

    public function Update(Request $request, $id){

        $validatedData = $request->validate([
            'title' => 'required|min:4',
                       
        ],
        [
            'description.required' => 'Please Input description',
            'image.min' => 'Brand Longer then 4 Characters', 
        ]);

        $old_image = $request->old_image;

        $slider_image =  $request->file('image');

        if($slider_image){
            $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
            Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);
    
            $last_img = 'image/slider/'.$name_gen;
     
       /* $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);*/

        unlink($old_image);
        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'slider Updated Successfully',
            'alert-type' => 'info'
        );         
        return Redirect()->route('home.slider')->with($notification);

        }else{
            Slider::find($id)->update([
                'title' => $request->title,
                'description'=> $request->description,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Slider Updated Successfully',
                'alert-type' => 'warning'
            );    
             
            return Redirect()->route('home.slider')->with($notification);

        } 
    }

 public function Delete($id){
    $image = Slider::find($id);
    $old_image = $image->image;
    unlink($old_image);

    $slider = Slider::find($id)->delete();
    $notification = array(
        'message' => 'Slider delete Successfully',
        'alert-type' => 'danger'
    ); 

    return Redirect()->route('home.slider')->with($notification);
        }
    
 


}
 