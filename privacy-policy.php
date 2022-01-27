<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Privacy Policy | CodeWills by HashRoot</title>
  
  <!-- SEO Meta Tags-->
  <?php include('metatags.php');?>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="About HashRoot | CodeWills by HashRoot">
  <meta name="description" content="HashRoot is a global company that has reputation for its ability to help customers achieve their business objective by providing quality IT managed services.">
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
    <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax="" data-speed="0.25" style="background-image: none;"><span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            
        <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
            <div class="text-center py-md-5">
                <div class="text-center pt-2 mb-n3">
                    <h2 class="h1  text-light mb-4 pb-4">Privacy <span class="bg-faded-light text-light rounded px-3 py-2">Policy</span></h2>
                    <p class="text-light">
                        This privacy policy describes how Codewills Limited collects, uses, and discloses your information in connection with the use of our services, and applications.


                    </p>
                </div>
            </div>
        </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div class="jarallax-img" style="background-image: url(&quot;img/company_banner/Life at hashroot.jpg&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1089px; height: 802.25px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 67.375px; transform: translate3d(0px, -36.9531px, 0px);" data-jarallax-original-styles="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);"></div></div>
</section>
<section class="bg-secondary">
    <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">

        <p class="text-center">
            We collect and receive information about the users of our services from various sources and use this to provide and improve our services. We recommend that you read our privacy policy in full to ensure you are fully informed. By using our service, you agree to the collection and use of the information in accordance with our privacy policy.
        </p>

    </div>
  
</section>
<section>
    <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
        <h2 class="  mb-4">INFORMATION WE <span class="bg-faded-primary text-primary rounded px-3 py-2">COLLECT</span></h2>
        <div class="mb-5">
            <h4 class="font-weight-bold text-dark">Information You Provide :</h4>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Personal Information: When you register for our service, we may ask for your contact information, business title, business address, zip code, telephone number, email address, business fax number.    </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Communications : If you contact us directly or through our chat window, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide. We may also receive a confirmation when you open an email from us.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>We may use session cookies to make it easier for you to navigate our site. The cookie itself does not contain Personal Information although it will enable us to relate your use of this site to information that you have specifically and knowingly provided. You can refuse cookies by turning them off in your browser. A session ID cookie expires when you close your browser. A persistent cookie remains on your hard drive for an extended period of time. You can remove persistent cookies by following the instructions provided in your internet browser.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.                </li>
      
            </ul>
        </div>
        <div class="mb-5">
            <h4 class="font-weight-bold text-dark">Information We Collect When You Use Our Services :</h4>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Your name, address, and contact details                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Information about any communications you made.                </li>        
      
            </ul>
        </div>
        <div class="mb-5">
            <h4 class="font-weight-bold text-dark">Information We Receive from Third Parties :</h4>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Third-Party Partners. We may also receive publicly available information about you and combine it with data that we have about you.           </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Your location, IP address, browser information, time you spend on our website, the number of visits you made and your referral websites or links. </li>        
      
            </ul>
        </div>
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">HOW WE USE <span class="bg-faded-primary text-primary rounded px-3 py-2">INFORMATION</span></h2>
        <div class="mb-5">
<p>The company uses the information we collect in various ways. This includes:
</p>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Provide and improve our service.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Understand, analyze and train our employees with the respective client knowledge base, develop new services, features, and customer case studies.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>To contact you about the services on our site in which you have expressed interest.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>To provide you special offers and information about the services that are similar to the ones you have already purchased or have shown interest in.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Communicate with you, either directly or through one of our employees including for customer service, feedback, to provide you with updates and other information relating to the services.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Find and prevent fraud.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>For compliance purposes, including enforcing our Terms of Service, or other legal rights, or as may be required by applicable laws and regulations or requested by any judicial process or governmental agency.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Notify you of any changes to our website or to our services that may affect you.                </li>          
      
            </ul>

        </div>
        <p class="bg-faded-primary font-weight-bold text-primary rounded-3 p-3">
            Note: This website is not intended to be used by children below the age of 13 years. We do not knowingly collect or use personal information relating to children. </p>
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">HOW WE SHARE <span class="bg-faded-primary text-primary rounded px-3 py-2">INFORMATION</span></h2>
        <div class="mb-5">
<p>We may share the information we collect in various ways, including the following:
</p>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Vendors and Service Providers. We may share information with third-party tools or software with your consent for helping you provide our services.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>For processing card payments                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Business Transfers. Information may be disclosed and otherwise transferred after your consent to any potential acquirer, successor, or assignee as part of any proposed merger, acquisition, debt financing, sale of assets, or similar transaction, or in the event of insolvency, bankruptcy, or receivership in which information is transferred to one or more third parties as one of our business assets.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>As Required By Law and Similar Disclosures. We may also share information to (i) satisfy any applicable law, regulation, legal process, or governmental request; (ii) enforce this Privacy Policy and our Terms of Service, including investigation of potential violations hereof; (iii) detect, prevent, or otherwise address fraud, security, or technical issues; (iv) respond to your requests; or (v) protect our rights, property or safety, our users and the public. This includes exchanging information with other companies and organizations for fraud protection and spam/malware prevention.                </li>

                
      
            </ul>

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">LEGAL BASIS FOR PROCESSING PERSONAL<span class="bg-faded-primary text-primary rounded px-3 py-2">INFORMATION</span></h2>
        <div class="mb-5">
