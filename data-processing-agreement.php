<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Privacy Policy | CodeWills by HashRoot</title>

    <!-- SEO Meta Tags-->
    <meta name="title" content="About HashRoot | CodeWills by HashRoot">
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
        <section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax="" data-speed="0.25"
            style="background-image: none;"><span
                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient opacity-80"></span>

            <div class="container position-relative zindex-5 pt-3 pb-3 pt-md-0">
                <div class="text-center py-md-5">
                    <div class="text-center pt-2 mb-n3">
                        <h2 class="h1  text-light mb-4 pb-4">Data Processing Agreement </h2>
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
                    data-jarallax-original-styles="background-image: url(img/company_banner/Life\ at\ hashroot.jpg);">
                </div>
            </div>
        </section>
        <section class="bg-secondary">
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">

                <p class="text-center">
                    This Customer Data Processing Agreement reflects the requirements of the European Data Protection
                    Regulation (“GDPR”) as it comes into effect on May 25, 2018. HashRoot Limited´s products and
                    services offered in the European Union are GDPR ready and this DPA provides you with the necessary
                    documentation of this readiness.
                </p>
                <p class="text-center">
                    This Data Processing Agreement (“DPA”) is an addendum to the Customer Terms of Service (“Agreement”)
                    between HashRoot Limited (HashRoot) and the Customer. All capitaized terms not defined in this DPA
                    shall have the meanings set forth in the Agreement. Customer enters into this DPA on behalf of
                    itself and, to the extent required under Data Protection Laws, in the name and on behalf of its
                    Authorized Affiliates (defined below).
                </p>
                <!-- <p class="bg-faded-primary text-center font-weight-bold text-primary rounded-3 p-3">
          We recommend that you read this Information Audit Document in full to ensure you are fully informed.
        </p> -->
            </div>

        </section>
        <section>
            <div class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
                <h2 class="mb-4">DEFINITIONS
                </h2>
                <div class="mb-5">

                    <ul class="list-unstyled">
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Affiliate”
                            &nbsp; means an entity that directly or indirectly Controls, is Controlled by or is under
                            common Control with an entity.</li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>"Authorized
                            Affiliate" &nbsp;means any of Customer Affiliate(s) permitted to or otherwise
                            receiving the benefit of the Services pursuant to the Agreement. </li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Control"
                            &nbsp;means an ownership, voting or similar interest representing fifty percent (50%) or
                            more of the total interests then outstanding of the entity in question. The term
                            “Controlled” shall be construed accordingly. </li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Controller”
                            &nbsp; means an entity that determines the purposes and means of the processing of Personal
                            Data.</li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Customer
                            Data” &nbsp; means any data that HashRoot processes on behalf of Customer in
                            the course of providing the Services under the Service Level Agreement.</li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>"Data
                            Protection
                            Laws" &nbsp;means all data protection and privacy laws and regulations
                            applicable to the processing of Personal Data under the Agreement, including, where
                            applicable, EU Data Protection Law. </li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“EU
                            Data Protection
                            Law” &nbsp;means (i) prior to May 25, 2018, Directive 95/46/EC of the European
                            Parliament and of the Council on the protection of individuals with regard to the processing
                            of Personal Data and on the free movement of such data (“Directive”) and on and after May
                            25, 2018, Regulation 2016/679 of the European Parliament and of the Council on the
                            protection of natural persons with regard to the processing of Personal Data and on the free
                            movement of such data (General Data Protection Regulation) (“GDPR”); and (ii) Directive
                            2002/58/EC concerning the processing of Personal Data and the protection of privacy in the
                            electronic communications sec- tor and applicable national implementations of it (in each
                            case, as may be amended, superseded or replaced). </li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Personal
                            Data”&nbsp; means any Customer Data relating to an identified or identifiable
                            natural person to the extent that such information is protected as personal data under
                            applicable Data Protection Law.</li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Processor”
                            &nbsp; means an entity that processes Personal Data on behalf of the Controller.</li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Processing”
                            &nbsp; has the meaning given to it in the GDPR and “process”, “processes” and “processed”
                            shall be interpreted accordingly.</li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Security
                            Incident”&nbsp; means any unauthorized or unlawful breach of security that
                            leads to the accidental or unlawful destruction, loss, alteration, unauthorzized disclosure
                            of or access to Personal Data.</li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>“Services”
                            &nbsp; means any product or service provided by HashRoot to Customer pursuant to and as more
                            particularly described in the Agreement.</li>

                    </ul>
                </div>
                <div class="mb-5">
                    <h4 class="font-weight-bold text-dark">SCOPE AND APPLICABILITY OF THIS DPA:</h4>
                    <p>We use the information we collect in various ways, including to:</p>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>This
                            DPA applies where and only to the extent that HashRoot processes Personal Data on behalf of
                            the Customer in the course of providing the Services and such Personal Data is subject to
                            Data Protection Laws of the European Union, the European Economic Area and/or their member
                            states, Switzerland and/or the United Kingdom. The parties agree to comply with the terms
                            and conditions in this DPA in connection with such Personal Data.</li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Role of
                            the Parties. As between HashRoot and Customer, Customer is the Controller of Personal Data
                            and HashRoot shall process Personal Data only as a Processor on behalf of Customer. Nothing
                            in the Agreement or this DPA shall prevent HashRoot from using or sharing any data that
                            HashRoot would otherwise collect and process independently of Customer’s use of the
                            Services. </li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Customer Obligations. Customer
                            agrees that (i) it shall comply with its obligations as a Controller under Data Protection
                            Laws in respect of its processing of Personal Data and any processing instructions it issues
                            to HashRoot; and (ii) it has provided notice and obtained (or shall obtain) all consents and
                            rights necessary under Data Protection Laws for HashRoot to process Personal Data and
                            provide the Services pursuant to the Agreement and this DPA. </li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>HashRoot Processing of Personal
                            Data. As a Processor, HashRoot shall process Personal Data only for the following purposes:
                            (i) processing to perform the Services in accordance with the Agreement; (ii) processing to
                            perform any steps necessary for the performance of the Agreement; and (iii) to comply with
                            other reasonable instrutions provided by Customer to the extent they are consistent with the
                            terms of this Agreement and only in accordance with Customer’s documented lawful
                            instructions. The parties agree that this DPA and the Agreement set out the Customer’s
                            complete and final instructions to HashRoot in relation to the processing of Personal Data
                            and processing outside the scope of these instructions (if any) shall require prior written
                            agreement between Customer and HashRoot. </li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Nature
                            of the Data. HashRoot handles Customer Data provided by Customer. Such Customer Data may
                            contain special categories of data depending on how the Services are used by Customer. The
                            Customer Data may be subject to the following process activities: (i)storage and other
                            processing necessary to provide, maintain and improve the Services provided to Customer;
                            (ii) to provide customer and technical support to Customer; and (iii) disclosures as
                            required by law or otherwise set forth in the Agreement. </li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>HashRoot Data. Notwithstanding
                            anything to the contrary in the Agreement (including this DPA), Customer acknowledges that
                            HashRoot shall have a right to use and disclose data relating to and/or obtained in
                            connection with the operation, support and / or use of the Services for its legitimate
                            business purposes, such as billing, account management, technical support, product
                            development and sales and marketing. To the extent any such data is considered personal data
                            under Data Protection Laws, HashRoot is the Controller of such data and accordingly shall
                            process such data in compliance with Data Protection Laws. </li>
                    </ul>
                </div>
                <div class="mb-5">
                    <h4 class="font-weight-bold text-dark">SECURITY : </h4>
                    <p>We may share the information we collect in various ways, including the following:</p>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Security Measures. HashRoot
                            shall implement and maintain appropriate technical and organizational security measures to
                            protect Personal Data from Security Incidents and to preserve the security and
                            confidentiality of the Personal Data, in accordance with HashRoot’s security standards
                            described in Annex B (“Security Measures”).
                        </li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Confidentiality of Processing.
                            HashRoot shall ensure that any person who is authorized by HashRoot to process Personal Data
                            (including its staff, agents and subcontractors) shall be under an appropriate obligation of
                            confidentiality (whether a contractual or statutory duty). </li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Security Incident Response.
                            Upon becoming aware of a Security Incident, HashRoot shall notify Customer without undue
                            delay and shall provide timely information relating to the Security Incident as it becomes
                            known or as is reasonably requested by Customer. </li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Updates
                            to Security Measures. Customer acknowledges that the Security Measures are subject to
                            technical progress and development and that HashRoot may update or modify the Security
                            Measures from time to time provided that such updates and modifica- tions do not result in
                            the degradation of the overall security of the Services purchased by the Customer. </li>

                    </ul>
                </div>
                <div class="mb-5">
                    <h4 class="font-weight-bold text-dark">SECURITY REPORTS AND AUDITS</h4>

                    <p>HashRoot shall maintain records of its security standards. Upon Customer’s written request,
                        HashRoot shall provide (on a confidential basis) copies of relevant external ISMS
                        certifications, audit report summaries and/or other documentation reasonably required by
                        Customer to verify HashRoot’s compliance with this DPA. HashRoot shall further provide written
                        responses (on a confidential basis) to all reasonable requests for information made by Customer,
                        including responses to information security and audit questionnaires, that Customer (acting
                        reasonably) considers necessary to confirm HashRoot’s compliance with this DPA, provided that
                        Customer shall not exercise this right more than once per year.</p>
                </div>
                <div class="mb-5">
                    <h4 class="font-weight-bold text-dark">INTERNATIONAL TRANSFERS</h4>

                    <p>Processing Locations. HashRoot stores and processes EU Data (defined below) in data centers located inside and outside the European Union. All other Customer Data may be transferred and processed in the United States and anywhere in the world where Customer, its Affiliates and/or its Sub-processors maintain data processing operations. HashRoot shall implement appropriate safeguards to protect the Personal Data, wherever it is processed, in accordance with the requirements of Data Protection Laws.</p>
                </div>
                <div class="mb-5">
                    <h4 class="font-weight-bold text-dark">RETURN OR DELETION OF DATA</h4>
                    <p>Upon deactivation of the Services, all Personal Data shall be deleted, save that this requirement shall not apply to the extent HashRoot is required by applicable law to retain some or all of the Personal Data, or to Personal Data it has archived on back-up systems, which such Personal Data HashRoot shall securely isolate and protect from any further processing, except to the extent required by applicable law.</p>
                </div>
                <div class="mb-5">
                    <h4 class="font-weight-bold text-dark">COOPERATION</h4>
                    <p>To the extent that Customer is unable to independently access the relevant Personal Data within the Services, HashRoot shall (at Customer’s expense) taking into account the nature of the processing, provide reasonable cooperation to assist Customer by appropriate technical and organizational measures, in so far as is possible, to respond to any requests from individuals or applicable data protection authorities relating to the processing of Personal Data under the Agreement. In the event that any such request is made directly to HashRoot, HashRoot shall not respond to such communication directly without Customer’s prior authorization, unless legally compelled to do so. If HashRoot is required to respond to such a request, HashRoot shall promptly notify Customer and provide it with a copy of the request unless legally prohibited from doing so.</p>
                    <p>To the extent that Customer is unable to independently access the relevant Personal Data within the Services, HashRoot shall (at Customer’s expense) taking into account the nature of the processing, provide reasonable cooperation to assist Customer by appropriate technical and organizational measures, in so far as is possible, to respond to any requests from individuals or applicable data protection authorities relating to the processing of Personal Data under the Agreement. In the event that any such request is made directly to HashRoot, HashRoot shall not respond to such communication directly without Customer’s prior authorization, unless legally compelled to do so. If HashRoot is required to respond to such a request, HashRoot shall promptly notify Customer and provide it with a copy of the request unless legally prohibited from doing so.</p>
                </div>
                <div class="mb-5">
                    <h4 class="font-weight-bold text-dark">MISCELLANEOUS</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>Except for the changes made by this DPA, the Agreement remains unchanged and in full force and effect. If there is any conflict between this DPA and the Agreement, this DPA shall prevail to the extent of that conflict.</li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>This DPA is a part of and incorporated into the Agreement so references to “Agreement” in the Agreement shall include this DPA.</li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i>
                            In no event shall any party limit its liability with respect to any individual’s data protection rights under this DPA or otherwise.</li>
                        <li class="d-flex mb-2 pb-1"><i
                                class="ai-check-circle text-success fs-xl mt-1 me-3"></i>This DPA shall be governed by and construed in accordance with governing law and jurisdiction provisions in the Agreement, unless required otherwise by Data Protection Laws. </li>
                        

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