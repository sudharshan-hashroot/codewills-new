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
.awards{
    width: 12rem;
}
.bannerright{
    background-size: cover;
    background-position:right;
}
.bannerleft{
    background-size: cover;
    background-position:left;
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
                    <input class="form-control rounded" type="text" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="input-group"><i
                      class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control rounded" type="email" placeholder="Your E-mail" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="input-group"><i
                      class="ai-phone position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control rounded" type="tel" placeholder="Your Mobile Number" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="input-group">
                    <i class="ai-message-square position-absolute start-0 translate-middle-y ms-3"
                      style="top: 15%!important;"></i>
                    <textarea rows='5' class="form-control rounded" type="text" placeholder="Your Message"
                      required></textarea>
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
    <section class="jarallax bg-dark py-7" data-jarallax="" data-speed="0.25">
        
        <div class="container py-5 py-sm-7 text-center">
          <div class="py-md-6">
            <h1 class="text-light pb-1">Delivering the Beyondness since 2008            </h1>
            <p class="fs-lg text-light">As an Information Technology company since 2008, HashRoot helps organizations assess their needs and plan thereby implement the right technology for the goal, budget and time line. This assures a custom tailored solution to integrate with existing environments and provides a growth path for the future.            </p>
          </div>
        </div>
      <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div class="jarallax-img" style="background-image: url(&quot;img/demo/booking/hero-bg.jpg&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1348px; height: 866.5px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 35.25px; transform: translate3d(0px, -35.25px, 0px);" data-jarallax-original-styles="background-image: url(img/demo/booking/hero-bg.jpg);"></div></div></section>
    <!-- clients -->

    <!-- corevalues -->
    <section class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
      <h2 class="mb-5 text-center">What drives us</h2>
      <p class="text-center">HashRoot built a global reputation for its ability to help customers to achieve their
        business objectives by providing innovative, best in class IT Outsourcing, Technology, Solutions and Consulting
        based products and services.</p>
      <div class="row pt-5">
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
            href="help-single-topic.html">
            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                class="ai-eye h2 text-primary mt-2 mb-4"></i>
              <h3 class="h5">Vision</h3>
              <p class="fs-sm text-body">Our business is about delivering customer friendly solutions driven by value,
                service and integrity to meet the clients' needs, on time.</p>
            </div>
          </a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
            href="help-single-topic.html">
            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                class="ai-crosshair h2 text-primary mt-2 mb-4"></i>
              <h3 class="h5">Mission</h3>
              <p class="fs-sm text-body">We make technology easy, manageable, and affordable by offering a complete
                computing solution with complete support and accountability. Our goal is to help you succeed, reduce
                costs and make the most of your technology investment.</p>
            </div>
          </a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
            href="help-single-topic.html">
            <div class="card-body ps-grid-gutter pe-grid-gutter text-center"><i
                class="ai-user-plus h2 text-primary mt-2 mb-4"></i>
              <h3 class="h5">Values</h3>
              <p class="fs-sm text-body">We always uphold our values of Integrity, Commitment, Confidentiality,
                Professionalism and Dedication.</p>
            </div>
          </a></div>
      </div>
    </section>


    <!-- Awards And Achievements -->
    <section class="bg-secondary">
      <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
        <h2 class="mb-5 text-center">Awards & Achievements</h2>
        <p class="text-center">HashRoot is a synonym to credibility and then brings in more and more recognitions to us.
          Every business concern earns to gain recognition for its outstanding achievements and innovative services or
          products in order to distinguish themselves from competitors.</p>
        <div class="row pt-5">
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
         <img class="awards" src="./img/homepage/awards/webp/bizzaward.webp" alt="">
                <h3 class="h5">THE BIZZ AWARDS 2019</h3>
                <p class="fs-sm text-body">HashRoot joined the elite group of companies that have consistently
                  demonstrated business excellence.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">  
                  <img class="awards" src="./img/homepage/awards/webp/crown commercial.webp" alt="">
                <h3 class="h5">CROWN COMMERCIAL SERVICE SUPPLIER</h3>
                <p class="fs-sm text-body">HashRoot is now an approved G-Cloud 12 supplier by the Crown Commercial
                  Service (CCS)</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/consultants.webp" alt="">
                <h3 class="h5">CONSULTANT OF THE YEAR
                  2015</h3>
                <p class="fs-sm text-body">Awarded as the Consultant of the Year 2015 by Consultant Review Magazine in
                  the domain Infrastructure Management Service.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                  <img class="awards" src="./img/homepage/awards/webp/vmware.webp" alt="">
                <h3 class="h5">MOST PROMISING VMWARE SOLUTION PROVIDER</h3>
                <p class="fs-sm text-body">Listed in the 25 Most promising VMware Service Providers by APAC CIO Outlook
                  Magazine, published from Silicon Valley, USA</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/internationalcrown.webp" alt="">
                <h3 class="h5">INTERNATIONAL QUALITY CROWN AWARD</h3>
                <p class="fs-sm text-body">HashRoot has been awarded the "International Quality Crown Award (IQC)" in
                  category GOLD by 27th International IQC Convention at London, United Kingdom</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/50cool startups.webp" alt="">
                <h3 class="h5">50 COOL STARTUPS</h3>
                <p class="fs-sm text-body">HashRoot has been identified in the "50 cool startups of the year" by
                  Siliconindia. Better work-life balance, pay scale & benefits, development opportunities are some of
                  the factors that were considered while preparing the list.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/citizen integration peace.webp" alt="">
                <h3 class="h5">INTERNATIONAL GOLD STAR MILLENNIUM AWARD</h3>
                <p class="fs-sm text-body">For Excellence in Promoting Global Integration and Economic Development by
                  Mr. Korn Dabbaransi, Former Dy. PM of Thailand, at the International Conference on "Indo-Thai
                  Friendship and Economic Co-operation" on 18th January 2015, Bangkok, Thailand.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                <img class="awards" src="./img/homepage/awards/webp/indianeconomic.webp" alt="">
                <h3 class="h5">FASTEST GROWING INDIAN COMPANY EXCELLENCE AWARD</h3>
                <p class="fs-sm text-body">Awarded By Indian Economic Development and Research Association (IEDRA) on
                  the occasion of National Seminar on "Outstanding contribution to National Development" on Friday 29th
                  August 2014 at New Delhi.</p>
              </div>
            </a></div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card h-100 border-0 shadow card-hover"
              href="help-single-topic.html">
              <div class="card-body ps-grid-gutter pe-grid-gutter text-center">
                  <img class="awards" src="./img/homepage/awards/webp/international achiever conference.png" alt="">
                <h3 class="h5">GLOBAL ACHIEVERS AWARD FOR BUSINESS EXCELLENCE</h3>
                <p class="fs-sm text-body">Global achievers award for business excellence by International Achievers
                  Summit for outstanding achievements at the 6th International Achievers summit on Global Corporate
                  Achievements and social responsibilities at Bangkok, Thailand.</p>
              </div>
            </a></div>
        </div>
      </div>
    </section>
    <section class="row g-0 ">
        <div class="col-md-6 bg-size-cover py-7 bannerright" style="background-image: url(img/company_banner/capabilitiess.jpg);">
          <div class="py-6"></div>
        </div>
        <div class="col-md-6 border-top border-bottom px-3 pe-xl-0 ps-lg-5 ps-xl-7">
          <div class="ms-sm-4 my-md-5 py-5 my-sm-0 py-sm-6 py-md-7" style="max-width: 495px;">
            <h2 class="mb-4">HashRoot Capabilities</h2>
            <p class="mb-5">Help customers among the world corporate leaders with create new opportunities and confront the most strategic challenges in a global perspective. We bring in front you with a global perspective for the clients; lay out with strategic services that would be through our expertise across the client life cycle.
            </p>
  
          </div>
        </div>
      </section>
      <section class="row g-0 ">
        <div class="col-md-6 border-top border-bottom px-3 pe-xl-0 ps-lg-5 ps-xl-7">
            <div class="ms-sm-4 my-md-5 py-5 my-sm-0 py-sm-6 py-md-7" style="max-width: 495px;">
              <h2 class="mb-4">HashRoot Difference
            </h2>
              <p class="mb-5">Build with expert team to drive innovative ideas with the innovative technical experts with sound business outlook and up to date knowledge of today's dynamically evolving IT Market
              </p>
    
            </div>
          </div>
        <div class="col-md-6 bg-size-cover py-7 bannerleft" style="background-image: url(img/company_banner/Leadership.jpg);">
          <div class="py-6"></div>
        </div>
       
      </section>
      <section class="row g-0 ">
        <div class="col-md-6 bg-size-cover py-7 bannerright" style="background-image: url(img/company_banner/capabilitiess.jpg);">
          <div class="py-6"></div>
        </div>
        <div class="col-md-6 border-top border-bottom px-3 pe-xl-0 ps-lg-5 ps-xl-7">
          <div class="ms-sm-4 my-md-5 py-5 my-sm-0 py-sm-6 py-md-7" style="max-width: 495px;">
            <h2 class="mb-4">Life @ HashRoot
            </h2>
            <p class="mb-5">HashRoot emphases primarily on corporate governance, this leads to an effective decision making processes wherein we make most our employees participate in decision making processes, nerveless forget that what we are today is the thrive of our employees.


            </p>
  
          </div>
        </div>
      </section>
      <section class="row g-0 ">
        <div class="col-md-6 border-top border-bottom px-3 pe-xl-0 ps-lg-5 ps-xl-7">
            <div class="ms-sm-4 my-md-5 py-5 my-sm-0 py-sm-6 py-md-7" style="max-width: 495px;">
              <h2 class="mb-4">HashRoot Culture

            </h2>
              <p class="mb-5">A successful Manager has a frantic challenge of getting the best out of his workforce irrespective of any critical situation. He can do so only by keeping them motivated. A motivated workforce is an assurance of quality performance delivered.

            </p>
    
            </div>
          </div>
        <div class="col-md-6 bg-size-cover py-7 bannerright" style="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);">
          <div class="py-6"></div>
        </div>
       
      </section>
  
   



    <!-- ctasection -->
    <section class="container py-5 py-md-6 py-lg-7">
      <div class="row g-0 py-3 py-md-0">
        <div class="col-md-6 mb-4 mb-md-0">
          <div
            class="d-flex flex-column position-relative h-100 rounded-start bg-position-start-center bg-repeat-0 py-6"
            style="background-image: url(img/demo/business-consulting/careers-bg.jpg); background-color: #f4f4f6;"><span
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
          <div class="d-flex flex-column h-100 rounded-end bg-gradient-home-slider  px-4 py-5">
            <div class="py-2 mx-auto text-center" style="max-width: 450px;">
              <h2 class="text-light">Let's discuss your project
              </h2>
              <p class="text-light mb-4">Request a Call Back
              </p>
              <form class="input-group pt-2" data-dashlane-rid="0a8912a8c814ff93" data-form-type="newsletter">
                <input class="form-control" type="tel" placeholder="Your Phone Number" required="">
                <button class="btn btn-success" type="submit"><i class="ai-send fs-xl me-1"></i></button>
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