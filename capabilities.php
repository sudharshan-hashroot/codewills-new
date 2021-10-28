<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CodeWills</title>
    
    <!-- SEO Meta Tags-->
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
            /* pointer-events: none; */
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
            <div class="jarallax-img" style="background-image: url(img/company_banner/capabilitiess.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Our Capabilities</h1>
                        <p class="text-light">
                            True certainty of success comes through honesty & integrity, which has been delivered
                            through insight, support & expertise
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- corevalues -->
        <section>
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">

                <p class="text-center">HashRoot help clients among the world corporate leaders with new opportunities
                    and
                    confront the most strategic challenges in a global perspective. We bring in-front of you with a
                    global
                    perspective for the clients; lay out with strategic services that would be through our expertise
                    across
                    the client lifecycle.
                    Our expertise would be part of your end-to-end requirements and rapidly expanding needs, strategic
                    industry and functional consulting skills across the globe. Our teams deliver cutting-edge
                    expertise,
                    quality measurement and measurable services to clients across the globe.</p>
            </div>
        </section>


        <!-- Awards And Achievements -->
        <section class="bg-secondary">
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <h2 class="mb-5 text-center">Our Strategic Process</h2>
                <div class="row pt-5">
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                    class="ai-trending-up h2 text-primary mt-2 mb-4"></i>
                                <h3 class="h5">What we offer?</h3>
                                <p class="fs-sm text-body">Business is directly related to technology and hence one
                                    needs to be technologically updated to create technologically enabled business
                                    strategy for the successful business-operating model in the future. We are well
                                    versed in latest technological trend in the industry, and can provide competitive
                                    intelligence on this front. We conduct research and can work with your internal IT
                                    team to set priorities and project timeline.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                    class="ai-user-check h2 text-primary mt-2 mb-4"></i>
                                <h3 class="h5">What we did?</h3>
                                <p class="fs-sm text-body">Based on employee suggestions, we developed HashRoot People,
                                    which is much more than just a digital people directory. HashRoot People are capable
                                    of collaborative business networking, where employee profiles begin with corporate
                                    strategies. Each profile is populated with standard company information and our
                                    employees are encouraged to expand their profiles. Employees internal skills and
                                    resume information are automatically pulled into profiles.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <article class="container">
            <div class="pt-6 pb-5 py-sm-6">
                <h2 class="h3">HashRoot Endeavors</h2>
                <p>HashRoot acumen has been envisioned as integrated hub of innovative and leading contour thinking from
                    thought leaders. Whether it's business, technology or operations, we build value, businesses and
                    operating models for the future.</p>
            </div>
        </article>
        <article class="bg-secondary">
            <div class="container ">
                <div class="pt-6 pb-5 py-sm-6 ">
                    <h2 class="h3">A new breed to IT solutions</h2>
                    <p>Bring you a new breed of business management solutions that compliments all the fluctuations of
                        the
                        present dynamic business market. Our Walkway to clients is to help organizations realize the
                        value
                        of implementing successful technological strategies which capitalize on unique and innovative
                        management trend & technologies to their own benefit, no matter however complex, large or small
                        it
                        may be. We have excellent track record of presenting end-to-end strategic services to business
                        with
                        IT perspective. It is vital build strategies that are agile to regulate market dynamics,
                        innovative
                        to stay ahead of competition, transformation to take utmost advantage of the latest technology
                        and
                        optimal to sustain profits.</p>
                </div>
            </div>
        </article>
        <article class="container">
            <div class="pt-6 pb-5 py-sm-6">
                <h2 class="h3">Knowledge to drive you to right solution</h2>
                <p>Our service specialists are always ready to serve you promptly, effectively and accurately. All these
                    virtues have brought us a pool of clients having diverse requirement, knowledge and business savvy
                    to understand the environment. Your development objectives can be achieved through our professionals
                    who are skilled in a range of disciplines, which improves their ability to share best practices and
                    drive innovative solutions. This factor will also help your company to minimize risks and will help
                    in getting faster results. When the traditional sources of technology are becoming irrelevant, the
                    best bet for nations, companies and individuals to succeed is the power of their ideas. We believe
                    that acknowledging such ideas and learning from them is vital as we make progress in today’s
                    environment.</p>
            </div>
        </article>
        <article class="bg-secondary">
            <div class="container ">
                <div class="pt-6 pb-5 py-sm-6">
                    <h2 class="h3">Progressive Training</h2>
                    <p>Day by day, the technologies are keep on changing and new technologies are emerging up. Through
                        this,
                        the professionals constantly need to learn new skills and technologies to keep up with the
                        latest
                        trends. As changes in technology have accelerated, it’s become even more essential for people to
                        master technology to be productive, invaluable employees who optimize, program and invent
                        solutions—and even grow companies of their own. HashRoot provide industry-leading technical
                        training
                        that delivers the most relevant and intuitive technology training.</p>
                </div>

            </div>
        </article>
        <article class="container">
            <div class="pt-6 pb-5 py-sm-6">
                <h2 class="h3">Manage Project End to end</h2>
                <p>HashRoot Operations and Process Transformation drives the design and delivery of value-oriented
                    operations transformations by taking an end-to-end approach to achieving excellence in execution.
                    Our Versatility, uninterrupted availability, extensive knowledge of the current market, experienced
                    hands and state of the heart products enables us to play well in the big picture. Through the Expert
                    innovative combinations of the right technology strategy, the right business, the right operating
                    model and the right execution path, we deliver the success to the business and emerge from them more
                    quickly, developing competitive advantage regardless of economic conditions.</p>
            </div>
        </article>
        <article class=" bg-secondary">
            <div class="container">
                <div class="pt-6 pb-5 py-sm-6 ">
                    <h2 class="h3">Recommend the best</h2>
                    <p>HashRoot focus on understanding and visualizing the right solutions, along with the probable
                        hindrances, thereafter work out proactive strategy that makes an impact on the business. We
                        don’t
                        mind to walk a mile more so as to do enough research through which we confidently help our
                        clients
                        to make an effective decision by opting the preferred path for the Business. We make sure that
                        we
                        mitigate the risk for your company before approaching you with our solution. HashRoot has the
                        culture that provides the best solution to every business. We provide the intersection of
                        business
                        and technology, where we deliver our clients gain measurable benefits that transcend
                        cost-cutting to
                        deliver a true execution advantage, simpler and flexible responses, and rigorous process
                        execution
                        across for the organization to lead it to certainty outcomes.</p>
                </div>
            </div>
        </article>
        <article class="container">
            <div class="pt-6 pb-5 py-sm-6">
                <h2 class="h3">From a big picture to digital picture
                </h2>
                <p>HashRoot Innovations at the intersection of business and technology are leading to the creation of
                    new services, products and applications. These have the potential to change business environment
                    beyond current interpretation. It is at the point of intersection of idea, expertise management,
                    miniaturize, machine data, cloud technologies, smart networks and analytics that break through
                    innovations happen. An institution must renew their core technology into new frontiers and bringing
                    more efficiency, or addressing new ideas and new innovations. Take your picture from the present
                    series and lead your business stands to benefit from this dual mission of Renew-New.</p>
            </div>
        </article>
        <article class=" bg-secondary">
            <div class="container">
                <div class="pt-6 pb-5 py-sm-6 ">
                    <h2 class="h3">Specific about the statement of work</h2>
                    <p>When we try to say what really defines our brand, we didn’t find the answer in the HashRoot
                        branding.
                        We got the answer through our clients. Today, we have come across 1000+ clients that are
                        changing
                        the world through a broad mind relationship. We are doing it by taking our customers beyond the
                        contract. We build relation which benefit both parties are sustained by emotions, behaviour and
                        actions that go beyond that explicit or implied contract. In business, a contract can safeguard
                        all
                        that is in within the “enclosed of control”. In the present uncertain world where businesses are
                        facing new challenges and undergoing changes every day, what we deliver is too truly worthwhile
                        is
                        that which cannot be scripted in any contract - called values.</p>
                </div>
            </div>
        </article>


        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/company_banner/globe.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">HashRoot Difference</h1>
                        <p class="text-light">
                            Build with expert team to drive innovative ideas with the innovative technical experts with
                            sound business outlook and up-to-date knowledge of today's dynamically evolving IT Market
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