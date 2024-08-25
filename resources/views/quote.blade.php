@extends('layouts.master_home')
@include('layouts.body.header')


@section('home_content')


<main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('{{ asset('/fontend/assets/img/page-header.jpg')}}');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Get a Quote</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li>Get a Quote</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
  
    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">
      
   
   @if(session('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>  
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url('{{asset('/fontend/assets/img/quote-bg.jpg')}}');"></div>

          <div class="col-lg-7">
            <form action="{{route('store.quote')}}" method="post"  class="php-email-form">
              @csrf
            
              <h3>Get a quote</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
              <div class="row gy-4">
                <div class="col-lg-12">
                  <h4>Informations sur la livraison</h4>
                </div>
                <div class="col-md-6">
                  <input type="text" name="departure" class="form-control" placeholder="City of Departure" >
              
                  @error('departure')

                  <span class="text-danger"> {{ $message }} </span>
                 
                  @enderror
                </div>

                <div class="col-md-6">
                  <input type="text" name="delivery" class="form-control" placeholder="Delivery City" >
                  @error('delivery')

                  <span class="text-danger"> {{ $message }} </span>
                 
                  @enderror
                </div>

                <div class="col-md-6">
                  <label for=""></label>
                  <input type="text" name="weight" class="form-control" placeholder="Total Weight (kg)" >
                  @error('weight')

                  <span class="text-danger"> {{ $message }} </span>
                 
                  @enderror
                </div>
                <div class="col-md-6">
                  <input type="text" name="quantity" class="form-control" placeholder="Quantity" >
                  @error('quantity')

                  <span class="text-danger"> {{ $message }} </span>
                 
                  @enderror
                </div>

                <div class="col-md-6">
                  <input type="text" name="dimension" class="form-control" placeholder="Dimensions (cm)" >
                </div>
                <div class="col-lg-12">
                  <h4>Date de la livraison</h4>
                </div>
                <div class="col-md-6">
                  <input type="date" name="date" class="form-control"  >
                </div>

                <div class="col-lg-12">
                  <h4>Informations personnelles</h4>
                </div>

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" >
                  @error('name')

                  <span class="text-danger"> {{ $message }} </span>
                 
                  @enderror
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" >
                  @error('email')

                  <span class="text-danger"> {{ $message }} </span>
                 
                  @enderror
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" >
                  @error('phone')

                  <span class="text-danger"> {{ $message }} </span>
                 
                  @enderror
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" ></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->
  @endsection