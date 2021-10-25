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
            <div class="jarallax-img" style="background-image: url(img/company_banner/empowerment\ of\ employees.jpg);">
            </div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h1 class="text-light">Empowerment of Employees</h1>
                        <p class="text-light">
                            Hire for attitude and train for skills!
                            Our belief is that if you get the culture right, most of the other stuff, like great
                            customer service, or building a great long-term brand or empowering passionate employees and
                            customers, will happen on its own.
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
                    CodeWills makes people feel valued by involving them in decision-making, asking them to participate
                    in the planning process, praising them, and continually providing adequate training and support.
                    This gives our employees the opportunity to contribute towards company's overall success. When we
                    allow our employees to think independently and assist the company, they will respond with increased
                    work effort and greater efficiency. Our team is our Strength also our Reflection. We have attained
                    an edge over corporate competitiveness through various functional, technological and integrated
                    skills of our human talent. Every member in our team is well educated about their core
                    responsibilities, possess high intellectual disciplines, are updated on latest technology, have good
                    product knowledge and are service oriented individuals who work together towards a common business
                    goal.
                </p>
            </div>
        </section>

        <section>
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <h1 class="h2 text-center">CodeWills Team</h1>
                <div class="row pt-5">
                    <div class="col-lg-12 col-sm-6 mx-auto mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        A team that continuously strives to improve team efficiency, which reduces the
                                        clinical errors.
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        A team that rises together and delivers the best in performance, knowledge and
                                        attitude.
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        A team that motivates each other and makes team members join hands to work
                                        together and gain collaborative results, this in turn improves quality of the
                                        product and services.
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        A team, which resolves issues by common understanding on diverging interests
                                        which reduces employee retention.
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        A team that maintains a synergy within various departments and alliances across
                                        the organization that leads to higher employment satisfaction.
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        A team that measures and monitors team performance and facilitates continuous
                                        quality improvement strategies.
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- <p>All of these teams work independently and are responsible to perform different task and
                    arrive at a common platform to deliver their best. Coordinating Team is supposed to work
                    parallel with the core team and is responsible for managing the operational tasks for the
                    Core Team. Contingency Team comes in play under crisis conditions and constitute of members
                    from various team to withstand and up-come the emergency situation. Ancillary Service Team
                    directly receives all instructions, information and communications from client end and its
                    task is specific and limited with immediate attention. Support Service team is wholly
                    responsible in up-keeping the customers interest and keep them delighted by all means.
                    Finally the Administration Team has the most important role to play. As it is responsible to
                    establish and communicate company policies, vision and objective bearing in mind the
                    employee welfare respective to the workplace. Hence holds up the team accountability.</p> -->
        </section>



        <section class="bg-secondary">
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <p>Team CodeWills is a set of collective practices that gives way to unmatched success and quality in
                    everything it delivers. We have different kind of teams performing different task and perform
                    together in coordination to achieve a common goal.</p>
                <div class="row pt-5">
                    <div class="col-lg-4 col-sm-6 mx-auto mb-grid-gutter">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Executive Team
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Coordinating Team
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Management Team
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Contingency Team
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Administration Team
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Ancillary Service Team
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Core Team
                                    </li>
                                    <li class="d-flex mb-2 pb-1"><i
                                            class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                                        Support Service Team
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <p>All of these teams work independently and are responsible to perform different task and
                    arrive at a common platform to deliver their best. Coordinating Team is supposed to work
                    parallel with the core team and is responsible for managing the operational tasks for the
                    Core Team. Contingency Team comes in play under crisis conditions and constitute of members
                    from various team to withstand and up-come the emergency situation. Ancillary Service Team
                    directly receives all instructions, information and communications from client end and its
                    task is specific and limited with immediate attention. Support Service team is wholly
                    responsible in up-keeping the customers interest and keep them delighted by all means.
                    Finally the Administration Team has the most important role to play. As it is responsible to
                    establish and communicate company policies, vision and objective bearing in mind the
                    employee welfare respective to the workplace. Hence holds up the team accountability.</p>
        </section>



        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            <div class="jarallax-img" style="background-image: url(img/company_banner/employees\ in\ the\ planning\ process.jpg);"></div>
            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">
                                    Involving employees in the planning process</h3>
                                <p class="fs-sm text-body">
                                    Self directed work teams meet regularly to brainstorm ways to save money and work
                                    more efﬁciently. They take an active role in the goal setting and planning process
                                    for the company as well as themselves. Whenever possible, we allow our employees to
                                    take an active role in planning the company's future. Instead of simply declaring a
                                    new sales goal, we ask them to come up with their own realistic monthly goal and a
                                    plan to reach that number. Additionally, they'll be more apt to strive to meet the
                                    goal if they know they set it themselves and laid a plan to reach it.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">
                                    Providing continual training and support</h3>
                                <p class="fs-sm text-body">
                                    When we empower our employees, we create an environment where people are encouraged
                                    to explore, discover, take risks and develop trust. CodeWills enable our employees
                                    to succeed by providing them with the means, opportunity and capacity they need to
                                    excel. The result is growth, innovation and satisfaction. Our employees will feel
                                    important; they'll convey those feelings to our customers through quality and
                                    professional service. Empowered employees will always rise to the occasion, do the
                                    best job possible, and help to compete in the global marketplace.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">
                                    Employee's involvement in the decision-making process</h3>
                                <p class="fs-sm text-body">
                                    In general important decisions regarding the business come from senior-level
                                    management. While this is a prudent approach to ensure the company's overall
                                    success, many times these decisions directly affect the lower-level employees. If
                                    the final outcome of the decision is a less than positive one for the employees,
                                    often they feel mistreated and unappreciated. At CodeWills ​we involve our employees
                                    in the decision-making process and therein provide opportunities for all the
                                    employees to explore their ideas.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="card h-100 border-0 shadow card-hover" href="help-single-topic.html">
                            <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                                <h3 class="h5">
                                    Offer Praise Freely</h3>
                                <p class="fs-sm text-body">
                                    In order to empower our employees and develop a sense of competence and confidence,
                                    we praise them for their performance, encourage them to take risks, and acknowledge
                                    their accomplishments, no matter how small. By allowing our employees to be an
                                    active part of the planning process, they know their input matters to the company's
                                    bottom line. This is particularly important when employees are beginning to work on
                                    new tasks or when an employee moves into a new job description.

                                </p>
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
        <section class=" bg-secondary pt-5 pt-md-6 pt-lg-7">
            <div class="container py-3 pt-md-0">
                <div class="row pb-2 pb-md-5">
                    <form class="col-xl-6 col-lg-7 col-md-7 needs-validation mb-5" novalidate="">
                        <h2 class="pb-4">What project are you looking for?</h2>
                        <h3 class="h6 pb-2">Services</h3>
                        <div class="btn-group-toggle pb-3 mb-3" data-bs-toggle="buttons">
                            <label class="btn btn-outline-primary me-2 mb-2 active">
                                <input class="visually-hidden" type="radio" name="services" id="branding" checked="">Web
                                Design
                            </label>
                            <label class="btn btn-outline-primary me-2 mb-2">
                                <input class="visually-hidden" type="radio" name="services" id="ux">Web Application
                            </label>
                            <label class="btn btn-outline-primary me-2 mb-2">
                                <input class="visually-hidden" type="radio" name="services" id="illustration">eCommerce
                                Development
                            </label>
                            <label class="btn btn-outline-primary mb-2">
                                <input class="visually-hidden" type="radio" name="services" id="motion">Mobile
                                Application
                            </label>
                            <label class="btn btn-outline-primary mb-2">
                                <input class="visually-hidden" type="radio" name="services" id="motion">Digital
                                Marketing
                            </label>
                        </div>
                        <div class="input-group mb-3"><i
                                class="ai-user position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control rounded" type="text" placeholder="Name" required="">
                        </div>
                        <div class="input-group mb-3"><i
                                class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control rounded" type="email" placeholder="Email" required="">
                        </div>
                        <div class="mb-3 pb-1">
                            <textarea class="form-control" rows="4" placeholder="Project description"
                                required=""></textarea>
                        </div>
                        <div class="row pt-2">
                            <div class="col-lg-6 col-md-8">
                                <button class="btn btn-primary btn-block" type="submit">Send Request</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-xl-3 col-lg-4 offset-xl-3 offset-lg-1 col-md-5 mb-5">
                        <h2 class="pb-2">Contacts</h2>
                        <ul class="list-unstyled fs-sm mb-4 pb-2">
                            <li><a class="nav-link-style" href="mailto:contact@example.com">contact@example.com</a></li>
                            <li><a class="nav-link-style" href="tel:+15262200459">+91 9778426320</a></li>
                        </ul>
                        <h3 class="h6 pb-2">Or connect with us on:</h3><a
                            class="btn-social bs-outline bs-facebook bs-lg me-2 mb-2" href="#"><i
                                class="ai-facebook"></i></a><a class="btn-social bs-outline bs-twitter bs-lg me-2 mb-2"
                            href="#"><i class="ai-twitter"></i></a><a
                            class="btn-social bs-outline bs-instagram bs-lg me-2 mb-2" href="#"><i
                                class="ai-instagram"></i></a><a
                            class="btn-social bs-outline bs-dribbble bs-lg me-2 mb-2" href="#"><i
                                class="ai-dribbble"></i></a><a class="btn-social bs-outline bs-behance bs-lg me-2 mb-2"
                            href="#"><i class="ai-behance"></i></a>
                    </div>
                </div>
            </div>
        </section>



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