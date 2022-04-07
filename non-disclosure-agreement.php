<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Non Disclosure agreement | CodeWills by HashRoot</title>
  
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
                    <h2 class="h1  text-light mb-4 pb-4">Non-Disclosure <span class="bg-faded-light text-light rounded px-3 py-2">Agreement</span></h2>
                   
                </div>
            </div>
        </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div class="jarallax-img" style="background-image: url(&quot;img/company_banner/Life at hashroot.jpg&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1089px; height: 802.25px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 67.375px; transform: translate3d(0px, -36.9531px, 0px);" data-jarallax-original-styles="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);"></div></div>
</section>

<section>
    <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
        <h2 class="  mb-4">Definition of Confidential   <span class="bg-faded-primary text-primary rounded px-3 py-2">Information</span></h2>
        <div class="mb-5">
  <p>For purposes of this Agreement, “Confidential Information” means any data or information that is proprietary to the Disclosing Party and not generally known to the public, whether in tangible or intangible form, whenever and however disclosed, including, but not limited to:
</p>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Any marketing strategies, plans, financial information, or projections, operations, sales estimates, business plans, and performance results relating to the past, present, or future business activities of such party, its affiliates, subsidiaries, and affiliated companies.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Plans for products or services, and customer or supplier lists                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Any scientific or technical information, invention, design, process, procedure, formula, improvement, technology, or method;                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Any concepts, reports, data, know-how, works-in-progress, designs, development tools, specifications, computer software, source code, object code, flow charts, databases, inventions, information, and trade secrets; and                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>any other information that should reasonably be recognized as confidential information of the Disclosing Party. Confidential Information need not be novel, unique, patentable, copyrightable or constitute a trade secret in order to be designated Confidential Information. The Receiving Party acknowledges that the Confidential Information is proprietary to the Disclosing Party, has been developed and obtained through great efforts by the Disclosing Party and that the Disclosing Party regards all of its Confidential Information as trade secrets.                </li>

               
            </ul>
        </div>
        <div class="mb-5">
            <h4 class="font-weight-bold text-dark">Notwithstanding anything in the foregoing to the contrary, Confidential Information shall not include information which:
            </h4>
            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>was known by the Receiving Party prior to receiving the Confidential Information from the Disclosing Party               </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>becomes rightfully known to the Receiving Party from a third-party source not known (after diligent inquiry) by the Receiving Party to be under an obligation to Disclosing Party to maintain confidentiality;                </li>        
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>is or becomes publicly available through no fault of or failure to act by the Receiving Party in breach of this Agreement;                </li>        
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>is required to be disclosed in a judicial or administrative proceeding, or is otherwise requested or required to be disclosed by law or regulation, although the requirements of paragraph 4 hereof shall apply prior to any disclosure being made; and                </li>        
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>is or has been independently developed by employees, consultants or agents of the Receiving Party without violation of the terms of this Agreement or reference or access to any Confidential Information.                </li>        
      
            </ul>
        </div>
    
    </div>
  

</section>

<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Disclosure of Confidential <span class="bg-faded-primary text-primary rounded px-3 py-2">Information</span></h2>
        <div class="mb-5">
<p>From time to time, the Disclosing Party may disclose Confidential Information to the Receiving Party. The Receiving Party will: (a) limit disclosure of any Confidential Information to its directors, officers, employees, agents or representatives (collectively “Representatives”) who have a need to know such Confidential Information in connection with the current or contemplated business relationship between the parties to which this Agreement relates, and only for that purpose; (b) advise its Representatives of the proprietary nature of the Confidential Information and of the obligations set forth in this Agreement and require such Representatives to keep the Confidential Information confidential; (c) shall keep all Confidential Information strictly confidential by using a reasonable degree of care, but not less than the degree of care used by it in safeguarding its own confidential information; and (d) not disclose any Confidential Information received by it to any third parties (except as otherwise provided for herein). Each party shall be responsible for any breach of this Agreement by any of their respective Representatives.
</p>   

        </div>     
    
    </div>
</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Use of Confidential  <span class="bg-faded-primary text-primary rounded px-3 py-2">Information</span></h2>
        <div class="mb-5">
