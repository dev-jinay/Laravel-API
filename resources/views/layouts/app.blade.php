<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PINGPRONTO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="assets/img/footerimg.png">
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    body {
      font-family: "Lato", sans-serif;
    }
    
    .sidenav {
      height: 100%;
      width: 0;
      position: absolute;
      z-index: 1;
      top: 0;
      right: 30px;
      background:aliceblue ;
      overflow-x: hidden;
      transition: 0.5s;
      margin-top: 82px;
      /* padding-top: 60px; */
      /* border-left: 1px solid grey; */
    }
    
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      /* font-size: 25px;  */
      color:  black;
      display: block;
      transition: 0.3s;
    }
    
    .sidenav a:hover {
      color: #469fdf;
    }
    
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    #shadow-host-companion{
      display: none;
    }

    a{
      margin-left: 15px;
    }
    </style>
     @yield('style')
</head>
<body>
<!-- ======= Header ======= -->

<header id="header" class="fixed-top pt-2">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}"><img src="assets/img/newlogo.png" alt="Logo.png" style="height: 100%; width: 200px;"></a>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
      @if(isset($useCase))
      <li class="dropdown"><a href="#"><span>Jobs</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Housing</a></li>
                        <li><a href="#">For Sale</a></li>
                        <li><a href="#">Personal</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                <li><a class="nav-link scrollto p-2" href="#about">Employers</a></li>
                <li><a class="nav-link scrollto  p-2" href="#services">Talent</a></li>
                <li><a class="nav-link scrollto  p-2" href="#portfolio">Real Estate</a></li>
                <li><a class="nav-link scrollto  p-2" href="#team">Personals</a></li>
                <li><a class="nav-link scrollto  p-2" href="#pricing">Service Providers</a></li>
                <li><a class="nav-link scrollto  p-2" href="#pricing">Rentals</a></li>
                </li>
       @endif
       <li><a class="nav-link scrollto   p-2" href="{{ route('page.success-stories') }}">Success Stories</a></li>
        <li><a class="nav-link scrollto  p-2"  href="{{ route('how-it-work') }}">How it Works</a></li>
        <li><a class="nav-link scrollto  p-2" href="{{ route('use-case') }}">Use cases</a></li>
        @if(!isset($home))
          <li><a class="nav-link scrollto btn btn-success" href="{{ route('register') }}" style="padding: 4px;color: white;"> Ping Up</a></li>
        @endif
        <li><a class="nav-link scrollto p-2" href="{{ route('login') }}">Log in</a></li>
       
        @if(!isset($useCase))
        <li><a class="nav-link scrollto  p-2" href="#marketplace">Marketplace</a></li> 
         <li><div style="margin-left:30px;font-size:30px;cursor:pointer" id="menubutton" onclick="openNav()">&#9776;</div></li> 
         @endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
  </div> 
</header>
<div id="mySidenav" class="sidenav">
    <h5 style="margin-left: 10px; margin-top: 10px;">For Consumers : </h5>
    <a href="#">Jobs</a>
    <a href="{{ route('talent') }}">Talent</a>
    <a href="{{ route('employer') }}">Employers</a>
    <a href="{{ route('recruiter') }}">Recruiters</a>
    <a href="{{ route('personals') }}">Personals</a>
    <a href="{{ route('start-up') }}">Startups</a>
    <a href="#">Real Estate</a>
    <a href="#">Service Provider</a>
    <a href="{{ route('talent') }}">Talentai</a>
    <h5 style="margin-left: 10px; margin-top: 25px;">For Businesses: </h5>
    <a href="#">Sales</a>
    <a href="#">Email Marketing</a>
    <a href="#">Text Marketing</a>
  </div>
    <div id="app">
            @yield('content')
    </div>
         @include('layouts.footer')

    </body>

</html>
