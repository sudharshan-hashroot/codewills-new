<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Global Approach | Codewills</title>
    <!-- SEO Meta Tags-->
    <?php include('metatags.php');?>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="Global Approach | Codewills">
    <meta name="description" content="CodeWills">
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

        a.disabled {
            pointer-events: none;
            cursor: default;
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

        $(function () {
            $("#header").load("header.php");
            $("#signinmodal").load("signinmodal.php");
            $("#footer").load("footer.php");
        });


    </script>
    <!-- Vendor Styles-->
    
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
            <div class="jarallax-img" style="background-image: url(img/company_banner/Global\ approach.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Global Approach</h1>
                        <p class="text-light">
                            We value trust, much more than anything else and we believe, Trust is Business!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- clients -->

        <!-- corevalues -->
        <section class="bg-secondary">
            <div class="container  mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <p class="text-center">
                    A little, yet powerful emotion with which we served our clients, for we have learnt that customer
                    delight and satisfaction is the best business strategy. It's so heart whelming and encouraging to
                    see their goals being achieved through us, their myriad colors of achievement coming true through
                    us, and the warmth of the client's hearts adding strength to our brand. We are patient enough to
                    listen to every smallest requirement client has which enables us to provide the best, which spreads
                    the ray of, smile across every individual associated with it. What we got back was trust from our
                    clients much more powerful than words which speak of glory only.
                </p>
            </div>
        </section>
        <section>
            <div class="container pb-5 ">
                <h2 class="mb-5 pt-5 text-center">Global Footprint</h2>
                <div class="row align-items-center pb-3 ">
                    <div class="col-md-6 col-lg-7 pb-5 ">
                        <div class="mx-auto mx-md-0" style="max-width: 495px;"><img
                                src="https://www.hashroot.com/assets/img/commitments/global-footprint.jpg"
                                alt="Buy on Amazon"></div>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center">
                        <p>
                            We have developed a global sales network to reach out to customers across the world. As of
                            June 2021, CodeWills is incorporated in the United Kingdom, United States, India, and
                            Australia with sales offices in Singapore and the United Arab Emirates catering to customers
                            from 85 countries.
                        </p>
                        <p>
                            We are focusing on a strategic market expansion towards the future and looking forward to
                            expanding our global presence in Canada, Germany, and Japan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Awards And Achievements -->
        <section class="bg-secondary">
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <h2 class="mb-5 text-center">Our Global Approach</h2>
                <div class="row pt-5">
                    <div class="col-lg-12 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">We listen to you</h3>
                                <p class="fs-sm text-body">
                                    Irrespective of the client demography, we ask questions to our clients and we will gather and analyze the most relevant information. The next step on our part will be to develop innovative strategies that create value for the client. We understand the challenges and opportunities our clients face in the real world because we have honed our own skills in the real world. Customer satisfaction is a direct indicator of consumer purchase intentions and customer loyalty. Within organizations, the collection, analysis, and dissemination of these data send a message about the importance of tending to customers and ensuring that they have a positive experience with the company's goods and services. We pride ourselves in our customer care and responsiveness to our existing and new customers, which in turn results in a positive word of mouth, hence resulting in new prospects. 
                                </p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">We showcase the best talents to you</h3>
                                <p class="fs-sm text-body">
                                    Fulfillment of customer’s expectations is the motto of our employees. CodeWills has a strong team of internationally renowned consultants who have access to the latest in global technology. We are proud to leverage their vast expertise with you. Our strategy says to pay equal weightage to technology enhancement ensuring reliable and representative measures of satisfaction. 
                                </p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">In tune with your business strategy</h3>
                                <p class="fs-sm text-body">
                                    CodeWills makes sure that the services we recommend would always be in tune with your business goals. We are also confident of our recommendations about the current market as we use the latest in modern technology to provide unmatched services to our clients. 
                                </p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Ensuring reduction of costs</h3>
                                <p class="fs-sm text-body">CodeWills will ensure that the solutions that we recommend
                                    would help you to reduce the business costs and will help you to become more
                                    competitive in the global market.</p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Optimizes the skills and capabilities of the organization
                                </h3>
                                <p class="fs-sm text-body">Help companies to realise their potential and reach desired
                                    goals. Our solutions always help companies to maximise the potential of workers to
                                    meet the desired objectives.</p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Improves productivity</h3>
                                <p class="fs-sm text-body">Our solutions will be aimed at improving the work
                                    productivity of your company so that you would be able to work.</p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Enables better decision making</h3>
                                <p class="fs-sm text-body">Our technological solutions will always help to improve
                                    decision making, as we would be using more technologies.</p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Leverages/exploits existing/emerging technologies</h3>
                                <p class="fs-sm text-body">Always make sure that solutions follows the latest
                                    technological advancements and will be keeping in tune with the global practices.
                                </p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Ensures acceptable levels of control and risk management</h3>
                                <p class="fs-sm text-body">Ensure that our technological solutions will follow proper
                                    risk management and will always ensure proper backup.</p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Promotes timely execution</h3>
                                <p class="fs-sm text-body">Always keep to deadlines and ensure that the solution that we
                                    give will help you to improve cost efficiency, as it would reduce the operating
                                    time.</p>
                            </div>
                        </a></div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter"><a
                            class="card h-100 border-0 shadow card-hover disabled" href="">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Promotes collaboration across the extended enterprise</h3>
                                <p class="fs-sm text-body">Our solutions will help the company to make a mark among the
                                    parent group and will also help the parent group to reach their desired goals.</p>
                            </div>
                        </a></div>
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
</body>

</html>