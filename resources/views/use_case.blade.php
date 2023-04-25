@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h3 style="font-size: 50px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: bold;">How people use Pingskeers  .</h3>
          <!-- <p>When life gets busy, you don’t have to tackle it alone. Finding a job, or a date, or something else, we’ve got you covered on your projects big and small. You can thank us later. -->
          <!-- </p> -->
        </div>
      </div>
      <div class="text-center mb-5">
        <a href="#" class="btn-get-started scrollto fw-bold text-black">View our community</a>
        <a href="{{ route('page.see-action') }}" class="btn-get-started scrollto fw-bold text-black bg-light">SEE IT IN ACTION</a>
    </div>
    <div class="main">
        <div class="row ">
            <div class="d-flex justify-content-between pb-2">
                <div class="col-xl-5 d-flex">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;" >
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Acquiring service provider quotes </p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
                <div class="col-xl-5 d-flex">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;">
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Finding a renter or subletter</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-between pb-2">
                <div class="col-xl-5 d-flex">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;" >
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Selling a product/service</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
                <div class="col-xl-5 d-flex">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;">
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Garnering video views, site visits, or app downloads</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-between pb-2">
                <div class="col-xl-5 d-flex">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;" >
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Promoting events</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
                <div class="col-xl-5 d-flex">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;">
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Promoting political campaigns</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-between pb-2">
                <div class="col-xl-5 d-flex col-md-12">
                    <div class="col-xl-2 ">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;" >
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Finding a new job or volunteer opportunity</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
                <div class="col-xl-5 d-flex col-md-12">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;">
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Find investors or investing opportunities</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-between pb-2">
                <div class="col-xl-5 d-flex col-md-12">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;" >
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Online dating</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
                <div class="col-xl-5 d-flex col-md-12">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;">
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Marketing Online Courses</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-between pb-2">
                <div class="col-xl-5 d-flex col-md-12">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;" >
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Events</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
                <div class="col-xl-5 d-flex col-md-12">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;">
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Hotel quotes</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-between pb-2">
                <div class="col-xl-5 d-flex col-md-12">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;" >
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Vacation Rental</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
                <div class="col-xl-5 d-flex col-md-12">
                    <div class="col-xl-2">
                        <img src="assets/img/footerimg.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-xl-4" style="margin: auto 0px; padding-left: 15px; width: 100%;">
                        <p style="font-family: Roboto, Helvetica, Arial, sans-serif;
                        font-weight: bold;">Restaurant quotes</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat libero veritatis incidunt deleniti magni exercitationem.</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="text-center d-block pt-4 text-decoration-underline" style="font-family: Roboto, Helvetica, Arial, sans-serif;
        font-weight: bold; color: rgb(46, 110, 245);">See more ways people are using Pingseekers</a>
    </div>
</section>
@endsection