<p>Our legal basis for collecting and using the personal information described above will depend on the personal information concerned and the specific context in which we collect it.
</p>
        

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">SECURITY</h2>
        <div class="mb-5">
<p>Codewills takes privacy issues seriously and wants to protect your rights. We understand and respect your concerns regarding privacy and make your online experience satisfying and safe. To do so, we employ a variety of security technologies and measures designed to protect information from unauthorized access, use, or disclosure. The measures we use are designed to provide a level of security appropriate to the risk of processing your personal information.
</p>
<p class="bg-faded-primary text-primary font-weight bold p-2 rounded-3">Our project office is located in a 24/7 public access restricted space secured by the state police department. Our office infrastructure is 24/7/365 monitored with CCTV cameras and access to the working spaces is restricted by a biometric system.</p>
        

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">DATA <span class="bg-faded-primary text-primary rounded px-3 py-2">RETENTION</span>
        </h2>
        <div class="mb-5">
<p>We retain personal information we collect from you where we have an ongoing legitimate business need to do so (for example, to provide you with a service you have requested or to comply with applicable legal, tax, or accounting requirements). When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize it or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</p>

        

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">ACCESS 
        </h2>
        <div class="mb-5">
<p>If you are a registered user, you may access certain information associated with your Account by emailing info@codewills.com. If you terminate your Account, any public activity on your account prior to deletion may remain stored on our servers and may remain accessible to the public. To protect your privacy and security, we may also take reasonable steps to verify your identity before updating or removing your information.
</p>

        

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">YOUR DATA PROTECTION RIGHTS UNDER THE GENERAL DATA PROTECTION REGULATION 
            <span class="bg-faded-primary text-primary rounded px-3 py-2">(GDPR)</span></h2>
        <div class="mb-5">
<p>If you are a resident of the EEA, you have the following data protection rights:
</p>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>If you wish to access, correct, update, or request deletion of your personal information, you can do so at any time by mailing to info@codewills.com                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>In addition, you can object to the processing of your personal information, ask us to restrict the processing of your personal information, or request portability of your personal information. Again, you can exercise these rights by emailing to info@codewills.com                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Similarly, if we have collected and processed your personal information with your consent, then you can withdraw your consent at any time. Withdrawing your consent will not affect the lawfulness of any processing we conducted prior to your withdrawal, nor will it affect the processing of your personal information conducted in reliance on lawful processing grounds other than consent.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>You have the right to complain to a data protection authority about our collection and use of your personal information. For more information, please contact your local data protection authority.                </li>

                

                
      
            </ul>

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">YOUR <span class="bg-faded-primary text-primary rounded px-3 py-2">CHOICES</span>
        </h2>
        <div class="mb-5">
            <p>You can use some of the features of the Services without registering, thereby limiting the type of information that we collect.</p>     

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">CHILDREN’S  <span class="bg-faded-primary text-primary rounded px-3 py-2">PRIVACY</span>
        </h2>
        <div class="mb-5">
            <p>Codewills does not knowingly collect information from children under the age of 13, and children under 13 are prohibited from using our Services. If you learn that a child has provided us with personal information in violation of this Privacy Policy, you can alert us at info@codewills.com
            </p>     

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">CHANGES TO THIS  <span class="bg-faded-primary text-primary rounded px-3 py-2">PRIVACY POLICY</span>
        </h2>
        <div class="mb-5">
            <p>This Privacy Policy may be modified from time to time, so please review it frequently. Changes to this Privacy Policy will be posted on our websites. If we materially change the ways in which we use or share personal information previously collected from you through our Services, we will notify you through our Services, by email, or other communication.
            </p>     

        </div>
       
    
    </div>
  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">INTERNATIONAL DATA <span class="bg-faded-primary text-primary rounded px-3 py-2">TRANSFERS</span>
        </h2>
        <div class="mb-5">
            <p>Codewills is a global company. We may transfer personal information to countries other than the country in which the data was originally collected. These countries may not have the same data protection laws as the country in which you initially provided the information. When we transfer your personal information to other countries, we will protect that information as described in this Privacy Policy.            </p>     

        </div>       
    
    </div>  

</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Contact             <span class="bg-faded-primary text-primary rounded px-3 py-2">Us</span>
        </h2>
        <div class="mb-5">
            <p>If you have any questions or concerns about this Privacy Policy, please feel free to email us at <a href="mailto:info@codewills.com">info@codewills.com</a> 

             </p>     
             <p>   The data controller of your personal information is Codewills.</p>

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