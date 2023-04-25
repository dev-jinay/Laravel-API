@extends('layouts.app-cardinalai')

@section('style')
<link href="/talentai/style1.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script
    type="text/javascript">WebFont.load({ google: { families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Nunito Sans:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic", "Fira Sans:300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Inter:200,300,regular,500,600,700,800,900"] } });</script>
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link  href="footerimg.png" rel="shortcut icon" type="image/x-icon" />
  <link  href="footerimg.png" rel="apple-touch-icon" />
<style>
    .shopify-buy-cart-wrapper {
      transform: translateX(100%);
      -webkit-transition: 1s ease-in-out;
      -moz-transition: 1s ease-in-out;
      -o-transition: 1s ease-in-out;
      transition: 1s ease-in-out;

    }

    .shopify-buy-cart-wrapper.is-active {
      transform: translateX(0);
      -webkit-transition: 1s ease-in-out;
      -moz-transition: 1s ease-in-out;
      -o-transition: 1s ease-in-out;
      transition: 1s ease-in-out;
    }

    .shopify-buy__btn--close:focus {
      border: 0px !important;
      outline: none !important;
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
    }

    .shopify-buy__cart-item__quantity-input {
      border-radius: 0 !important;
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
    }

    .shopify-buy__cart-item__quantity-input:focus {
      outline: none !important;
    }

    .shopify-buy__btn:focus {
      outline: none !important;
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
    }

    .shopify-buy__btn--cart-checkout:focus {
      outline: none !important;
    }

    .test_a {
      background: red;

    }

    .disabled_checkout {
      pointer-events: none;
    }

    .tester .tester_first {
      background: rgba(54, 183, 255, 1.00);
      max-width: 350px;
      padding: 25px;
      display: inline-block;
    }

    .tester_b .tester_first {
      background: rgba(255, 90, 93, 1.00);
      max-width: 350px;
      padding: 25px;
      display: inline-block;
    }

    .tester_b .image {
      max-width: 50px;
      padding: 25px;
      display: none;
    }

    .tester_b .cc_shop_quantity {
      background: rgba(255, 229, 122, 1.00);
      padding: 10px;
    }

    .tester_b .cc_varient_tittle {
      font-weight: bold;
      font-size: 24px;
    }

    .carousel_test {
      width: 100px;
      height: 100px;
      display: inline-block;
    }

    .black .cart_toggle_title {
      fill: #ffffff;
    }

    @keyframes flipOut {
      0% {
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
      }

      100% {
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
      }
    }

    .isDisabled {
      color: currentColor;
      cursor: not-allowed;
      pointer-events: none;
      opacity: 0.5;
      text-decoration: none;
    }

    .specialnote {
      border: #ffffff;
      height: 1px;
      opacity: 0;
      overflow: hidden;
    }

    .specialnote:focus {
      border: #ffffff;
      height: 1px;
      overflow: hidden;
    }

    .shopify-buy__cart-item.is-hidden {
      animation-name: flipOut;
    }
    #zohohc-asap-web-launcherbox{
      display: none;
    }
  </style>
@endsection

@section('content')
<div data-animation="default" class="navbar w-nav" data-easing2="ease-in-out-sine" data-easing="ease-out-sine"
  data-collapse="medium" data-w-id="fd090579-a03c-36bb-62cc-e755813c6678" role="banner" data-duration="600"
  data-doc-height="1">
    <div class="container">
        <a href="{{ route('page.talentai-index') }}" class="brand-navbar w-nav-brand"><img
            src="IMAGE/LOGOS/newlogo.png"
            loading="lazy" width="90" alt="pingpronto" class="logo-navbar" style="height: 100%;
            width: 200px;
            margin-top: 20px;" />
        </a>
        <div class="menu">
        <div id="toggle_mobile" class="toggle mobile"></div>
        <nav role="navigation" class="nav-menu w-nav-menu">
            <div class="fixed-navmenu">
                
            <a href="{{ route('page.success-stories') }}" aria-current="page" class="nav-link w-nav-link w--current">Success Stories</a>
            <a href="{{ route('talent') }}" class="nav-link w-nav-link">Talent</a>
            <a href="{{ route('employer') }}" class="nav-link w-nav-link">Employers</a>
            </div>
            <!-- <div class="">
            <a href="#" class="button navbar-cta w-button">Get Started</a>
            </div> -->
            <a href="#" class="button navbar-cta w-button">Get Started</a>
        </nav>
        </div>  
    </div>
    <div class="bg-navbar"></div>
    <div class="nav-shadow" style="background: white;"></div>
</div>
<!-- Start CAREER COACHING TO PROPEL YOUR CAREER -->
<div class="section hero-new wf-section">
    <div class="container">
      <div class="hero-flex-box">
        <div class="hero-text">
          <h1 class="small-heading">Career Coaching to Propel your Career</h1>
          <h2 class="hero-heading">We help you get <span class="text-span-22">hired</span></h2>
          <p>We’ve helped over 100,000 people land their dream jobs. Let our job search strategies take you from resumes
            to better days.</p>
          <div class="hero-buttons"><a href="#" class="button w-button">View Our Services</a><a
              href="#" class="button blue w-button">Visit Pingpronto</a></div>
        </div>
        <div class="hero-slider"><img
            src="/talentai/IMAGE/icon1.png"
            loading="lazy" alt="" class="hero-bg" />
          <div data-delay="3500" data-animation="cross" class="slider-hero w-slider" data-autoplay="true"
            data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
            data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="w-slider-mask">
              <div class="slide-3 w-slide">
                <div class="hero-image-wrapper"><img
                    src="/talentai/IMAGE/icon1.png"
                    loading="lazy" alt="Woman pointing" class="hero-photo hidemobile" /><img
                    src="/talentai/IMAGE/icon1.png"
                    loading="lazy" alt="Woman pointing" class="hero-photo-mobile" /></div>
              </div>
              <div class="slide-3 w-slide">
                <div class="hero-image-wrapper"><img
                    src="/talentai/IMAGE/2.png"
                    loading="lazy" alt="Professional man" class="hero-photo" /></div>
              </div>
              <div class="w-slide">
                <div class="hero-image-wrapper"><img
                    src="/talentai/IMAGE/2.png"
                    loading="lazy" alt="Woman landing her dream job" class="hero-photo" /></div>
              </div>
            </div>
            <div class="left-arrow-4 w-slider-arrow-left">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="right-arrow-4 w-slider-arrow-right">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-5 w-slider-nav w-round"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END CAREER COACHING TO PROPEL YOUR CAREER -->

   <!-- START Our clients work at -->
   <div class="section work-at-logos wf-section">
    <div class="container">
        <h3 class="heading">Our clients work at</h3>
        <div class="logos-grid">
            <a id="w-node-ad1b52be-9505-f7e6-b253-f55dd61d6a1f-d61d6a16" href="#"  aria-current="page" class="logo-link    w-inline-block w--current">
            <img src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611faccf6b8e86535efa4ae0_LinkedIn_Logo%201.webp" loading="lazy" alt="Linkedin" class="brands-logo" />
                </a>
                <a
                id="w-node-ad1b52be-9505-f7e6-b253-f55dd61d6a1d-d61d6a16" href="#"
                aria-current="page" class="logo-link w-inline-block w--current"><img
                    src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611faccf0ef6a70b242b4d69_Google%20Logo.webp"
                    loading="lazy" alt="Google" class="brands-logo" /></a><a
                id="w-node-ad1b52be-9505-f7e6-b253-f55dd61d6a1b-d61d6a16" href="#"
                aria-current="page" class="logo-link w-inline-block w--current"><img
                    src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611faccfa116ad5d54661f39_amazon%20logo%202.webp"
                    loading="lazy" alt="Amazon" class="brands-logo" /></a><a
                id="w-node-ad1b52be-9505-f7e6-b253-f55dd61d6a21-d61d6a16" href="#"
                aria-current="page" class="logo-link w-inline-block w--current"><img
                    src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611faccf56a4ab652fc846d1_Microsoft%20Logo.webp"
                    loading="lazy" alt="Microsoft" class="brands-logo" /></a><a
                id="w-node-ad1b52be-9505-f7e6-b253-f55dd61d6a23-d61d6a16" href="#"
                aria-current="page" class="logo-link w-inline-block w--current"><img
                    src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611faccf9f0d745c4594dfd9_Goldman-Sachs-logo%201.webp"
                    loading="lazy" alt="Goldman Sach" class="brands-logo" /></a><a
                id="w-node-ad1b52be-9505-f7e6-b253-f55dd61d6a29-d61d6a16" href="#"
                aria-current="page" class="logo-link w-inline-block w--current"><img
                    src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/610d2a9c40aaf7e733fa0539_tesla-logo-red%201.webp"
                    loading="lazy" alt="Tesla" class="brands-logo" /></a><a
                id="w-node-ad1b52be-9505-f7e6-b253-f55dd61d6a25-d61d6a16" href="#"
                aria-current="page" class="logo-link w-inline-block w--current"><img
                    src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611facd08b8c37cc6388fe64_deloitte_logo%202.webp"
                    loading="lazy" alt="Deloitte" class="brands-logo" /></a><a
                id="w-node-ad1b52be-9505-f7e6-b253-f55dd61d6a27-d61d6a16" href="#"
                aria-current="page" class="logo-link w-inline-block w--current"><img
                    src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611fad06ded70b0a09839f20_mckinsey-company.webp"
                    loading="lazy" alt="McKinsey    &amp; Company" class="brands-logo" /></a></div>
    </div>
</div>
<!-- END Our clients work at -->

  <!-- Start THIS IS HOW YOU LAND YOUR DREAM JOB -->
  <div class="section wf-section">
    <div class="container">
      <h2 class="small-heading center">THIS IS HOW YOU LAND YOUR DREAM JOB</h2>
      <h2 class="section-heading">Your dream career is waiting for you</h2>
      <div class="flex-box">
        <div class="how-it-works-div">
          <h3 class="sub-heading">How it works</h3>
          <p>We know how painful the job search is. That’s why we’ve created services to help you out every step of the
            way.</p><img
            src="/talentai/IMAGE/icon1.png"
            loading="lazy" sizes="(max-width: 767px) 100vw, (max-width: 991px) 41vw, 37vw"
            alt="People who landed their dream jobs" class="image-76" />
        </div>
        <div class="dream-career-info"><a href="#" class="package-div w-inline-block">
            <div class="checkmark-div margin">
              <div class="checkmark-icon"><img
                  src="/talentai/IMAGE/correct.png"
                  loading="lazy" alt="" class="tick-2" /></div>
              <h4 class="heading-smaller">Get your foundation</h4>
            </div>
            <p class="paragraph-margin">First, we craft your vision. This stage sets the foundation for your career
              goals moving forward.</p>
          </a><a href="#" class="package-div w-inline-block">
            <div class="checkmark-div margin">
              <div class="checkmark-icon"><img
                  src="/talentai/IMAGE/correct.png"
                  loading="lazy" alt="" class="tick-2" /></div>
              <h4 class="heading-smaller">Get your interviews</h4>
            </div>
            <p class="paragraph-margin">Next, we train. This is where you put in the time to hone your interview skills.
              This is where you gain your confidence.</p>
          </a><a href="#" class="package-div no-margin w-inline-block">
            <div class="checkmark-div margin">
              <div class="checkmark-icon"><img
                  src="/talentai/IMAGE/correct.png"
                  loading="lazy" alt="" class="tick-2" /></div>
              <h4 class="heading-smaller">Get the job offer</h4>
            </div>
            <p class="paragraph-margin">Finally, you land your job. Here, your preparation and hard work turn you from
              an underdog, into a winner.</p>
          </a></div><img
          src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/6220a8901c8b3c382cf7efb0_people%20jobs-min%20(3).png"
          loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 767px) 72vw, 100vw"
          srcset="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/6220a8901c8b3c382cf7efb0_people%20jobs-min%20(3)-p-500.png 500w, https://assets-global.website-files.com/6107d4b379e3293a0c62f588/6220a8901c8b3c382cf7efb0_people%20jobs-min%20(3).png 782w"
          alt="People who landed their dream jobs" class="image-77" />
      </div>
      <div class="section-cta">
        <a href="#" class="button bottom-section w-button">Find out how</a>
      </div>
    </div>
  </div>
  <!-- END THIS IS HOW YOU LAND YOUR DREAM JOB -->

    <!-- START Our Underdog Journey -->
  <div class="section counts wf-section">
    <div class="container">
      <h2 class="section-heading white">Our Underdog Journey</h2>
      <div class="w-layout-grid counts-grid homepage">
        <div id="w-node-_5cf553d5-7fa4-df9d-014e-40a7ae5cc849-edabb84d" class="count-box">
          <div class="count-div">
            <div class="count-text">#</div>
            <div class="counterup">1</div>
            <div class="count-text million">Rank</div>
          </div>
          <div class="bold-text-white">Most Featured Job Search Platform</div>
        </div>
        <div class="count-box">
          <div class="count-div">
            <div class="counterup">1,200</div>
            <div class="count-text">+</div>
          </div>
          <div class="bold-text-white">Happy Clients</div>
        </div>
        <div class="count-box">
          <div class="count-div">
            <div class="counterup">2</div>
            <div class="count-text million">Months</div>
          </div>
          <div class="bold-text-white">Average Time to Land a Job</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Our Underdog Journey -->

   <!-- START SERVICES -->
  <div class="section wf-section">
    <div class="container">
      <h2 class="small-heading center">SERVICES</h2>
      <h2 class="section-heading">Looking for a single push?</h2>
      <p class="paragraph center">We’ll help you land your dream job. It’s kind of our thing.</p>
      <div class="w-layout-grid grid-resume-revision">
        <div class="services-vertical"><a href="#" class="package-div w-inline-block">
            <div class="checkmark-services">
              <div class="checkmark-icon"><img src="/talentai/IMAGE/Career Consulting.png" loading="lazy" alt=""
                  class="icon-service" /></div>
              <h3 class="heading-smaller">Career Consulting</h3>
            </div>
            <p class="paragraph-gray margin">Need professional guidance to level up your career? Let’s get you connected
              with the perfect mentor.</p>
          </a><a href="#" class="package-div w-inline-block">
            <div class="checkmark-services">
              <div class="checkmark-icon"><img src="/talentai/IMAGE/Resume Revision.png" loading="lazy" alt=""
                  class="icon-service" /></div>
              <h3 class="heading-smaller">Resume Revision</h3>
            </div>
            <p class="paragraph-gray margin">Ready to win the resume wars? Our resumes are designed to stand out to your
              recruiters.</p>
          </a><a href="#" class="package-div no-margin w-inline-block">
            <div class="checkmark-services">
              <div class="checkmark-icon"><img src="/talentai/IMAGE/LinkedIn Profile Revision.png" loading="lazy"
                  alt="LinkedIn Revision" class="icon-service" /></div>
              <h3 class="heading-smaller">LinkedIn Profile Revision</h3>
            </div>
            <p class="paragraph-gray margin">Want to perfect your LinkedIn profile? We’ve got the tools to make your
              story stand out.</p>
          </a></div>
        <div class="services-image"><img src="/talentai/IMAGE/icon1.png" loading="lazy"
            sizes="(max-width: 479px) 72vw, (max-width: 991px) 36vw, 614px" alt="Logo" /></div>
        <div class="services-vertical"><a href="#" class="package-div w-inline-block">
            <div class="checkmark-services">
              <div class="checkmark-icon"><img src="/talentai/IMAGE/Job Search Strategy.png" loading="lazy" alt=""
                  class="icon-service" /></div>
              <h3 class="heading-smaller">Job Search Strategy</h3>
            </div>
            <p class="paragraph-gray margin">Don’t know where to start? We’ll help you strategize no matter what stage
              you’re in.</p>
          </a><a href="#" class="package-div w-inline-block">
            <div class="checkmark-services">
              <div class="checkmark-icon"><img src="/talentai/IMAGE/Auto Apply for Jobs.png" loading="lazy" alt=""
                  class="icon-service" /></div>
              <h3 class="heading-smaller">Auto Apply for Jobs</h3>
            </div>
            <p class="paragraph-gray margin">Everybody needed it, so we created it! Now you can finally apply for jobs
              automatically.</p>
          </a><a href="#" class="package-div no-margin w-inline-block">
            <div class="checkmark-services">
              <div class="checkmark-icon"><img src="/talentai/IMAGE/Interview Prep.png" loading="lazy" alt=""
                  class="icon-service" /></div>
              <h3 class="heading-smaller">Interview Prep</h3>
            </div>
            <p class="paragraph-gray margin">Struggling with interviews? You need to train. Let us help you ace every
              interview from now on.</p>
          </a></div>
        <div id="w-node-_5cf553d5-7fa4-df9d-014e-40a7ae5cc8a0-edabb84d" class="div-block-5"></div><a href="#"
          class="package-div w-inline-block">
          <div class="checkmark-services">
            <div class="checkmark-icon"><img src="/talentai/IMAGE/Cover Letter Revision.png" loading="lazy" alt=""
                class="icon-service" /></div>
            <h3 class="heading-smaller">Cover Letter Revision</h3>
          </div>
          <p class="paragraph-gray margin">We will translate your relevant work experience to create the perfect cover
            letter to land your dream job.</p>
        </a>
      </div>
      <div class="section-cta"><a href="#" class="button bottom-section w-button">View our services</a></div>
    </div>
  </div>
<!-- END SERVICES -->

<!-- START ONLINE COURSE -->
  <div class="section course wf-section">
    <div class="container">
      <h2 class="small-heading center">ONLINE COURSE</h2>
      <h2 class="section-heading">A course created to teach you how to land your dream job</h2>
      <div class="course-flex">
        <div class="video-div"><a href="#" class="lightbox-link w-inline-block w-lightbox"><img
              src="/talentai/IMAGE/icon1.png"
              loading="lazy" alt="images" class="image-8" />
          </a></div>
        <div class="course-text">
          <div class="course-title">
            <div class="plus-icon-div"><img
                src="/talentai/IMAGE/plusblue.png"
                loading="lazy" width="29" height="29" alt="" /></div>
            <h3 class="sub-heading course-home">Tips to land the offer</h3>
          </div>
          <p class="paragraph-bigger">This course was designed to share unconventional tips in the job search process,
            especially to those from non-target schools &amp; non-traditional backgrounds. This course comes with
            lifetime access and is constantly updated to stay relevant to recruiting processes of Fortune 500
            companies.<br /><br />Try it risk-free with our <strong>30 Day Money Back Guarantee.</strong> Read our terms
            <a href="#">here</a>.</p>
        </div>
      </div>
      <div class="course-flex reverse">
        <div class="course-benefits">
          <div class="course-title">
            <div class="plus-icon-div"><img
                src="/talentai/IMAGE/plusblue.png"
                loading="lazy" width="29" height="29" alt="" /></div>
            <h3 class="sub-heading course-home">Included in the course:</h3>
          </div>
          <div class="checkmark-div">
            <div class="checkmark-icon"><img
                src="/talentai/IMAGE/correct.png"
                loading="lazy" alt="" class="tick" /></div>
            <p class="paragraph-bigger">How to find your dream job and passion</p>
          </div>
          <div class="checkmark-div">
            <div class="checkmark-icon"><img
                src="/talentai/IMAGE/correct.png"
                loading="lazy" alt="" class="tick" /></div>
            <p class="paragraph-bigger">Resume tips to beat the ATS and pass the recruiter &quot;6 second test&quot;</p>
          </div>
          <div class="checkmark-div">
            <div class="checkmark-icon"><img
                src="/talentai/IMAGE/correct.png"
                loading="lazy" alt="" class="tick" /></div>
            <p class="paragraph-bigger">Our proven job search strategies that helped us land jobs at Snap, Google,
              Cisco, Lucid, and more</p>
          </div>
          <div class="checkmark-div">
            <div class="checkmark-icon"><img
                src="/talentai/IMAGE/correct.png"
                loading="lazy" alt="" class="tick" /></div>
            <p class="paragraph-bigger">Proven formulas to make your LinkedIn stand out to recruiters</p>
          </div>
          <div class="checkmark-div">
            <div class="checkmark-icon"><img
                src="/talentai/IMAGE/correct.png"
                loading="lazy" alt="" class="tick" /></div>
            <p class="paragraph-bigger">Ready to use templates to build genuine connections with recruiters and hiring managers</p>
          </div>
          <div class="course-title margin">
            <h3 class="sub-heading course-home">Plus insights from recruiters &amp; hiring managers:</h3>
          </div>
          <div class="w-layout-grid grid-hiring-managers">
            <a href="#" target="_blank" class="hiring-manager-div w-inline-block">
              <div class="avatar-person"><img
                  src="/talentai/IMAGE/icon1.png"
                  loading="lazy" alt="Harpreet Kaur" class="insight-avatars" />
              </div>
              <div class="name-person">Harpreet Kaur</div>
              <div class="position-person">Senior Product Lead at Microsoft</div>
            </a>
            <a href="#" target="_blank" class="hiring-manager-div w-inline-block">
              <div class="avatar-person"><img
                  src="/talentai/IMAGE/icon1.png"
                  loading="lazy" alt="Jalin Ahmed" class="insight-avatars" /></div>
              <div class="name-person"><strong>Jalil Ahmed</strong></div>
              <div class="position-person">Program Manager at Google</div>
            </a>
            <a href="#" target="_blank"
              class="hiring-manager-div w-inline-block">
              <div class="avatar-person"><img
                  src="/talentai/IMAGE/icon1.png"
                  loading="lazy" alt="Vivian Chen" class="insight-avatars" /></div>
              <div class="name-person"><strong>Vivian Chen</strong></div>
              <div class="position-person">University Recruiter at Lyft</div>
            </a>
            <a href="#" target="_blank"
              class="hiring-manager-div w-inline-block">
              <div class="avatar-person"><img
                  src="/talentai/IMAGE/icon1.png"
                  loading="lazy" alt="Nicole Fernandez" class="insight-avatars" /></div>
              <div class="name-person"><strong>Nicole Fernandez</strong></div>
              <div class="position-person">Technical Sourcer at Meta</div>
            </a>
            <a href="#" target="_blank"
              class="hiring-manager-div w-inline-block">
              <div class="avatar-person"><img
                  src="/talentai/IMAGE/icon1.png"
                  loading="lazy" alt="Scott Moore" class="insight-avatars" /></div>
              <div class="name-person">Scott Moore</div>
              <div class="position-person">Sr. Manager, Early Career at Zillow</div>
            </a>
          </div>
        </div>
      </div>
      <div class="section-cta">
        <a href="#" class="button bottom-section w-button">Learn how to land your dream job</a>
      </div>
    </div>
  </div>
  <!-- END ONLINE COURSE -->

  <!-- START TESTIMONIALS -->
  <div class="section testimonials wf-section">
    <div class="container">
      <h2 class="small-heading center">testimonials</h2>
      <h2 class="section-heading">Real stories from real people</h2>
      <p class="paragraph center">See what our clients have to say about pingpronto</p>
      <div class="testimonials-flex">
        <div class="image-div">
          <img  src="/talentai/IMAGE/2.png" loading="lazy" width="339" alt="Man pointing to the right" class="testimonial-image" />
        </div>
        <div class="slider-div">
          <div data-delay="4000" data-animation="outin" class="slider w-slider" data-autoplay="false"
            data-easing="ease-in-out-sine" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
            data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="w-slider-mask">
              <div class="slide w-slide">
                <div class="slider-content-services">
                  <div class="avatar-testimonials">
                    <img width="400" sizes="88px"
                      src="/talentai/IMAGE/icon1.png"
                      loading="lazy"
                      alt="Lisa" class="avatar-testimonial" />
                  </div>
                  <div class="name-and-logo">
                    <div class="name-test"><strong>Lisa Dershowitz</strong></div>
                    <div class="logo-div"><img
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 35vw, (max-width: 991px) 135.234375px, 155.390625px"
                        srcset="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/64149cb2cd6edc25b46547f5_ZI_BIG-d95e8a56-p-500.webp 500w, https://assets-global.website-files.com/6107d4b379e3293a0c62f588/64149cb2cd6edc25b46547f5_ZI_BIG-d95e8a56-p-800.webp 800w, https://assets-global.website-files.com/6107d4b379e3293a0c62f588/64149cb2cd6edc25b46547f5_ZI_BIG-d95e8a56.webp 1580w"
                        src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/64149cb2cd6edc25b46547f5_ZI_BIG-d95e8a56.webp"
                        loading="lazy" alt="Zoominfo" />
                    </div>
                    <div class="position-testimonials">Onboarding Manager</div>
                  </div>
                  <p>“Pingpronto helped me dive in and really think about my resume. They helped think about how to
                    create xyz details of my recent work experience and how it is relevant to the jobs I was applying
                    to. We went through and reviewed what should be on the resume and what was no longer relevant. It
                    was also great to have another set of eyes on there for small grammar and spelling mistakes along
                    with the formatting.”<br /></p>
                </div>
              </div>
              <div class="slide w-slide">
                <div class="slider-content-services">
                  <div class="avatar-testimonials"><img loading="lazy"
                      src="/talentai/IMAGE/icon1.png"
                      alt="Thomas Boharsik" class="avatar-testimonial" /></div>
                  <div class="name-and-logo">
                    <div class="name-test"><strong>Thomas Boharsik</strong></div>
                    <div class="logo-div"><img loading="lazy"
                        src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/626689d51a0aba30a52a0b9b_Google%20Logo.svg"
                        alt="Google" /></div>
                    <div class="position-testimonials">Systems Ops Manager</div>
                  </div>
                  <p>“Pingpronto took my unique background that blends military and technology consulting together. I
                    wanted to break out into Big Tech - specifically with a strategic focused role - and Pingpronto
                    delivered many times over. The resume was a key reason in being considered by a hiring manager for
                    the role I have today despite steep competition. Pingpronto&#x27;s approach made me feel as a
                    military vet that my voice and brand could be understood.”<br /></p>
                </div>
              </div>
              <div class="slide w-slide">
                <div class="slider-content-services">
                  <div class="avatar-testimonials"><img loading="lazy"
                      src="/talentai/IMAGE/icon1.png"
                      alt="Camille Duckett" class="avatar-testimonial" /></div>
                  <div class="name-and-logo">
                    <div class="name-test"><strong>Camille Duckett</strong></div>
                    <div class="logo-div"><img loading="lazy"
                        src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/62448c66e658643c55078e40_victorias-secret-logo%201.webp"
                        alt="Victoria&#x27;s Secret" /></div>
                    <div class="position-testimonials">Sales Associate</div>
                  </div>
                  <p>"Pingpronto showed me how to connect and message recruiters and employees on LinkedIn. Before
                    applying, I networked with several employees who worked at the company who had graduated from my
                    university. Additionally, I was able to connect with my LinkedIn recruiter before the internship
                    application went live. When the application launched, I received a referral from a member of my
                    network. Ultimately, I was very fortunate to receive an offer and am so excited for the upcoming
                    summer, and this is all thanks to Pingpronto!”<br /></p>
                </div>
              </div>
              <div class="slide w-slide">
                <div class="slider-content-services">
                  <div class="avatar-testimonials"><img
                      src="/talentai/IMAGE/icon1.png"
                      loading="lazy" alt="Josh Jurgenson" class="avatar-testimonial" /></div>
                  <div class="name-and-logo">
                    <div class="name-test"><strong>Josh Jurgenson</strong></div>
                    <div class="logo-div"><img
                        src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/6241a76f0f6e251fe3ef5936_Toast_logo%201.webp"
                        loading="lazy" alt="Toast Logo" /></div>
                    <div class="position-testimonials">Capital Operations Specialist</div>
                  </div>
                  <p>&quot;I followed Pingpronto&#x27;s advice about networking messages to land the interview at Toast.
                    Then the advice on how to interview and ask proper questions helped a ton! I also used the resume
                    rewrite and I believe my updated resume along with the other factors are 100% the reason I landed
                    the Job at Toast!&quot;<br /></p>
                </div>
              </div>
              <div class="slide w-slide">
                <div class="slider-content-services">
                  <div class="avatar-testimonials"><img loading="lazy"
                      src="/talentai/IMAGE/icon1.png"
                      alt="Sara O&#x27;Connor" class="avatar-testimonial" /></div>
                  <div class="name-and-logo">
                    <div class="name-test"><strong>Sara O&#x27;Connor</strong></div>
                    <div class="logo-div"><img loading="lazy"
                        src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/624ecb5175884a1dd64f397f_logicsource.webp"
                        alt="LogicSource Logo" /></div>
                    <div class="position-testimonials">Sourcing Specialist</div>
                  </div>
                  <p>&quot;The resume I got from Pingpronto services really boosted my confidence. I didn&#x27;t realize
                    how sad my old resume was. With my old resume, I would&#x27;ve been embarrassed to even apply. My
                    new resume made me say, &quot;Hell yeah, I&#x27;m qualified, I&#x27;m a rock star, gimme this job
                    and pay me more!&quot; I doubled my salary and moved to a bigger metro area where there&#x27;s more
                    opportunity.&quot;<br /></p>
                </div>
              </div>
              <div class="slide w-slide">
                <div class="slider-content-services">
                  <div class="avatar-testimonials"><img
                      src="/talentai/IMAGE/icon1.png"
                      loading="lazy" alt="Testimonial Person" class="avatar-testimonial" /></div>
                  <div class="name-and-logo">
                    <div class="name-test"><strong>Kevin Luong</strong></div>
                    <div class="logo-div"><img
                        src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/610d2a9c40aaf7e733fa0539_tesla-logo-red%201.webp"
                        loading="lazy" alt="Tesla" /></div>
                    <div class="position-testimonials">Project Advisor</div>
                  </div>
                  <p>&quot;I had been laid off and a fairly new graduate. Pingpronto kept my hopes up, kept me inspired,
                    and constantly gave advice on every platform. Having followed them on each of them, allowed me to
                    always be reminded that everyone is going through the same job hunting as you and that it&#x27;s
                    normal to feel down. The live sessions gave me VALUABLE information that people can easily charge
                    tons of money for but with the Pingpronto's team and its passion, they put people first and offered
                    advice without hesitation. They edited my resume and I landed a job at Tesla and more
                    opportunities!&quot;<br /></p>
                </div>
              </div>
              <div class="slide w-slide">
                <div class="slider-content-services">
                  <div class="avatar-testimonials"><img
                      src="/talentai/IMAGE/icon1.png"
                      loading="lazy" alt="Testimonial Person" class="avatar-testimonial" /></div>
                  <div class="name-and-logo">
                    <div class="name-test">Sheetal Dalal</div>
                    <div class="logo-div"><img
                        src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/610d2894a089f7236c89ef55_Qualcomm-Logo%201.webp"
                        loading="lazy" alt="Qualcomm" /></div>
                    <div class="position-testimonials">Modem System Test Engineer</div>
                  </div>
                  <p>“It was in the middle of the pandemic when I decided to take help from Pingpronto for my job
                    search. Pingpronto helped me with my resume and gave me guidance on Job Search strategies. All I had
                    to do was follow them and have patience. Not only that, the Pingpronto Team proved to be a strong
                    pillar of support throughout my journey. Job search can wear you out, but with the right people
                    beside you, it can turn into an enjoyable rollercoaster ride. Thank you Pingpronto for your
                    help!”<br /></p>
                </div>
              </div>
              <div class="slide w-slide">
                <div class="slider-content-services">
                  <div class="avatar-testimonials"><img
                      src="/talentai/IMAGE/icon1.png"
                      loading="lazy" alt="Jonathan Budning" class="avatar-testimonial" /></div>
                  <div class="name-and-logo">
                    <div class="name-test"><strong>Jonatha Budning</strong></div>
                    <div class="logo-div"><img
                        src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/6241d97fa4c5f2ba924f856c_Yelp_Logo%201.webp"
                        loading="lazy" alt="Yelp" /></div>
                    <div class="position-testimonials">Engineering Manager</div>
                  </div>
                  <p>&quot;Pingpronto really tailored my resume, highlighted my strengths. They added a lot of metrics
                    and facts into my resume and made my achievements sound more substantial. I was offered many
                    interviews at large corporations and eventually landed a job at Yelp!&quot;<br /></p>
                </div>
              </div>
            </div>
            <div class="left-arrow w-slider-arrow-left"><img
                src="/talentai/IMAGE/left.png"
                loading="lazy" width="37" alt="" /></div>
            <div class="right-arrow w-slider-arrow-right"><img
                src="/talentai/IMAGE/right.png"
                loading="lazy" width="37" alt="" /></div>
            <div class="slide-nav w-slider-nav w-round"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END TESTIMONIALS -->

<!-- START Featured in -->
  <div class="section featured-in wf-section">
    <div class="container">
      <h3 class="heading">Featured in</h3>
      <div class="w-layout-grid featured-in-grid">
        <a id="w-node-be160d06-22cb-cbdd-d0a4-b9822ecdb6e7-2ecdb6e2" href="#" class="logo-link w-inline-block">
          <img src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611fabe66cd708dd9d16d214_forbes%20logo%201.webp"  loading="lazy" alt="Forbes" class="press-logo-image" /></a>
          <a
          id="w-node-be160d06-22cb-cbdd-d0a4-b9822ecdb6e9-2ecdb6e2" href="#" class="logo-link w-inline-block"><img
            src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611fabe56b8e861c50fa2b77_business%20insider.webp"
            loading="lazy" alt="Business Insider" class="press-logo-image" /></a><a
          id="w-node-be160d06-22cb-cbdd-d0a4-b9822ecdb6eb-2ecdb6e2" href="#" class="logo-link w-inline-block"><img
            src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/61f806d4bd7af84610fcbdc2_fortune-logo.webp"
            loading="lazy" alt="" class="press-logo-2" /></a><a
          id="w-node-_784df805-994d-2f24-b351-ff54e9c0069c-2ecdb6e2" href="#" class="logo-link w-inline-block"><img
            src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/611fabe6419f2eb82cf1a676_the%20times%20logo.webp"
            loading="lazy" alt="The Times" class="press-logo-2" /></a><a
          id="w-node-be160d06-22cb-cbdd-d0a4-b9822ecdb6ed-2ecdb6e2" href="#" class="logo-link w-inline-block"><img
            src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/61f805ffca340613363cbbc2_fox%202%20logo.webp"
            loading="lazy" alt="" class="press-logo-image" /></a><a
          id="w-node-be160d06-22cb-cbdd-d0a4-b9822ecdb6ef-2ecdb6e2" href="#" class="logo-link w-inline-block"><img
            src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/61f8064c98d63a779405f467_daily%20mail%20logo%201.webp"
            loading="lazy" alt="" class="press-logo-2" /></a>
  </div>
    </div>
  </div>
<!-- END Featured in -->


 <!-- START Success Stories From Our Blog -->

 <div class="section  blog-success-stories-page  wf-section">
  <div class="container">
      <h2 class="small-heading center"> Blog</h2>
      <h2 class="section-heading">Learn how to get hired</h2>
      <div class="success-stories-page-blog w-dyn-list">
          <div role="list" class="blog-grid-success-stories w-dyn-items">
              <div role="listitem" class="w-dyn-item"><a data-w-id="b10276d5-bf24-dc99-370d-ec786f28ca74"
                      href="#" class="blog-post w-inline-block">
                      <div style="background-image:url(/talentai/IMAGE/2.png)"
                          class="blog-post-image">
                          <!-- <div class="category">
                              <h2 class="category-text">Success Stories</h2>
                          </div> -->
                      </div>
                      <div class="blog-box">
                          <h3 class="blog-post-title">Hired at Google: Pingpronto Services at Work</h3>
                          <p class="blog-post-description">Read about how this former military officer got hired at Google with the help of Pingpronto resume revision service. 
                          </p>
                      </div>
                      <div class="date-and-readmore">
                          <div class="date">February 02,  2022</div>    
                          <div class="blog-postl-link">
                              <!-- <div class="text-block-18">Read  more</div>       
                              <div class="arrow-div"><img
                                      src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/620fd602da384a4dec7ae0cf_small-arrow.svg"
                                      loading="lazy" alt="" class="arrow-small" /></div> -->
                          </div>
                      </div>
                  </a>
              </div>


              <div role="listitem" class="w-dyn-item"><a data-w-id="b10276d5-bf24-dc99-370d-ec786f28ca74"
                  href="#" class="blog-post w-inline-block">
                  <div style="background-image:url(/talentai/IMAGE/2.png)"
                      class="blog-post-image">
                  </div>
                  <div class="blog-box">
                      <h3 class="blog-post-title">Hired at Google: Pingpronto Services at Work</h3>
                      <p class="blog-post-description">Read about how this former military officer got hired at Google with the help of Pingpronto resume revision service.</p>
                  </div>
                  <div class="date-and-readmore">
                      <div class="date">February 08,  2023</div>    
                      <div class="blog-postl-link">
                      </div>
                  </div>
                  </a>
              </div>


          <div role="listitem" class="w-dyn-item"><a data-w-id="b10276d5-bf24-dc99-370d-ec786f28ca74"
              href="#" class="blog-post w-inline-block">
              <div style="background-image:url(/talentai/IMAGE/2.png)"
                  class="blog-post-image">
              </div>
              <div class="blog-box">
                  <h3 class="blog-post-title">Hired at Google: Pingpronto Services at Work</h3>
                  <p class="blog-post-description">Read about how this former military officer got hired at Google with the help of Pingpronto resume revision service.</p>
              </div>
              <div class="date-and-readmore">
                  <div class="date">March 15,  2023</div>    
                  <div class="blog-postl-link">
                  </div>
              </div>
              </a>
          </div>

  </div>
      </div>
      <div class="section-cta">
          <a href="#" class="button bottom-section  w-button">Read Our Blog</a>
      </div>                                                       
  </div>
</div>
<!-- END Success Stories From Our Blog -->

  <!-- START Free Resources -->
  <div class="section wf-section">
    <div class="container">
      <h2 class="section-heading">Free Resources</h2>
      <p class="paragraph center">Find the Pingpronto resume, cover letter, &amp; networking templates below</p>
      <div class="_3-feat-flex">
        <div class="feat-div">
          <img src="/talentai/IMAGE/resume.png" loading="lazy" alt="Resumes" class="icon-image" />
          <h3 class="feat-heading">Resumes</h3>
          <p class="paragraph center">Use Pingpronto ATS-friendly resume template that has helped underdogs land
            interviews at Fortune 500 companies</p>
        </div>
        <div class="feat-div"><img
            src="/talentai/IMAGE/Networking.png"
            loading="lazy" alt="Networking" class="icon-image" />
          <h3 class="feat-heading">Networking</h3>
          <p class="paragraph center">Use Pingpronto networking templates to increase your chances of connecting with
            recruiters &amp; hiring managers</p>
        </div>
        <div class="feat-div"><img
            src="/talentai/IMAGE/Interview.png"
            loading="lazy" alt="Interview" class="icon-image" />
          <h3 class="feat-heading">Interview</h3>
          <p class="paragraph center">Use Pingpronto interview preparation resources to help you pass your interviews
            &amp; land the offer</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Free Resources -->

<!-- START TAB --> 
<div class="section wf-section">
  <div class="container">
      <div class="cta-box">
          <h2 class="cta-heading">Ready to make your dream job a <span class="text-span-23">reality</span>?</h2>
          <p class="paragraph center">Get personal  attention with each of our services, or join a community of  learners in our online courses.</p>     
          <div class="buttons-box">
              <a href="#" class="button cta w-button">See our Services</a>      
                  <a href="#" class="button cta blue w-button">Visit Pingpronto</a>
              </div>                                            
                 
          <p class="cta-questions">Questions about our services? Check out our  
               <a href="#" target="_blank">FAQs page</a> or contact our team <a href="#" target="_blank">here</a>.
          </p>                    
      </div>
  </div>
</div>
<!-- END TAB --> 
@endsection
  <!-- End Hero -->

@section('script')

@endsection