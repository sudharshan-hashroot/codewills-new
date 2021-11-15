<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Business Continuity Plan| CodeWills by HashRoot</title>

    <!-- SEO Meta Tags-->
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="Business Continuity Plan | CodeWills by HashRoot">
    <meta name="description"
        content="HashRoot is a global company that has reputation for its ability to help customers achieve their business objective by providing quality IT managed services.">
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
        <div class="modal fade" id="modal-enquirenow" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content border-0">
                    <div class="view show" id="modal-enquirenow-view">
                        <div class="modal-header border-0 bg-dark px-4">
                            <h4 class="modal-title text-light">Enquire Now</h4>
                            <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                                aria-label="btn-close "></button>
                        </div>
                        <div class="modal-body px-4">
                            <p class="fs-ms text-muted">Please Provide following details</p>
                            <form class="needs-validation" novalidate>
                                <div class="mb-3">
                                    <div class="input-group"><i
                                            class="ai-user position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                        <input class="form-control rounded" type="text" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group"><i
                                            class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                        <input class="form-control rounded" type="email" placeholder="Your E-mail"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group"><i
                                            class="ai-phone position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                        <input class="form-control rounded" type="tel" placeholder="Your Mobile Number"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <i class="ai-message-square position-absolute start-0 translate-middle-y ms-3"
                                            style="top: 15%!important;"></i>
                                        <textarea rows='5' class="form-control rounded" type="text"
                                            placeholder="Your Message" required></textarea>
                                    </div>
                                </div>

                                <button class="btn btn-primary d-block w-100" type="submit">Enquire Now</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page content-->
        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax="" data-speed="0.25"
            style="background-image: none;"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>

            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h2 class="h1  text-light mb-4 pb-4">Business Continuity Plan </h2>
                        <!-- <p class="text-light">
                        This privacy policy describes how Codewills Limited collects, uses, and discloses your information in connection with the use of our services, and applications.


                    </p> -->
                    </div>
                </div>
            </div>
            <div id="jarallax-container-0"
                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
                <div class="jarallax-img"
                    style="background-image: url(&quot;img/company_banner/Life at hashroot.jpg&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1089px; height: 802.25px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 67.375px; transform: translate3d(0px, -36.9531px, 0px);"
                    data-jarallax-original-styles="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);">
                </div>
            </div>
        </section>
        <section>
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">

                <p class="text-center">As the world is trying to navigate the ongoing Covid-19 crisis, there are a
                    number of measures that organizations need to adopt in order to ensure their business continuity.
                </p>
                <p class="text-center">
                    Here are a few Covid-19 business continuity plans that we follow in our organizations to ensure a
                    smooth and efficient operation.
                </p>

            </div>

        </section>


        <section class="container bg-secondary rounded-3">
            <h2 class=" py-5 text-center">How We Are Prepared As A Business?
            </h2>
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                    <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                        <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                            <h3 class="h5">Prioritize Employee Safety</h3>
                            <p class="fs-sm text-body">
                                Ensuring the safety of our employees has been our priority. As a part of this, we expand
                                our remote work arrangements that allow our employees to work from their homes safely.
                                We have even initiated a lot of employee well-being schemes, and policies that support
                                and ensure a safe work environment for our employees.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                    <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                        <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                            <h3 class="h5">Reshape Business Strategy to Ensure Operational Continuity</h3>
                            <p class="fs-sm text-body">
                                Our team of consultants leverage chat, voice, video, and other collaboration tools to
                                ensure the ongoing operation of business service. We even set up emergency action plans
                                and allotted memory tools and resources as a part of emergency preparedness. We can even
                                set up a response team who are available 24/7 to ensure continuity of the client's
                                operations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                    <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                        <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                            <h3 class="h5">Manage Cyber Risks</h3>
                            <p class="fs-sm text-body">
                                We ensure that all the operations are executed 24/7 remotely. We have implemented
                                policies that ensure confidentiality and protection of data to carry out work securely
                                when out of the office.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-grid-gutter mx-auto">
                    <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                        <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                            <h3 class="h5">
                                Proper Communication with Clients</h3>
                            <p class="fs-sm text-body">
                                We do timely and transparent communications with the clients about the activities we are
                                carrying out. In case of any short disruption of our service, we will properly
                                communicate with the clients and keep them informed about it.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <div class="mb-5">
                    <p>Hashroot is committed to providing our clients with regular updates. We express our gratitude
                        to our clients for keeping trust and understanding us at this time and we stay focused in
                        offering the highest level of services to our clients, while working together to overcome the
                        risks associated with COVID-19.</p>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
      <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="vendor/simplebar/dist/simplebar.min.js"></script>
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
</body>

</html>