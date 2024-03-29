<!DOCTYPE html>
<html lang="en">

  <head>

  <style>
  .service-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    display: block;
    margin: 0 auto;
  }

  .gallery-image {
    height: 250px;
    object-fit: cover;
    display: block;
    margin: 0 auto;
  }

  .about-image {
    height: 600px;
    object-fit: cover;
    display: block;
    margin: 0 auto;
  }
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>Travel booking system</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Jenjalan <em>My</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>

              @if (Route::has('login'))
    @auth
        <li class="nav-item">
        <a class="nav-link" href="{{ url('showcart') }}"> <i class="fas fa-shopping-cart"></i>Cart[{{ $count }}]</a>
        </li>
        <x-app-layout></x-app-layout>
    @else
        <li> <a class="nav-link" href="{{ route('login') }}">Log in</a> </li>
        @if (Route::has('register'))
            <li> <a class="nav-link" href="{{ route('register') }}">Register</a> </li>
        @endif
    @endauth
@endif
            </ul>
          </div>
        </div>
      </nav>

      @if(session()->has('message'))

<div class="alert alert-success">

<button style="float: right;" type="button" class="close" data-dismiss="alert">x</button>

{{session()->get('message')}}

</div>

@endif


    </header>



    <!-- Page Content-->


    <!--Banner Starts Here-->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Jobs fill your pocket, but adventures fill your soul.</h4>
            <h2>Let's Adventure With Us</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Spend your money to travel the world</h4>
            <h2>Let's Adventure With Us</h2>
          </div>
        </div>
        <div class="banner-i">
          <div class="text-content">
            <h4>Get our service now</h4>
            <h2>Let's Adventure With Us</h2>
          </div>
        </div>
      </div>
    </div>
<!-- Section Service Start -->

@include('user.product')

<section class="services" id="services">
    <div class="container">
       <div class="main-txt" style="padding-top: 10px; color:burlywood;">
          <h1><span>E</span>nhance your trip the way you like it!</h1>

       </div>
       <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
             <div class="card"style="color:burlywood:>
                <i class="fas fa-hotel"></i>
                <div class="card-body text-center">
                    <img src="assets/images/hotel.jpg" alt="" class="service-image">
                   <h3>Affordable Hotel</h3>
                   <p>Budget-friendly hotel featuring comfortable rooms, a convenient location for a cost-effective</p>
                </div>
             </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">
             <div class="card"style="color:burlywood:>
               <i class="fas fa-utensils" ></i>
               <div class="card-body text-center">
                <img src="assets/images/food.jpg" alt="" class="service-image">
                 <h3>Food </h3>
               <p>Malaysian cuisine is a delightful mix of Malay,Chinese,Indian, and indigenous flavour.</p>
               </div>
             </div>
           </div>
           <div class="col-md-4 py-3 py-md-0">
             <div class="card"style="color:burlywood:>
               <i class="fas fa-bullhorn"></i>
               <div class="card-body text-center">
                <img src="assets/images/safety1.png" alt="" class="service-image">
                 <h3>Safety </h3>
               <p>Ensuring your top priority, with well-monitored premises, secure facilities and peace of mind.</p>
               </div>
             </div>
           </div>

       </div>
       <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card"style="color:burlywood:>
              <i class="fas fa-globe-asia"></i>
              <div class="card-body text-center">
                <img src="assets/images/around.jpg" alt="" class="service-image">
                <h3>Around Malaysia</h3>
              <p>Explore the diverse beauty of Malaysia that have 14 country</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card"style="color:burlywood:>
              <i class="fas fa-plane"></i>
              <div class="card-body text-center">
                <img src="assets/images/flight.jpg" alt="" class="service-image">
              <h3>Fastest Travel</h3>
              <p>Efficient travel option, minimizing time with streamlined logistics</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card"style="color:burlywood:>
              <i class="fas fa-hiking"></i>
              <div class="card-body text-center">
                <img src="assets/images/adventures.jpg" alt="" class="service-image">
              <h3>Adventures</h3>
              <p>Exciting adventures await at our travel destination,where thrilling activities</p>
              </div>
            </div>
          </div>
        </div>

    </div>


 </section>




 <!-- Section Service End -->

 <!-- About start -->
 <section class="about" id="about">
    <div class="container">
       <div class="main-txt" style="padding-top: 60px; color:brown">
          <h1><span>Why</span>Us?</h1>
          </div>
          <div class="row" style="margin-top: 50px;">
             <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="assets/images/around.jpg" alt="" class="about-image">
                </div>
             </div>

             <div class="col-md-6 py-3 py-md-0 style="margin-top: 50px;">
                <h2>JENJALANMY.</h2>
                <p>Choosing JENJALANMY ensures an elevated travel experience, guided by our expertise, personalized service, and commitment to seamless logistics. Benefit from our in-depth knowledge of destinations, local attractions, and travel intricacies, allowing us to tailor recommendations to your unique preferences.

                    We go beyond standard offerings, saving you time and minimizing stress by managing all aspects of your journey—flights, accommodations, transportation, and activities. Our emphasis on personalized itineraries ensures your adventure is not just well-organized but also personally meaningful.

                    Exclusive access to deals and packages, along with our industry connections, guarantees better value for your budget. In emergencies, rely on our support for rebooking, finding alternatives, and addressing challenges, providing confidence during unexpected disruptions.

                    Our extensive network enhances your experience, securing reservations and special perks. With JENJALANMY, travel is a peace-of-mind journey, facilitated by direct communication with our experts who understand your needs.

                    Whether you're an individual seeking a stress-free experience or planning group travel, JENJALANMY is your trusted partner, turning your travel dreams into memorable and fulfilling adventures. Choose us for a travel experience that goes beyond the ordinary.</p>

             </div>
          </div>
       </div>
 </section>

 <!-- About end -->
     <!-- section Gallery start -->
   <section class="gallary" id="gallary">
    <div class="container">
       <div class="main-txt" style="padding-top: 10px; color:brown;">
          <h1><span>G</span>allery</h1>
          </div>
          <div class="row" style="margin-top: 30px;">
             <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                   <img src="assets/images/travel2.jpg" alt="" class="gallery-image">
                </div>
             </div>
             <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                   <img src="assets/images/travel1.jpg" alt="" class="gallery-image">
                </div>
             </div>
             <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                   <img src="assets/images/travel3.jpg" alt=""  class="gallery-image">
                </div>
             </div>
          </div>
          <div class="row" style="margin-top: 30px;">
             <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                   <img src="assets/images/travel4.jpg" alt=""  class="gallery-image">
                </div>
             </div>
             <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                   <img src="assets/images/travel5.jpg" alt="" class="gallery-image">
                </div>
             </div>
             <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                   <img src="assets/images/travel6.jpg" alt=""  class="gallery-image">
                </div>
             </div>
          </div>
       </div>
 </section>

 <!-- section Gallary end -->
    <!-- Banner Ends Here -->

    <!--@include('user.product')

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="/" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src=".jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2024 JENJALANMY

            <!--- Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>-->
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
        }
    </script>


  </body>

</html>
