<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Terms of Service | CodeWills by HashRoot</title>
  
  <!-- SEO Meta Tags-->
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
    <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax="" data-speed="0.25" style="background-image: none;"><span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            
        <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
            <div class="text-center py-md-5">
                <div class="text-center pt-2 mb-n3">
                    <h2 class="h1  text-light mb-4 pb-4">Terms of <span class="bg-faded-light text-light rounded px-3 py-2">Services</span></h2>
                    <p class="text-light">
                    Codewills agrees to provide all kinds of staffing services which involves recruitment, screening, interviewing, and hiring talents on behalf of your organization and based on the requirement specified in the staffing agreement.                   </p>
                </div>
            </div>
        </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div class="jarallax-img" style="background-image: url(&quot;img/company_banner/Life at hashroot.jpg&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1089px; height: 802.25px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 67.375px; transform: translate3d(0px, -36.9531px, 0px);" data-jarallax-original-styles="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);"></div></div>
</section>


<section class="mt-5 ">
    <div class="container  pb-5">
        <h2 class="  mb-4">General
        </h2>
        <div class="mb-5">
<p>Where relevant, you agree to share relevant details to enable us to provide the best services to you. We make sure to offer you the best staffing services that guarantee that adds value to your organization.

</p>
    </div>   
</div>
</section>

<section>
    <div class="container mt-4 pb-5">
        <h2 class="  mb-4">Plans and 
            <span class="bg-faded-primary text-primary rounded px-3 py-2">Price</span>
        </h2>
        <div class="mb-5">
<p>Codewills reserves the right to change pricing of the service offered at any time. New accounts for current customers are subject to the current fees at the time the new account is created with us.
</p>
    </div>   
</div>
</section>
<section>
    <div class="container mt-4 pb-5">
        <h2 class="  mb-4">Billing
           
        </h2>
        <div class="mb-5">
<p>The client should pay the company the fees mentioned under the payment terms in the agreement. In case if the candidate referred by the company is rejected and if the candidate is subsequently hired by the client within a period of 12 months following the date of the first introduction of the candidate to the client by the company, then the client shall pay the company the fee stipulated in the staffing agreement.
</p>
    </div>   
</div>
</section>
<section>
    <div class="container mt-4 pb-5">
        <h2 class="  mb-4">Cancellation
        </h2>
        <div class="mb-5">
<p>Cancellation of the service agreement has to be made by emailing the corresponding department for authorization purposes and not by informing it on live chat or any of our IM (Instant Messengers). You reserve the right to cancel the service for any reason with prior notice.
</p>
    </div>   
</div>
</section>
<section>
    <div class="container mt-4 pb-5">
        <h2 class="  mb-4">Client <span class="bg-faded-primary text-primary rounded px-3 py-2">Obligations</span>
        </h2>
        <div class="mb-5">
<p>The client is responsible for obtaining the work permit or any other permissions required for the employee to work as required by the law and regulations of the country in which the candidate will be made to work.

</p>
    </div>   
</div>
</section>
<section>
    <div class="container mt-4 pb-5">
        <h2 class="  mb-4">Acceptable Use Policy  <span class="bg-faded-primary text-primary rounded px-3 py-2">(AUP)</span>
        </h2>
        <div class="mb-5">
<p>Abusive material against Codewills’s employees will not be permitted. Harassment and using abusive words through phone, e-mail, chat or any other means of electronic communications is prohibited. Codewills reserves the right to, without notice, terminate the contract for any serious AUP violations.
</p>
    </div>   
</div>
</section>
<section>
    <div class="container mt-4 pb-5">
        <h2 class="  mb-4">Negative  <span class="bg-faded-primary text-primary rounded px-3 py-2">Feedbacks</span>
        </h2>
        <div class="mb-5">
<p>We value the effort of making a business successful and the continued handwork of several years. We have a very good reputation among staffing companies around the globe and are trying our maximum to retain that goodwill with utmost care. And so, we do not tolerate the posting of negative feedback about Codewills on any public forum before making use of our staffing services. We have the utmost respect for all of our clients and do anything and everything possible to keep all of our clients satisfied. All we ask is to discuss the issue that you faced with Codewills before going to any public forums. We would like to maintain transparency in our operations and we have always tried our level best to provide the extra mile to customers.</p>
    </div>   
</div>
</section>
<section>
    <div class="container mt-4 pb-5">
        <h2 class="  mb-4">Liability 
        </h2>
        <div class="mb-5">
<p>The company is not liable for any direct/indirect loss or damage including but not limited to; revenue loss, goodwill, and reputation damage caused by the actions of the employee when employed for the client.

</p>
    </div>   
</div>
</section>
<section>
    <div class="container mt-4 pb-5">
        <h2 class="  mb-4">No <span class="bg-faded-primary text-primary rounded px-3 py-2">Guarantees</span>
        </h2>
        <div class="mb-5">
<p>The company will use its expertise and network connection to obtain the best results, but we refrain from any sort of commitment to delivering the forecasted result.

</p>
<p>From time to time, the Disclosing Party may disclose Confidential Information to the Receiving Party. The Receiving Party will: (a) limit disclosure of any Confidential Information to its directors, officers, employees, agents or representatives (collectively “Representatives”) who have a need to know such Confidential Information in connection with the current or contemplated business relationship between the parties to which this Agreement relates, and only for that purpose; (b) advise its Representatives of the proprietary nature of the Confidential Information and of the obligations set forth in this Agreement and require such Representatives to keep the Confidential Information confidential; (c) shall keep all Confidential Information strictly confidential by using a reasonable degree of care, but not less than the degree of care used by it in safeguarding its own confidential information; and (d) not disclose any Confidential Information received by it to any third parties (except as otherwise provided for herein).

</p>
<p>You can know more about our updated privacy policy at https://Codewills.com/privacy.php. If you do not accept or understand any part or parts of our ‘Terms of Service and Policies’, please contact us immediately prior to signing up with our service. If you do have any questions about our privacy policy write to us at info@Codewills

</p>
<p>By subscribing to and/or utilizing our services, you agree to accept, comply, and understand all of our ‘Terms of Service and Policies’ in full.

</p>
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