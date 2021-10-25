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
            <div class="jarallax-img" style="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Life at CodeWills </h1>
                        <p class="text-light">
                            Employees are our strength and we do things that make them feel happy and appreciated at
                            CodeWills.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- corevalues -->
        <!-- <section class="bg-secondary">
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <p class="text-center">With the advent of digital technologies, businesses are forced to develop
                    cutting-edge products across the entire product engineering spectrum. CodeWills’s expertise in
                    product engineering has successfully increased the pace of product innovation across industries. Our
                    focused product engineering solutions aims to have a positive influence in our client’s business
                    values.</p>
                <p class="text-center">Whether you are looking for an expertise team to build new products or to
                    maintain your existing products? CodeWills can help you with powerful product engineering solutions
                    that transforms your vision into successful real-world products. We are at the forefront of adopting
                    next-gen technologies to deliver feature-rich, innovative products to end-users. Our product
                    engineering services meet the evolving market demand by improving the performance, scalability and
                    security of your product.</p>
            </div>
        </section> -->


        <section>
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <h3 class="h3 text-center">Establishing your career path</h3>
                <p class="text-center">
                    Try making your next career growth with CodeWills and you will leap towards achieving your
                    potential. CodeWills career development will provide you with the skills, knowledge, and confidence
                    you need to take your career forwards. Essentially there are various challenges that will help you
                    progress your career in the direction that interests you the most. You'll be given a good deal of
                    opportunity to get diverse experience and probe the divergent levels of our business.
                </p>

                <div class="row pt-5">
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Your development is
                                        of core importance to us</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>It will pitch in to
                                        an engaging and positive workplace for all</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Provides
                                        opportunities to identify and reward</li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>It is the
                                        foundation for continued success - yours and ours</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <article class="bg-secondary">
            <div class="container ">
                <div class="pt-6 pb-5 py-sm-6">
                    <h2 class="h3">Continuous learning</h2>
                    <p>The Learning that take place in the workplace will regularly replenish and strengthen your
                        technical skills such that it will act as a guide leading to enhanced services and better client
                        relationships. Our Growth, Prosperity, Success and our clients depends on our people hence
                        considering their development seriously.</p>
                </div>

            </div>
        </article>
        <article class="container">
            <div class="pt-6 pb-5 py-sm-6">
                <h2 class="h3">The guidance you require the most when needed</h2>
                <p>
                    Training and development enable you to enrich your skills and expertise in your field with the help
                    of a guide. This ranges from daily informal on-the-job coaching to periodic performance reviews. So
                    at one end of the scale, you will be provided with a trainer who will be in charge of training you
                    about particular skills or issues, and at the other, you'll have a manager who will be constantly
                    keeping a record of your performance.
                </p>
            </div>
        </article>
        <article class="bg-secondary">
            <div class="container">
                <div class="pt-6 pb-5 py-sm-6 ">
                    <h2 class="h3">Work culture</h2>
                    <p>CodeWills emphases is primarily on corporate governance, this leads to an effective decision
                        making processes wherein we make most our employees participate in decision making processes,
                        nerveless forget that what we are today is the thrive of our employees. It is persistent to
                        uphold high standards of conduct based on clarity and accountability. We understand the
                        importance of transparency in corporate governance to capture confidence of stakeholders in
                        management and what witnesses is improved productivity. CodeWills impart a great predominance to
                        Employee empowerment, this is an essential function of our organization. As for the empowerment
                        we provide special training programs and events to cultivate knowledge to act wisely. It's
                        inevitable for our employees to take right decisions at crucial situations.</p>
                    <p>We provide 3 month training program for most of our employees to make them learn new skills and
                        make them suitable enough to handle situation amicably. Our highly skilled trainers persistently
                        constant training to modulate employees to our desired concept. This makes us attain our core
                        competence Our culture is expressed by way of values we uphold and those ethic we follow.
                        CodeWills aims to build a strong business relation with all our clients by providing proper
                        quality service at specified time, through these time span we had succeeded in building up a
                        relatively strong and sustainable client base. In CodeWills we give a great priority towards
                        health and safety of all our employees. Our employee welfare programs help our employees
                        economically to cope up with various situation of life. Its through employees satisfaction and
                        loyalty we found our road map to conquer success.</p>
                </div>
            </div>
        </article>


        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/company_banner/employees\ in\ the\ planning\ process.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Why Join CodeWills?</h1>
                        <p class="text-light">
                            We always create an ambience of positivity in the most adverse of circumstances. The vibes
                            are great. The spirit is high. The optimism blinding. The sense of achievement rock solid.
                            It is impossible not to get caught up in all the new style that is happening here at
                            CodeWills.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-secondary pt-5 pb-7 pt-md-7">
            <div class="container">
                <div>
                    <div>
                        <h2 class="h3">Leadership Style</h2>
                        <p>Our leader understands the need of emotional intelligence and fierce company pride to guide a
                            team as varied as in CodeWills. You work and improve your skills here. We give our employee
                            the
                            liberty in formulating business, using the cutting edge technologies and of course the big
                            data
                            for managing some of the most difficult and sophisticated projects. Our team's biggest asset
                            is
                            the sheer lack of insecurity that would allow them to experiment and work creatively. Our
                            leader
                            will not stay back as knowing everything but will create harmony and trust within a team.
                            Our
                            leadership style is that we allow team members to hog the attention and leader will
                            understand
                            the unique working style of each of his member and will abstain always from imposing
                            generic,
                            restricting diktats.</p>
                        <p>We always create an ambience of positivity in the most adverse of circumstances. Our
                            leadership
                            style will instil a value called "consistency of purpose". Our leadership style is that we
                            encourage our leaders to take courageous decisions.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 pb-7 pt-md-7">
            <div class="container">
                <div>
                    <div>
                        <h2 class="h3">Appreciation style</h2>
                        <p>We always encourage and appreciate our employee to walk up to us and share their new ideas
                            and we in-turn assist in shaping a innovative product using their ideas and intelligence.
                            The company is proud to announce that the life at CodeWills has helped to minimize the job
                            attrition which has been affecting many solution providers and that has also helped to
                            improve our capacity to serve clients on a long-term basis.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary pt-5 pb-7 pt-md-7">
            <div class="container">
                <div>
                    <div>
                        <h2 class="h3">Training style</h2>
                        <p>We endeavours to surpass international standards when it comes to working with clients. Our
                            organization has been always giving importance to best practices in the business and we
                            would help the clients to grow. Our people ultimately determine CodeWills effectiveness and
                            we place great value on training and development. Our effective HR team develops and
                            delivers programs to improve the skills and knowledge of our people in key areas such as
                            business strategy, technology, business best practices, cost optimization, global business
                            services, and project management. We give importance to training, as our team members can
                            stay current on the latest software releases from leading vendors. Total customer
                            satisfaction has been the prime focus of our training rooted in its 3 P approach which,
                            people, product and process.</p>
                        <p>With these guidelines acting as pillars, the CodeWills has not only grown by leaps and
                            bounds,
                            but also won recognition and respect from its clients, and industry.</p>
                    </div>
                </div>
            </div>
        </section>




        <!-- <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/pages/contacts/page-title-bg.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Team@ CodeWills</h1>
                        <p class="text-light">
                            Our team believes in consensus decision making and accountability, mutual encouraging
                            mentality, collectively resolving conflicts, acknowledgement, setting high standards,
                            clarity and appreciation.
                        </p>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- 
        <section class="pt-5 pb-7 pt-md-7">
            <div class="container">
                <div>
                    <div>
                        <p>Our team is our strength and also our reflection. We have attained an edge over corporate
                            competitiveness through various functional, technological and integrated skills of our human
                            talent. Every member in our team is well educated about their core responsibilities, possess
                            high intellectual disciplines, are updated on latest technology, have good product knowledge
                            and are service oriented individuals who work together towards a common business goal.</p>
                        <p>Team composition constitutes a right combination of team individuals based on their
                            attributes corresponding to the business/ corporate task assigned to them. Team with high
                            performance has members who are mutually accountable for each others performance.Our team
                            believes in consensus decision making and accountability, mutual encouraging mentality,
                            collectively resolving conflicts, acknowledgement, setting high standards, clarity and
                            appreciation.</p>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="bg-secondary pt-5 pb-7 pt-md-7">
            <div class="container">
                <div>
                    <div>
                        <h2 class="h3 text-center mb-5">Factors that identifies a performer in a team</h2>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                                <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                                    <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                            class="ai-plus h2 text-primary mt-2 mb-4"></i>
                                        <h3 class="h5">Engagement</h3>
                                        <p class="fs-sm text-body">
                                            Is the enthusiasm, efforts and initiative an employee cultivates to
                                            accomplish his task.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                                <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                                    <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                            class="ai-crosshair h2 text-primary mt-2 mb-4"></i>
                                        <h3 class="h5">Satisfaction</h3>
                                        <p class="fs-sm text-body">Is the measurement of the extend to which they feel
                                            that the company has successfully met their expectations at work..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                                <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                                    <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                            class="ai-user-minus h2 text-primary mt-2 mb-4"></i>
                                        <h3 class="h5">Intention to quit</h3>
                                        <p class="fs-sm text-body">
                                            It's the period of time span an employee decides to remain associated with
                                            the company.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-grid-gutter mx-auto">
                                <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                                    <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                            class="ai-user-plus h2 text-primary mt-2 mb-4"></i>
                                        <h3 class="h5">Leadership</h3>
                                        <p class="fs-sm text-body">People who can lead and motivate others by directing
                                            and
                                            encouraging them in times of both prosperity and challenge.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Engaged employee spreads positiveness across every sphere and its this enthusiasm which is
                            passed on to the customers. Employees who share a healthy and positive relation with their
                            managers are tend to be engaged mostly generating better results. Personal and collective
                            appraisals is yet another strong way to pamper and encourage. Such practices keeps their
                            spirits high and meets their expectations. We ensure that we acknowledge, appreciate and
                            recognise their efforts which are helpful and important. Every year employees get nominated
                            and voted to be chosen in the following criteria:</p>
                    </div>
                </div>
            </div>
        </section> -->



        <section class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
            <h2 class="mb-5 text-center">Culture @ CodeWills</h2>
            <p class="text-center"> Our culture is our brand. We ensure that we acknowledge, appreciate and recognise
                our
                employee efforts which are helpful and important.
            </p>
            <div class="row pt-5">
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                        <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                class="ai-check h2 text-primary mt-2 mb-4"></i>
                            <h3 class="h5">Involvement</h3>
                            <p class="fs-sm text-body">
                                This means that everyone's involvement is mandatory in any work that has to be done, may
                                it be an important decision that has to be taken to the various celebrations conducted
                                in the workplace. Diversity of thought and ideas enables us to provide better services
                                to our clients.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                        <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                class="ai-check-square h2 text-primary mt-2 mb-4"></i>
                            <h3 class="h5">Support and rewards
                            </h3>
                            <p class="fs-sm text-body">
                                We're committed to giving you the experiences you need to progress and develop that will
                                help you to excel and achieve your potential. Reward and recognition are important
                                features of life here too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                        <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                class="ai-user-plus h2 text-primary mt-2 mb-4"></i>
                            <h3 class="h5">Employee engagement</h3>
                            <p class="fs-sm text-body">
                                Being a family member of CodeWills, there are various ways by which we engage each and
                                every one. Starting right from birthday celebrations to being a part of the various
                                festive seasons are some of the occasions our people do not miss at any point in time.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="bg-secondary">
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <h2 class="mb-5 text-center">Becoming A Member Of CodeWills</h2>
                <p class="text-center"> There are a series of criteria that we look up to and expect you to meet. If the
                    expectations are met, you can relax knowing the fact that you will feel comfortable within our
                    working
                    environment Few qualities we look forward to in an individual are as follows:
                </p>
                <div class="row pt-5">
                    <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                    class="ai-eye h2 text-primary mt-2 mb-4"></i>
                                <h3 class="h5">Excel</h3>
                                <p class="fs-sm text-body">In search of high performers, who consistently deliver
                                    quality
                                    work while continually looking for ways to improve.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                    class="ai-crosshair h2 text-primary mt-2 mb-4"></i>
                                <h3 class="h5">Integrity</h3>
                                <p class="fs-sm text-body">People who know how to build relationships by doing the right
                                    thing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                    class="ai-user-plus h2 text-primary mt-2 mb-4"></i>
                                <h3 class="h5">Leadership</h3>
                                <p class="fs-sm text-body">People who can lead and motivate others by directing and
                                    encouraging them in times of both prosperity and challenge.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-grid-gutter mx-auto">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                                    class="ai-arrow-up h2 text-primary mt-2 mb-4"></i>
                                <h3 class="h5">
                                    Energy and enthusiasm</h3>
                                <p class="fs-sm text-body">People who are determined and are passionate about helping
                                    our
                                    clients achieve their potential.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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