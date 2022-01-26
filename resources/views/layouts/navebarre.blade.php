<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>colorise</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  
  <!-- Vendor CSS Files -->
 
  <link href="{{asset('accueil/assets/vendor/icofont/icofont.min.css')}}"rel="stylesheet">
 

  <link href="{{asset('accueil/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <link href="{{asset('accueil/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <!-- Favicons -->
  <link href="{{asset('accueil/assets/img/favicon.png')}}" >
  <link href="{{asset('accueil/assets/img/apple-touch-icon.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('accueil/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('accueil/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('accueil/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('accueil/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('accueil/assets/vendor/boxicons/css/boxicons.min.css')}}"rel="stylesheet">
  <link href="{{asset('accueil/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('accueil/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('accueil/assets/css/style.css')}}"  rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-black">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto "><a href="/" style="color:white;">coloriser</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" style="color:white;">Accueil</a></li>
          <li><a href="{{url('/about')}}" style="color:white;">A propos</a></li>      
          <!--<li><a href="{{ url('/contact') }}">Contact</a></li>-->
          <li class="nav-item dropdown px-2">
		
			</li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="{{ url('/register') }}" class="get-started-btn">S'inscrire</a>
      <a href="{{ url('/login') }}" class="get-started-btn">Connexion</a>
    </div>
   
  </header><!-- End Header -->

  <br>
    <br>
    <br>
<main id="main">

@yield('content-accueil')
</main>
    <br>
    <br>
    <br>
@include('layouts.Footer')