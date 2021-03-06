<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Website Development Company | Codewills by HashRoot</title>

  <!-- SEO Meta Tags-->
  <?php include('metatags.php');?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="title" content="Website Development Company | Codewills by HashRoot">
  <meta name="description"
    content="Codewills is the leading custom website development company that provides the best services for web designing, development and digital marketing. Contact us">
  <meta name="keywords" content="Website Development Company">
  <!-- Viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon and Touch Icons-->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

  <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
  <meta name="msapplication-TileColor" content="#766df4">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" media="screen" href=" css/theme.min.css" async>
  <!-- <link href="http://fonts.cdnfonts.com/css/proxima-nova-2" rel="stylesheet"> -->

  <!-- Page loading styles-->
  <style>
    .bg-gradient-home-slider {
      background: linear-gradient(to right,
          #5654ff 0%,
          #924cef 30%,
          #ff7777 100%);
    }

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

    .grayfilter {
      filter: grayscale(1) opacity(.6);
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

    .hovercards:hover>a>h3 {
      color: #5654ff !important;
    }

    .hovercards:hover>a>img {
      filter: brightness(.5);
    }

    li>span {
      white-space: pre-wrap;
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
        }, 500);
      };
    })();




  </script>
  <!-- Vendor Styles-->

  <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css" />
  <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css" />
  <link rel="stylesheet" media="screen" href="vendor/flatpickr/dist/flatpickr.min.css" />
  <!-- Main Theme Styles + Bootstrap-->

  <link rel="stylesheet" media="screen" href="../ css/theme.min.css" async>
</head>
<!-- Body-->
<meta name="msvalidate.01" content="75F9631765ED7C9413E161B8BBCB5BE4" />

