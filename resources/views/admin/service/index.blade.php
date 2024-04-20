@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4>Home Services </h4>
                <a href="{{ route('add.service') }}"> <button class="btn btn-info">Add service</button> </a>
                <br><br>


                <div class="col-md-12">
                    <div class="card">


                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <div class="card-header"> All Services </div>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">SL </th>
                                    <th scope="col" width="15%">Service Title</th>
                                    <th scope="col" width="25%">Description</th>
                                    <th scope="col" width="25%">Quality</th>
                                    <th scope="col" width="15%">Image</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php($i = 1)
                                @foreach ($services as $service)
                                    <tr>
                                        <th scope="row"> {{ $i++ }} </th>
                                        <td> {{ $service->title_1 }} </td>
                                        <td> {{ $service->title_2 }} </td>
                                        <td> {{ $service->description_1 }} </td>
                                       
                                        <td> {{ $service->quality_1 }} </td>
                                        
                                        <td> <img src="{{ asset($service->image_1) }}" style="height:40px; width:70px;"> </td>
                                        
                                        <td>
                                            <a href="" class="btn btn-info">Edit</a>
                                            <a href=""
                                                onclick="return confirm('Are you sure to delete')"
                                                class="btn btn-danger">Delete</a>
                                        </td>


                                    </tr>²
                                @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>




            </div>
        </div>




    </div>
@endsection
