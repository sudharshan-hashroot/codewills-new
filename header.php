


  <!-- Navbar (Solid background + shadow)-->
  <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
  <!-- Facebook Pixel Code -->

  <!-- End Facebook Pixel Code -->
  <script src="./js/tag.js"></script>
<style>
    .policies_footer a {
     font-size: .8rem!important;
    color: #737491;
    text-decoration: none!important;
}
.policies_footer a:hover {
    color: #8f91b4;
}
.swal-button--confirm {
    background-color: #924cef;
  }
  .swal-button--confirm:hover {
    background-color: #5654ff!important;
  }

   .bg-gradient-home-slider {
      background: linear-gradient(to right,
          #5654ff 0%,
          #924cef 30%,
          #ff7777 100%);
    }
    .grecaptcha-badge { 
    visibility: hidden;
}
</style>

<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();

 
$geoplugin->locate(); ?>


<?php include("enquirePopup.php"); ?>
<header class="header">
    <div class="topbar topbar-dark bg-dark">
      <div class="container d-md-flex align-items-center px-0 px-xl-3">
        <div class="d-none d-md-block text-nowrap me-3"><i class="ai-phone fs-base text-muted me-1 align-middle"></i><span class="text-muted me-2">Call Us</span><a class="topbar-link me-1" href="tel:+919778426317">+91-9778-426317</a></div>
        <div class="d-flex text-md-end ms-md-auto">

          <!-- <div class="dropdown ms-auto ms-md-0 me-3"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" alt="English" width="20">Eng</a>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/fr.png" alt="Français" width="20">Français</a><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/de.png" alt="Deutsch" width="20">Deutsch</a><a class="dropdown-item" href="#"><img class="mt-n1 me-2" src="img/flags/it.png" alt="Italiano" width="20">Italiano</a></div>
          </div> -->
          <div class="dropdown"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="dropdn_symbl"><?php echo $geoplugin->currencyCode ." (". $geoplugin->currencySymbol.")"; ?></a>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#" onclick="convertfun('INR');">₹ Rupees (INR)</a>
              <a class="dropdown-item" href="#" onclick="convertfun('USD');">$ Dollar (US)</a>
              <a class="dropdown-item" href="#" onclick="convertfun('GBP');">£ Pound (UK)</a>
              <a class="dropdown-item" href="#" onclick="convertfun('EUR');">€ Euro (EU)</a>
              <a class="dropdown-item" href="#" onclick="convertfun('JPY');">¥ Yen (JP)</a>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-light bg-light navbar-shadow navbar-sticky" data-scroll-header="" data-fixed-element="" style="z-index:99">
     
      <div class="container px-0 px-xl-3">
        <button class="navbar-toggler ms-n2 " style="z-index: 100;" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="/"><img class="d-none d-lg-block" src="img/logo/codewills-by-hashroot-logo.svg" alt="codewills by hashroot logo" width="153" style="margin-right:3rem;"><img class="d-lg-none" style="margin-right:3rem;" src="img/logo/logo-icon.svg" alt="Around" width="58"></a>
        <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
        
            <a class="btn btn-primary ms-grid-gutter d-none  d-lg-inline-block" href="#modal-enquirenow" data-bs-toggle="modal"
            data-view="#modal-enquirenow-view">Enquire Now</a>
          </div>
        <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
          <div class="offcanvas-header navbar-shadow">
            <h5 class="mt-1 mb-0">Menu</h5>
            <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <!-- Menu-->
            <ul class="navbar-nav">
           
              <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="/about-us">About Us</a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Our Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/ui-ux-design-services">
                    <div class="d-flex align-items-center">
                      <div class="fs-xl text-muted"><i class="ai-pen-tool"></i></div>
                      <div class="ps-3"><span class="d-block text-heading">UI/UX Designing</span><small class="d-none text-muted">Kick-start customization</small></div>
                    </div></a></li>
                    <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/website-development-services">
                      <div class="d-flex align-items-center">
                        <div class="fs-xl text-muted"><i class="ai-monitor"></i></div>
                        <div class="ps-3"><span class="d-block text-heading">Website Development</span><small class="d-none text-muted">Kick-start customization</small></div>
                      </div></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/mobile-app-development-services">
                      <div class="d-flex align-items-center">
                        <div class="fs-xl text-muted"><i class="ai-layers"></i></div>
                        <div class="ps-3"><span class="d-block text-heading">Mobile App Development</span><small class="d-none text-muted">Flexible components</small></div>
                      </div></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/web-application-development-services">
                      <div class="d-flex align-items-center">
                        <div class="fs-xl text-muted"><i class="ai-grid"></i></div>
                        <div class="ps-3"><span class="d-block text-heading">Web App Development</span><small class="d-none text-muted">Regular updates</small></div>
                      </div></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/digital-marketing-services">
                      <div class="d-flex align-items-center">
                        <div class="fs-xl text-muted"><i class="ai-pie-chart"></i></div>
                        <div class="ps-3"><span class="d-block text-heading">Digital Marketing</span><small class="d-none text-muted">Flexible component</small></div>
                      </div></a></li>

                      
                </ul>
              </li>
            
              <li class="nav-item"><a class="nav-link" href="/pricing">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="careers.html">Careers</a></li> -->
              <li class="nav-item"><a class="nav-link" href="/contact-us">Contact Us</a></li>
              
            </ul>
          </div>
          <div class="offcanvas-footer border-top">
            <a class="btn btn-primary d-block w-100 offcanvaspopup" href="#modal-enquirenow" data-bs-toggle="modal"
            data-view="#modal-enquirenow-view">
            <i class="ai-user fs-lg me-2"></i>
            Enquire Now
          </a></div>
        </div>
      </div>
    </div>
    </header>

    <script>
$(".offcanvaspopup").on('click',function(){
  $(".btn-close").trigger("click");
})
function convertfun(cur) {
  console.log(cur);
  $.ajax({  
         type:"GET",  
         url:"currencycheck.php",  
         data:"cur="+cur,  
         success:function(response){
           var resp = response.split('#');
           var mainstring = resp[0].split(',');
           for(var i = 0; i< mainstring.length; i++) {
             var substring = mainstring[i].split(':');
             //$('#'.substring[0]).text(substring[1]);
             $('#'+substring[0]).text(substring[1]);
           }
           if(resp[1] == 'INR') {
            $('#uiux_sybl').text('₹');
            $('#website_sybl').text('₹');
            $('#web_sybl').text('₹');
            $('#ecommerce_sybl').text('₹');
            $('#mobile_sybl').text('₹');
            $('#digital_sybl').text('₹');
            $('#dropdn_symbl').text('(INR)₹');
           }
           if(resp[1] == 'USD') {
            $('#uiux_sybl').text('$');
            $('#website_sybl').text('$');
            $('#web_sybl').text('$');
            $('#ecommerce_sybl').text('$');
            $('#mobile_sybl').text('$');
            $('#digital_sybl').text('$');
            $('#dropdn_symbl').text('(US)$');
           }
           if(resp[1] == 'GBP') {
            $('#uiux_sybl').text('£');
            $('#website_sybl').text('£');
            $('#web_sybl').text('£');
            $('#ecommerce_sybl').text('£');
            $('#mobile_sybl').text('£');
            $('#digital_sybl').text('£');
            $('#dropdn_symbl').text('(UK)£');
           }
           if(resp[1] == 'EUR') {
            $('#uiux_sybl').text('€');
            $('#website_sybl').text('€');
            $('#web_sybl').text('€');
            $('#ecommerce_sybl').text('€');
            $('#mobile_sybl').text('€');
            $('#digital_sybl').text('€');
            $('#dropdn_symbl').text('(EU)€');
           }
           if(resp[1] == 'JPY') {
            $('#uiux_sybl').text('¥');
            $('#website_sybl').text('¥');
            $('#web_sybl').text('¥');
            $('#ecommerce_sybl').text('¥');
            $('#mobile_sybl').text('¥');
            $('#digital_sybl').text('¥');
            $('#dropdn_symbl').text('(JP)¥');
           }
        } 
      }); 
}
    </script>

  