<p>The Receiving Party agrees to use the Confidential Information solely in connection with the current or contemplated business relationship between the parties and not for any purpose other than as authorized by this Agreement without the prior written consent of an authorized representative of the Disclosing Party. No other right or license, whether expressed or implied, in the Confidential Information is granted to the Receiving Party hereunder. Title to the Confidential Information will remain solely in the Disclosing Party. All use of Confidential Information by the Receiving Party shall be for the benefit of the Disclosing Party and any modifications and improvements thereof by the Receiving Party shall be the sole property of the Disclosing Party.
</p>   

        </div>     
    
    </div>
</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Compelled Disclosure of Confidential  <span class="bg-faded-primary text-primary rounded px-3 py-2">Information</span></h2>
        <div class="mb-5">
<p>Notwithstanding anything in the foregoing to the contrary, the Receiving Party may disclose Confidential Information pursuant to any governmental, judicial, or administrative order, regulatory request or similar method, provided that the Receiving Party promptly notifies, to the extent practicable, the Disclosing Party in writing of such demand for disclosure so that the Disclosing Party, at its sole expense, may seek to make such disclosure subject to a protective order or other appropriate remedy to preserve the confidentiality of the Confidential Information; provided in the case of a broad regulatory request with respect to the Receiving Party’s business (not targeted at Disclosing Party), the Receiving Party may promptly comply with such request provided the Receiving Party give (if permitted by such regulator) the Disclosing Party prompt notice of such disclosure. The Receiving Party agrees that it shall not oppose and shall cooperate with efforts by, to the extent practicable, the Disclosing Party with respect to any such request for a protective order or other relief.
</p>   
<p>Notwithstanding the foregoing, if the Disclosing Party is unable to obtain or does not seek a protective order and the Receiving Party is legally requested or required to disclose such Confidential Information, disclosure of such Confidential Information may be made without liability.
</p>
        </div>     
    
    </div>
</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Term</h2>
        <div class="mb-5">
<p>This Agreement shall remain in effect for a one-year term (subject to a one year extension if the parties are still discussing and considering the Transaction at the end of the year). Notwithstanding the foregoing, the parties’ duty to hold in confidence Confidential Information that was disclosed during term shall remain in effect indefinitely.
</p>   
        </div>     
    
    </div>
</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Remedies</h2>
        <div class="mb-5">
<p>Both parties acknowledge that the Confidential Information to be disclosed hereunder is of a unique and valuable character, and that the unauthorized dissemination of the Confidential Information would destroy or diminish the value of such information. The damages to the Disclosing Party that would result from the unauthorized dissemination of the Confidential Information would be impossible to calculate. Therefore, both parties hereby agree that the Disclosing Party shall be entitled to injunctive relief preventing the dissemination of any Confidential Information in violation of the terms hereof. Such injunctive relief shall be in addition to any other remedies available hereunder, whether at law or in equity. Disclosing Party shall be entitled to recover its costs and fees, including reasonable attorneys’ fees, incurred in obtaining any such relief. Further, in the event of litigation relating to this Agreement, the prevailing party shall be entitled to recover its reasonable attorney’s fees and expenses.</p>   
        </div>     
    
    </div>
</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Return of Confidential <span class="bg-faded-primary text-primary rounded px-3 py-2">Information</span></h2>
        <div class="mb-5">
<p>Receiving Party shall immediately return and redeliver to the other all tangible material embodying the Confidential Information provided hereunder and all notes, summaries, memoranda, drawings, manuals, records, excerpts or derivative information deriving there from and all other documents or materials (“Notes”) (and all copies of any of the foregoing, including “copies” that have been converted to computerized media in the form of image, data or word processing files either manually or by image capture) based on or including any Confidential Information, in whatever form of storage or retrieval, upon the earlier of (i) the completion or termination of the dealings between the parties contemplated hereunder; (ii) the termination of this Agreement; or (iii) at such time as the Disclosing Party may so request; provided however that the Receiving Party may retain such of its documents as is necessary to enable it to comply with its document retention policies. Alternatively, the Receiving Party, with the written consent of the Disclosing Party may (or in the case of Notes, at the Receiving Party’s option) immediately destroy any of the foregoing embodying Confidential Information (or the reasonably nonrecoverable data erasure of computerized data) and, upon request, certify in writing such destruction by an authorized officer of the Receiving Party supervising the destruction).
</p>   

        </div>     
    
    </div>
</section>

<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Notice of <span class="bg-faded-primary text-primary rounded px-3 py-2">Breach</span></h2>
        <div class="mb-5">
