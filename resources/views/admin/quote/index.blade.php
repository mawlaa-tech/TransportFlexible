@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-6">
                <a href="{{ route('add.quote') }}"> <button class="btn btn-info">Add service</button> </a>
                <br><br>
            </div>
                <br><br>
                <div class="col-lg-12">
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
                                    <th scope="col" width="10%">Service Title</th>
                                    <th scope="col" width="25%">Description</th>
                                    <th scope="col" width="10%">Quality</th>
                                    <th scope="col" width="10%">Quality</th>
                                    <th scope="col" width="15%">Image</th>
                                    <th scope="col" width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php($i = 1)
                                @foreach ($services as $service)
                                    <tr>
                                        <th scope="row"> {{ $i++ }} </th>
                                        <td> {{ $service->title_1 }} </td>
                                    
                                        <td> {{ $service->description_1 }} </td>
                                       
                                        <td> {{ $service->quality_1 }} </td>
                                        <td> {{ $service->quality_2 }} </td>
                                        <td> <img src="{{ asset($service->image_1) }}" style="height:40px; width:70px;"> </td>
                                        
                                        <td>
                                            <a href="{{ url('admin/edit/service/'.$service->id)}}" class="btn btn-info">Edit</a> ||
                                            <a href="{{url ('admin/delete/service/'.$service->id)}}"
                                                onclick="return confirm('Are you sure to delete')"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
