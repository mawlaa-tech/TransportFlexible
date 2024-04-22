@extends('admin.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Create HomeAbout</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('store.about') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">About Title </label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                            placeholder="Slider Title">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_dis">
 </textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Long Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_dis">
 </textarea>
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlInput1">Value Title 1 </label>
                        <input type="text" name="title_value_1" class="form-control" id="exampleFormControlInput1"
                            placeholder="Slider Title">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Value Description 2</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des_value_1">
 
  </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Value Title 2 </label>
                        <input type="text" name="title_value_2" class="form-control" id="exampleFormControlInput1"
                            placeholder="Slider Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Value Description 2</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des_value_2">

</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Value Title 3 </label>
                        <input type="text" name="title_value_3" class="form-control" id="exampleFormControlInput1"
                            placeholder="Slider Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Value Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des_value_3">
</textarea>
                    </div>
                    <div class="form-group">
                         
                         <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
