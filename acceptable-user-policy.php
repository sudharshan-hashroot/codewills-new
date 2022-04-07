<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Acceptable User policy | CodeWills by HashRoot</title>
  
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
    <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax="" data-speed="0.25" style="background-image: none;"><span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>
            
        <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
            <div class="text-center py-md-5">
                <div class="text-center pt-2 mb-n3">
                    <h2 class="h1  text-light mb-4 pb-4">Acceptable User <span class="bg-faded-light text-light rounded px-3 py-2">Policy</span></h2>
                   
                </div>
            </div>
        </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div class="jarallax-img" style="background-image: url(&quot;img/company_banner/Life at hashroot.jpg&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1089px; height: 802.25px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 67.375px; transform: translate3d(0px, -36.9531px, 0px);" data-jarallax-original-styles="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);"></div></div>
</section>
<section class="bg-secondary">
<div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
    <p>Violation of the Acceptable User Policy (“AUP”) may result in suspension or termination of your services in accordance with the Hashroot Limited, trading as Hashroot Terms of Service.
    </p>
    <p>You may not use Hashroot services for actions or activities which, at our sole discretion, may be illegal, offensive and abusive or promote and foster such irresponsible behavior as well as actions contrary to accepted internet norms or behavior that threatens our infrastructure.
    </p>
</div>
</section>
<section>
    <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
        <h2 class="  mb-4">Illegality   </h2>
      
  <p>In any form, including but not limited to the unauthorized distribution or copying of copyrighted software or other data, harassment, fraud, trafficking in obscene material.
</p>
<p>You understand that all information, data, text, software, music, sound, photographs, graphics, video, messages, tags, or other materials (“Content”), privately transmitted, are the sole responsibility of the person from whom such Content originated. This means that you are entirely responsible for all Content that you upload, post, email, transmit or otherwise make available via the Services and/or Website. We do not control the Content posted or hosted via the Service and, as such, do not guarantee the accuracy, integrity, quality or completeness of such Content. You understand that by using the Website, you may be exposed to Content that is offensive, indecent or objectionable. The Content may also be out of date and we make no commitment to update such material.</p>

   
    
    </div>
  

</section>




<section>
    <div class="container mt-4  mt-md-0  pb-5">
        <h2 class="  mb-4">Offensive <span class="bg-faded-primary text-primary rounded px-3 py-2"> Content </span>
        </h2>
        <div class="mb-5">
<p>
    We use the information we collect in variWe prohibit providing services which appear to us, at our sole discretion, to be offensive. This includes but is not limited to the storing or transmitting of any content or links to any content which we believe to be: ous ways, including to :

</p>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Excessively violent, inciting violence or threatening violence </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Child pornography or non-consensual sex acts                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Harassing or inciting hate of any person or group of persons                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Defamatory</li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Violating the privacy of any person or group of persons                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Promotes illegal drugs                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Promoting or soliciting illegal activities under any applicable laws                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Violates export control laws or relates to illegal arms trafficking or illegal gambling                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Unfair or deceptive under consumer protection laws under any jurisdiction                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Is illegal or promotes illegal activity under your applicable laws or that of CloudSigma                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Creates a risk to safety, health or national security.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Exposing trade secrets, infringing copyright, trademarks or patents or assisting others in doing so                </li>

                 </ul>

                 <p>
                    You agree that you must evaluate, and bear all risks associated with, the use of any email and its Content, including any reliance on the accuracy, completeness, or usefulness of such Content. We shall fully cooperate with any law enforcement authorities or court order requesting or directing us to disclose the identity or locate anyone posting any material in breach of this Acceptable Use


                 </p>
        </div>
        
    
    </div>
  

</section>

<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Abusive Behavior against <span class="bg-faded-primary text-primary rounded px-3 py-2"> Staff </span>        </h2>
      
    <p>We believe in professional communication, no matter what the issue is. We will not tolerate any abusive behavior, abusive language or threats against any Hashroot staff member(s). By violating this policy, we reserve the right to permanently suspend or terminate your account(s) without prior notice and without any refund. If you are unsure about content you intend to place on our network, please check with us before you do. We reserve the right to determine what constitutes acceptable use.
    </p>      
    </div>  

</section>

<section>
    <div class="container mt-4  mt-md-0  pb-5">
        <h2 class="  mb-4">Service Level <span class="bg-faded-primary text-primary rounded px-3 py-2"> Agreement </span>        </h2>
      
    <p>No credit will be available under the Hashroot Service Level Agreement for interruptions of service resulting from Acceptable Use Policy violations.
    </p>      
    </div>  

</section>
<section>
    <div class="container mt-4  mt-md-0  pb-5">
        <h2 class="  mb-4">Security    </h2>
      
    <p>You will take appropriate security precautions including ensuring appropriately complex passwords, keeping your passwords confidential and regularly changing your passwords.
    </p>      
    </div>  

</section>
<section>
    <div class="container mt-4  mt-md-0  pb-5">
        <h2 class="  mb-4">Compliance    </h2>
      
    <p>You will ensure that all use of Hashroot, whether by you or by any of your users, follows the Terms of Service. In addition, you will bind your users to an Acceptable Use Policy containing all of the restrictions above.    </p>      
<p>Cooperation With Investigations and Legal Proceedings: We may monitor any content or traffic belonging to you or to your users for the purposes of ensuring that the Services are being used lawfully.
</p>    
</div>  

</section>
<section>
    <div class="container mt-4  mt-md-0  pb-5">
        <h2 class="  mb-4">Dispute    </h2>
      
    <p>Any dispute between the parties or their assigns arising out of this Contract shall be subject to binding arbitration. Any dispute arising under or relating to this Contract which is not settled by agreement of the parties shall be referred for adjudication by either party to a court of competent jurisdiction.

    </p>    
</div>  

</section>
</section>
<section>
    <div class="container mt-4  mt-md-0  pb-5">
        <h2 class="  mb-4">Language    </h2>
      
    <p>This Agreement is entered into in the English language. Should there be any discrepancy between this Agreement and any translation of it into any language other than English, the original English text shall prevail.

    </p>    
</div>  

</section>
<section>
    <div class="container mt-4  mt-md-0  pb-5">
        <h2 class="  mb-4">Severability    </h2>
      
    <p>In the event any provision of this Agreement is deemed to be void, invalid or unenforceable that provision shall be severed from the remainder of this Agreement. so as not to cause the invalidity or unenforceability of the remainder of this Agreement. All remaining provisions of this Agreement shall then continue in full force and effect. If any provision shall be deemed invalid due to its scope or breadth, such provision shall be deemed valid to the extent of the scope and breadth permitted by law.

    </p>    
</div>  

</section>
<section>
    <div class="container mt-4  mt-md-0  pb-5">
        <h2 class="  mb-4">Jurisdiction    </h2>
      
    <p>It is intended that this Agreement be valid and enforceable under the laws of the state of Kerala, and subjected to jurisdiction of the court located at Ernakulam.

    </p>  
    <p class="text-center my-4 font-weight-bold text-primary p-3 rounded-3 bg-faded-primary">
        Post Updated: 15 September, 2021© Hashroot Limited. All rights reserved.
    
    
    </p>  
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
      <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="vendor/simplebar/dist/simplebar.min.js"></script>
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
</body>

</html>