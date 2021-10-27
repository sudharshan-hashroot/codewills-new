<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Get in Touch With Us | CodeWills by HashRoot</title>
    
    <!-- SEO Meta Tags-->
    <meta name="title" content="Get in Touch With Us | CodeWills by HashRoot">
    <meta name="description" content="Need any assistance with our service? We would like to hear from you. Drop us a line or reach out to us for any enquiries.">
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
        .invalid-feedback1 {
       display: none;
       width: 100%;
       margin-top: 0.375rem;
       font-size: 0.75rem;
       color: #f74f78;
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
      <!-- Navbar (Solid background)-->

      <!-- Page content-->
      <!-- Page title-->
      <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
        <div class="jarallax-img" style="background-image: url(img/pages/contacts/page-title-bg.jpg);"></div>
        <div class="container position-relative zindex-5 pt-3 pb-7 pt-md-0">
          <div class="row justify-content-center py-md-5">
            <div class="col-lg-6 col-md-8 text-center pt-2 mb-n3">
              <h1 class="text-light">Contact Us              </h1>
              <p class="text-light">We would like to hear from you and here is how you can reach us. Get in touch with us for any enquiries!
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact cards (details)-->
      <section class="container-fluid bg-overlay-content mb-5 mb-md-6" style="margin-top: -120px;">
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100 border-0 shadow-lg py-4">
              <div class="card-body text-center"><i class="ai-map-pin mb-4 text-primary" style="font-size: 2.25rem;"></i>
                <h3 class="h6 mb-2">Address, Location</h3>
                <p class="fs-sm mb-2">396 Lillian Blvd, Holbrook, NY 11741, USA</p><a class="fancy-link fs-sm" href="#map" data-scroll>See on the map</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100 border-0 shadow-lg py-4">
              <div class="card-body text-center"><i class="ai-clock mb-4 text-danger" style="font-size: 2.25rem;"></i>
                <h3 class="h6 mb-2">Working hours</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li>Mon - Fri: 9AM - 8PM </li>
                  <li>Sat: 10AM - 5PM</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100 border-0 shadow-lg py-4">
              <div class="card-body text-center"><i class="ai-phone mb-4 text-success" style="font-size: 2.25rem;"></i>
                <h3 class="h6 mb-2">Phone numbers</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li><span class="me-1">Customer service:</span><a class="nav-link-style" href="tel:+108044357260">+1 (080) 44 357 260</a></li>
                  <li><span class="me-1">Tech support:</span><a class="nav-link-style" href="tel:+100331697720">+1 00 33 169 7720</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100 border-0 shadow-lg py-4">
              <div class="card-body text-center"><i class="ai-mail mb-4 text-warning" style="font-size: 2.25rem;"></i>
                <h3 class="h6 mb-2">Email addresses</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li><span class="me-1">Customer service:</span><a class="nav-link-style" href="mailto:customer@example.com">customer@example.com</a></li>
                  <li><span class="me-1">Tech support:</span><a class="nav-link-style" href="mailto:support@example.com">support@example.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact cards (offices)-->
      <section class="container mb-5 mb-md-6">
        <h2 class="text-center mb-4 pb-4">Our offices</h2>
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card h-100 border-0 shadow mx-auto"><img class="card-img-top" src="img/pages/contacts/orlando.jpg" alt="Orlando">
              <div class="card-body">
                <h5>Orlando, USA</h5>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex align-items-start pb-3 border-bottom"><i class="ai-map-pin fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block nav-link-style fs-sm" href="#">514 S. Magnolia St. Orlando, FL 32806, USA</a></div>
                  </li>
                  <li class="d-flex align-items-start pt-2 pb-3 border-bottom"><i class="ai-phone fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block nav-link-style fs-sm" href="tel:+178632256040">+1 (786) 322 560 40</a></div>
                  </li>
                  <li class="d-flex align-items-start pt-2"><i class="ai-mail fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block nav-link-style fs-sm" href="mailto:orlando@example.com">orlando@example.com</a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card h-100 border-0 shadow mx-auto"><img class="card-img-top" src="img/pages/contacts/chicago.jpg" alt="Chicago">
              <div class="card-body">
                <h5>Chicago, USA</h5>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex align-items-start pb-3 border-bottom"><i class="ai-map-pin fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block nav-link-style fs-sm" href="#">76, Industrial Dr, West Chicago, IL 60185, USA</a></div>
                  </li>
                  <li class="d-flex align-items-start pt-2 pb-3 border-bottom"><i class="ai-phone fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block nav-link-style fs-sm" href="tel:+184725276533">+1 (847) 252 765 33</a></div>
                  </li>
                  <li class="d-flex align-items-start pt-2"><i class="ai-mail fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block nav-link-style fs-sm" href="mailto:chicago@example.com">chicago@example.com</a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card h-100 border-0 shadow mx-auto"><img class="card-img-top" src="img/pages/contacts/newyork.jpg" alt="New York">
              <div class="card-body">
                <h5>New York, USA</h5>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex align-items-start pb-3 border-bottom"><i class="ai-map-pin fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block nav-link-style fs-sm" href="#">396 Lillian Blvd, Holbrook, NY 11741, USA</a></div>
                  </li>
                  <li class="d-flex align-items-start pt-2 pb-3 border-bottom"><i class="ai-phone fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block nav-link-style fs-sm" href="tel:+1212477690000">+1 (212) 477 690 000</a></div>
                  </li>
                  <li class="d-flex align-items-start pt-2"><i class="ai-mail fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block nav-link-style fs-sm" href="mailto:newyork@example.com">newyork@example.com</a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Map + Contact form-->
      <section class="border-top" id="map">
        <div class="row g-0 gallery"><a class="col-lg-6 gallery-item map-popup d-flex flex-columnt justify-content-center align-items-center bg-position-center bg-size-cover py-7 text-center" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91476818218!2d-74.11976253858133!3d40.69740344296443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sua!4v1568574342685!5m2!1sen!2sua" data-iframe="true" data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;396 Lillian Blvd, Holbrook, NY 11741&lt;/h6&gt;" style="background-image:url(img/pages/contacts/map02.jpg);"><span class="gallery-caption"><i class="ai-maximize-2 fs-xl mt-n1 me-2"></i>Expand the map</span>
            <div class="d-inline-block py-4 py-md-6"><img src="img/pages/contacts/marker.png" alt="Map marker" width="48"></div></a>
          <div class="col-lg-6 px-3 px-lg-5">
            <div class="pt-5 pb-6 pt-md-6 mx-auto" style="max-width: 720px;">
              <h2 class="h3 pb-4">Drop us a line</h2>
              <form class="needs-validation row"  method="post" id="contact_form"
                        novalidate="novalidate" action="#" enctype="multipart/form-data">
                <div class="col-sm-6 mb-3 pb-1">
                  <label class="form-label" for="cont-fn">Full name<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="text" id="cont_fn" name="cont-fn" placeholder="John Doe" required>
                  <div class="invalid-feedback"></div>
                </div>
                <div class="col-sm-6 mb-3 pb-1">
                  <label class="form-label" for="cont-email">Email address<sup class="text-danger ms-1">*</sup></label>
                  <input class="form-control" type="email" id="cont_email" name="cont_email" placeholder="j.doe@example.com" required>
                  <div class="invalid-feedback"></div>
                </div>
                <div class="col-sm-6 mb-3 pb-1">
                  <label class="form-label" for="cont_phone">Phone number</label>
                  <input class="form-control" type="text" id="cont_phone" name="cont_phone"  data-format="custom" data-delimiter="-" data-blocks="2 4 2 2" placeholder="00-0000-00-00"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                </div>
                <div class="col-sm-6 mb-3 pb-1">
                  <label class="form-label" for="cont-subject">Subject</label>
                  <input class="form-control" type="text" name="cont_subject" id="cont_subject" placeholder="Title of your message">
                </div>
                <div class="col-12 mb-3 pb-1">
                  <label class="form-label" for="cont-message">Message<sup class="text-danger ms-1">*</sup></label>
                  <textarea class="form-control" id="cont_message"  name="cont_message" rows="4" placeholder="Write your message here" required></textarea>
                  <div class="invalid-feedback"></div>
                </div>
                <div class="col-12 pt-2">
                  <button class="btn btn-primary" type="submit" id="cnt_sub">Send Message</button>
                </div>
                <p class="text-danger pt-5" id="error_message"> </p>

              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer-->
    <?php include("footer.php"); ?>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <!-- <script src="vendors/jquery/jquery-2.1.4.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://www.google.com/recaptcha/api.js?render=6Ldb7PAcAAAAALKN6oPEOLjDjOBnMKhDCJ3Bn6KL"></script>    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="vendor/cleave.js/dist/cleave.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/mailchimp.js"></script>
    <script src="js/contact-form.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
    <script >
    $("#cnt_sub").click(function() {
      $myDiv = $('#cont_phone'); $myDiv. css('background-image', 'none');
      $myDiv1 =$('#cont_subject');$myDiv1. css('background-image', 'none');
}); </script>
  </body>
</html>