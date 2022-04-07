<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>About CodeWills- Leading Software Development Company</title>
  <!-- SEO Meta Tags-->
  <?php include('metatags.php');?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="title" content="About CodeWills- Leading Software Development Company">
  <meta name="description"
    content="We are a leading software development company providing top-notch web and mobile application development services to businesses all over the world.">
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

    .page-loading.active>.page-loading-inner {
      opacity: 1;
    }

    .page-loading-inner>span {
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

    .awards {
      width: 12rem;
    }

    .bannerright {
      background-size: cover;
      background-position: right;
    }

    .bannerleft {
      background-size: cover;
      background-position: left;
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




  </script>
  <!-- Vendor Styles-->
  <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css" async />
  <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css" />
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
    <!-- Intro-->
    <section class="container my-lg-2 pt-5 pb-lg-7">
      <div class="row align-items-center">
        <div class="col-lg-5 py-3 py-lg-0">
          <h1>Innovative Software Solutions for your Business </h1>
          <!-- <h2 class="h3">How we help other companies to grow.</h2> -->
          <div class="py-4">
            <p class="callout">We are a custom software development company providing top-notch web and mobile
              application development services to businesses all over the world.
            </p>
          </div>
          <!-- <a class="btn-video btn-video-primary btn-video-sm me-3" href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a>
            <span class="fs-sm text-muted">Get to know us better</span> -->
        </div>
        <div class="col-xl-6 col-lg-7 offset-xl-1 position-relative">
          <div class="py-5" style="min-height: 543px;">
            <div class="d-none d-lg-block position-absolute bg-no-repeat bg-position-center h-100"
              style="top: 0; left: -45px; width: 646px; background-image: url(img/pages/about/bg-shape.svg);"></div>
            <div class="row g-0 mx-n2 pt-lg-4">
              <div class="col-sm-4 px-2 mb-3"><a
                  class="card h-100 card-body py-5 justify-content-center border-0 shadow-lg text-center" href="#"><i
                    class="ai-zap text-primary h1 mb-3"></i>
                  <h3 class="h5 mb-0">Boost</h3>
                </a></div>
              <div class="col-sm-4 px-2 mb-3"><a class="card card-body py-5 border-0 shadow-lg text-center mb-3"
                  href="#"><i class="ai-pie-chart text-danger h1 mb-3"></i>
                  <h3 class="h5 mb-0">Analyze</h3>
                </a><a class="card card-body py-5 border-0 shadow-lg text-center" href="#"><i
                    class="ai-refresh-ccw text-info h1 mb-3"></i>
                  <h3 class="h5 mb-0">Automate</h3>
                </a></div>
              <div class="col-sm-4 px-2 mb-3"><a class="card card-body py-5 border-0 shadow-lg text-center mb-3"
                  href="#"><i class="ai-folder-plus text-success h1 mb-3"></i>
                  <h3 class="h5 mb-0">Create</h3>
                </a><a class="card card-body py-5 border-0 shadow-lg text-center" href="#"><i
                    class="ai-share text-warning h1 mb-3"></i>
                  <h3 class="h5 mb-0">Share</h3>
                </a></div>
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
              </span>
              <h2 class="h1 text-left my-4">About <span
                  class="bg-faded-primary text-primary rounded px-3 py-2">Codewills</span></h2>
            </h2>
          </div>
          <div class="col-xl-5 col-lg-6 col-md-7 text-center text-md-start">
            <p>CodeWills being an HashRoot group of company has a long history of more than 12+ years in offering
              reliable and quality IT services to clients all over the world. Being an industry leader, we are committed
              to providing simple and affordable software services to our customers, thereby setting a standard for
              others to follow. Our team of designers and software professionals has got the right set of skills and
              creativity needed to build truly outstanding solutions that take user experience to the next level. </p>
          </div>
        </div>
      </div>
    </section>
    <section class="container py-5 py-md-6 py-lg-7 my-3">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-5 text-center text-md-start mb-5 mb-md-0">
          <h2 class="h1 text-left mb-4">What Drives Us <span
              class="bg-faded-primary text-primary rounded px-3 py-2 mt-4">Ahead ? </span></h2>
          <!-- <h2 class="mb-3">What Drives Us Ahead?   </h2> -->
          <p class="text-muted mb-4 pb-2">We make use of the latest technologies and platforms to build reliable and
            high-quality software applications that help our clients to reach their goals and objectives.
          </p><a class="btn btn-primary" href="#">See all services</a>
        </div>
        <div class="col-lg-8 col-md-7 bg-position-center bg-repeat-0"
          style="background-image: url(img/demo/business-consulting/services/bg-shape.svg);">
          <div class="mx-auto" style="max-width: 610px;">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img
                    class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/01.svg" alt="Icon"
                    width="100">
                  <h3 class="h5 mb-2">Commitment</h3>
                  <p class="fs-sm">We are always committed to delivering top-notch software solutions and services to
                    our clients across the globe. We won’t compromise on quality.
                  </p>
                </div>
                <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img
                    class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/02.svg" alt="Icon"
                    width="100">
                  <h3 class="h5 mb-2">Growth-Centric
                  </h3>
                  <p class="fs-sm">We believe that growth is the only way to stay relevant in this highly competitive
                    world
                  </p>
                </div>
                <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img
                    class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/03.svg" alt="Icon"
                    width="100">
                  <h3 class="h5 mb-2">Adaptable </h3>
                  <p class="fs-sm">We are always in search of the latest technologies that can make work easier at the
                    same time improve efficiency.
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img
                    class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/04.svg" alt="Icon"
                    width="100">
                  <h3 class="h5 mb-2">Respect </h3>
                  <p class="fs-sm">All our colleagues have immense respect for each other and work as a team to achieve
                    success for the organization.
                  </p>
                </div>
                <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img
                    class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/05.svg" alt="Icon"
                    width="100">
                  <h3 class="h5 mb-2">Integrity</h3>
                  <p class="fs-sm"> We consistently uphold the highest ethical standards and surrounds ourselves with
                    people who value integrity
                  </p>
                </div>
                <div class="bg-light shadow-lg rounded-3 p-4 mb-grid-gutter text-center text-sm-start"><img
                    class="d-inline-block mb-4 mt-2" src="img/demo/business-consulting/services/05.svg" alt="Icon"
                    width="100">
                  <h3 class="h5 mb-2">Continuous Improvement</h3>
                  <p class="fs-sm">We always look to improve the way we do service. We encourage each other and work
                    hard to achieve success.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
      <h2 class="h1 text-center mb-4">Our Mission and <span
          class="bg-faded-primary text-primary rounded px-3 py-2">Values</span></h2>

      <!-- <h2 class="mb-5 text-center">Our Mission and Values</h2> -->
      <p class="text-center">We have built a global reputation for our ability to help customers to achieve their
        business
        objectives by providing innovative, best in class IT Outsourcing, Technology, Solutions, and
        Consulting based products and services.</p>
      <div class="row pt-5">
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                class="ai-eye h2 text-primary mt-2 mb-4"></i>
              <h3 class="h5">Vision</h3>
              <p class="fs-sm text-body">Our business is about delivering customer friendly solutions driven by value,
                service and integrity to meet the clients' needs, on time.</p>
            </div>
          </a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                class="ai-crosshair h2 text-primary mt-2 mb-4"></i>
              <h3 class="h5">Mission</h3>
              <p class="fs-sm text-body">We make technology easy, manageable, and affordable by offering a complete
                computing solution with complete support and accountability. Our goal is to help you succeed, reduce
                costs and make the most of your technology investment.</p>
            </div>
          </a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter">
          <a class="card h-100 border-0 shadow card-hover" href="#">
            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                class="ai-user-plus h2 text-primary mt-2 mb-4"></i>
              <h3 class="h5">Values</h3>
              <p class="fs-sm text-body">We always uphold our values of Integrity, Commitment, Confidentiality,
                Professionalism and Dedication.</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- awards -->

    <section class="bg-secondary">
      <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
        <h2 class="h1 text-center mb-4">Awards & <span
            class="bg-faded-primary text-primary rounded px-3 py-2">Achievements</span></h2>

        <!-- <h2 class="mb-5 text-center">Awards &amp; Achievements</h2> -->
        <p class="text-center">HashRoot is a synonym to credibility and then brings in more and more recognitions to us.
          Every business concern earns to gain recognition for its outstanding achievements and innovative services or
          products in order to distinguish themselves from competitors.</p>
        <div class="row pt-5">
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/bizzaward.webp" alt="">
                <h3 class="h5">THE BIZZ AWARDS 2019</h3>
                <p class="fs-sm text-body">HashRoot joined the elite group of companies that have consistently
                  demonstrated business excellence.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/crown commercial.webp" alt="">
                <h3 class="h5">CROWN COMMERCIAL SERVICE SUPPLIER</h3>
                <p class="fs-sm text-body">HashRoot is now an approved G-Cloud 12 supplier by the Crown Commercial
                  Service (CCS)</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/consultants.webp" alt="">
                <h3 class="h5">CONSULTANT OF THE YEAR
                  2015</h3>
                <p class="fs-sm text-body">Awarded as the Consultant of the Year 2015 by Consultant Review Magazine in
                  the domain Infrastructure Management Service.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/vmware.webp" alt="">
                <h3 class="h5">MOST PROMISING VMWARE SOLUTION PROVIDER</h3>
                <p class="fs-sm text-body">Listed in the 25 Most promising VMware Service Providers by APAC CIO Outlook
                  Magazine, published from Silicon Valley, USA</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/internationalcrown.webp" alt="">
                <h3 class="h5">INTERNATIONAL QUALITY CROWN AWARD</h3>
                <p class="fs-sm text-body">HashRoot has been awarded the "International Quality Crown Award (IQC)" in
                  category GOLD by 27th International IQC Convention at London, United Kingdom</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/50cool startups.webp" alt="">
                <h3 class="h5">50 COOL STARTUPS</h3>
                <p class="fs-sm text-body">HashRoot has been identified in the "50 cool startups of the year" by
                  Siliconindia. Better work-life balance, pay scale &amp; benefits, development opportunities are some
                  of
                  the factors that were considered while preparing the list.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/citizen integration peace.webp" alt="">
                <h3 class="h5">INTERNATIONAL GOLD STAR MILLENNIUM AWARD</h3>
                <p class="fs-sm text-body">For Excellence in Promoting Global Integration and Economic Development by
                  Mr. Korn Dabbaransi, Former Dy. PM of Thailand, at the International Conference on "Indo-Thai
                  Friendship and Economic Co-operation" on 18th January 2015, Bangkok, Thailand.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/indianeconomic.webp" alt="">
                <h3 class="h5">FASTEST GROWING INDIAN COMPANY EXCELLENCE AWARD</h3>
                <p class="fs-sm text-body">Awarded By Indian Economic Development and Research Association (IEDRA) on
                  the occasion of National Seminar on "Outstanding contribution to National Development" on Friday 29th
                  August 2014 at New Delhi.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover" href="#">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/international achiever conference.png" alt="">
                <h3 class="h5">GLOBAL ACHIEVERS AWARD FOR BUSINESS EXCELLENCE</h3>
                <p class="fs-sm text-body">Global achievers award for business excellence by International Achievers
                  Summit for outstanding achievements at the 6th International Achievers summit on Global Corporate
                  Achievements and social responsibilities at Bangkok, Thailand.</p>
              </div>
            </a></div>
        </div>
      </div>
    </section>
    <section class="row g-0 ">
      <div class="col-md-6 bg-size-cover py-7 bannerright"
        style="background-image: url(img/aboutus/our-capabilities.jpg);">
        <div class="py-6"></div>
      </div>
      <div class="col-md-6 border-top border-bottom px-3 pe-xl-0 ps-lg-5 ps-xl-7">
        <div class="ms-sm-4 my-md-5 py-5 my-sm-0 py-sm-6 py-md-7" style="max-width: 495px;">
          <h2 class="mb-4">Our Capabilities</h2>
          <p class="mb-5">Help customers among the world corporate leaders with create new opportunities
            and confront the most strategic challenges in a global perspective. We bring in front
            you with a global perspective for the clients; lay out with strategic services that would
            be through our expertise across the client life cycle.
          </p>

        </div>
      </div>
    </section>
    <section class="row g-0 ">
      <div class="col-md-6 border-top border-bottom px-3 pe-xl-0 ps-lg-5 ps-xl-7 order-2 order-md-1">
        <div class="ms-sm-4 my-md-5 py-5 my-sm-0 py-sm-6 py-md-7" style="max-width: 495px;">
          <h2 class="mb-4">Our Difference
          </h2>
          <p class="mb-5">Build with expert team to drive innovative ideas with the innovative technical experts
            with sound business outlook and up to date knowledge of today's dynamically
            evolving IT Market.
          </p>

        </div>
      </div>
      <div class="col-md-6 bg-size-cover py-7 bannerleft order-1 order-md-2"
        style="background-image: url(img/aboutus/our-difference.jpg);">
        <div class="py-6"></div>
      </div>

    </section>
    <section class="row g-0 ">
      <div class="col-md-6 bg-size-cover py-7 bannerright"
        style="background-image: url(img/aboutus/Life@codewills.jpg);">
        <div class="py-6"></div>
      </div>
      <div class="col-md-6 border-top border-bottom px-3 pe-xl-0 ps-lg-5 ps-xl-7">
        <div class="ms-sm-4 my-md-5 py-5 my-sm-0 py-sm-6 py-md-7" style="max-width: 495px;">
          <h2 class="mb-4">Life @ CodeWills
          </h2>
          <p class="mb-5">We give emphasis primarily on corporate governance, this leads to an effective
            decision-making process wherein we make most of our employees participate in
            decision-making processes, nerveless forget that what we are today is the thrive of
            our employees.


          </p>

        </div>
      </div>
    </section>
    <section class="row g-0 ">
      <div class="col-md-6 border-top border-bottom px-3 pe-xl-0 ps-lg-5 ps-xl-7 order-2 order-md-1">
        <div class="ms-sm-4 my-md-5 py-5 my-sm-0 py-sm-6 py-md-7" style="max-width: 495px;">
          <h2 class="mb-4">Our Culture

          </h2>
          <p class="mb-5">A successful Manager has a frantic challenge of getting the best out of his workforce
            irrespective of any critical situation. He can do so only by keeping them motivated. A
            motivated workforce is an assurance of quality performance delivered.

          </p>

        </div>
      </div>
      <div class="col-md-6 bg-size-cover py-7 bannerright order-1 order-md-2"
        style="background-image: url(img/aboutus/culture.jpg);">
        <div class="py-6"></div>
      </div>

    </section>



    <!-- ctasection -->
    <?php  include("./callRequest.php"); ?>

    <!-- form -->
    <?php  include("./enquiry.php"); ?>

  </main>
  <!-- Footer-->
  <?php include("footer.php"); ?>
  <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span
      class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">
    </i></a>
  <!-- Vendor scrits: js libraries and plugins-->
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="vendor/jarallax/dist/jarallax.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
  <script src="vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
  <script src="vendor/lg-zoom.js/dist/lg-zoom.min.js"></script>
  <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="vendor/shufflejs/dist/shuffle.min.js"></script>
  <script src="vendor/flatpickr/dist/flatpickr.min.js"></script>
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/enquire-form.js"></script>

  <script>
    $(".hovercards").hover(function () {
      $(".hovercardschild").children().css("display", "none")
      var valueparent = $(this).attr('data-hover')
      var valuechild = $(".hovercards" + valueparent)
      valuechild.css("display", "block")

    })
  </script>

</body>

</html>