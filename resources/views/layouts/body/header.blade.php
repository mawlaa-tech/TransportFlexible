<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('fontend/assets/img/logo.png')}}" alt=""> 
      <!--  <h1>TransFlexible</h1>-->
      </a>
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Accueil</a></li>
          <li><a href="about.html">A propos</a></li>
          <li><a href="{{URL::to('/services')}}">Services</a></li>
        <!--     <li><a href="pricing.html">Pricing</a></li>-->
    <!--      <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li><a class="get-a-quote" href="{{URL::to('/quote')}}">Soumission</a></li>
          <li><a href="{{route('login')}}">Login <i class="bi bi-person-lock"></i></a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->