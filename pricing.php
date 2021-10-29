<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pricing | Codewills</title>

    <!-- SEO Meta Tags-->

    <meta name="title" content="Our Executive Leadership Team | Codewills">
    <meta name="description" content="Meet our executive leadership team, who drives our firm to new heights by helping us deliver effective services and a consistently engaging client experience">
    <meta name="keywords" content="CodeWills">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- <link href="http://fonts.cdnfonts.com/css/proxima-nova-2" rel="stylesheet"> -->

    <!-- Page loading styles-->
    <style>
        .bg-gradient-home-slider {
            background: linear-gradient(to right,
                    #5654ff 0%,
                    #924cef 30%,
                    #ff7777 100%);
        }
        li>span{
    white-space: pre-wrap;
  }
  .invalid-feedback1 {
       display: none;
       width: 100%;
       margin-top: 0.375rem;
       font-size: 0.75rem;
       color: #f74f78;
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

        $(function () {
            $("#header").load("header.php");
            $("#signinmodal").load("signinmodal.php");
            $("#footer").load("footer.php");
        });


    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css" />
    <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css" />
    <link rel="stylesheet" media="screen" href="vendor/flatpickr/dist/flatpickr.min.css" />
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
        <?php include("signinmodal.php"); ?>
        <?php include("header.php"); ?>
        <!-- Enquirenow Modal -->
        <?php include("enquirePopup.php"); ?>

        <!-- Page content-->

        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/company_banner/Leadership.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Pricing</h1>
                        <p class="text-light">
                            An innovative and collective group of like-minded folks making useful and enduring
                            technology products.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- clients -->

        <section class="py-lg-3" id="pricing">
     
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
                            <h3 class="mb-2">Website Design Service </h3>
                            <div class="fs-xs" style="max-width: 10rem;">Design services with immense impact on your company's bottom line</div>
                          </div>
                          <div class="d-flex w-100 flex-column justify-content-start py-3 py-sm-2 px-4" style="max-width: 20rem;">
                            <small class="h3 fs-lg fw-medium text-muted mb-1">Starting From</small>
                            <div class="d-flex flex-row w-100 align-items-end">
                              <span class="h2 fw-normal text-muted mb-1 me-2">₹</span>
                              <span class="price display-3 fw-normal text-primary px-1 me-2" data-current-price="29990" data-new-price="25550">24,990</span>
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
                            <span class="h2 fw-normal text-muted mb-1 me-2">₹</span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" data-current-price="29990" data-new-price="25550">24,990</span>
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
                            <span class="h2 fw-normal text-muted mb-1 me-2">₹</span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" data-current-price="990" data-new-price="950">990</span>
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
                            <span class="h2 fw-normal text-muted mb-1 me-2">₹</span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" data-current-price="39990" data-new-price="35550">29,990</span>
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
                            <span class="h2 fw-normal text-muted mb-1 me-2">₹</span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" data-current-price="990" data-new-price="950">990</span>
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
                            <span class="h2 fw-normal text-muted mb-1 me-2">₹</span>
                            <span class="price display-3 fw-normal text-primary px-1 me-2" data-current-price="19990" data-new-price="19550">19,990</span>
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





        <!-- ctasection -->
        <?php  include("./callRequest.php"); ?>

        <!-- form -->
        <?php  include("./enquiry.php"); ?>



    </main>
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