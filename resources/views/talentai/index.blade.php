@extends('layouts.app-cardinalai')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<style>
        #shadow-host-companion{
            display: none;
        }
        .text-center{
            text-align: center;
        }
    </style>
@endsection

@section('content')
<nav class="navbar navbar-expand-xl fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><img src="./images/newlogo.png" alt="Logo.png" style="height: 100%; width: 200px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('page.success-stories') }}">Success Stories</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('talent') }}">Talent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('employer') }}">Employers</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<main class="main-content">
        <section class="pt-0">
            <header class="top-section-background position-relative">
                <div class="header-content">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-6 wow fadeInLeft">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <div class="px-5 banner-content">
                                        <h4 class="primary-text text-capitalize mb-5">PingPronto Is The AI Network That Automatically Emails Hiring Managers <br> For You And Applies To Jobs For You.</h4>
                                        <button class="btn btn-custom rounded-pill mb-5" type="button">Get Started it’s Free!</button>
                                        <h6 class="text-capitalize">It's free until you're hired.</h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 align-items-start wow fadeInRight">
                                <div class="laptop-image" class="w-50">
                                    <img src="./images/Macbook white.png" alt="Macbook white.png" class="w-100"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </section>
        <section>
            <div class="section-title">
                <div class="container">
                <div class="text-center mb-5">
                    <h4 class="primary-text wow fadeInUp">Select a career path to display <br class="d-none d-lg-block" /> relevant courses</h4>
                    <p class="wow fadeInDown">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet tincidunt, nec et iisque <br class="d-none d-lg-block" /> placerat pertinax. Ei minim probatus mea.</p>
                </div>
                
                    <div class="row">
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow rotateInDownLeft">
                            <div class="course-box">
                                <img src="./images/Entrepreneurship.png" alt="Entrepreneurship" class="w-100 img-fluid" />
                                <span>Entrepreneurship</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow rotateInDownLeft">
                            <div class="course-box">
                                <img src="./images/Engineering.png" alt="Engineering" class="w-100 img-fluid" />
                                <span>Engineering</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow fadeInUp">
                            <div class="course-box">
                                <img src="./images/Design.png" alt="Design" class="w-100 img-fluid" />
                                <span>Design</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow rotateInDownRight">
                            <div class="course-box">
                                <img src="./images/Marketing.png" alt="Marketing" class="w-100 img-fluid" />
                                <span>Marketing</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow rotateInDownRight">
                            <div class="course-box">
                                <img src="./images/Sales.png" alt="Sales" class="w-100 img-fluid" />
                                <span>Sales</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow rotateInDownLeft">
                            <div class="course-box">
                                <img src="./images/Operations.png" alt="Operations" class="w-100" />
                                <span>Operations</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow rotateInDownLeft">
                            <div class="course-box">
                                <img src="./images/Recruiting.png" alt="Recruiting" class="w-100" />
                            <span>Recruiting</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow fadeInUp">
                            <div class="course-box">
                                <img src="./images/HR.png" alt="Human Resources" class="w-100" />
                                <span>Human Resources</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow rotateInDownRight">
                            <div class="course-box">
                                <img src="./images/Accounting.png" alt="Accounting / Finance" class="w-100" />
                                <span>Accounting / Finance</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1-5 col-lg-2-5 wow rotateInDownRight">
                            <div class="course-box">
                                <img src="./images/Legal.png" alt="Legal" class="w-100" />
                                <span>Legal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="intro-section">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-4 col-xl-6">
                            <div class="content w-100">
                                <div class="text-content live-text-box my-auto w-100 wow fadeInUp">
                                    <h4 class="primary-text">Live Online <br/> Courses from</h4>
                                    <h2 class="primary-text bolder mb-5">World-Class <br class="d-none d-lg-block" /> Enterpreneurs </h2>
                                    <span class="primary-text bold py-2 d-block">Browse and Register to Attend</span>
                                    <button class="btn btn-custom rounded-pill mt-2" type="button">Free Live Online Courses</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-6">
                            <div class="montors-info">
                                <div class="card-list">
                                    <div class="mentor-card pb-4 wow rotateInDownLeft">
                                        <div class="mentor-image">
                                            <img src="./images/mentor1.png" alt="montor1">
                                        </div>
                                        <div class="mentor-info my-3">
                                            <img src="./images/mentor1_title.png" alt="" class="img-fluid mb-3" />
                                            <h6 class="primary-text bold mb-0">Anand Kishore</h6>
                                            <span>CEO AspireIQ</span>
                                        </div>
                                        <div class="mentor-description border-top pt-2">
                                            <span>How to Use Social Media Advertising to Increase your Clients by 2x</span>
                                        </div>
                                    </div>
                                    <div class="mentor-card mt-55 pb-4 wow rotateInDownLeft">
                                        <div class="mentor-image">
                                            <img src="./images/mentor3.png" alt="montor1" >
                                        </div>
                                        <div class="mentor-info my-3">
                                            <img src="./images/mentor3_title.png" alt="" class="img-fluid mb-3" />
                                            <h6 class="primary-text bold mb-0">Andy Lash</h6>
                                            <span>VP Software @ System1 Biosciences</span>
                                        </div>
                                        <div class="mentor-description border-top pt-2">
                                            <span>Sample React.js Whiteboard Interviewing Questions and Strategies</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-list card-box">
                                    <div class="mentor-card pb-4 wow rotateInDownRight">
                                        <div class="mentor-image">
                                            <img src="./images/mentor2.png" alt="montor1">
                                        </div>
                                        <div class="mentor-info my-3">
                                            <img src="./images/mentor2_title.png" alt="" class="img-fluid mb-3" />
                                            <h6 class="primary-text bold mb-0">Scott Garell</h6>
                                            <span>CEO at Goodshop and Ask.com</span>
                                        </div>
                                        <div class="mentor-description border-top pt-2">
                                            <span>How to Automate Cold Email Campaigns to Decision Makers to Get Hired or Get New clients</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="prising-box-sec">
            <div id="generic_price_table" class="mt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--PRICE HEADING START-->
                            <div class="price-heading clearfix">
                                <h1>Pricing Table</h1>
                            </div>
                            <!--//PRICE HEADING END-->
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 wow rotateInDownLeft">
                            <div class="generic_content clearfix">
                                <div class="generic_head_price clearfix">
                                    <div class="generic_head_content clearfix">
                                        <div class="head_bg"></div>
                                        <div class="head">
                                            <span>Job Applying</span>
                                        </div>
                                    </div>
                                    <div class="generic_price_tag clearfix">	
                                        <span class="price">
                                            <span class="sign">$</span>
                                            <span class="currency">100</span>
                                            <!-- <span class="cent">.99</span> -->
                                            <span class="month">/MONTH</span>
                                        </span>
                                    </div>
                                </div>           
                                <div class="generic_feature_list">
                                    <ul>
                                        <li class="text-center"><span>2GB</span> Bandwidth</li>
                                        <li class="text-center"><span>150GB</span> Storage</li>
                                        <li class="text-center"><span>12</span> Accounts</li>
                                        <li class="text-center"><span>7</span> Host Domain</li>
                                        <li class="text-center"><span>24/7</span> Support</li>
                                    </ul>
                                </div>
                                
                                <div class="generic_price_btn clearfix">
                                    <a class="" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="generic_content active clearfix">
                                <div class="generic_head_price clearfix">
                                    <div class="generic_head_content clearfix">
                                        <div class="head_bg"></div>
                                        <div class="head">
                                            <span>Resume Editing</span>
                                        </div>
                                    </div>
                                    <div class="generic_price_tag clearfix">	
                                        <span class="price">
                                            <span class="sign">$</span>
                                            <span class="currency">500</span>
                                            <!-- <span class="cent">.99</span> -->
                                            <span class="month">/MONTH</span>
                                        </span>
                                    </div>
                                </div>            
                                <div class="generic_feature_list">
                                    <ul>
                                        <li class="text-center"><span>2GB</span> Bandwidth</li>
                                        <li class="text-center"><span>150GB</span> Storage</li>
                                        <li class="text-center"><span>12</span> Accounts</li>
                                        <li class="text-center"><span>7</span> Host Domain</li>
                                        <li class="text-center"><span>24/7</span> Support</li>
                                    </ul>
                                </div>
                                <div class="generic_price_btn clearfix">
                                    <a class="" href="">Read More</a>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-4 wow rotateInDownRight">
                            <div class="generic_content clearfix">
                                <div class="generic_head_price clearfix">
                                    <div class="generic_head_content clearfix">
                                        <div class="head_bg"></div>
                                        <div class="head">
                                            <span>Emailing HM</span>
                                        </div>
                                    </div>
                                    <div class="generic_price_tag clearfix">	
                                        <span class="price">
                                            <span class="sign">$</span>
                                            <span class="currency">100</span>
                                            <!-- <span class="cent">.99</span> -->
                                            <span class="month">/MONTH</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="generic_feature_list">
                                    <ul>
                                        <li class="text-center"><span>2GB</span> Bandwidth</li>
                                        <li class="text-center"><span>150GB</span> Storage</li>
                                        <li class="text-center"><span>12</span> Accounts</li>
                                        <li class="text-center"><span>7</span> Host Domain</li>
                                        <li class="text-center"><span>24/7</span> Support</li>
                                    </ul>
                                </div>
                                <div class="generic_price_btn clearfix">
                                    <a class="" href="">Read More</a>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="get-box">
            <div class="container">
                <h3 class="primary-text bold text-center wow fadeInUp">Get a World-Class 1:1 Mentor</h3>
                <p class="text-center d-block mb-5 wow fadeInDown">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet tincidunt, nec et iisque <br class="d-none d-lg-block" /> placerat pertinax. Ei minim probatus mea.</p>
                <div class="row w-75 m-auto">
                    <div class="col-lg-4 wow rotateInDownLeft">
                        <div class="mentor-box p-4 text-center">
                            <img src="./images/mentor4.png" alt="mentor4" class="img-fluid mb-3" />
                            <h4 class="primary-text bold" >Kamal Singh</h4>
                            <p>Recruiter @ NextRoll</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInDown">
                        <div class="mentor-box p-4 text-center">
                            <img src="./images/mentor5.png" alt="mentor4" class="img-fluid mb-3" />
                            <h4 class="primary-text bold" >Recruiter @ NextRoll</h4>
                            <p>CEO @ CardinalHire</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow rotateInDownRight">
                        <div class="mentor-box p-4 text-center">
                            <img src="./images/mentor6.png" alt="mentor4" class="img-fluid mb-3" />
                            <h4 class="primary-text bold" >Ben Nagrani</h4>
                            <p>Recruiter @ Workday</p>
                        </div>
                    </div>
                </div>
                <div class="text-center my-4 apply-btn">
                    <button class="btn btn-custom rounded-pill me-3 ps-5 pe-5" type="button">Apply Now</button>
                    <button class="btn btn-custom-outline rounded-pill pe-3 ps-3" type="button">Browse Mentors</button>
                </div>
            </div>
        </section>
        <section class="learning-section">
            <div class="container">
            <h3 class="primary-text text-center mb-4 wow fadeInLeft">Learn How to</h3>
                <ul class="learn-step">
                    <li class="wow fadeInRight">Prepare for interview questions that fit your career</li>
                    <li class="wow fadeInRight">Get help with optimizing your resume</li>
                    <li class="wow fadeInRight">Learn how to send email campaigns to decision makers</li>
                    <li class="wow fadeInRight">Learn how to sell consulting services</li>
                    <a href="../talentai/our_clients_work.html"><button class="btn btn-custom rounded-pill me-3 ps-5 pe-5 btn-lg" type="button">Our clients now work at</button></a>
                </ul>
            </div>
        </section>
    </main>
@endsection
  <!-- End Hero -->

@section('script')
<script src="./js/wow.min.js"></script>
<script>
  var navbar = document.querySelector('nav')
    window.onscroll = function() {

    // pageYOffset or scrollY
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
    }

    
</script>
@endsection