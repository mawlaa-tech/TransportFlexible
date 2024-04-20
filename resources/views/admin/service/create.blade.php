@extends('admin.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Create Service</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.service')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service Title 1 </label>
                        <input type="text" name="title_1" class="form-control" id="exampleFormControlInput1"
                            placeholder="Service Title 1">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service Title 2 </label>
                        <input type="text" name="title_2" class="form-control" id="exampleFormControlInput1"
                            placeholder="Service Title 2">

                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Service Description 1</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_1" placeholder="description 1">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Service Description 2</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_2" placeholder="description 2">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Service Description 3</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_3" placeholder="description 3">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Service Description 4</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_4" placeholder="description 4">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service Quality 1</label>
                        <input type="text" name="quality_1" class="form-control" id="exampleFormControlInput1" placeholder="Service Quality 1">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service Quality 2</label>
                        <input type="text" name="quality_2" class="form-control" id="exampleFormControlInput1" placeholder="Service Quality 2">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service Quality 3</label>
                        <input type="text" name="quality_3" class="form-control" id="exampleFormControlInput1" placeholder="Service Quality 3">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Service Image 1</label>
                        <input type="file" name="image_1" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Service Image 2</label>
                        <input type="file" name="image_2" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Service Image 3</label>
                        <input type="file" name="image_3" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    @endsection
