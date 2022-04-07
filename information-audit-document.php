<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Information Audit Document | CodeWills by HashRoot</title>

  <!-- SEO Meta Tags-->
  <?php include('metatags.php');?>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="Information Audit Document | CodeWills by HashRoot">
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
  <!-- <div class="page-loading active d-none">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span>Loading...</span>
    </div>
  </div> -->
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
    <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax="" data-speed="0.25"
      style="background-image: none;"><span
        class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>

      <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
        <div class="text-center py-md-5">
          <div class="text-center pt-2 mb-n3">
            <h2 class="h1  text-light mb-4 pb-4">Information Audit Document</h2>
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
          data-jarallax-original-styles="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);"></div>
      </div>
    </section>
    <section class="bg-secondary">
      <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">

        <p class="text-center">
          This Information Audit Document Submitted by the Data Protection Officer of Hashroot Limited Sandeep Anand
          describes how Hashroot Limited (“Hashroot,” “we,” “our” or “us”) hold, use, store and share information in
          connection with your use of our services, and applications (collectively, the “Services”).
        </p>
        <p class="text-center">
          This Information audit document does not apply to information our customers may process when using our
          Services. We collect and receive information about the users of our services from various sources and use this
          to provide and improve our services. We recommend that you read our privacy policy in full to ensure you are
          fully informed. By using our service, you agree to the collection and use of the information in accordance
          with our privacy policy.
        </p>
        <!-- <p class="bg-faded-primary text-center font-weight-bold text-primary rounded-3 p-3">
          We recommend that you read this Information Audit Document in full to ensure you are fully informed.
        </p> -->
      </div>

    </section>
    <section>
      <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
        <h2 class="mb-4">HOW WE COLLECT <span class="bg-faded-primary text-primary rounded px-3 py-2">INFORMATION</span>
        </h2>
        <div class="mb-5">
          <h6 class="font-weight-bold text-dark">Information You Provide</h6>
          <h4 class="font-weight-bold text-dark">Account Registration :</h4>
          <p>When you register for an Account, we may ask for your contact information, including items such as name,
            company name, address, email address, Zip Code and telephone number.</p>
          <ul class="list-unstyled">
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>First Name</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Last Name </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Company Name </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Email Address </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Physical Address
            </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Phone Number</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Language</li>

          </ul>
        </div>
        <div class="mb-5">
          <h4 class="font-weight-bold text-dark">Payment Information :</h4>
          <p> When you add your financial account information to your Account, that information is directed to our
            third-party payment processor. We also do not store your financial account information on our systems.</p>
          <p>Data we collect for payment details are:</p>
          <ul class="list-unstyled">
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Payment Method</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Currency </li>

          </ul>
        </div>
        <div class="mb-5">
          <h4 class="font-weight-bold text-dark">Communications : </h4>
          <p>If you contact us directly or through our chat window, we may receive additional information about you such
            as your</p>
          <ul class="list-unstyled">
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Name</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Email address </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Phone Number </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Language </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Contents of the
              message</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Attachments you may
              send us </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Any other
              information you may choose to provide </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>We may use session
              cookies to make it easier for you to navigate our site. The cookie itself does not contain Personal
              Information although it will enable us to relate your use of this site to information that you have
              specifically and knowingly provided. You can refuse cookies by turning them off in your browser. A session
              ID cookie expires when you close your browser. A persistent cookie remains on your hard drive for an
              extended period of time. You can remove persistent cookies by following the instructions provided in your
              internet browser </li>

          </ul>
        </div>
        <div class="mb-5">
          <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it,
            will be made clear to you at the point we ask you to provide your personal information.</p>
        </div>
        <div class="mb-5">
          <h4 class="font-weight-bold text-dark">Information We Collect When You Use Our Services.</h4>
          <ul class="list-unstyled">
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Customer Signup
              Date</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>IP Address</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Backend access
              (Username, Password and SSH port if any for servers having control panels)</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Frontend access
              (Username, Password and SSH port if any for servers having control panels) </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Control Panel
              access (Username, Password and SSH port if any for servers having control panels)</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Client Knowledge
              Base details collected from client and stored internally in the HashRoot local network </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Client Knowledge
              Base access (Username and Password) </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Client Policy
              details (Shared by the client and documented by HashRoot) </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Ticketing systems
              logins (Username and Password) </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Access to tools or
              platforms or systems other than the above mentioned. </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Clients domain
              registration platform</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Last Login Details
              to our client platform </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Customer chat tool
              ID </li>

          </ul>
        </div>
        <div class="mb-5">
          <h4 class="font-weight-bold text-dark">Information We Receive from Third Parties.</h4>
          <ul class="list-unstyled">
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Third-Party
              Partners. We may also receive publicly available information about you and combine it with data that we
              have about you.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>General Information
              is collected when you access our website. We use your IP address to identify your location/country when
              you use our website. We also record the information such as, the page you visited more, the time you spend
              in our website, the number of visit you made and if you are referred from any other websites or links.
            </li>
          </ul>
        </div>

      </div>


    </section>
    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">HOW WE USE <span class="bg-faded-primary text-primary rounded px-3 py-2">INFORMATION</span>
        </h2>
        <div class="mb-5">
          <p>We use the information we collect in various ways, including to :
          </p>
          <ul class="list-unstyled">
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>If you sign up for
              a support plan from us, we request certain personal information from your end on your registration form.
              You are requested to provide the details mentioned in (1.1.a) such as name, email address etc. In order to
              resolve issues, we may be required to login to servers remotely, communicate with your customers and/or
              conduct research on proper fixes. Information that users provide through secure & voluntary submissions,
              which are required for us to remotely access servers and helpdesk systems</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>In order to contact
              our sales or support team, you must share your contact information mentioned in (1.1.a) and (1.1.c) such
              as Name, Email address and name of the company you represent. We use this information to contact you about
              the services on our site in which you have expressed interest. Also, if we have trouble processing your
              order, we will use this information to contact you.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>We use the data
              (1.3.c, 1.3.d, 1.3.e, 1.3.f, 1.3.g, 1.3.h, 1.3.i, 1.3.j , 1.3.k, 1.3.l, 1.3.m) to Improve our service
              quality, train employees and expand our services.
            </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>We use the data
              (1.3.c, 1.3.d, 1.3.e, 1.3.f, 1.3.g, 1.3.h, 1.3.i, 1.3.j , 1.3.k, 1.3.l, 1.3.m) to understand, analyze and
              train our employees with respective client knowledge base. Develop new services, features, and prepare
              customer case studies. </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>We use the data to
              (1.1.a and 3.m) communicate with you, either directly or through one of our employees including for
              customer service, feedbacks, to provide you with updates and other information relating to the Services.
            </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Find and prevent
              fraud. </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Find and prevent
              fraud. </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>We may use the data
              for compliance purposes, including enforcing our Terms of Service, or other legal rights, or as may be
              required by applicable laws and regulations or requested by any judicial process or governmental agency.
            </li>

          </ul>

        </div>

      </div>


    </section>
    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">HOW WE SHARE <span class="bg-faded-primary text-primary rounded px-3 py-2">INFORMATION</span>
        </h2>
        <div class="mb-5">
          <p>We may share the information we collect in various ways, including the following:
          </p>
          <ul class="list-unstyled">
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Vendors and Service
              Providers. We may share information with third-party tools or software with your consent for helping you
              provide our services. </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Business Transfers.
              Information may be disclosed and otherwise transferred after your consent to any potential acquirer,
              successor, or assignee as part of any proposed merger, acquisition, debt financing, sale of assets, or
              similar transaction, or in the event of insolvency, bankruptcy, or receivership in which information is
              transferred to one or more third parties as one of our business assets. </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>As Required By Law
              and Similar Disclosures. We may also share information to (i) satisfy any applicable law, regulation,
              legal process, or governmental request; (ii) enforce this Privacy Policy and our Terms of Service,
              including investigation of potential violations hereof; (iii) detect, prevent, or otherwise address fraud,
              security, or technical issues; (iv) respond to your requests; or (v) protect our rights, property or
              safety, our users and the public. This includes exchanging information with other companies and
              organizations for fraud protection and spam/malware prevention. </li>
          </ul>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="mb-4">LEGAL BASIS FOR PROCESSING PERSONAL INFORMATION
        </h2>
        <div class="mb-5">
          <p>Our legal basis for collecting and using the personal information described above will depend on the
            personal information concerned and the specific context in which we collect it.
          </p>

        </div>
      </div>
    </section>


    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">HOW WE RETAIN/DELETE YOUR <span
            class="bg-faded-primary text-primary rounded px-3 py-2">INFORMATION</span></h2>
        <div class="mb-5">
          <p>We retain personal information we collect from you where we have an ongoing legitimate business need to do
            so (for example, to provide you with a service you have requested or to comply with applicable legal, tax,
            or accounting requirements).
          </p>
          <p>When we have no ongoing legitimate business need to process your personal information, we will either
            delete or anonymize it or, if this is not possible (for example, because your personal information has been
            stored in backup archives), then we will securely store your personal information and isolate it from any
            further processing until deletion is possible.</p>
          <p>At anytime, before, during or after our service commitments, you have the right to delete the data on a
            request to us through our email privacy@hashroot.com</p>

        </div>


      </div>


    </section>
    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">SECURITY</h2>
        <div class="mb-5">
          <p>Codewills takes privacy issues seriously and wants to protect your rights. We understand and respect your
            concerns regarding privacy and make your online experience satisfying and safe. To do so, we employ a
            variety of security technologies and measures designed to protect information from unauthorized access, use,
            or disclosure. The measures we use are designed to provide a level of security appropriate to the risk of
            processing your personal information.
          </p>
          <p class="bg-faded-primary text-primary font-weight bold p-2 rounded-3">Our project office is located in a
            24/7 public access restricted space secured by the state police department. Our office infrastructure is
            24/7/365 monitored with CCTV cameras and access to the working spaces is restricted by a biometric system.
          </p>
        </div>
      </div>
    </section>

    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="mb-4">ACCESS
        </h2>
        <div class="mb-5">
          <p>If you are a registered user, you may access certain information associated with your Account by emailing
            info@codewills.com. If you terminate your Account, any public activity on your account prior to deletion may
            remain stored on our servers and may remain accessible to the public. To protect your privacy and security,
            we may also take reasonable steps to verify your identity before updating or removing your information.
          </p>
        </div>
      </div>
    </section>

    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">YOUR DATA PROTECTION RIGHTS UNDER THE GENERAL DATA PROTECTION REGULATION
          <span class="bg-faded-primary text-primary rounded px-3 py-2">(GDPR)</span>
        </h2>
        <div class="mb-5">
          <p>If you are a resident of the EEA, you have the following data protection rights:
          </p>
          <ul class="list-unstyled">
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Transparency and
              modalities: In order to ensure that personal data are processed fairly, EU data protection law obliges
              HashRoot to communicate transparently with data subjects regarding the processing of their data.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Rights of data
              subjects: We at HashRoot are obliged to give effect to the rights of our clients under EU data protection
              law.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Identifying data
              subjects: Third parties might attempt to exercise a data subject’s rights without proper authorisation to
              do so. HashRoot will ask data subjects to provide proof of their identity before giving effect to their
              rights.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Exemption where the
              controller cannot identify the data subject : If HashRoot cannot identify the data subject, HashRoot is
              exempt from the application of certain rights of that data subject. </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Time limits for
              complying with the rights of data subjects : HashRoot is obliged to give effect to the rights of data
              subjects within specified time periods, in order to avoid the frustration of those rights through
              excessive delays.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Right to basic
              information : HashRoot is only entitled to a minimum set of information mentioned in (1)(2)and (3)
              concerning the purposes for which their personal data will be processed.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Right of access: EU
              data protection law obliges HashRoot to provide data subjects with access to their personal data.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Right to
              rectification: HashRoot will ensure that inaccurate or incomplete data are erased or rectified. Data
              subjects have the right to have personal data rectified where the controller fails to comply with the
              Directive.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Right to erasure
              (the “right to be forgotten”): Our clients have the right to have personal data erased or “blocked” where
              HashRoot fails to comply with the Directive (especially where the data are inaccurate or incomplete).</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>The right to
              restrict processing: In some circumstances, data subjects may not be entitled to require HashRoot to erase
              their personal data, but may be entitled to limit the purposes for which the HashRoot can process those
              data (e.g., the exercise or defence of legal claims; protecting the rights of another person or entity;
              purposes that serve a substantial public interest; or such other purposes as the data subject may consent
              to).</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Notifying third
              parties regarding rectification, erasure or restriction: Where a controller has disclosed personal data to
              any third parties, and the data subject has subsequently exercised any of the rights of rectification,
              erasure or blocking, the controller must notify those third parties of the data subject’s exercising of
              those rights. The controller is exempt from this obligation if it is impossible or would require
              disproportionate effort.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Right of data
              portability: Data subjects have the right to transfer their personal data between controllers (e.g., to
              move account details from one online
            </li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Right to object to
              processing: Data subjects have the right to object, on any compelling legitimate grounds, to the
              processing of personal data, where the basis for that processing is either “public interest” or
              “legitimate interests”, those lawful bases are not absolute, and data subjects may have a right to object
              to such processing. Right to object to processing for the purposes of direct marketing: Data subjects have
              the right to object to the processing of their personal data for the purposes of direct marketing</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>If you wish to
              access, correct, update, or request deletion of your personal information, you can do so at any time by
              emailing privacy@hashroot.com</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>In addition, you
              can object to the processing of your personal information, ask us to restrict the processing of your
              personal information, or request portability of your personal information. Again, you can exercise these
              rights by emailing privacy@hashroot.com</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Similarly, if we
              have collected and process your personal information with your consent, then you can withdraw your consent
              at any time. Withdrawing your consent will not affect the lawfulness of any processing we conducted prior
              to your withdrawal, nor will it affect the processing of your personal information conducted in reliance
              on lawful processing grounds other than consent.</li>
            <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>You have the right
              to complain to a data protection authority about our collection and use of your personal information. For
              more information, please contact your local data protection authority.</li>
          </ul>
          <p>We respond to all requests we receive from individuals wishing to exercise their data protection rights in
            accordance with applicable data protection laws.</p>
        </div>


      </div>


    </section>
    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">CHILDREN’S <span class="bg-faded-primary text-primary rounded px-3 py-2">PRIVACY</span>
        </h2>
        <div class="mb-5">
          <p>Codewills does not knowingly collect information from children under the age of 13, and children under 13
            are prohibited from using our Services. If you learn that a child has provided us with personal information
            in violation of this Privacy Policy, you can alert us at info@codewills.com
          </p>

        </div>
      </div>

    </section>


    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">CHANGES TO THIS <span class="bg-faded-primary text-primary rounded px-3 py-2">PRIVACY
            POLICY</span>
        </h2>
        <div class="mb-5">
          <p>This Privacy Policy may be modified from time to time, so please review it frequently. Changes to this
            Privacy Policy will be posted on our websites. If we materially change the ways in which we use or share
            personal information previously collected from you through our Services, we will notify you through our
            Services, by email, or other communication.
          </p>

        </div>


      </div>


    </section>
    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">INTERNATIONAL DATA <span
            class="bg-faded-primary text-primary rounded px-3 py-2">TRANSFERS</span>
        </h2>
        <div class="mb-5">
          <p>Codewills is a global company. We may transfer personal information to countries other than the country in
            which the data was originally collected. These countries may not have the same data protection laws as the
            country in which you initially provided the information. When we transfer your personal information to other
            countries, we will protect that information as described in this Privacy Policy. </p>

        </div>

      </div>

    </section>
    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Contact <span class="bg-faded-primary text-primary rounded px-3 py-2">Us</span>
        </h2>
        <div class="mb-5">
          <p>If you have any questions or concerns about this Privacy Policy, please feel free to email us at <a
              href="mailto:info@codewills.com">info@codewills.com</a>

          </p>
          <p> The data controller of your personal information is Codewills.</p>

        </div>

      </div>

    </section>

    <section>
      <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">DECLARATION
        </h2>
        <div class="mb-5">
          <p>This audit was done and the report was submitted by Sandeep Anand, Data Protection Officer, HashRoot
            Limited.</p>

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