<body>
  <!-- Page loading spinner-->
  <!-- <div class="page-loading active d-none">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span>Loading...</span>
    </div>
  </div> -->
  <main class="page-wrapper">

    <?php include("header.php"); ?>
    <!-- Enquirenow Modal -->


    <!-- Page content-->
    <!-- Hero - Featured Products (tabs)-->
    <section class="position-relative bg-gradient-home-slider pt-5 pt-lg-6 pb-4 pb-lg-5">
      <div class="shape shape-bottom  bg-body">
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
          <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
          </path>
        </svg>
      </div>
      <!-- Tabs-->
      <div class="container">
        <div class="row align-items-center pb-7">
          <div class="col-lg-3">
            <ul
              class="nav nav-tabs media-tabs media-tabs-light justify-content-center justify-content-lg-start pb-3 mb-4 pb-lg-0 mb-lg-0"
              role="tablist">
              <li class="w-100 nav-item me-3 mb-3"><a class="nav-link active" href="#uides" data-bs-toggle="tab"
                  role="tab">
                  <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded"
                      src="img/homepage/slider/best-website-development-company.webp"
                      alt="best website development company" width="60">
                    <div class="w-100 ps-2 ms-1">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="fs-sm pe-1">Design</div><i class="ai-chevron-right lead ms-2 me-1"></i>
                      </div>
                    </div>
                  </div>
                </a></li>
              <li class="w-100 nav-item me-3 mb-3"><a class="nav-link" href="#webdev" data-bs-toggle="tab" role="tab">
                  <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded"
                      src="img/homepage/slider/slider-dev.webp" alt="Product" width="60">
                    <div class="w-100 ps-2 ms-1">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="fs-sm pe-1"> Development</div><i class="ai-chevron-right lead ms-2 me-1"></i>
                      </div>
                    </div>
                  </div>
                </a></li>
              <li class="w-100 nav-item me-3 mb-3"><a class="nav-link" href="#digimar" data-bs-toggle="tab" role="tab">
                  <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded"
                      src="img/homepage/slider/slider-mar.webp" alt="Product" width="60">
                    <div class="w-100 ps-2 ms-1">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="fs-sm pe-1">Marketing</div><i class="ai-chevron-right lead ms-2 me-1"></i>
                      </div>
                    </div>
                  </div>
                </a></li>
              <!-- <li class="w-100 nav-item me-3 mb-3"><a class="nav-link" href="#mobdev" data-bs-toggle="tab" role="tab">
                    <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded" src="../img/demo/shop-homepage/thumbnails/03.jpg" alt="Product" width="60">
                      <div class="w-100 ps-2 ms-1">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="fs-sm pe-1">Mobile App Development</div><i class="ai-chevron-right lead ms-2 me-1"></i>
                        </div>
                      </div>
                    </div></a></li>
                    <li class="w-100 nav-item me-3 mb-3"><a class="nav-link" href="#webapp" data-bs-toggle="tab" role="tab">
                      <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded" src="../img/demo/shop-homepage/thumbnails/02.jpg" alt="Product" width="60">
                        <div class="w-100 ps-2 ms-1">
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="fs-sm pe-1">Web App Development</div><i class="ai-chevron-right lead ms-2 me-1"></i>
                          </div>
                        </div>
                      </div></a></li> -->

            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="uides">
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                    <div class="mx-auto" style="max-width: 443px;"><img
                        src="img/homepage/slider/best-website-development-company.webp"
                        alt="best website development company"></div>
                  </div>
                  <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="ps-xl-5">
                      <h3 class="h1 font text-light">Creative UI UX Design Services </h3>
                      <p class="fs-lg text-light mb-lg-5">We utilize the latest technology to design aesthetically
                        pleasing web and mobile applications that offers a great user experience.
                      </p><a class="btn btn-translucent-light" href="#modal-enquirenow" data-bs-toggle="modal"
                        data-view="#modal-enquirenow-view">Enquire Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="webdev">
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                    <div class="mx-auto" style="max-width: 443px;"><img src="img/homepage/slider/slider-dev.webp"
                        alt="Running Sneakers"></div>
                  </div>
                  <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="ps-xl-5">
                      <h3 class="h1 font text-light">Custom Website Development Services
                      </h3>
                      <p class="fs-lg text-light mb-lg-5">We help you build mobile-friendly, responsive website and
                        applications tailored to meet your business requirements.
                      </p><a class="btn btn-translucent-light" href="#modal-enquirenow" data-bs-toggle="modal"
                        data-view="#modal-enquirenow-view">Enquire Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="tab-pane fade" id="mobdev">
                  <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                      <div class="mx-auto" style="max-width: 443px;"><img src="../img/demo/shop-homepage/hero/03.png" alt="VR Headset"></div>
                    </div>
                    <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                      <div class="ps-xl-5">
                        <h3 class="h1 font text-light">Affordable & Top-Notch Mobile App Development Services</h3>
                        <p class="fs-lg text-light mb-lg-5">We design and develop highly innovative and user-friendly mobile applications for Android and iOS platforms.</p><a class="btn btn-translucent-light"  href="#modal-enquirenow" data-bs-toggle="modal" data-view="#modal-enquirenow-view">Enquire Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="webapp">
                  <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                      <div class="mx-auto" style="max-width: 443px;"><img src="../img/demo/shop-homepage/hero/02.png" alt="VR Headset"></div>
                    </div>
                    <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                      <div class="ps-xl-5">
                        <h3 class="h1 font text-light">Top-Rated Custom Web App Development Services</h3>
                        <p class="fs-lg text-light mb-lg-5">Leading software development company with expertise across various technologies.</p><a class="btn btn-translucent-light"  href="#modal-enquirenow" data-bs-toggle="modal" data-view="#modal-enquirenow-view">Enquire Now</a>
                      </div>
                    </div>
                  </div>
                </div> -->
              <div class="tab-pane fade" id="digimar">
                <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                    <div class="mx-auto" style="max-width: 443px;"><img src="img/homepage/slider/slider-mar.webp"
                        alt="VR Headset"></div>
                  </div>
                  <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="ps-xl-5">
                      <h3 class="h1 font text-light">Drive Sales and Boost Revenue with Digital Marketing
                      </h3>
                      <p class="fs-lg text-light mb-lg-5">CodeWills help you in developing online marketing strategies
                        that helps improve your online presence and revenue.

                      </p><a class="btn btn-translucent-light" href="#modal-enquirenow" data-bs-toggle="modal"
                        data-view="#modal-enquirenow-view">Enquire Now</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- clients -->
    <section class="bg-secondary py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to"
                src="img/homepage/clients/vodafonr-color.webp" alt="Logo" width="180"><img class="swap-from grayfilter"
                src="img/homepage/clients/vodafonr-color.webp" alt="Logo" width="180"></a></div>
          <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to"
                src="img/homepage/clients/verita-color.webp" alt="Logo" width="180"><img class="swap-from grayfilter"
                src="img/homepage/clients/verita-color.webp" alt="Logo" width="180"></a></div>
          <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to"
                src="img/homepage/clients/lb-color.webp" alt="Logo" width="180"><img class="swap-from grayfilter"
                src="img/homepage/clients/lb-color.webp" alt="Logo" width="180"></a></div>
          <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to"
                src="img/homepage/clients/lti-color.webp" alt="Logo" width="180"><img class="swap-from grayfilter"
                src="img/homepage/clients/lti-color.webp" alt="Logo" width="180"></a></div>
          <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to"
                src="img/homepage/clients/cat-color.webp" alt="Logo" width="180"><img class="swap-from grayfilter"
                src="img/homepage/clients/cat-color.webp" alt="Logo" width="180"></a></div>
          <div class="col-lg-2 col-md-4 col-6"><a class="swap-image" href="#"><img class="swap-to"
                src="img/homepage/clients/mom-color.webp" alt="Logo" width="180"><img class="swap-from grayfilter"
                src="img/homepage/clients/mom-color.webp" alt="Logo" width="180"></a></div>
        </div>
      </div>
    </section>
    <!-- About Codewills -->
    <section class="container mt-4 pt-5 mt-md-2 pt-md-7 pb-6">
      <h2 class="h1 text-center mb-4">About <span
          class="bg-faded-primary text-primary rounded px-3 py-2">Codewills</span></h2>

      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-xl-6 col-lg-7">
          <p class="text-center mb-0">
            CodeWills is a leading custom website development company that makes use of the latest technologies to
            design and develop the most innovative software applications that cater to various business requirements.
          </p>
        </div>
      </div>
      <div class="tns-carousel-wrapper">
        <div class="tns-carousel-inner"
          data-carousel-options="{&quot;items&quot;: 5, &quot;controls&quot;: false, &quot;gutter&quot;: 15, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;410&quot;:{&quot;items&quot;:3}, &quot;580&quot;:{&quot;items&quot;:4}, &quot;740&quot;:{&quot;items&quot;:5}}}">
          <div class="text-center">
            <h1 class="text-muted"><i class="ai-users"></i></h1>
            <div class="text-muted" style="font-size: 2.25rem;">1180+</div>
            <h3 class="h5">Customers</h3>
          </div>
          <div class="text-center">
            <h1 class="text-muted"><i class="ai-settings"></i></h1>
            <div class="text-muted" style="font-size: 2.25rem;">200+</div>
            <h3 class="h5">Engineers</h3>
          </div>
          <div class="text-center">
            <h1 class="text-muted"><i class="ai-award"></i></h1>
            <div class="text-muted" style="font-size: 2.25rem;">10</div>
            <h3 class="h5">Awards</h3>
          </div>
          <div class="text-center">
            <h1 class="text-muted"><i class="ai-calendar"></i></h1>
            <div class="text-muted" style="font-size: 2.25rem;">13+</div>
            <h3 class="h5">Years</h3>
          </div>
          <div class="text-center">
            <h1 class="text-muted"><i class="ai-globe"></i></h1>
            <div class="text-muted" style="font-size: 2.25rem;">80+</div>
            <h3 class="h5">Countries</h3>
          </div>

        </div>
      </div>
    </section>
    <!-- our services -->
    <section class="bg-gradient-home-slider py-5 py-md-6 py-lg-7">
      <div class="container-fluid py-3 py-lg-4 overflow-hidden">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-5 d-flex justify-content-end mb-5 mb-lg-0">
            <div class="mx-auto ms-lg-0 me-xl-7 text-center text-lg-start" style="max-width: 495px;">
              <h2 class="h1 text-light mb-4">Our <span class="bg-faded-light rounded px-3 py-2">
                  Services</span></h2>
              <p class="text-light opacity-70 mb-5">We provide a full range of website development services for
                businesses of all scales.</p>
              <div class="row mb-2 mx-n2">
                <!-- <div class="col-6 px-2 mb-3"><a class="d-block border border-light rounded-3 pt-3 pb-4 px-3 text-center text-decoration-none" href="#"><img class="d-inline-block opacity-60 mb-3" src="../img/demo/presentation/icons/carousel.svg" alt="Sliders &amp; Carousels" width="68">
                              <h3 class="h6 text-light mb-0">UI/UX Designing</h3></a></div> -->
                <div class="col-6 px-2 mb-3 hovercards" data-hover="5">
                  <a href='/ui-ux-design-services'
                    class="d-block border border-light btn btn-outline-light rounded-3 pt-3 pb-4 px-3 text-center text-decoration-none"><img
                      class="d-inline-block opacity-60 mb-3" src="img/demo/presentation/icons/forms.svg"
                      alt="Image / Video Gallery" width="45">
                    <h3 class="h6 text-light mb-0" style="white-space: pre-wrap;">UI/UX Designing</h3>
                  </a>
                </div>
                <div class="col-6 px-2 mb-3 hovercards" data-hover="1">
                  <a href='/website-development-services'
                    class="d-block border border-light btn btn-outline-light rounded-3 pt-3 pb-4 px-3 text-center text-decoration-none"><img
                      class="d-inline-block opacity-60 mb-3" src="img/demo/presentation/icons/gallery.svg"
                      alt="Image / Video Gallery" width="45">
                    <h3 class="h6 text-light mb-0" style="white-space: pre-wrap;">Website Development</h3>
                  </a>
                </div>
                <div class="col-6 px-2 mb-3 hovercards" data-hover="2">
                  <a href='/mobile-app-development-services'
                    class="d-block border border-light btn btn-outline-light rounded-3 pt-3 pb-4 px-3 text-center text-decoration-none">
                    <img class="d-inline-block opacity-60 mb-3" src="img/demo/presentation/icons/play.svg"
                      alt="Line, Bar &amp; Pie Charts" width="45">
                    <h3 class="h6 text-light mb-0" style="white-space: pre-wrap;">Mobile App Development</h3>
                  </a>
                </div>
                <div class="col-6 px-2 mb-3 hovercards" data-hover="3">
                  <a href='/web-application-development-services'
                    class="d-block border border-light btn btn-outline-light rounded-3 pt-3 pb-4 px-3 text-center text-decoration-none">
                    <img class="d-inline-block opacity-60 mb-3" src="img/demo/presentation/icons/forms.svg"
                      alt="Video Popup &amp; Embed" width="44">
                    <h3 class="h6 text-light mb-0" style="white-space: pre-wrap;">Web App Development</h3>
                  </a>
                </div>
                <div class="col-6 px-2 mb-3 hovercards" data-hover="4">
                  <a href='/digital-marketing-services'
                    class="d-block border border-light btn btn-outline-light rounded-3 pt-3 pb-4 px-3 text-center text-decoration-none">
                    <img class="d-inline-block opacity-60 mb-3" src="img/demo/presentation/icons/chart.svg"
                      alt="Form Controls" width="42">
                    <h3 class="h6 text-light mb-0" style="white-space: pre-wrap;">Digital Marketing</h3>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-7 d-flex justify-content-end pe-0 hovercardschild">
            <a style="display: none;" class=" me-n3 hovercards1" href="#" data-hover="1"><img class="d-block"
                src="img/homepage/Services/web-development-company.webp" alt="web development company"></a>
            <a style="display: none;" class=" me-n3 hovercards2" href="#" data-hover="2"><img class="d-block"
                src="img/homepage/Services/mobile-app-development-company.webp"
                alt="mobile app development company"></a>
            <a style="display: none;" class=" me-n3 hovercards3" href="#" data-hover="3"><img class="d-block"
                src="img/homepage/Services/web-application-development-company.webp"
                alt="web application development company"></a>
            <a style="display: none;" class=" me-n3 hovercards4" href="#" data-hover="4"><img class="d-block"
                src="img/homepage/Services/digital-marketing-company.webp" alt="digital-marketing-company"></a>
            <a style="display: block;" class=" me-n3 hovercards5" href="#" data-hover="5"><img class="d-block"
                src="img/homepage/Services/UI-UX-web-design-development-company.webp"
                alt="UI UX web design development company"></a>

          </div>

        </div>
      </div>
    </section>


    <!-- Services-->

    <section class=" pt-5 pt-lg-6" style="background: #F8F7FD;">
      <div class="container">
        <h2 class="h1 text-center mb-4">Our <span
            class="bg-faded-primary text-primary rounded px-3 py-2">Offerings</span></h2>
        <p class="text-center text-muted mb-0">We provide wide range of services in web design and development</p>
        <!-- Web design Service-->
        <div class="row align-items-center border-bottom py-5">
          <a class="col-md-6 py-3" href="/website-development-services"><img class="d-block mx-auto"
              src="./img/our-offering/top-website-development-company.webp" alt="top website development company"></a>
          <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 py-3">
            <h3 class="h4 mb-4">Website Development</h3>
            <ul class="list-unstyled">
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>We continue to provide WordPress, eCommerce, Enterprise, Drupal, Core PHP, and other website development services by collaborating with any dimensional enterprises. </span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Our expert developers use the latest technologies to build innovative websites flexible to user experiences and improve customer retention.</span></li>

            </ul>
            <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
            <p class="pb-1">HTML, CSS, JS, PHP, WordPress, Magento, WooCommerce</p><a class="fw-medium"
              href="#enquiryform">Get a quote<i class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
          </div>
        </div>
        <!-- Mobile Dev Service-->
        <div class="row align-items-center border-bottom py-5" style="background: F8F7FD;">
          <a class="col-md-6 offset-lg-1 py-3 order-md-2" href="/mobile-app-development-services"><img
              class="d-block mx-auto" src="./img/our-offering/mobile-application-development-company.webp"
              alt="mobile application development company"></a>
          <div class="col-xl-4 col-lg-5 col-md-6 offset-xl-1 py-3 order-md-1">
            <h3 class="h4 mb-4">Mobile App Development</h3>
            <ul class="list-unstyled">
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Our highly responsive team of mobile app developers, with ample experience in developing end to end mobile applications</span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span> Enabled customized Android, IOS, Cross-platform app services for our clients across the globe. </span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Also, we provide quick fine-tuning assistance for your mobile apps to expand their functionality further.</span></li>
            </ul>
            <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
            <p class="pb-1">Android , IOS, Flutter, Kotlin, Swift, React Native</p><a class="fw-medium"
              href="#enquiryform">Get a quote<i class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
          </div>
        </div>
        <!-- web Dev Service-->
        <div class="row align-items-center border-bottom py-5">
          <a class="col-md-6 py-3" href="/web-application-development-services"><img class="d-block mx-auto rounded-3"
              src="./img/our-offering/web-app-development-company.webp" alt="web app development company"></a>
          <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 py-3">
            <h3 class="h4 mb-4">Web Application Development</h3>
            <ul class="list-unstyled">
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Our team of experts develop responsive and cross-platform compatible web applications using robust coding practices that are highly secured and bug-free. </span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Our custom-made B2B & B2C web portals are designed to achieve maximum output while also handling large-scale operations. </span></li>

            </ul>
            <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
            <p class="pb-1">React JS, Node JS, Vue JS, Angular JS</p><a class="fw-medium" href="#enquiryform">Get a
              quote<i class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
          </div>
        </div>
        <!-- Digital marketing Service-->
        <div class="row align-items-center py-5">
          <a class="col-md-6 offset-lg-1 py-3 order-md-2" href="/digital-marketing-services"><img
              class="d-block mx-auto" src="./img/our-offering/best-digital-marketing-company.webp"
              alt="best digital marketing company"></a>
          <div class="col-xl-4 col-lg-5 col-md-6 offset-xl-1 py-3 order-md-1">
            <h3 class="h4 mb-4">Digital Marketing Services</h3>
            <ul class="list-unstyled">
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Our wide range of digital marketing & advertising services includes Local Search Engine Optimization (SEO), Pay Per Click (PPC), Social Media Marketing (SMM), Content Marketing and much more.</span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>We implement these services to gratify our client's target audiences while increasing their online visibility. </span></li>

            </ul>
            <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
            <p class="pb-1">Local Search Engine Optimization (SEO), Pay Per Click (PPC), Social Media Marketing (SMM)
            </p><a class="fw-medium" href="#enquiryform">Get a quote<i
                class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
          </div>
        </div>
      </div>
    </section>







    <!-- Pricing -->
    <section class="pb-lg-3" id="pricing">
      <h2 class="d-block bg-gradient text-light text-center py-5 px-3">Pricing plans</h2>
      <div class="container py-5">

        <div class="d-sm-flex align-items-center justify-content-center text-center text-sm-start">
          <h3 class="mb-4 mb-sm-2 me-sm-4 pe-sm-2">Take a look at our pricing</h3>
          <a class="btn btn-success mb-sm-2" href="#modal-enquirenow" data-bs-toggle="modal"
            data-view="#modal-enquirenow-view">Enquire Now</a>
        </div>

        <div class="row justify-content-center pt-5">
                <div class="col-lg-10">
                  <div class="bg-light shadow-lg rounded-3 pt-3 px-4">
                    <div class="pricing-wrap pt-3 px-3">
                      <!-- <div class="price-switch justify-content-end"><span class="price-label me-2">Monthly</span>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="priceSwitch">
                            <label class="form-check-label" for="priceSwitch"></label>
                          </div><span class="price-label ms-1">Annual</span>
                        </div> -->
                        <div class="d-md-flex align-items-start border-bottom py-4 py-sm-5">
                          <div class="ms-4 ms-sm-0 py-2 w-100" style="max-width: 15rem;">
                            <h3 class="mb-2">UI/UX Design Service </h3>
                            <div class="fs-xs" style="max-width: 10rem;">Design services with immense impact on your company's bottom line</div>
                          </div>
                          <div class="d-flex w-100 flex-column justify-content-start py-3 py-sm-2 px-4" style="max-width: 20rem;">
                            <small class="h3 fs-lg fw-medium text-muted mb-1">Starting From</small>
                            <div class="d-flex flex-row w-100 align-items-end">
                              <span class="h2 fw-normal text-muted mb-1 me-2" id="uiux_sybl"><?php echo $geoplugin->currencySymbol; ?></span>
                              <span class="price display-3 fw-normal text-primary px-1 me-2" id="uiux" data-current-price="29990" data-new-price="25550"> <?php echo $geoplugin->convert(24990);?> </span>
                              <span class="h3 fs-lg fw-medium text-muted mb-2">per<br>project</span>
                            </div>
                          </div>
        
                          <ul class="list-unstyled py-2 mb-0">
                            <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>Content Management System </span></li>
                            <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>Mobile Responsive Layout</span></li>
                            <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span> SEO Friendly</span></li>
        
                          </ul>
                        </div>
                      <div class="d-md-flex align-items-start border-bottom py-4 py-sm-5">
                        <div class="ms-4 ms-sm-0 py-2 w-100" style="max-width: 15rem;">
                          <h3 class="mb-2">Website Development </h3>
                          <div class="fs-xs" style="max-width: 10rem;">Gain brand recognition with our revolutionary web-based software</div>
                        </div>
                        <div class="d-flex w-100 flex-column justify-content-start py-3 py-sm-2 px-4" style="max-width: 20rem;">
                          <small class="h3 fs-lg fw-medium text-muted mb-1">Starting From</small>
                          <div class="d-flex flex-row w-100 align-items-end">
                            <span class="h2 fw-normal text-muted mb-1 me-2" id="website_sybl"><?php echo $geoplugin->currencySymbol; ?></span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" id="website" data-current-price="29990" data-new-price="25550"><?php echo $geoplugin->convert(24990);?></span>
                            <span class="h3 fs-lg fw-medium text-muted mb-2">per<br>project</span>
                          </div>
                        </div>
      
                        <ul class="list-unstyled py-2 mb-0">
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span style="white-space:pre-wrap">Web pages Layout Design and development           </span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span> Performance Optimization</span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>Basic SEO</span></li>
      
                        </ul>
                      </div>
                      <div class="d-md-flex align-items-start border-bottom py-4 py-sm-5">
                        <div class="ms-4 ms-sm-0 py-2 w-100" style="max-width: 15rem;">
                          <h3 class="mb-2">Web Application Development</h3>
                          <div class="fs-xs" style="max-width: 10rem;">Build robust web applications with maximum resource utilization</div>
                        </div>
                        <div class="d-flex w-100 flex-column justify-content-start py-3 py-sm-2 px-4" style="max-width: 20rem;">
                          <small class="h3 fs-lg fw-medium text-muted mb-1">Starting From</small>
                          <div class="d-flex flex-row w-100 align-items-end">
                            <span class="h2 fw-normal text-muted mb-1 me-2" id="web_sybl"><?php echo $geoplugin->currencySymbol; ?></span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" id="web" data-current-price="990" data-new-price="950"><?php echo $geoplugin->convert(990);?></span>
                            <span class="h3 fs-lg fw-medium text-muted mb-2">per<br>hour</span>
                          </div>
                        </div>
      
                        <ul class="list-unstyled py-2 mb-0">
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>App Layout design   </span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span> Cloud/API Integration </span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>Responsive UI</span></li>
                        </ul>
                      </div>
                      <div class="d-md-flex align-items-start border-bottom py-4 py-sm-5">
                        <div class="ms-4 ms-sm-0 py-2 w-100" style="max-width: 15rem;">
                          <h3 class="mb-2">E-Commerce Development</h3>
                          <div class="fs-xs" style="max-width: 10rem;">Stabilize your online store with our friendly e-commerce solutions</div>
                        </div>
                        <div class="d-flex w-100 flex-column justify-content-start py-3 py-sm-2 px-4" style="max-width: 20rem;">
                          <small class="h3 fs-lg fw-medium text-muted mb-1">Starting From</small>
                          <div class="d-flex flex-row w-100 align-items-end">
                            <span class="h2 fw-normal text-muted mb-1 me-2" id="ecommerce_sybl"><?php echo $geoplugin->currencySymbol; ?></span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" id="ecommerce" data-current-price="39990" data-new-price="35550"><?php echo $geoplugin->convert(29990);?></span>
                            <span class="h3 fs-lg fw-medium text-muted mb-2">per<br>project</span>
                          </div>
                        </div>
      
                        <ul class="list-unstyled py-2 mb-0">
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>100% customized eCommerce site</span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span> Dedicated project managers</span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>Multiple Device Testing</span></li>
                        </ul>
                      </div>
               
                      <div class="d-md-flex align-items-start border-bottom py-4 py-sm-5">
                        <div class="ms-4 ms-sm-0 py-2 w-100" style="max-width: 15rem;">
                          <h3 class="mb-2">Mobile Application</h3>
                          <div class="fs-xs" style="max-width: 10rem;">Create brand value visibility with our cost-efficient mobile applications</div>
                        </div>
                        <div class="d-flex w-100 flex-column justify-content-start py-3 py-sm-2 px-4" style="max-width: 20rem;">
                          <small class="h3 fs-lg fw-medium text-muted mb-1">Starting From</small>
                          <div class="d-flex flex-row w-100 align-items-end">
                            <span class="h2 fw-normal text-muted mb-1 me-2" id="mobile_sybl"><?php echo $geoplugin->currencySymbol; ?></span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" id="mobile" data-current-price="990" data-new-price="950"><?php echo $geoplugin->convert(990);?></span>
                            <span class="h3 fs-lg fw-medium text-muted mb-2">per<br>hour</span>
                          </div>
                        </div>
      
                        <ul class="list-unstyled py-2 mb-0">
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>Custom iOS and Android apps development</span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>Automated QA &amp; Testing</span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>  Maintenance and Support</span></li>
                        </ul>
                      </div>
                      <div class="d-md-flex align-items-start border-bottom py-4 py-sm-5">
                        <div class="ms-4 ms-sm-0 py-2 w-100" style="max-width: 15rem;">
                          <h3 class="mb-2">Digital Marketing</h3>
                          <div class="fs-xs" style="max-width: 10rem;">Promote your online business using our effective digital marketing strategies</div>
                        </div>
                        <div class="d-flex w-100 flex-column justify-content-start py-3 py-sm-2 px-4" style="max-width: 20rem;">
                          <small class="h3 fs-lg fw-medium text-muted mb-1">Starting From</small>
                          <div class="d-flex flex-row w-100 align-items-end">
                            <span class="h2 fw-normal text-muted mb-1 me-2" id="digital_sybl"><?php echo $geoplugin->currencySymbol; ?></span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" id="digital" data-current-price="19990" data-new-price="19550"><?php echo $geoplugin->convert(19990);?></span>
                            <span class="h3 fs-lg fw-medium text-muted mb-2">per<br>month</span>
                          </div>
                        </div>
      
                        <ul class="list-unstyled py-2 mb-0">
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span>Content &amp; Blogging </span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span> Trackable &amp; Measurable results/span&gt;</span></li>
                          <li class="d-flex align-items-center text-nowrap mb-3"><i class="ai-check fs-xl text-primary me-2"></i><span> Online Visibility &amp; Brand Development</span></li>
      
                        </ul>
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </section>
    <!-- Award slider -->
    <section class="bg-secondary mt-5 mt-md-6 mt-lg-7">
      <div class="container py-5 py-md-6 py-lg-7">
        <div class="row tns-carousel-wrapper py-3 py-md-0">
          <div class="col-md-8">
            <h2 class="h1 text-left mb-4">Awards & <span
                class="bg-faded-primary text-primary rounded px-3 py-2">Achievements</span></h2>
            <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;gutter&quot;: 20}">
              <blockquote class="mt-3 mb-0">
                <img src="./img/awards/svg/clutch-01.svg" alt="" width="200">
                <h4>Clutch Award 2021
                </h4>
                <p>
                  HashRoot was named to Clutch's annual list of the top 100 IT firms in India for 2021 in a press
                  release on 23 March 2021 at Washington DC. Clutch is the leading ratings and reviews platform for IT,
                  Marketing, and Business service providers. Clutch has been recognized by Inc Magazine as one of the
                  500 fastest-growing companies in the United States and has been listed as a top 50 startup by
                  LinkedIn.
                </p>

              </blockquote>
              <blockquote class="mt-3 mb-0">
                <img src="./img/awards/svg/ccss-01.svg" alt="" width="200">
                <h4>Crown Commercial Service (CCS), UK</h4>
                <p>
                  HashRoot is the part of the UK Government???s G-Cloud 12 Framework. By achieving G-Cloud accreditation,
                  HashRoot is an approved G-Cloud 12 supplier by the Crown Commercial Service (CCS) and is considered as
                  one of the best choice for delivering world-class cloud computing services and high-quality cloud
                  solutions.
                </p>
              </blockquote>
              <blockquote class="mt-3 mb-0">

                <img src="./img/awards/svg/IAC-01.svg" alt="" width="200">
                <h4>Global Achievers Award for Business Excellence
                </h4>
                <p>
                  International Achievers Conference 'Global Achievers Award for Business Excellence' is presented to
                  HashRoot by International Achievers Summit for outstanding achievements at the 6th International
                  Achievers summit on 'Global Corporate Achievements and Social Responsibilities' on Monday, 17th
                  November 2014 at Bangkok, Thailand
                </p>
              </blockquote>
              <blockquote class="mt-3 mb-0">
                <img src="./img/awards/svg/IEDRA-01-01.svg" alt="" width="200">
                <h4>Fastest growing Indian Company Excellence Award</h4>
                <p>Indian Economic Development and Research Association (IEDRA) awarded HashRoot as the 'Fastest growing
                  Indian Company Excellence Award' on the occasion of National Seminar on "Outstanding contribution to
                  National Development" on Friday 29th August 2014 at New Delhi. IEDRA is a national level organization
                  which is promoting national economy and social development and holding Award functions for the past 25
                  years in India and Abroad
                </p>

              </blockquote>
              <blockquote class="mt-3 mb-0">

                <img src="./img/awards/svg/CIP-01.svg" alt="" width="200">
                <h4>International Gold Star Millennium Award
                </h4>
                <p>
                  International Gold Star Millennium Award is presented to HashRoot for Excellence in Promoting Global
                  Integration and Economic Development by His Excellency Mr. Korn Dabbaransi, Former Dy. Prime Minister
                  of Thailand, at the International Conference on "Indo-Thai Friendship and Economic Co-operation" on
                  18th January 2015, Bangkok, Thailand.

                </p>

              </blockquote>
              <blockquote class="mt-3 mb-0">
                <img src="./img/awards/svg/bizz.svg" alt="" width="200">
                <h4>The BIZZ Awards 2019
                </h4>
                <p>
                  HashRoot has been selected as a winner fo the prestigious Business Excellence Award, The BIZZ Awards
                  by WORLDCOB (The World Confederation of Businesses). The BIZZ is a member of the United Nations Global
                  Compact, US Chamber of commerce, and Gold community WORLDCOB. THE BIZZ was initiated by World
                  Confederation of Businesses (WORLDCOB), on the idea to offer the global business community benefits
                  that further their progress.
                </p>
              </blockquote>
              <blockquote class="mt-3 mb-0">
                <img src="./img/awards/svg/IQC-01.svg" alt="" width="200">
                <h4>INTERNATIONAL QUALITY CROWN AWARD
                </h4>
                <p>
                  The President of the selection committee for the 27th International IQC Convention informed HashRoot
                  that it has been awarded the 'International Quality Crown Award (IQC)' on GOLD category at IQC
                  International Quality Convention, London on November 21-22, 2015. The International Quality Crown
                  (IQC) London 2015 is organised by BID Group One and Business Initiative Directions (BID).
                </p>
              </blockquote>
              <blockquote class="mt-3 mb-0">


                <img src="./img/awards/svg/consultants-01.svg" alt="" width="200">
                <h4>Consultant of the year 2015</h4>
                <p>HashRoot has been awarded as the Consultant of the Year 2015 by Consultant's Review Magazine in the
                  domain Infrastructure Management Service for reducing IT Complexities with cutting-edge IT advisory
                  solutions. Consultant's Review is a platform, which connects both consultants and organizations to
                  work together for a better output.

                </p>
              </blockquote>
              <blockquote class="mt-3 mb-0">

                <img src="./img/awards/svg/vmware-01.svg" alt="" width="200">
                <h4>Most promising VMware Solution Provider
                </h4>
                <p>
                  HashRoot has been listed in the 25 most promising VMware service providers of the year 2016 by CIO
                  Outlook Magazine, published from Silicon Valley, USA. APAC CIO Outlook magazine stands out with its
                  learn-from peers approach offering professionals the most comprehensive collection of technology
                  trends.
                </p>
              </blockquote>
              <blockquote class="mt-3 mb-0">

                <img src="./img/awards/svg/cool startup-01.svg" alt="" width="200">
                <h4> 50 Cool Startups
                </h4>
                <p>
                  Silicon India Magazine, a leading business enterprises and industries magazine recognised and featured
                  HashRoot as the 50 Cool Startups, an annual listing of 50 cool straps of the year represents not only
                  the glory of 50 startups but also recognises companies impacting the marketplace.
                </p>
              </blockquote>
            </div>
          </div>
          <div class="col-md-4">
            <div
              class="tns-carousel-pager d-flex justify-content-around align-items-start align-items-md-start border-start pt-4 mt-4 ps-md-3 pt-md-0 mt-md-0">
              <div class="flex-column d-flex">

                <a class="swap-image active m-1" href="#" data-goto="1">
                  <img class="swap-to" src="img/awards/svg/clutch-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/clutch-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>
                <a class="swap-image  m-1" href="#" data-goto="2">
                  <img class="swap-to" src="img/awards/svg/ccss-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/ccss-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>
                <a class="swap-image  m-1" href="#" data-goto="4">
                  <img class="swap-to" src="img/awards/svg/IEDRA-01-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/IEDRA-01-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>
                <a class="swap-image  m-1" href="#" data-goto="3">
                  <img class="swap-to" src="img/awards/svg/IAC-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/IAC-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>


                <a class="swap-image  m-1" href="#" data-goto="5">
                  <img class="swap-to" src="img/awards/svg/CIP-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/CIP-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>

              </div>
              <div class="flex-column d-flex">
                <a class="swap-image  m-1" href="#" data-goto="6">
                  <img class="swap-to" src="img/awards/svg/bizz.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/bizz.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>
                <a class="swap-image  m-1" href="#" data-goto="7">
                  <img class="swap-to" src="img/awards/svg/IQC-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/IQC-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>
                <a class="swap-image  m-1" href="#" data-goto="8">
                  <img class="swap-to" src="img/awards/svg/consultants-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/consultants-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>
                <a class="swap-image  m-1" href="#" data-goto="9">
                  <img class="swap-to" src="img/awards/svg/vmware-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/vmware-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>
                <a class="swap-image  m-1" href="#" data-goto="10">
                  <img class="swap-to" src="img/awards/svg/cool startup-01.svg" alt="Logo" width="136">
                  <img class="swap-from" src="img/awards/svg/cool startup-01.svg" alt="Logo" width="136"
                    style="filter:grayscale(1)">
                </a>

              </div>



            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- features -->
    <section class="bg-gradient-home-slider position-relative pt-6 pb-5 py-sm-6">
      <div class="position-absolute top-0 start-0 w-100 h-100 bg-size-cover"
        style="background-image: url(img/demo/booking/bg-pattern01.png);"></div>
      <div class="position-relative zindex-5 container py-2">
        <div class="row align-items-center">
          <div class="col-lg-5 offset-lg-1 order-lg-2 pb-5 pb-lg-0 text-center text-lg-start">
            <h2 class="h1 text-light mb-4">Why <span class="bg-faded-light text-light rounded px-3 py-2">Codewills
                ?</span></h2>
            <p class="text-light mb-0">Our team of website developers have a great understanding of the latest
              technologies and
              knows what it takes to build websites that meets your requirements.</p>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="row">
              <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                <div class="px-2 text-center">
                  <!-- <img class="bg-light rounded-circle mb-2" src="img/demo/booking/icons/01.svg" alt="Tickets" width="105"> -->

                  <h3>
                    <!-- <i class="bg-light text-primary  ai-code rounded-circle mb-2" style="padding: 2rem;"></i> -->
                    <img src="img/why-codewills/1-01.png" alt="Tickets" width="105">
                  </h3>

                  <p class="fs-sm fw-medium text-light mb-0 pt-1">Experienced Developers </p>
                </div>
              </div>
              <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                <div class="px-2 text-center">
                  <!-- <img class="bg-light rounded-circle mb-2" src="img/demo/booking/icons/02.svg" alt="Search" width="105"> -->
                  <h3>
                    <!-- <i class="bg-light text-primary  ai-dollar-sign rounded-circle mb-2" style="padding: 2rem;"></i> -->
                    <img src="img/why-codewills/2-01.png" alt="Tickets" width="105">
                  </h3>
                  <p class="fs-sm fw-medium text-light mb-0 pt-1">Budget-Friendly Services </p>
                </div>
              </div>
              <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                <div class="px-2 text-center">
                  <!-- <img class="bg-light rounded-circle mb-2" src="img/demo/booking/icons/03.svg" alt="Flight" width="105"> -->
                  <h3>
                    <!-- <i class="bg-light text-primary  ai-search rounded-circle mb-2" style="padding: 2rem;"></i> -->
                    <img src="img/why-codewills/3-01.png" alt="Tickets" width="105">
                  </h3>
                  <p class="fs-sm fw-medium text-light mb-0 pt-1">100% Transparency</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- faq -->
    <section class="container py-5 my-4 my-sm-0 py-sm-6 py-md-7 d-none">
      <h2 class="text-center pb-2 mb-5">FAQ</h2>
      <div class="row pb-2">
        <div class="col-lg-6">
          <div class="accordion" id="faq">
            <div class="accordion-item shadow">
              <h2 class="accordion-header" id="faq-heading-1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-1" aria-expanded="false" aria-controls="faq-content-1">How can I create a
                  list of frequent destinations?</button>
              </h2>
              <div class="accordion-collapse collapse" id="faq-content-1" aria-labelledby="faq-heading-1"
                data-bs-parent="#faq" style="">
                <div class="accordion-body">
                  <div class="fs-sm">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                    est laborum et dolorum fuga.</div>
                </div>
              </div>
            </div>
            <div class="accordion-item shadow">
              <h2 class="accordion-header" id="faq-heading-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-2" aria-expanded="false" aria-controls="faq-content-2">What will happen
                  after I sign up?</button>
              </h2>
              <div class="accordion-collapse collapse" id="faq-content-2" aria-labelledby="faq-heading-2"
                data-bs-parent="#faq" style="">
                <div class="accordion-body">
                  <div class="fs-sm">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                    est laborum et dolorum fuga.</div>
                </div>
              </div>
            </div>
            <div class="accordion-item shadow">
              <h2 class="accordion-header" id="faq-heading-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-3" aria-expanded="false" aria-controls="faq-content-3">Do I have to
                  confirm all bookings?</button>
              </h2>
              <div class="accordion-collapse collapse show" id="faq-content-3" aria-labelledby="faq-heading-3"
                data-bs-parent="#faq" style="">
                <div class="accordion-body">
                  <div class="fs-sm">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                    est laborum et dolorum fuga.</div>
                </div>
              </div>
            </div>
            <div class="accordion-item shadow">
              <h2 class="accordion-header" id="faq-heading-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-4" aria-expanded="false" aria-controls="faq-content-4">What do I get for
                  the commission I pay?</button>
              </h2>
              <div class="accordion-collapse collapse" id="faq-content-4" aria-labelledby="faq-heading-4"
                data-bs-parent="#faq">
                <div class="accordion-body">
                  <div class="fs-sm">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                    est laborum et dolorum fuga.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-lg-block col-lg-5 offset-lg-1"><img src="img/demo/booking/illustration.svg"
            alt="Illustration"></div>
      </div>
    </section>
    <!-- splitter -->
    <section class="bg-secondary py-6 py-sm-7 mt-0">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-md-7 col-sm-9 pb-3 mb-4 pb-lg-0 mb-lg-0">
            <div class="d-flex align-items-center justify-content-between">
              <div class="me-4"><img src="img/demo/mobile-app/icons/01.svg" alt="Device"></div>
              <div class="me-4"><img src="img/demo/mobile-app/icons/02.svg" alt="Device"></div>
              <div class="me-4"><img src="img/demo/mobile-app/icons/03.svg" alt="Device"></div>
              <div><img src="img/demo/mobile-app/icons/04.svg" alt="Device"></div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 offset-lg-1 text-center text-lg-start">
            <h2>Apps that work well across all devices </h2>
            <p class="mb-0">At CodeWills we help you build cross-platform mobile applications that will run smoothly on
              all devices. From app interface design to complete development of the application, we offer
              end-to-end cross platform mobile application development services to clients all over the
              globe.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ctasection -->
    <?php  include("./callRequest.php"); ?>

    <!-- form -->
    <?php  include("./enquiry.php"); ?>



  </main>
  <?php include("footer.php"); ?>
  <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span
      class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">
    </i></a>
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>

  <!-- Vendor scrits: js libraries and plugins-->
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="vendor/jarallax/dist/jarallax.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
  <script src="vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
  <script src="vendor/lg-zoom.js/dist/lg-zoom.min.js"></script>
  <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="vendor/shufflejs/dist/shuffle.min.js"></script>
  <script src="vendor/flatpickr/dist/flatpickr.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6Ldb7PAcAAAAALKN6oPEOLjDjOBnMKhDCJ3Bn6KL"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/mailchimp.js"></script>
  <script src="js/enquire-form.js"></script>

  <script>
    $(".hovercards").hover(function () {
      $(".hovercardschild").children().css("display", "none")
      var valueparent = $(this).attr('data-hover')
      var valuechild = $(".hovercards" + valueparent)
      valuechild.css("display", "block")
    })
  </script>


  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>
</body>

</html>