<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>About CodeWills- Leading Software Development Company</title>
    <!-- SEO Meta Tags-->
    
    <meta name="title" content="About CodeWills- Leading Software Development Company">
    <meta name="description" content="We are a leading software development company providing top-notch web and mobile application development services to businesses all over the world.">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    
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
      .invalid-feedback1 {
       display: none;
       width: 100%;
       margin-top: 0.375rem;
       font-size: 0.75rem;
       color: #f74f78;
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
    <script src="//code.jquery.com/jquery-1.11.1.min.js "></script>
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
   
        

      
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
  <!-- Body-->
  <body>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Sign In Modal-->
      <?php include("signinmodal.php"); ?>
      <?php include("header.php"); ?>
      <!-- Page content-->
      <!-- Intro-->
      <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
          <div class="col-lg-5 py-3 py-lg-0">
            <h1>Innovative Software Solutions for your Business            </h1>
            <!-- <h2 class="h3">How we help other companies to grow.</h2> -->
            <div class="py-4">
              <p class="callout">We are a custom software development company providing top-notch web and mobile application development services to businesses all over the world. 
              </p>
            </div>
            <!-- <a class="btn-video btn-video-primary btn-video-sm me-3" href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a>
            <span class="fs-sm text-muted">Get to know us better</span> -->
          </div>
          <div class="col-xl-6 col-lg-7 offset-xl-1 position-relative">
            <div class="py-5" style="min-height: 543px;">
              <div class="d-none d-lg-block position-absolute bg-no-repeat bg-position-center h-100" style="top: 0; left: -45px; width: 646px; background-image: url(img/pages/about/bg-shape.svg);"></div>
              <div class="row g-0 mx-n2 pt-lg-4">
                <div class="col-sm-4 px-2 mb-3"><a class="card h-100 card-body py-5 justify-content-center border-0 shadow-lg text-center" href="#"><i class="ai-zap text-primary h1 mb-3"></i>
                    <h3 class="h5 mb-0">Boost</h3></a></div>
                <div class="col-sm-4 px-2 mb-3"><a class="card card-body py-5 border-0 shadow-lg text-center mb-3" href="#"><i class="ai-pie-chart text-danger h1 mb-3"></i>
                    <h3 class="h5 mb-0">Analyze</h3></a><a class="card card-body py-5 border-0 shadow-lg text-center" href="#"><i class="ai-refresh-ccw text-info h1 mb-3"></i>
                    <h3 class="h5 mb-0">Automate</h3></a></div>
                <div class="col-sm-4 px-2 mb-3"><a class="card card-body py-5 border-0 shadow-lg text-center mb-3" href="#"><i class="ai-folder-plus text-success h1 mb-3"></i>
                    <h3 class="h5 mb-0">Create</h3></a><a class="card card-body py-5 border-0 shadow-lg text-center" href="#"><i class="ai-share text-warning h1 mb-3"></i>
                    <h3 class="h5 mb-0">Share</h3></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container position-relative zindex-5">
        <div class="bg-light rounded-3 shadow py-5 py-md-6 px-4 px-md-0">
          <div class="row align-items-center py-3 py-md-0">
            <div class="col-xl-6 col-lg-5 col-md-4 text-center">
              <h2 class="pb-3 pb-md-0"><span class="d-block text-body opacity-25">Something 
              </span>About Codewills </h2>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-7 text-center text-md-start">
              <p>CodeWills being an HashRoot group of company has a long history of more than 12+ years in offering reliable and quality IT services to clients all over the world. Being an industry leader, we are committed to providing simple and affordable software services to our customers, thereby setting a standard for others to follow. Our team of designers and software professionals has got the right set of skills and creativity needed to build truly outstanding solutions that take user experience to the next level. </p>
            </div>
          </div>
        </div>
      </section>
      <section class="container py-5 py-md-6 py-lg-7 my-3">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-5 text-center text-md-start mb-5 mb-md-0">
            <h2 class="mb-3">What Drives Us Ahead?   </h2>
            <p class="text-muted mb-4 pb-2">We make use of the latest technologies and platforms to build reliable and high-quality software applications that help our clients to reach their goals and objectives.
            </p><a class="btn btn-primary" href="#">See all services</a>
          </div>
          <div class="col-lg-8 col-md-7 bg-position-center bg-repeat-0" style="background-image: url(img/demo/business-consulting/services/bg-shape.svg);">
            <div class="mx-auto" style="max-width: 610px;">
              <div class="row align-items-center">
                <div class="col-sm-6">
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/01.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Commitment</h3>
                    <p class="fs-sm">We are always committed to delivering top-notch software solutions and services to our clients across the globe. We won’t compromise on quality. 
                    </p>
                  </div>
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/02.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Growth-Centric 
                    </h3>
                    <p class="fs-sm">We believe that growth is the only way to stay relevant in this highly competitive world
                    </p>
                  </div>
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/03.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Adaptable </h3>
                    <p class="fs-sm">We are always in search of the latest technologies that can make work easier at the same time improve efficiency. 
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/04.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Respect </h3>
                    <p class="fs-sm">All our colleagues have immense respect for each other and work as a team to achieve success for the organization. 
                    </p>
                  </div>
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/05.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Integrity</h3>
                    <p class="fs-sm"> We consistently uphold the highest ethical standards and surrounds ourselves with people who value integrity
                    </p>
                  </div>
                  <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/05.svg" alt="Icon" width="100">
                    <h3 class="h5 mb-2">Continuous Improvement</h3>
                    <p class="fs-sm">We always look to improve the way we do service. We encourage each other and work hard to achieve success.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- vision and mission -->
      <section class="container position-relative zindex-5 py-4 d-none">
        <h2 class="text-center pt-md-0 mb-5">Vision & Mission</h2>
        <div class="row">
          <div class="col-sm-6 mb-grid-gutter">
            <div class="bg-light shadow rounded-3 py-5 px-4">
              <div class="d-block d-xl-flex align-items-center px-lg-3 py-xl-2 text-center text-sm-start"><img class="d-inline-block mb-3 mb-xl-0" src="img/demo/software-landing/team.png" alt="Team" width="140">
                <div class="ps-xl-3 ms-xl-3">
                  <h3 class="h4 text-primary pb-1">Vision</h3>
                  <p>By providing best-in-class software services we aim to improve our current position in the market and set a standard for others to follow. Having deep technical expertise, we are committed to ensuring the quality of the service we provide to our clients. We would like ourselves to be known as the market leaders when it comes to providing quality software services at an affordable price.</p>

                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-grid-gutter">
            <div class="bg-light shadow rounded-3 py-5 px-4">
              <div class="d-block d-xl-flex align-items-center px-lg-3 py-xl-2 text-center text-sm-start"><img class="d-inline-block mb-3 mb-xl-0" src="img/demo/software-landing/freelancer.png" alt="Freelancer" width="140">
                <div class="ps-xl-3 ms-xl-3">
                  <h3 class="h4 text-primary pb-1">Mission</h3>
                  <p>In this digital era, our mission is to provide simple and affordable software services to our customers across the globe. We make use of the latest technologies and platforms to build reliable and high-quality software applications that help our clients to reach their goals and objectives.

                  </p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- corevalues -->
      <section class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
        <h2 class="mb-5 text-center">Core Values</h2>
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i class="ai-user-check h2 text-primary mt-2 mb-4"></i>
                <h3 class="h5">Managing account</h3>
                <p class="fs-sm text-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.</p>
                <div class="btn btn-translucent-primary btn-sm mb-2">Learn more</div>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i class="ai-settings h2 text-primary mt-2 mb-4"></i>
                <h3 class="h5">Managing account</h3>
                <p class="fs-sm text-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.</p>
                <div class="btn btn-translucent-primary btn-sm mb-2">Learn more</div>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i class="ai-credit-card h2 text-primary mt-2 mb-4"></i>
                <h3 class="h5">Payment options</h3>
                <p class="fs-sm text-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.</p>
                <div class="btn btn-translucent-primary btn-sm mb-2">Learn more</div>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i class="ai-truck h2 text-primary mt-2 mb-4"></i>
                <h3 class="h5">Delivery information</h3>
                <p class="fs-sm text-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.</p>
                <div class="btn btn-translucent-primary btn-sm mb-2">Learn more</div>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i class="ai-refresh-cw h2 text-primary mt-2 mb-4"></i>
                <h3 class="h5">Refund policy</h3>
                <p class="fs-sm text-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.</p>
                <div class="btn btn-translucent-primary btn-sm mb-2">Learn more</div>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i class="ai-share-2 h2 text-primary mt-2 mb-4"></i>
                <h3 class="h5">Affiliate program</h3>
                <p class="fs-sm text-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.</p>
                <div class="btn btn-translucent-primary btn-sm mb-2">Learn more</div>
              </div></a></div>
        </div>
      </section>
          <!-- ctasection -->
          <?php  include("./callRequest.php"); ?>

<!-- form -->
<?php  include("./enquiry.php"); ?>

    </main>
    <!-- Footer-->
  <?php include("footer.php"); ?>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="vendor/lg-video.js/dist/lg-video.min.js"></script>
    <script src="js/jquery.validate.js"></script>
  <script src="js/enquire-form.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>