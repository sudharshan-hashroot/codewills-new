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