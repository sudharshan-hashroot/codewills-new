<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CodeWills</title>
    <meta name="robots" content="noindex">
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
            <div class="jarallax-img" style="background-image: url(img/company_banner/Sustainability\ stratergy.jpg);">
            </div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Our Sustainability Strategy</h1>
                        <p class="text-light">
                            With our sustainability strategy, we aim to become an organization that is economically,
                            environmentally, and socially sustainable. At CodeWills, with our actions, we target to meet
                            the needs of the present generation without having to compromise on future generation
                            requirements by following responsible business practices.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- clients -->

        <!-- corevalues -->
        <section class="bg-secondary">
            <div class="container  mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <h2 class="h3 text-center pb-5">Let's Get Sustainable, Tomorrow Won't Wait</h2>
                <p class="text-center">
                    In many ways, sustainability has simply become part of the way we do business. But when we look at
                    the world around us, many of the issues we identified in our early sustainability reports remain
                    challenges not only for our business but for the broader community. We have also seen new issues
                    emerge. Business as usual, even a more sustainable business, as usual, is not enough. Whilst we will
                    continue with the actions we were quick to embed, such as sustainable sourcing practices and
                    responsible lending and investment policies, we’re increasing our efforts on the emerging societal
                    issues where we have unique skills and expertise to bring about meaningful change. Our people are
                    passionate about it because it makes sense for our business because it’s part of who we are because
                    we know that tomorrow won’t wait.
                </p>
            </div>
        </section>


        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img"
                style="background-image: url(img/company_banner/a\ strong\ stratergy\ for\ a\ long\ term\ business\ growth.jpg);">
            </div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <h3 class="h2 mb-5 text-center text-light">CodeWills’s Strategy</h3>
                <div class="row">
                    <div class="com-md-12">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Understanding the issue</h3>
                                <p class="fs-sm text-body">Demographic change is a key social and economic challenge.
                                    Low fertility rates and increased
                                    life expectancy in population is ageing. The implications are skills shortages and a
                                    bigger
                                    picture of slower economic growth.</p>
                                <p class="fs-sm text-body">With a high proportion of the population already working, we
                                    will need to think more
                                    creatively about how we find and develop the employees of the future - that includes
                                    targeting groups that have traditionally been underemployed. But it doesn’t stop
                                    with us. We
                                    need to help our business customers who are facing the same issues and think about
                                    demographic and cultural change when building the products and services of the
                                    future.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-9  mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Acting on the issue</h3>
                                <p class="fs-sm text-body">Our initial focus is to improve participation - to attract
                                    the widest range of talented
                                    people and then use best practice flexible work practices and a wellbeing model to
                                    improve
                                    participation throughout working life. We’ll meet our own skill needs and share what
                                    we
                                    learn with customers, business peers and government.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Our Focus</h3>
                                <p class="fs-sm text-body">Develop products and services that support an increase in
                                    financial well-being.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <article class="bg-secondary">
            <div class="container ">
                <div class="pt-6 pb-5 py-sm-6">
                    <h2 class="h3">Objective 1</h2>
                    <p>
                        Ensuring our workforce is representative of the community with overall workforce participation
                        quite high, we need to identify and encourage participation amongst groups that are
                        underrepresented in the workplace. Initially we will focus on:</p>
                    <ul>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-2 pb-1"><i
                                    class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Increasing the
                                participation and earning potential of groups currently underrepresented in the
                                workplace through career entry, development and flexible work practices</li>
                            <li class="d-flex mb-2 pb-1"><i
                                    class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Launching leading flexible
                                work practices, understanding that flexibility and mobility are key enablers of
                                participation.</li>
                            <li class="d-flex mb-2 pb-1"><i
                                    class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Promoting the productivity
                                benefits for of a diverse and representative workforce.</li>
                        </ul>
                    </ul>
                </div>

            </div>
        </article>
        <article class="container">
            <div class="pt-6 pb-5 py-sm-6">
                <h2 class="h3">Objective 2</h2>
                <p>
                    Extend working lives and quality of life It’s our goal to provide our employees with the opportunity
                    to extend the length and quality of their working lives, and to work with customers, the Government
                    and other partners on the same challenge. This means helping our people understand the factors that
                    influence their participation in work and their ability to adapt to a changing employment landscape
                    throughout their working life. Ultimately we want to change the way our employees think about their
                    wellbeing at work. To do this we will:
                </p>
                <ul>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                            Roll out a practical tool, well being at CodeWills, to benchmark well being across the group
                        </li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                            Establish targets and develop programs to help employees improve their individual well-being
                            scores</li>
                    </ul>
                </ul>
            </div>
        </article>

        <article class="bg-secondary">
            <div class="container ">
                <div class="pt-6 pb-5 py-sm-6">
                    <h2 class="h3">Objective 3</h2>
                    <p>Anticipate future needs of ageing and culturally diverse customers The impact of these
                        demographic changes will stretch well beyond our own workplace. One aspect we want to tackle is
                        to encourage a national discussion on the factors that shape financial well-being</p>
                </div>

            </div>
        </article>


        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/company_banner/a\ strong\ stratergy\ for\ a\ long\ term\ business\ growth.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">A strong strategy for a long term business growth</h1>
                        <p class="text-light">
                            A team of 4 portfolio managers and research analysts manages our development strategy. The
                            team is headed by Vice President, Mr. Sandeep Anand accompanied by Strategic Analyst Mr.
                            Noyal T. Hari.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary">
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <p class="text-center">Our team is aligned by industry and we leverage our expertise to provide in depth research.</p>
                <p class="text-center">
                    The growth team is organized by industry, with each portfolio manager and research analyst focusing
                    on an area of expertise. While each team member guides the decision making process in his sector,
                    the team's questions and challenges shape the final decision on what goes into and out of the
                    portfolio and the CEO, Mr Anees T makes the final implementation.
                </p>

                <div class="row pt-5">
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Established brand
                                        name</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Free cash flow</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Favourable long
                                        term growth prospects</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Excellent management</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Recurring revenue
                                        stream</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Pricing power</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">Our Strategic Growth strategy seeks long term growth of capital. By investing in
                    high quality businesses that we believe are strategically positioned for long term growth, we seek
                    to:</p>
                <div class="row pt-5">
                    <div class="col-lg-6 col-sm-6 mx-auto mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Deliver strong absolute returns to our clients over timee</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Consistently apply
                                        our long term philosophy, strategy and process</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Manage risk through disciplined portfolio construction and in depth knowledge of
                                        our companies</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
        </section>

        <!-- 
        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/pages/contacts/page-title-bg.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Green Cloud Computing & Environmental Sustainability</h1>
                        <p class="text-light">
                            At CodeWills we generally concentrate on energy efficiency, reducing resource consumption and
                            disposing of electronic waste in a responsible manner.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <article class="container">
            <div class="pt-6 pb-5 py-sm-6">
                <h2 class="h3 text-center">Overview</h2>
                <p>
                    Growing demand of Cloud infrastructure has drastically increased the energy consumption of data
                    centers, which has become a critical issue. High energy consumption not only translates to high
                    operational cost, which reduces the profit margin of Cloud providers, but also leads to high carbon
                    emissions which is not environmentally friendly. Hence, energy-efficient solutions are required to
                    minimize the impact of Cloud computing on the environment. In order to design such solutions, deep
                    analysis of Cloud is required with respect to their power efficiency. Cloud phenomenon may aggravate
                    the problem of carbon emissions and global warming. The reason given is that the collective demand
                    for computing resources is expected to further increase dramatically in the next few years. Even the
                    most efficiently built datacenter with the highest utilization rates will only mitigate, rather than
                    eliminate, harmful CO2 emissions. The reason given is that Cloud providers are more interested in
                    electricity cost reduction rather than carbon emission. Through the use of large shared virtualized
                    datacenters Cloud computing can offer large energy savings. However, Cloud services can also further
                    increase the Internet traffic and its growing information database, which could decrease such energy
                    savings.
                </p>
                <p>
                    Even though there is a great concern in the community that Cloud computing can result in higher
                    energy usage by the datacenters, the Cloud computing has a green lining. There are several
                    technologies and concepts employed by Cloud providers to achieve better utilization and efficiency
                    than traditional computing. Therefore, comparatively lower carbon emission is expected in Cloud
                    computing due to highly energy efficient infrastructure and reduction in the IT infrastructure
                    itself by multi-tenancy. The key driver technology for energy efficient Clouds is Virtualization,
                    which allows significant improvement in energy efficiency of Cloud providers by leveraging the
                    economies of scale associated with large number of organizations sharing the same infrastructure. By
                    consolidation of underutilized servers in the form of multiple virtual machines sharing same
                    physical server at higher utilization, companies can gain high savings in the form of space,
                    management, and energy.
                </p>
            </div>
        </article>

        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/pages/contacts/page-title-bg.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <p class="text-white mb-5">CodeWills follow three key factors that have enabled the Cloud computing to
                    lower energy usage and
                    carbon emissions from ICT. Due to these Cloud features, organizations can reduce carbon emissions by
                    at least 30% per user by moving their applications to the Cloud. These savings are driven by the
                    high efficiency of large scale Cloud data centers.</p>
                <div class="row">
                    <div class="com-md-12">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Dynamic provisioning</h3>
                                <p class="fs-sm text-body">
                                    In traditional setting, datacenters and private infrastructure used to be maintained
                                    to fulfill worst-case demand. Thus companies end up deploying far more
                                    infrastructure than needed. There are various reasons for such over-provisioning, to
                                    guarantee availability of services and to maintain certain level of service quality
                                    to end-users. Such scenarios can be readily managed by cloud infrastructure. The
                                    virtual machines in a Cloud infrastructure can be live migrated to another host in
                                    case user application requires more resources. Cloud providers monitor and predict
                                    the demand and thus allocate resources according to demand. Those applications that
                                    require less number of resources can be consolidated on the same server. Thus,
                                    datacenters always maintain the active servers according to current demand, which
                                    results in low energy consumption than the conservative approach of
                                    over-provisioning.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-7  mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Multi-­tenancy</h3>
                                <p class="fs-sm text-body">
                                    Using multi-tenancy approach, Cloud computing infrastructure reduces overall energy
                                    usage and associated carbon emissions. The SaaS providers serve multiple companies
                                    on same infrastructure and software. This approach is obviously more energy
                                    efficient than multiple copies of software installed on different infrastructure.
                                    Furthermore, businesses have highly variable demand patterns in general, and hence
                                    multi-tenancy on the same server allows the flattening of the overall peak demand
                                    which can minimize the need for extra infrastructure. The smaller fluctuation in
                                    demand results in better prediction and results in greater energy savings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5  mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">Server utilization</h3>
                                <p class="fs-sm text-body">
                                    In general, on-premise infrastructure runs with very low utilization, sometimes it
                                    goes down up to 5-10% of average utilization. Using virtualization technologies,
                                    multiple applications can be hosted and executed on the same server in isolation,
                                    taking the utilization levels up to 70%. This results in more power consumption but
                                    server running at higher utilization can process more workload with similar power
                                    usage.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <!-- ctasection -->
        <section class="container py-5 py-md-6 py-lg-7">
            <div class="row g-0 py-3 py-md-0">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6"
                        style="background-image: url(img/demo/business-consulting/careers-bg.jpg); background-color: #f4f4f6;">
                        <span
                            class="d-sm-none d-md-block d-lg-none position-absolute top-0 start-0 w-100 h-100 rounded-start bg-secondary"
                            style="opacity: 1;"></span>
                        <div class="text-center mx-auto me-sm-5 me-md-0 me-md-auto me-lg-5 pe-lg-3 position-relative zindex-5"
                            style="max-width: 240px;">
                            <h2 class="mb-4 pb-2">Call Now
                            </h2>
                            <a class="btn btn-primary btn-lg" href="tel:+919778426320">+91 9778426320</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column h-100 rounded-end bg-dark px-4 py-5">
                        <div class="py-2 mx-auto text-center" style="max-width: 450px;">
                            <h2 class="text-light">Want to get your product developed?
                            </h2>
                            <p class="text-light mb-4">Request a Call Back
                            </p>
                            <form class="input-group pt-2" data-dashlane-rid="0a8912a8c814ff93"
                                data-form-type="newsletter">
                                <input class="form-control" type="tel" placeholder="Your Phone Number" required="">
                                <button class="btn btn-success" type="submit"><i
                                        class="ai-send fs-xl me-1"></i></button>
                                <span data-dashlanecreated="true"
                                    style="color: initial; font: initial; font-feature-settings: initial; font-kerning: initial; font-optical-sizing: initial; font-variation-settings: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-known.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-size: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: initial; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphens: initial; image-orientation: initial; image-rendering: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 282px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; offset: initial; opacity: 1; order: initial; origin-trial-test-property: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; ruby-position: initial; rx: initial; ry: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 22px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; user-select: initial; vector-effect: initial; vertical-align: initial; visibility: visible; -webkit-app-region: initial; border-spacing: initial; -webkit-border-image: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-hyphenate-character: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-perspective-origin-x: initial; -webkit-perspective-origin-y: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-emphasis: initial; -webkit-text-emphasis-position: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-transform-origin-x: initial; -webkit-transform-origin-y: initial; -webkit-transform-origin-z: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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