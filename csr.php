<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our Corporate Social Responsibility Policy | Codewills </title>
    <!-- SEO Meta Tags-->
    <?php include('metatags.php');?>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="Our Corporate Social Responsibility Policy | Codewills">
    <meta name="description" content="At Codewills, we believe that accepting CSR drives us to a better business and it is our obligation to deliver the best possible services to our general public">
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
    <div class="page-loading active d-none">
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
            <div class="jarallax-img"
                style="background-image: url(img/company_banner/corporate\ social\ responsibility.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Corporate Social Responsibility</h1>
                        <p class="text-light">
                            In addition to offering quality software development services, we as an ethical corporate
                            citizen consider ourselves responsible for offering something to the community we serve. We
                            make sure that our actions bring balance between the social, economic, and environmental
                            aspects of our organization.
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
                    CodeWills is conscious and concerned for its CSR policies. We value the basic concept of social
                    responsibility and strive hard to implement all our CSR goals. Technology is responsible for the
                    increase of global connectivity and has contributed a lot in spreading awareness for the social
                    responsibility towards the society and the prevalent situations that were once ignored. Now a days
                    technology is not only responsible to connect but it also ensures that it gives back some percentage
                    of it to the society. Our CSR activities contribute an important part of cooperate strategy where we
                    give a predominant importance to reputation and goodwill. Indeed we have directly involved in may
                    social and environmental issues. We at CodeWills are aware on our corporate social responsibilities.
                    We have obligations that are environmental, philanthropical and we follow an ethical labor
                    practices. We don’t mind going an extra mile to contribute to our environment and doing donations to
                    national and local authorities/ organizations.
                </p>
                <p class="text-center">
                    The directors of CodeWills give great predominance to the concept of corporate social responsibility
                    and corporate governance. CodeWills believes that the success of an organization is not just limited
                    to wealth maximization rather accountable to the society environmentally and should also posse’s
                    social commitment. We work with various non profit organization for the empowerment of weaker
                    section of the society by providing better education and better standard of living for a sustainable
                    livelihood by prioritizing the requisites for the journey towards a better way to life and there by
                    help the country to rise its human development index. CodeWills believe and preaches Green Computing
                    or green IT, which refers to environmentally sustainable computing or IT whose goals are to reduce
                    the use of hazardous materials, maximize energy efficiency during the product's lifetime, and
                    promote the recyclable or biodegradability of defunct products and factory waste. As per this
                    concept we generally concentrate on energy efficiency, reducing resource consumption and disposing
                    of electronic waste in a responsible manner.
                </p>
            </div>
        </section>



        <section>
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <h2 class="h3 text-center">CSR activities of Codewills (2009 – 2019)</h2>

                <div class="row pt-5">
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Worked closely in hands with non profit organizations for providing better
                                        education and health facilitates.</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Safe drinking water projects and better sanitation facilities.</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Conducting campaign for channelizing resources and thereby achieving better
                                        standards of life</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Providing critical aid to victims affected by natural calamities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        </section>


        <!-- <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/pages/contacts/page-title-bg.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <p class="text-white pb-5">
                    CodeWills follow three key factors that have enabled the Cloud computing to lower energy usage and
                    carbon emissions from ICT. Due to these Cloud features, organizations can reduce carbon emissions by
                    at least 30% per user by moving their applications to the Cloud. These savings are driven by the
                    high efficiency of large scale Cloud data centers.</p>
                <div class="row">
                    <div class="com-md-12">
                        <div class="card h-100 border-0 shadow card-hover" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Dynamic provisioning</h3>
                                <p class="fs-sm text-body">
                                    At CodeWills we generally concentrate on energy efficiency, reducing resource
                                    consumption and disposing of electronic waste in a responsible manner. Technology is
                                    responsible for bringing increase of global connectivity and has controlled a lot in
                                    spreading awareness on social aspects that were once ignored. Now a day’s technology
                                    not only connects but also ensures that it gives back some percentage of its social
                                    responsibility. Green computing is the environmentally responsible use of computers
                                    and related resources. Such practices include the implementation of energy efficient
                                    central processing units (CPUs), servers and peripherals as well as reduced resource
                                    consumption and proper disposal of electronic waste. Computers today have become a
                                    necessity not only in offices but also at homes. No doubt, computers have made doing
                                    various tasks very easy and efficient; they pose a great problem, which is affecting
                                    the environment adversely. As the number of computers is increasing day by day, so
                                    do they consume the amount of electricity, which in turn is increasing the carbon
                                    content in atmosphere. People have realized this problem and measures are being
                                    taken which help in minimizing the power usage of computers. Superficially, this can
                                    be called as Green Computing. In a deeper sense, Green Computing is the study, which
                                    lays stress on the operation of computers and related peripherals in order to
                                    minimize the carbon footprint.
                                </p>
                                <p class="fs-sm text-body">
                                    We at CodeWills are aware on our corporate responsibility. We owe it to our
                                    environmental philanthropic and ethical labor practices. We are happy to go an extra
                                    mile to contribute to our environment and doing donations to national & local
                                    authorities. We treat our employees fairly & ethically to ensure their safety &
                                    prosperity. Recent study says that electronics make up approximately 1% of the
                                    municipal solid waste stream. Electronic waste is growing at the rate of 3 times the
                                    rate of the municipal waste. Donate the old computers to needful like schools,
                                    non-profitable organizations & lower income family are our ideal targets. We support
                                    the recycling of the computers by electronic recycling organizations. We encourage
                                    use of power safety surge protections and Back up ES.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Smarter & Solar powered building</h3>
                                <p class="fs-sm text-body">
                                    It has been estimated that building uses about 30% of electricity. Within a span of
                                    2030 building would be the largest emitter of green house gas. CodeWills located at
                                    Infopark, Cochin has the best building structure that could manage all type of
                                    energy to maintain has a Green House Office and roof of all buildings at Infopark
                                    are installed with Solar Panels. This would benefit the company to reduce energy
                                    consumption and reduces operating cost, which we could provide for accounting
                                    standards that would help other business firms.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Green Data Center
                                </h3>
                                <p class="fs-sm text-body">
                                    We could find tremendous growth in IT for the past few years. At the same time there
                                    has been lot of challenges in regulations, rising energy costs, expanding
                                    datacenters. We build on a green infrastructure and focus on clear infrastructure
                                    and we manage data centers, facilities and building management systems to reduce
                                    costs, reduce operational problems and prepare rapidly emerging regulatory
                                    environment. We have advanced approach to manage and control energy beyond the data
                                    center which solves most of the today’s energy issues.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->




        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/company_banner/Corporate\ governance.jpg);">
            </div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Corporate Governance</h1>
                        <p class="text-light">
                            The time is always right to do what is right!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- corevalues -->
        <section>
            <div class="container  mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <p class="text-center">
                    Codewills corporate governance ensures proper management with the directors. We ensure an agile,
                    proper performance is necessary to ensure the highest standards of corporate governance.
                </p>
                <p class="text-center">
                    Our company is built with reputation, which is delivered not just through business or market
                    performance. It comes from the core values practiced by our company. Inherently these values are
                    defined by Integrity. Integrity lays down the guidelines for how we all behave and work. What
                    follows is a ready reckoner for Codewills employees to consult whenever they come to a crossroad.
                </p>
                <p class="text-center">
                    Codewills vehemently agree to the concept of corporate governance and corporate social
                    responsibility. In pursuing the company's corporate aspiration to be a leader in software
                    development service, the board is steadfast in maintaining high standards of corporate governance
                    with a view to enhancing stakeholder value, increasing confidence, establishing customer trust and
                    building a competitive organization.
                </p>
                <p class="text-center">
                    The Board meets are held every quarter with additional meetings convened as and when urgent issues
                    and important decisions are required to be taken between the scheduled meetings. At the end of
                    financial period 31st March 2019, the board met 10 times to deliberate and consider a variety of
                    significant matters that required its guidance and approval. All Directors have complied with the
                    requirement that directors must attend at least 75% of Board meetings held in the financial period,
                    and attended at least 50% of Board meetings held in financial year 31 March 2019 pursuant to the
                    listing requirements. The current practice is to appoint Board members to appear on subsidiary
                    boards, in particular the key overseas subsidiaries, to maintain oversight and ensure the operations
                    of the respective subsidiaries are aligned with the strategies and objectives.
                </p>
            </div>
        </section>

        <section class="bg-secondary">
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <div class="row pt-5">
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                    class="ai-book-open h2 text-primary mt-2 mb-4"></i>
                                <h3 class="h5">Corporate Governance policies</h3>
                                <p class="fs-sm text-body">
                                    CodeWills corporate governance ensures proper management with the directors. We
                                    ensure an agile, proper performance is necessary to ensure the highest standards of
                                    corporate governance. At CodeWills, the board of directors is at the core of our
                                    corporate governance practice and oversees how the management serves and protects
                                    the long-term interests.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="#">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                    class="ai-bookmark h2 text-primary mt-2 mb-4"></i>
                                <h3 class="h5">Corporate Governance report</h3>
                                <p class="fs-sm text-body">
                                    As a part of our commitment to follow global best practices, we comply with the BODs
                                    Corporate Governance Guidelines 2007, and the recommendations of the management
                                    members.
                                </p>
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