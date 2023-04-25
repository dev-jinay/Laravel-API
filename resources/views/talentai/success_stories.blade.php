@extends('layouts.app-cardinalai')

@section('style')
<link href="/talentai/style.css"
        rel="stylesheet" type="text/css" />
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="new.js" type="text/javascript">
    </script>
    <script
        type="text/javascript">WebFont.load({ google: { families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Nunito Sans:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic", "Fira Sans:300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Inter:200,300,regular,500,600,700,800,900"] } });</script>
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link
        href="IMAGE/LOGOS/footerimg.png"
        rel="shortcut icon" type="image/x-icon" />
    <link
        href="footerimg.png"
        rel="apple-touch-icon" />
    <script
        type="text/javascript">window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-183798784-1', { 'anonymize_ip': false });</script>
    <script
        type="text/javascript">!function (f, b, e, v, n, t, s) { if (f.fbq) return; n = f.fbq = function () { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) }; if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0'; n.agent = 'plwebflow'; n.queue = []; t = b.createElement(e); t.async = !0; t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s) }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '450488986326797'); fbq('track', 'PageView');</script>
<style>
        #zohohc-asap-web-launcherbox{
            display: none !important;   
        }
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
        .stories-column{
            width: 100% !important;
        }
        .filter-width {
            width: 25% !important;
        }
        .list-width{
            width: 70%;
        }
        .primarydiv{
            display: flex;
            flex-wrap: wrap;
            margin-right: -150px;
            margin-left: -150px;
            

            
        }
    </style>
@endsection

@section('content')
<div data-animation="default" class="navbar w-nav" data-easing2="ease-in-out-sine" data-easing="ease-out-sine"
        data-collapse="medium" data-w-id="fd090579-a03c-36bb-62cc-e755813c6678" role="banner" data-duration="600"
        data-doc-height="1">
        <div class="container">
            <a href="{{ route('page.talentai-index') }}" class="brand-navbar w-nav-brand"><img
            src="/talentai/IMAGE/LOGOS/newlogo.png"
            loading="lazy" width="90" alt="pingpronto" class="logo-navbar" style="height: 100%;
            width: 200px;
            margin-top: 20px; margin-left: -145px;" />
            </a>
            <div class="menu">
                <div id="toggle_mobile" class="toggle mobile"></div>
                <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="fixed-navmenu" >
                    
                    <a href="{{ route('page.success-stories') }}" aria-current="page" class="nav-link w-nav-link w--current">Success Stories</a>
                    <a href="{{ route('talent') }}" class="nav-link w-nav-link">Talent</a>
                    <a href="{{ route('employer') }}" class="nav-link w-nav-link">Employers</a>
                </div>
                <a href="#" class="button navbar-cta w-button">Get Started</a>
                </nav>
            </div>
        </div>
        <div class="bg-navbar"></div>
        <div class="nav-shadow"></div>
    </div>
    
<div id="real-stories" class="section stories wf-section" style="height: 1000px;">
        <div class="container">
            <h2 class="section-heading">Testimonials</h2>
            <div class="stories-flex" >
                <div class="stories-column" >
                    <div class="w-dyn-list" >
                        <div fs-cmsfilter-element="list" fs-cmsload-element="list" role="list" class="w-dyn-items" >
                            <div class="row primarydiv" >
                            <div  class="filter-width " style="margin-right:auto ;">
                                <div class="sticky-div-stories">
                                    <div class="filters-form w-form">
                                        <form id="wf-form-Filters" name="wf-form-Filters" data-name="Filters" method="get" fs-cmsfilter-element="filters">
                                            <label for="name" class="field-blog">Filter by Years of Experience</label>
                                            <div class="filter-flex-2">
                                                <a fs-cmsfilter-active="active" fs-cmsfilter-element="reset"
                                                    href="#" class="filter-button">All</a>
                                            <label fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                    <input type="checkbox" name="checkbox-3" id="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input checkbox" />
                                                    <span class="checkbox-label w-form-label" for="checkbox-3">0-1 Years</span>
                                            </label>
            
                                            <label fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-3" id="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-3">0-1 Years</span>
                                            </label>
            
                                            <label fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-3" id="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-3">0-1 Years</span>
                                            </label>
            
                                            <label fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-3" id="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-3">0-1 Years</span>
                                            </label>
            
                                            <label fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-3" id="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-3">0-1 Years</span>
                                            </label>
            
                            
                                            <label for="name" class="field-blog">Filter by Industry</label>
                                            <div class="filter-flex-2">
                                                <a fs-cmsfilter-active="active" fs-cmsfilter-element="reset"
                                                    href="#" class="filter-button">All</a>
                                            <label fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                    <input type="checkbox" name="checkbox-3" id="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input checkbox" />
                                                    <span class="checkbox-label w-form-label" for="checkbox-3">Sales</span>
                                            </label>
                                            <label  fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                    <input type="checkbox" name="checkbox-2" id="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input checkbox" />
                                                    <span class="checkbox-label w-form-label" for="checkbox-2">Engineering</span>
                                            </label>
                                            <label  fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-2" id="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-2">Recrutining</span>
                                            </label>
                                            <label  fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-2" id="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-2">Marketing</span>
                                            </label>
                                            <label  fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-2" id="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-2">HR</span>
                                            </label>
                                            <label  fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-2" id="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-2">Healthcare</span>
                                            </label> 
                                        </div>

                                        <label for="name" class="field-blog">Filter by category</label>
                                            <div class="filter-flex-2">
                                                <a fs-cmsfilter-active="active" fs-cmsfilter-element="reset"
                                                    href="#" class="filter-button">All</a>
                                            <label fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                    <input type="checkbox" name="checkbox-3" id="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input checkbox" />
                                                    <span class="checkbox-label w-form-label" for="checkbox-3">Talent</span>
                                            </label>
                                            <label  fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                    <input type="checkbox" name="checkbox-2" id="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input checkbox" />
                                                    <span class="checkbox-label w-form-label" for="checkbox-2">Employers</span>
                                            </label>
                                            <label  fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-2" id="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-2">Recruiters</span>
                                            </label>
                                            <label  fs-cmsfilter-active="active" fs-cmsfilter-field="category" class="w-checkbox filter-button">
                                                <input type="checkbox" name="checkbox-2" id="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input checkbox" />
                                                <span class="checkbox-label w-form-label" for="checkbox-2">Startups</span>
                                            </label>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                              
                        </div>
                        <div  class="list-width">
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Kathryn\ West.jpeg)"
                                            class="success-story-avatar">
                                        </div>
                                        <div class="person-name">Kathryn West</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                            <p>I had a great experience working with Paul, who recruited me to test and interview for my position at Quimbee, as it ultimately got me the position. I'm truly happy and excited to be where I am currently and appreciated for my work. Paul was responsive and easy to reach if needed, and I have no doubt that if you are looking for that perfect fit, he will be able to help.<br><br> Hope that works. Best of luck with your new venture! And thanks again for your help in getting me this position, as it is amazing and I love working at Quimbee.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Linda\ Kato.jpeg)"
                                            class="success-story-avatar">
                                        </div>
                                        <div class="person-name">Linda Kato</div>
                                        <div class="person-position">MarkLogic Corporation</div><br>
                                        <div class="person-position">Founder of Consulting.com</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>I had the pleasure of working with Paul for more than a year while our company was coming out of a very difficult and chaotic acquisition.  Paul was able to handle all of the recruitment activities during that time that included heavy sourcing of technical software candidates, start to finish hiring processes via Greenhouse, requisition tracking, obtaining CEO approvals and everything that was needed as a one-person recruitment team.  He helped bring on board some very talented software engineers.  We hired more than 50 positions in the time that Paul was here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/1.jpg)"                                            
                                        class="success-story-avatar">
                                        </div>
                                        <div class="person-name">Sam Ovens</div>
                                        <div class="person-position">CEO of Beam</div>
                                        </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Thanks for your help hiring so far. You outperformed the other recruiters we were working with by a considerable margin. It's impressive. And we will be working with you again as soon as we need more engineers (which will be soon).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Ben\ Duranske.jpeg)"                                            
                                        class="success-story-avatar"></div>
                                        <div class="person-name">Ben Duranske</div>
                                        <div class="person-position">Brandes and Associates</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Paul was a huge help when we had a key gap leading recruiting. He brought in some great candidates, and we hired two technical roles he recruited for in around two months. Would definitely work with him again!.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/1.jpg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Philip Brandes</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Paul provided high quality, responsive support in recruiting for our highly specialized technical positions. Working independently, his demonstrated initiative, technical insight into position requirements, and proficiency with online and social media recruiting resources resulted in effective filtering and identification of qualified candidates.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/1.jpg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Rishabh Malviya</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Paul is one of the most  professional and committed people I have ever worked with! He helped me land a role at a leading tech startup towards the end of 2022, and I must say, it is got my 2023 of to a great start! He was thorough and refreshingly honest when it came to understanding my goals, the company's goals, and whether or not there was good alignment between the two. During the hiring process, he kept me updated every step of the way, and was always prompt in responding to questions and concerns. 10/10 would recommend!.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Sevon\ Taroian.jpeg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Sevon Taroian</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>She was awesome and fun to talk to. Straight to the point and we did not waste any time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Doug\ Lloyd.jpeg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Doug Lloyd</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Outstanding! My experience with Ghada was simply outstanding in relation to my history with recruiters. Ghada is professional and provides clear communication through the entire recruiting process. Good news, bad news, or no news she kept me apprised of where we were and if anything needed to be done. I will happily work with Ghada again and highly recommend her to anyone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Cali\ Yepiz.jpeg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Cali Yepiz</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Ghada was fantastic! She was able to get all my questions answered and made the interview and onboarding processes run smoothly! She was very responsive and wonder to work with!.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Ilona\ Haradzetskaya.jpeg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Ilona Haradzetskaya</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Working with Paul was a fantastic experience. 
                                            He was professional, responsive, and truly cared about finding the right fit for me. I appreciated his commitment to keeping me informed throughout the process and his willingness to go the extra mile to ensure that I was happy with the outcome. I would highly recommend Paul to anyone looking for a recruiter who truly puts their clients first.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/1.jpg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Benjamin Walsh</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p> had a great experience as a candidate working with Vicky, she did everything in her power to help me and keep me informed. The next time I'm hiring in for my team, I'll be sure to contact them.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/1.jpg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Kate Williamson</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>I recently turned to Forward Role in seeking a new job. Aimée Buchan was a star! From start to finish she offered me all of the support I needed, was positive and can honestly not recommend this girl enough if you are looking for a new opportunity in Digital Marketing! We got on so well and she understood exactly what I wanted straight away, made the whole process less stressful and found a friend in her along the way too. Forward Role help you get the best package and job that is right for you and won't stop until that is achieved. Aimée I cannot thank you enough!!.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/1.jpg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Gareth Hughes</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Great recruitment company. I worked with Mike to land a great opportunity at great company. I’d highly recommend them to anyone seeking a new challenge.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Alberto\ Attia.jpeg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Alberto Attia</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Paul provided fantastic support during my recruitment and hiring process, he made every step really clear, coordinated all meetings in a timely manner and provided insight and great advice.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/1.jpg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Chris Twiner</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>aul was a pleasure to work with through the recruitment process. He was quick to respond to my questions. He kept me informed all along the way. A true professional.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/jordan.jpeg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Jordan Callister</div>
                                        <div class="person-position">Sr. Product Manager of Growth @data.ai</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>You know your recruiter was an excellent one when you get hired and find that another recently hired employee had the same fantastic hiring experience you did. That’s how it was working with Paul. Paul’s personality makes him so good at what he does. He has a self-assured yet humble demeanor, he’s very bright, somehow removed the stress from the hiring process, and has a keen sense for who would be a good fit in what role. If I could work with Paul for every new job throughout my career, I would on a heartbeat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/1.jpg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Kyle Anderson</div>
                                        <div class="person-position">Product Manger – Gaming & Monetization @data.ai</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>Working with Paul was a fantastic experience. He was professional and responsive, and helped me through every step of the process. I ended up getting a great offer on a role I was excited about and I have him to thank for that.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Jeremy-Seckinger.png)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Jeremy Seckinger</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>I highly recommend Paul for his exceptional professional recruitment services. With his extensive network and expertise in the industry, Paul helped me secure a software engineering role that aligned with my career goals and aspirations. He provided valuable guidance throughout the entire recruitment process, making the entire experience seamless and stress-free.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Darya\ Rebello.jpeg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Darya Rebello</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>I had the pleasure of working with Ryan Askew during my recent job search, and I couldn't have been happier with the experience. Ryan is a true professional who also brings a very supportive approach to recruiting. He took the time to get to know me and my career goals, and provided valuable insights and guidance throughout the process.<br><br>Thanks to Ryan's hard work and dedication, I was able to land a great new role that is the perfect fit for me.<br><br>I highly recommend Ryan to anyone who is looking for a recruiter who is both professional and personable. He is an absolute pleasure to work with.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Emily\ Chartrand.png)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Emily Chartrand</div>
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>As a candidate, Paul was excellent to work with. He was clear, direct and kept me updated throughout the entire interview process. I especially appreciated that he followed up to check on how I was doing in the new role.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="listitem" class="w-dyn-item">
                                <div class="success-story-box">
                                    <div class="success-story-person">
                                        <div style="background-image:url(IMAGE/Ryan\ Wilson\ Portrait.jpg)"
                                            class="success-story-avatar"></div>
                                        <div class="person-name">Ryan Nathan Wilson</div>
                                        <!-- <div class="person-position">Senior Brand Associate</div> -->
                                        <!-- <div class="logo-success-story"><img loading="lazy"
                                                src="https://assets-global.website-files.com/610bff8bc7ae736ceea1fa8b/62e158e6e21064292ab06632_General-Mills-logo-1.webp"
                                                alt="Senior Brand Associate" class="company-logo-img" />
                                        </div> -->
                                    </div>
                                    <div class="success-story-text">
                                        <div class="success-story-paragraph w-richtext">
                                        <p>I had the pleasure of working with Paul to secure my first two positions as a software engineer, and I cannot recommend him highly enough. Paul demonstrated an exceptional ability to match my strengths and interests with appropriate roles, and his guidance and advice throughout the process were invaluable. Paul was able to deftly navigate conversations between me and prospective employers. During a competitive time in the industry, he was able to accelerate the process and secure a great offer for me. I appreciated his clear and consistent communication throughout the process, and look forward to collaborating with him for future roles.
                                        </p>
                                        </div>
                                        <!-- <div class="services-purchased-div">
                                            <div class="services-purchased margin">We helped with:</div>
                                            <div class="services-purchased dark">Recruiting</div>
                                        </div>
                                        <div class="tags">
                                            <div fs-cmsfilter-field="category" class="years-block">+7 Years</div>
                                            <div fs-cmsfilter-field="category" class="industry-block">Recruiting</div>
                                            <div fs-cmsfilter-field="international" class="international-block w-dyn-bind-empty"></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
        
                        </div>                            
                        </div>   
                </div>
            </div>
            <!-- END Filter by Years of Experience or Location -->
        </div>
    </div>
 
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
   
    <!-- START Dream jobs that became a reality -->
    <div class="section short-reviews wf-section">
        <div class="container">
            <h2 class="section-heading"><span>Dream jobs that became a reality</span></h2>
            <div data-delay="4000" data-animation="slide" class="slider-3 w-slider" data-autoplay="false"
                data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
                data-nav-spacing="3" data-duration="500" data-infinite="true">
                <div class="w-slider-mask">
                    <div class="slide-4 w-slide">
                        <div class="slide-subwrapper-t1">
                            <div class="user-picture-wrapper-t1">
                                    <img
                                    src="IMAGE/1.jpg"
                                    width="80" alt="john abraham" class="user-picture-t1" /></div>
                            <p class="quote-t1">&quot;Pingpronto really tailored my resume and highlighted my strengths. They added a lot of metrics and facts into my resume and made my achievements sound more substantial. I was offered many interviews at large corporations and eventually landed a job at Yelp!</p>
                            <div class="person-name"><strong>john abraham</strong></div>          
                            <div class="position-center">Engineering Manager</div>
                        </div>
                    </div>

                    <div class="slide-4 w-slide">
                        <div class="slide-subwrapper-t1">
                            <div class="user-picture-wrapper-t1">
                                <!-- <img
                                src="IMAGE/qutoe.png"
                                    width="30" alt="" class="quote-icon-t1" /> -->
                                    <img
                                    src="IMAGE/1.jpg"
                                    width="80" alt="john abraham" class="user-picture-t1" /></div>
                            <p class="quote-t1">&quot;The resume and LinkedIn review have been extremely helpful in guiding me in the right direction towards my job search process and networking efforts. Could never get around to using the interview prep but I’m sure it must’ve been helpful.</p>
                            <div class="person-name"><strong>john abraham</strong></div>
                            <div class="position-center">Market Development Representative Intern</div>
                            <!-- <img
                                src="https://assets-global.website-files.com/6107d4b379e3293a0c62f588/6241d29dca32d600e169224a_sap-concur-logo.webp"
                                width="60" alt="SAP Concur" class="company-logo-t1" /> -->
                        </div>
                    </div>

                    <div class="slide-4 w-slide">
                        <div class="slide-subwrapper-t1">
                            <div class="user-picture-wrapper-t1">
                                    <img
                                    src="IMAGE/1.jpg"
                                    width="80" alt="john abraham" class="user-picture-t1" /></div>
                            <p class="quote-t1">&quot;I followed Pingpronto advice about networking messages to land the interview at Toast. Then the advice on how to interview and ask proper questions helped a ton! I also used the resume rewrite and I believe my updated resume along with the other factors are 100% the reason I landed the Job at Toast!</p>
                            <div class="person-name"><strong>john abraham</strong></div>
                            <div class="position-center">Capital Operations Specialist</div>
                        </div>
                    </div>

                    <div class="slide-4 w-slide">
                        <div class="slide-subwrapper-t1">
                            <div class="user-picture-wrapper-t1">
                                <!-- <img src="IMAGE/qutoe.png" width="30" alt="" class="quote-icon-t1" /> -->
                                <img src="IMAGE/1.jpg" width="80" alt="john abraham" class="user-picture-t1" />
                            </div>
                            <p class="quote-t1">&quot;Pingpronto helped with the content on social media about how to do my resume, then I also bought the interview prep service. I felt super prepared and confident because of it. Pingpronto helped me refine my answers and make them more impactful and it was super helpful.</p>
                            <div class="person-name"><strong>john abraham</strong></div>
                            <div class="position-center">UX Researcher</div>
                        </div>
                    </div>

                    <div class="slide-4 w-slide">
                        <div class="slide-subwrapper-t1">
                            <div class="user-picture-wrapper-t1">
                                    <img src="IMAGE/1.jpg" width="80" alt="john abraham" class="user-picture-t1" />
                            </div>
                            <p class="quote-t1">&quot;Pingpronto helped me tailor my resume, by helping me find the words that best describe my previous and how they translated to my current role. They helped me tremendously with networking and talking to others.</p>
                            <div class="person-name"><strong>john abraham</strong></div>
                            <div class="position-center">Application Developer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Dream jobs that became a reality -->

    <!-- START Success Stories From Our Blog -->
    <div class="section  blog-success-stories-page  wf-section">
        <div class="container">
            <h2 class="section-heading">Success Stories From Our Blog</h2>
            <div class="success-stories-page-blog w-dyn-list">
                <div role="list" class="blog-grid-success-stories w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a data-w-id="b10276d5-bf24-dc99-370d-ec786f28ca74"
                            href="#" class="blog-post w-inline-block">
                            <div style="background-image:url(IMAGE/2.png)"
                                class="blog-post-image">
                            </div>
                            <div class="blog-box">
                                <h3 class="blog-post-title">Hired at Google: Pingpronto Services at Work</h3>
                                <p class="blog-post-description">Read about how this former military officer got hired at Google with the help of Pingpronto resume revision service. 
                                </p>
                            </div>
                            <div class="date-and-readmore">
                                <div class="date">February 02,  2022</div>    
                                <div class="blog-postl-link">
                                </div>
                            </div>
                        </a>
                    </div>


                    <div role="listitem" class="w-dyn-item"><a data-w-id="b10276d5-bf24-dc99-370d-ec786f28ca74"
                        href="#" class="blog-post w-inline-block">
                        <div style="background-image:url(IMAGE/2.png)"
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
                    <div style="background-image:url(IMAGE/2.png)"
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
            
    <!-- START See what people have written about us on LinkedIn -->
    <div class="section linkedin-stories wf-section">
        <div class="container">
            <h2 class="section-heading blue">See what people have written about us on LinkedIn </h2>
            <div class="w-dyn-list">

                <div fs-cmsload-element="list" role="list" class="linkedin-stories-grid w-dyn-items">
                    <div role="listitem" class="w-dyn-item">
                        <a href="#"
                            target="_blank" class="linkedin-story-div w-inline-block">
                            <div style="background-image:url(IMAGE/icon1.png)"
                                class="linkedin-story-company-logo">
                            </div>
                            <div class="name-linkedin-story">Cole Hayden</div>
                            <div class="offer-at">
                                <div class="offer-text">Offer</div>
                                <div class="linkedin-offer">Amazon</div>
                            </div>
                            <div data-w-id="8ce58564-58e2-a412-ecbf-a16cbae50e37" class="page-link">
                                <div>See it on their Linkedin</div>                              
                                <div class="arrow-div">
                                    <img src="#" loading="lazy" alt="" />                                       
                                </div>
                            </div>
                        </a>
                    </div>

                    <div role="listitem" class="w-dyn-item">
                        <a href="#"
                            target="_blank" class="linkedin-story-div w-inline-block">
                            <div style="background-image:url(IMAGE/icon1.png)"
                                class="linkedin-story-company-logo">
                            </div>
                            <div class="name-linkedin-story">Cole Hayden</div>
                            <div class="offer-at">
                                <div class="offer-text">Offer</div>
                                <div class="linkedin-offer">Amazon</div>
                            </div>
                            <div data-w-id="8ce58564-58e2-a412-ecbf-a16cbae50e37" class="page-link">
                                <div>See it on their Linkedin</div>                              
                                <div class="arrow-div">
                                    <img src="#" loading="lazy" alt="" />                                       
                                </div>
                            </div>
                        </a>
                    </div>

                    <div role="listitem" class="w-dyn-item">
                        <a href="#"
                            target="_blank" class="linkedin-story-div w-inline-block">
                            <div style="background-image:url(IMAGE/icon1.png)"
                                class="linkedin-story-company-logo">
                            </div>
                            <div class="name-linkedin-story">Cole Hayden</div>
                            <div class="offer-at">
                                <div class="offer-text">Offer</div>
                                <div class="linkedin-offer">Amazon</div>
                            </div>
                            <div data-w-id="8ce58564-58e2-a412-ecbf-a16cbae50e37" class="page-link">
                                <div>See it on their Linkedin</div>                              
                                <div class="arrow-div">
                                    <img src="#" loading="lazy" alt="" />                                       
                                </div>
                            </div>
                        </a>
                    </div>

                    <div role="listitem" class="w-dyn-item">
                        <a href="#"
                            target="_blank" class="linkedin-story-div w-inline-block">
                            <div style="background-image:url(IMAGE/icon1.png)"
                                class="linkedin-story-company-logo">
                            </div>
                            <div class="name-linkedin-story">Cole Hayden</div>
                            <div class="offer-at">
                                <div class="offer-text">Offer</div>
                                <div class="linkedin-offer">Amazon</div>
                            </div>
                            <div data-w-id="8ce58564-58e2-a412-ecbf-a16cbae50e37" class="page-link">
                                <div>See it on their Linkedin</div>                              
                                <div class="arrow-div">
                                    <img src="#" loading="lazy" alt="" />                                       
                                </div>
                            </div>
                        </a>
                    </div>

                    <div role="listitem" class="w-dyn-item">
                        <a href="#"
                            target="_blank" class="linkedin-story-div w-inline-block">
                            <div style="background-image:url(IMAGE/icon1.png)"
                                class="linkedin-story-company-logo">
                            </div>
                            <div class="name-linkedin-story">Cole Hayden</div>
                            <div class="offer-at">
                                <div class="offer-text">Offer</div>
                                <div class="linkedin-offer">Amazon</div>
                            </div>
                            <div data-w-id="8ce58564-58e2-a412-ecbf-a16cbae50e37" class="page-link">
                                <div>See it on their Linkedin</div>                              
                                <div class="arrow-div">
                                    <img src="#" loading="lazy" alt="" />                                       
                                </div>
                            </div>
                        </a>
                    </div>

                    <div role="listitem" class="w-dyn-item">
                        <a href="#"
                            target="_blank" class="linkedin-story-div w-inline-block">
                            <div style="background-image:url(IMAGE/icon1.png)"
                                class="linkedin-story-company-logo">
                            </div>
                            <div class="name-linkedin-story">Cole Hayden</div>
                            <div class="offer-at">
                                <div class="offer-text">Offer</div>
                                <div class="linkedin-offer">Amazon</div>
                            </div>
                            <div data-w-id="8ce58564-58e2-a412-ecbf-a16cbae50e37" class="page-link">
                                <div>See it on their Linkedin</div>                              
                                <div class="arrow-div">
                                    <img src="#" loading="lazy" alt="" />                                       
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
    </div>

    <!-- START TAB --> 
    <div class="section wf-section">
        <div class="container">
            <div class="cta-box">
                <h2 class="cta-heading">Ready to make your dream job a <span class="">reality</span>?</h2>
                <p class="paragraph center">Get personal  attention with each of our services, or join a community of  learners in our online courses.</p>     
                <div class="buttons-box">
                    <a href="#" class="button cta w-button">See our Services</a>      
                    <a href="#" class="button cta w-button">Visit Pingpronto</a>
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