@extends('admin.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit HomeAbout</h2>
            </div>
            <div class="card-body">
                <form action="{{ url('update/homeabout/' . $homeabout->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image" value="{{$homeabout->image}}" >
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">About Title </label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                            value="{{ $homeabout->title }}">

                    </div>



                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_dis">
 {{ $homeabout->short_dis }}
 </textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Long Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_dis">
 {{ $homeabout->long_dis }}
 </textarea>
                    </div>

                    <div class="form-group">
                         <label for="exampleFormControlInput1">Value Title 1 </label>
                         <input type="text" name="title_value_1" class="form-control" id="exampleFormControlInput1"
                             value="{{$homeabout->title_value_1}}">
 
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlTextarea1">Value Description 2</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des_value_1">
                              {{$homeabout->des_value_1}}
   </textarea>
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlInput1">Value Title 2 </label>
                         <input type="text" name="title_value_2" class="form-control" id="exampleFormControlInput1"
                         value="{{$homeabout->title_value_2}}">
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlTextarea1">Value Description 2</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des_value_2">
                              {{$homeabout->des_value_2}}
 </textarea>
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlInput1">Value Title 3 </label>
                         <input type="text" name="title_value_3" class="form-control" id="exampleFormControlInput1"
                         value="{{$homeabout->title_value_3}}">
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlTextarea1">Value Description</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des_value_3">
                              {{$homeabout->des_value_3}}
                         </textarea>
                     </div>
                     <div class="form-group">
                       
                         <input type="file" name="image" >
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlTextarea1">Image </label>
                         <img src="{{asset($homeabout->image)}}" alt="old image" style="height: 400; width:200;">
                     </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Update</button>

                    </div>
                </form>
            </div>
        </div>
    @endsection
