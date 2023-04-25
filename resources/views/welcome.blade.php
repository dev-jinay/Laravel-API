@extends('layouts.app')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>PingPronto Applies for Jobs and Emails Hiring Managers for you!</h1>
          <!-- <h1><span id="spin"></span>&nbsp; 1,000+ people per month. Pronto.</h1> -->
          <!-- <p>When life gets busy, you don’t have to tackle it alone. Finding a job, or a date, or something else, we’ve got you covered on your projects big and small. You can thank us later. -->
          </p>
        </div>
      </div>
      <div class="text-center mb-5">
        <!-- <a href="#" class="btn-get-started scrollto fw-bold text-black ">View our community</a> -->
        <a href="{{ route('register') }}" class="btn btn-success btn-get-started scrollto fw-bold text-black bg-light"> Book a Call Now</a>
        <a href="{{ route('page.see-action') }}" class="btn btn-get-started scrollto fw-bold text-black">SEE IT IN ACTION</a>
      </div>
      <div class="text-center mb-5">
        <h2 style="text-transform: capitalize!important; font-weight: bold;">It's free until you're hired!</h2>
      </div>
      <div class="row mt-5 text-center">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/1.png" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Tell us your project</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/2.png" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Activate the pings</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/3.png" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Meet your target</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/4.png" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Complete your goal</h4>                
            </div>
          </div>
        </div>

      </div>
     
      </div>
    </div>
  </section>
  @endsection
  <!-- End Hero -->

  @section('script')
  
  @endsection
   

  
