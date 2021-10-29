<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our Executive Leadership Team | Codewills</title>

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

        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/company_banner/Leadership.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Meet the Leaders of CodeWills</h1>
                        <p class="text-light">
                            An innovative and collective group of like-minded folks making useful and enduring
                            technology products.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- clients -->

        <section class="bg-secondary py-5 py-md-6 py-lg-7">
            <div class="container py-3 py-lg-4">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="mx-auto mx-md-0" style="max-width: 350px;"><img class="d-block"
                                src="https://www.hashroot.com/assets/img/hashroot-ceo/anees-hashroot-ceo.jpg"
                                alt="Mobile screens"></div>
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <h2 class="h3 mb-4">Anees T</h2>
                        <h2 class="h5 mb-4 text-body">Founder & CEO</h2>
                        <p class="text-muted mb-5">
                            Anees T is focused on strengthening strategic partnerships with clients, exploring new
                            verticals, making high-quality investing decisions to advance business, increasing client
                            relevance, and evolving the company's business model towards achieving CodeWill's
                            aspirations of becoming the next generation technology partner. Anees have more than 12
                            years of experience and hold a bachelor's degree in computer science and engineering from
                            Government Engineering College, Palakkad. He is also the co-founder of Hugues London Ltd
                            (UK), Noanz Enterprises (India), Founder & CEO of HashRoot, President of ServerAdminz Ltd,
                            and Founder of The HUBE (IN).
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Leadership Team -->
        <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 pt-5 d-none">
            <h2 class="pb-4 mb-4 text-center">Advisory Board</h2>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/john.jpeg"
                                alt="Sarah Cole"></div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">John M. Peairs
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/Bill.jpeg"
                                alt="Sarah Cole"></div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Bill Daniher</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/raj.jpeg" alt="Sarah Cole">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Raj Kapany</h3>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- Leadership Team -->
        <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 pt-5">
            <h2 class="pb-4 mb-4 text-center">Leadership Team</h2>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/anees-ceo.jpg"
                                alt="Sarah Cole"></div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Anees T</h3>
                            <p class="fs-xs text-body mb-0">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/sandeep.jpg"
                                alt="Richard Davis">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">
                                Sandeep Anand</h3>
                            <p class="fs-xs text-body mb-0">Chief Administrative Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/sachin.jpg"
                                alt="Richard Davis">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Sachin Raveendran</h3>
                            <p class="fs-xs text-body mb-0">Chief Operating Officer</p>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/fahad3.jpg"
                                alt="Richard Davis">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">
                                Fahad M</h3>
                            <p class="fs-xs text-body mb-0">Strategy & Business Operations</p>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/febina.jpg"
                                alt="Emma Brown"></div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Febina K V</h3>
                            <p class="fs-xs text-body mb-0">Chief Product Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/krishnaprasad.jpg"
                                alt="Rosalie Lyons">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Krishna Prasad K</h3>
                            <p class="fs-xs text-body mb-0">Head of Technical Department</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter ">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/noyal.jpg"
                                alt="Jane Tanaka"></div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Noyal T. Hari</h3>
                            <p class="fs-xs text-body mb-0">Vice President of Legal Affairs</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter d-none">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/rantel.jpg"
                                alt="Sanomi Smith"></div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Rantel P</h3>
                            <p class="fs-xs text-body mb-0">Director of Software Services</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter d-none">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/azim.jpg"
                                alt="Charlie Welch">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Azim Kadersha</h3>
                            <p class="fs-xs text-body mb-0">Director of Operations - Australia</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter d-none">
                    <div class="card card-curved-body card-hover border-0 shadow mx-auto" style="max-width: 21rem;">
                        <div class="card-img-top card-img-gradient"><img src="img/leadership/Simal.jpeg"
                                alt="Richard Davis">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h6 card-title mb-2">Simal Soin</h3>
                            <p class="fs-xs text-body mb-0">Sales Operations - United States</p>
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