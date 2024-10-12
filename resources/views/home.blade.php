  @extends('layouts.master_home')
  @include('layouts.body.header')
  @include('layouts.body.slider')

@section('home_content')


<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
          <div>
            <h4 class="title"><a href="{{url('service-details/'.$services[0]->id)}}">{{$services[0]->title_2 }}</a></h4>
            <p class="description">{{$services[0]->description_2 }}</p>
            <a href="{{url('service-details/'.$services[0]->id)}}" class="readmore stretched-link"><span>Plus 1détails</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
          <div>
            <h4 class="title"><a href="{{url('service-details/'.$services[0]->id)}}">{{$services[0]->title_2 }}</a></h4>
            <p class="description">{{$services[0]->description_2 }}</p>
            <a href="{{url('service-details/'.$services[0]->id)}}" class="readmore stretched-link"><span>Plus détails</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->

     
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
          <div>
            <h4 class="title"><a href="{{url('service-details/'.$services[0]->id)}}">{{$services[0]->title_2 }}</a></h4>
            <p class="description">{{$services[0]->description_2 }}</p>
            <a href="{{url('service-details/'.$services[0]->id)}}" class="readmore stretched-link"><span>Plus détails</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="{{asset('fontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>About Us</h3>
          <p>
            Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-diagram-3"></i>
              <div>
                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt-fill"></i>
              <div>
                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-broadcast"></i>
              <div>
                <h5>Voluptatem et qui exercitationem</h5>
                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Nos Services</span>
        <h2>Nos Services</h2>

      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('fontend/assets/img/storage-service.jpg')}}" alt="" class="img-fluid">
            </div>
            <h3><a href="#" class="stretched-link">{{$services[0]->title_1 }}</a></h3>
            <p>{{$services[0]->description_3 }}</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('fontend/assets/img/logistics-service.jpg')}}" alt="" class="img-fluid">
            </div>
            <h3><a href="service-details.html" class="stretched-link">Logistics</a></h3>
            <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('fontend/assets/img/cargo-service.jpg')}}" alt="" class="img-fluid">
            </div>
            <h3><a href="service-details.html" class="stretched-link">Cargo</a></h3>
            <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('fontend/assets/img/trucking-service.jpg')}}" alt="" class="img-fluid">
            </div>
            <h3><a href="service-details.html" class="stretched-link">Trucking</a></h3>
            <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('fontend/assets/img/packaging-service.jpg')}}" alt="" class="img-fluid">
            </div>
            <h3><a href="service-details.html" class="stretched-link">Packaging</a></h3>
            <p>Illo consequuntur quisquam delectus praesentium modi dignissimos facere vel cum onsequuntur maiores beatae consequatur magni voluptates</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('fontend/assets/img/warehousing-service.jpg')}}" alt="" class="img-fluid">
            </div>
            <h3><a href="service-details.html" class="stretched-link">Warehousing</a></h3>
            <p>Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi quisquam aut nostrum unde et qui est non quo nulla</p>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="zoom-out">

      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

        <div class="col-md-5">
          <img src="{{asset('fontend/assets/img/features-1.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7">
          <h3>{{$services[0]->quality_1 }}</h3>
          <p class="fst-italic">
          
          </p>
          <ul>
            <li><i class="bi bi-check"></i> {{$services[0]->description_4 }}</li>
          </ul>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 order-2 order-md-1">
          <h3>Corporis temporibus maiores provident</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        <div class="col-md-5">
          <img src="{{asset('fontend/assets/img/features-3.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7">
          <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
          <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
          <ul>
            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
          </ul>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="{{asset('fontend/assets/img/features-4.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 order-2 order-md-1">
          <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div><!-- Features Item -->

    </div>
  </section><!-- End Features Section -->

  

  <!-- ======= Testimonials Section ======= -->
  <!-- End Testimonials Section -->

  

  @endsection