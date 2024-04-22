<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Carbon;
use Image;
use Auth;



class ServiceController extends Controller
{
    public function AllService(){
        $services = Service::latest()->get();
        return view('admin.service.index', compact('services'));
    }

    Public function AddService(){

        return view('admin.service.create');
    }

    public function StoreService(Request $request){
        $validation = $request->validate([
            'title_1' => 'required|min:4',
            'title_2' => 'required|min:4',
            'description_1.required' => 'pleqse input the description',
            'description_2.required' => 'pleqse input the description',
            'description_3.required' => 'pleqse input the description',
            'description_4.required' => 'pleqse input the description',
            'quality_1'=> 'required|min:4',
            'quality_2'=> 'required|min:4',
            'quality_3'=> 'required|min:4',
            'image_1',
            'image_2',
            'image_3'

        ]);

        $service_image_1 =  $request->file('image_1');
        $service_image_2 =  $request->file('image_2');
        $service_image_3 =  $request->file('image_3');

       
        $name_gen_1 = hexdec(uniqid()).'.'.$service_image_1->getClientOriginalExtension();
        $name_gen_2 = hexdec(uniqid()).'.'.$service_image_2->getClientOriginalExtension();
        $name_gen_3 = hexdec(uniqid()).'.'.$service_image_3->getClientOriginalExtension();
        Image::make($service_image_1)->resize(800,600)->save('image/slider/'.$name_gen_1);
        Image::make($service_image_2)->resize(1024,648)->save('image/slider/'.$name_gen_2);
        Image::make($service_image_3)->resize(800,600)->save('image/slider/'.$name_gen_3);
        $last_img_1 = 'image/slider/'.$name_gen_1;
        $last_img_2 = 'image/slider/'.$name_gen_2;
        $last_img_3 = 'image/slider/'.$name_gen_3;
 
        Service::insert([
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'description_3' => $request->description_3,
            'description_4' => $request->description_4,
            'quality_1' => $request->quality_1,
            'quality_2' => $request->quality_2,
            'quality_3' => $request->quality_3,
            'image_1' => $last_img_1,
            'image_2' => $last_img_2,
            'image_3' => $last_img_3,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'service Inserted Successfully',
            'alert-type' => 'success'
        );
         
        return Redirect()->route('all.service')->with($notification);


    }
    public function EditService($id){
        $services = Service::find($id);
        return view('admin.service.edit', compact('services'));
    }

    public function UpdateService(Request $request, $id){
          $validation = $request->validate([
            'title_1' => 'required|min:4',
            'title_2' => 'required|min:4',
            'description_1.required' => 'pleqse input the description',
            'description_2.required' => 'pleqse input the description',
            'description_3.required' => 'pleqse input the description',
            'description_4.required' => 'pleqse input the description',
            'quality_1'=> 'required|min:4',
            'quality_2'=> 'required|min:4',
            'quality_3'=> 'required|min:4',
            'image_1',
            'image_2',
            'image_3'

        ]);
        $old_image_1 = $request->old_image_1;
        $old_image_2 = $request->old_image_2;
        $old_image_3 = $request->old_image_3;

        $service_image_1 = $request->file('image_1');
        $service_image_2 = $request->file('image_2');
        $service_image_3 = $request->file('image_3');

        if($service_image_1 && $service_image_2 && $service_image_3){

            $name_gen_1 = hexdec(uniqid()).'.'.$service_image_1->getClientOriginalExtension();
            $name_gen_2 = hexdec(uniqid()).'.'.$service_image_2->getClientOriginalExtension();
            $name_gen_3 = hexdec(uniqid()).'.'.$service_image_3->getClientOriginalExtension();
            Image::make($service_image_1)->resize(800,600)->save('image/slider/'.$name_gen_1);
            Image::make($service_image_2)->resize(1024,648)->save('image/slider/'.$name_gen_2);
            Image::make($service_image_3)->resize(800,600)->save('image/slider/'.$name_gen_3);
            $last_img_1 = 'image/slider/'.$name_gen_1;
            $last_img_2 = 'image/slider/'.$name_gen_2;
            $last_img_3 = 'image/slider/'.$name_gen_3;
            
            unlink($old_image_1, $old_image_2, $old_image_3);
            Service::find($id)->update([
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'description_3' => $request->description_3,
            'description_4' => $request->description_4,
            'quality_1' => $request->quality_1,
            'quality_2' => $request->quality_2,
            'quality_3' => $request->quality_3,
            'image_1' => $last_img_1,
            'image_2' => $last_img_2,
            'image_3' => $last_img_3,
            'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'service updated successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('all.service')->with($notification);

        }else{
Service::find($id)->update([
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'description_3' => $request->description_3,
            'description_4' => $request->description_4,
            'quality_1' => $request->quality_1,
            'quality_2' => $request->quality_2,
            'quality_3' => $request->quality_3,
            'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'service updated successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('all.service')->with($notification);
        }

    }
    public function DeleteService($id){
        $image=  Service::find($id);
        $old_image_1 = $image->image_1;
        $old_image_2 = $image->image_2;
        $old_image_3 = $image->image_3;
        unlink($old_image_1 && $old_image_2 && $old_image_3);

        $service= Srevice::find($id)->delete();
        $notification = array(
            'message'=> 'service deleted successfully',
            'alert-type'=>'danger'
        );
        return Redirect()-route('all.service')->with($notification);
    }
}
