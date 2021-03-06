<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Careers - Join Our Team of Professionals | CodeWills</title>
    <!-- SEO Meta Tags-->
    <?php include('metatags.php');?>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="Careers - Join Our Team of Professionals | CodeWills">
    <meta name="description" content="Are you passionate about software development? Then, Join our team of professionals who use the latest technologies to create software solutions that stand out.">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #737491;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #766df4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js " async></script>
    <script>
        (function () {
          window.onload = function () {
            var preloader = document.querySelector('.page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
              preloader.remove();
            }, 2000);
          };
        })();
     
          $(function() {
              $("#header").load("header.php");
              $("#signinmodal").load("signinmodal.php");
              $("#footer").load("footer.php");
          });
  
        
      </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css" async/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    
    <link rel="stylesheet" media="screen" href="../ css/theme.min.css" async>
</head>
  <!-- Body-->
  <body>
    <!-- Page loading spinner-->
    <!-- <div class="page-loading active d-none">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div> -->
    <main class="page-wrapper">
      <!-- Sign In Modal-->
      <?php include("signinmodal.php"); ?>
      <?php include("header.php"); ?>
      <!-- Page content-->
      <!-- Hero-->
      <section class="position-relative bg-faded-primary pt-7 pb-5 pb-md-6 pb-lg-7 overflow-hidden">
        <div class="shape shape-bottom shape-curve bg-body">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
          </svg>
        </div>
        <div class="container pt-4 pt-md-5 pt-lg-0">
          <div class="row align-items-center">
            <div class="col-lg-4 text-center text-lg-start">
              <h1 class="mb-3">Join Our Team of Professionals!  </h1>
              <p class="fs-lg text-muted mb-4">Grow your career by working with a group of talented professionals who use the latest technologies to create software solutions that stand out. 
            </p>
         <div class="btn btn-success btn-lg">Current Openings</div>
            </div>
            <div class="col-xl-7 col-lg-8 offset-xl-1 pt-lg-3">
              <div class="tns-carousel-wrapper bg-size-cover mx-auto pt-6 pb-2" style="max-width: 705px; background-image: url(img/demo/software-landing/slider/shape.png);">
                <div class="position-relative">
                  <div class="frame-browser-label">
                    <div class="tns-carousel-label"><i class="ai-calendar"></i><span>Team Scheduling</span></div>
                  </div>
                  <div class="frame-browser-body">
                    <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;controls&quot;: false, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 6000}">
                      <div data-carousel-label="&lt;i class=&quot;ai-calendar&quot;&gt;&lt;/i&gt;&lt;span&gt;Team Scheduling&lt;/span&gt;"><img class="rounded" src="img/demo/software-landing/slider/slide01.png" alt="Screenshot"></div>
                      <div data-carousel-label="&lt;i class=&quot;ai-user&quot;&gt;&lt;/i&gt;&lt;span&gt;Account Management&lt;/span&gt;"><img class="rounded" src="img/demo/software-landing/slider/slide02.png" alt="Screenshot"></div>
                      <div data-carousel-label="&lt;i class=&quot;ai-mail&quot;&gt;&lt;/i&gt;&lt;span&gt;Built-in Messages&lt;/span&gt;"><img class="rounded" src="img/demo/software-landing/slider/slide03.png" alt="Screenshot"></div>
                    </div>
                  </div>
                </div>
                <div class="tns-carousel-pager pt-4 text-nowrap text-center mt-4">
                  <button class="active" data-nav data-goto="1"></button>
                  <button data-nav data-goto="2"></button>
                  <button data-nav data-goto="3"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features section #1-->
      <section class="container py-5 py-md-6 py-lg-7">
        <h2 class="text-center">Let???s Work Together!
        </h2>
        <p class="text-center text-muted mb-5">We respect our team members, provide flexible working hours and help them learn new skills to make them shape their future.
        </p>
        <div class="row pt-2">
          <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" src="img/demo/software-landing/icons/01.svg" alt="Simple" width="56">
              <h3 class="h5">Work Culture 
            </h3>
              <p class="fs-sm mb-0">We are committed to supporting each other and focus on growing together as a single team.
            </p>
            </div>
          </div>
          <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" src="img/demo/software-landing/icons/02.svg" alt="Fast" width="56">
              <h3 class="h5">Benefits </h3>
              <p class="fs-sm mb-0">We prioritize the well-being of our employees and keep them happy by providing various perks and benefits.
            </p>
            </div>
          </div>
          <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" src="img/demo/software-landing/icons/03.svg" alt="Organized" width="67">
              <h3 class="h5">Opportunities </h3>
              <p class="fs-sm mb-0">Our employees get ample opportunities to work with clients of all industry verticals.
              </p>
            </div>
          </div>
          <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" src="img/demo/software-landing/icons/01.svg" alt="Simple" width="56">
              <h3 class="h5">Work-Life Balance               </h3>
              <p class="fs-sm mb-0">Our flexible and friendly work culture allows employees to balance their personal and professional life without challenges. 
              </p>
            </div>
          </div>
          <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" src="img/demo/software-landing/icons/02.svg" alt="Fast" width="56">
              <h3 class="h5">Rewards & Recognition
              </h3>
              <p class="fs-sm mb-0"> We appreciate and reward employees who show exemplary performance in their work. 
              </p>
            </div>
          </div>
          <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" src="img/demo/software-landing/icons/03.svg" alt="Organized" width="67">
              <h3 class="h5">Great Team
              </h3>
              <p class="fs-sm mb-0">We have a great team of software professionals who create innovative and unique software solutions.
              </p>
            </div>
          </div>
        </div>
      </section>
    
    
 
 
    
      <!-- CTA-->
      <section class="bg-gradient py-5">
        <div class="container py-2 py-sm-4">
          <div class="row align-items-center">
            <div class="col-xl-6 col-md-7 mb-5 mb-md-0">
              <h2 class="text-light text-center text-md-start">Want to accelerate your career journey with us?
              </h2>
              <p class="text-light mb-grid-gutter text-center text-md-start d-none">Everything you need from A to Z</p>
            <button class="btn btn-lg btn-success">View All Jobs</button>
            </div>
            <div class="col-md-5 offset-xl-1"><img class="d-block mx-auto" src="img/demo/software-landing/cta-illustration.svg" alt="Illustration" width="437"></div>
          </div>
        </div>
      </section>
      <!-- form -->
      <?php  include("./enquiry.php"); ?>
    </main>
    <!-- Footer-->
<?php include("footer.php"); ?>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="vendor/lg-video.js/dist/lg-video.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="vendor/simplebar/dist/simplebar.min.js"></script>
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  </body>
</html>