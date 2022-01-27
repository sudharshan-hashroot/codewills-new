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
  <meta name="keywords"
    content="Website Development Company">
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

  li>span{
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
        }, 2000);
      };
    })();




  </script>
  <!-- Vendor Styles-->
  <!--  -->
  <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css" />
  <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css" />
  <link rel="stylesheet" media="screen" href="vendor/flatpickr/dist/flatpickr.min.css" />
  <!-- Main Theme Styles + Bootstrap-->
  
  <link rel="stylesheet" media="screen" href="../ css/theme.min.css" async>
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
   
    <?php include("header.php"); ?>
    <!-- Enquirenow Modal -->
    
    <div class="container d-flex flex-column justify-content-center pt-2 mt-n6" style="flex: 1 0 auto;">
        <div class="pt-7 pb-5">
          <div class="text-center mb-2 pb-4">
            <h1 class="mb-grid-gutter">
                <img class="d-inline-block" src="img/404/404.png" alt="Error 404" style="width: 50%;">
                <span class="visually-hidden">Error 404</span><span class="d-block pt-3 fs-sm fw-semibold text-danger">Error code: 404</span></h1>
            <h2>Page not found!</h2>
            <p class="pb-2">It seems we can’t find the page you are looking for.</p><a class="btn btn-translucent-primary me-3" href="/">Go to homepage</a>
          </div>
       
        </div>
      </div>

 



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