<p>
    Receiving Party shall notify the Disclosing Party immediately upon discovery of any unauthorized use or disclosure of Confidential Information by Receiving Party or its Representatives, or any other breach of this Agreement by Receiving Party or its Representatives, and will cooperate with efforts by the Disclosing Party to help the Disclosing Party regain possession of Confidential Information and prevent its further unauthorized use.
</p>   

        </div>     
    
    </div>
</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">No Binding Agreement For <span class="bg-faded-primary text-primary rounded px-3 py-2">Transaction</span></h2>
        <div class="mb-5">
<p>
    The parties agree that neither party will be under any legal obligation of any kind whatsoever with respect to a Transaction by virtue of this Agreement, except for the matters specifically agreed to herein. The parties further acknowledge and agree that they each reserve the right, in their sole and absolute discretion, to reject any and all proposals and to terminate discussions and negotiations with respect to a Transaction at any time. This Agreement does not create a joint venture or partnership between the parties. If a Transaction goes forward, the non-disclosure provisions of any applicable transaction documents entered into between the parties (or their respective affiliates) for the Transaction shall supersede this Agreement. In the event such provision is not provided for in said transaction documents, this Agreement shall control.
</p>   

        </div>     
    
    </div>
</section>
<section>
    <div class="container mt-4 mt-md-0  pb-5">
        <h2 class="  mb-4">Changes to this   <span class="bg-faded-primary text-primary rounded px-3 py-2">Privacy Policy </span></h2>
        <div class="mb-5">
<p>
    This Privacy Policy may be modified from time to time, so please review it frequently. Changes to this Privacy Policy will be posted on our websites. If we materially change the ways in which we use or share personal information previously collected from you through our Services, we will notify you through our Services, by email, or other communication.
</p>   

        </div>     
    
    </div>
</section>
<section>
    <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
        <h2 class="  mb-4">Miscellaneous </h2>
        <div class="mb-5">

            <ul class="list-unstyled">
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>This Agreement constitutes the entire understanding between the parties and supersedes any and all prior or contemporaneous understandings and agreements, whether oral or written, between the parties, with respect to the subject matter hereof. This Agreement can only be modified by a written amendment signed by the party against whom enforcement of such modification is sought.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>The validity, construction and performance of this Agreement shall be governed and construed in accordance with the laws of India applicable to contracts made and to be wholly performed within such state, without giving effect to any conflict of laws provisions thereof. The Federal and state courts located in India shall have sole and exclusive jurisdiction over any disputes arising under the terms of this Agreement.               </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Any failure by either party to enforce the other party’s strict performance of any provision of this Agreement will not constitute a waiver of its right to subsequently enforce such provision or any other provision of this Agreement.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Although the restrictions contained in this Agreement are considered by the parties to be reasonable for the purpose of protecting the Confidential Information, if any such restriction is found by a court of competent jurisdiction to be unenforceable, such provision will be modified, rewritten or interpreted to include as much of its nature and scope as will render it enforceable. If it cannot be so modified, rewritten or interpreted to be enforceable in any respect, it will not be given effect, and the remainder of the Agreement will be enforced as if such provision was not included.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Any notices or communications required or permitted to be given hereunder may be delivered by hand, deposited with a nationally recognized overnight carrier, electronic-mail, or mailed by certified mail, return receipt requested, postage prepaid, in each case, to the address of the other party first indicated above (or such other addressee as may be furnished by a party in accordance with this paragraph). All such notices or communications shall be deemed to have been given and received (a) in the case of personal delivery or electronic-mail, on the date of such delivery, (b) in the case of delivery by a nationally recognized overnight carrier, on the third business day following dispatch and (c) in the case of mailing, on the seventh business day following such mailing.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>This Agreement is personal in nature, and neither party may directly or indirectly assign or transfer it by operation of law or otherwise without the prior written consent of the other party, whose consent will not be unreasonably withheld. All obligations contained in this Agreement shall extend to and be binding upon the parties to this Agreement and their respective successors, assigns and designees.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>The receipt of Confidential Information pursuant to this Agreement will not prevent or in any way limit either party from: (i) developing, making or marketing products or services that are or may be competitive with the products or services of the other; or (ii) providing products or services to others who compete with the other.                </li>
                <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Paragraph headings used in this Agreement are for reference only and shall not be used or relied upon in the interpretation of this Agreement.                </li>              
            </ul>
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