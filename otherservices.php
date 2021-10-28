<section class="container mt-4 pt-5 mt-md-0 pt-md-7 pb-5">
      <h2 class="mb-5 text-center">Other Services</h2>
      <div class="row">
      <?php 
       $url = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 


       $webdev = "<div class='col-lg-6 col-sm-6 mb-grid-gutter'><a class='card h-100 border-0 shadow card-hover'
       href='/website-development-services'>
       <div class='card-body ps-grid-gutter pe-grid-gutter text-center'><i
           class='ai-tv h2 text-primary mt-2 mb-4'></i>
         <h3 class='h5'>Website Development</h3>
         <p class='fs-sm text-body'>We provide full-cycle website development services for your company using the
           most cutting-edge technology while remaining cost-effective.</p>
         <div class='btn btn-translucent-primary btn-sm mb-2'>Read more</div>
       </div>
     </a></div>";

     $mobileappdev = "<div class='col-lg-6 col-sm-6 mb-grid-gutter'><a class='card h-100 border-0 shadow card-hover'
     href='/mobile-app-development-services'>
     <div class='card-body ps-grid-gutter pe-grid-gutter text-center'><i
         class='ai-smartphone  h2 text-primary mt-2 mb-4'></i>
       <h3 class='h5'>Mobile App Development</h3>
       <p class='fs-sm text-body'>Build Mobile Apps with us. We ensure your mobile app functions flawlessly
         across all platforms and operating systems: smartphone, tablet, laptop, iOS or Android e.t.c</p>
       <div class='btn btn-translucent-primary btn-sm mb-2'>Read more</div>
     </div>
   </a></div>";

   $webappdev = "<div class='col-lg-6 col-sm-6 mb-grid-gutter'><a class='card h-100 border-0 shadow card-hover'
   href='/web-application-development-services'>
   <div class='card-body ps-grid-gutter pe-grid-gutter text-center'><i
       class='ai-monitor h2 text-primary mt-2 mb-4'></i>
     <h3 class='h5'>Web App Development</h3>
     <p class='fs-sm text-body'>We provide adaptive web application development services to our clients by
       delivering smooth integration, attractive user-interface B2B & B2C web portals, and much more.</p>
     <div class='btn btn-translucent-primary btn-sm mb-2'>Read more</div>
   </div>
 </a></div>";

 $webdesign = "<div class='col-lg-6 col-sm-6 mb-grid-gutter'><a class='card h-100 border-0 shadow card-hover'
 href='/website-design-services'>
 <div class='card-body ps-grid-gutter pe-grid-gutter text-center'><i
     class='ai-cast h2 text-primary mt-2 mb-4'></i>
   <h3 class='h5'>Website Designing</h3>
   <p class='fs-sm text-body'>Get access to our dedicated team of web designing services to assist you in
     developing a responsive and user-friendly website.</p>
   <div class='btn btn-translucent-primary btn-sm mb-2'>Read more</div>
 </div>
</a></div>";

$digital = "<div class='col-lg-6 col-sm-6 mb-grid-gutter'><a class='card h-100 border-0 shadow card-hover'
href='/digital-marketing-services'>
<div class='card-body ps-grid-gutter pe-grid-gutter text-center'><i
    class='ai-pie-chart h2 text-primary mt-2 mb-4'></i>
  <h3 class='h5'>Digital Marketing</h3>
  <p class='fs-sm text-body'>Get access to our dedicated team of web designing services to assist you in
    developing a responsive and user-friendly website.</p>
  <div class='btn btn-translucent-primary btn-sm mb-2'>Read more</div>
</div>
</a></div>";

if ($url == "webdev.php") {
      echo $webappdev;
      echo $mobileappdev;
      echo $webdesign;
      echo $digital;
} else if ($url == "webappdev.php") {
      echo $webdev;
      echo $mobileappdev;
      echo $webdesign;
      echo $digital;
} else if ($url == "mobileappdev.php") {
      echo $webdev;
      echo $webappdev;
      echo $webdesign;
      echo $digital;
} else if ($url == "webdesign.php") {
      echo $webdev;
      echo $webappdev;
      echo $mobileappdev;
      echo $digital;
} else if ($url == "digitalmarketing.php") {
      echo $webdev;
      echo $webappdev;
      echo $mobileappdev;
      echo $webdesign;
 
}
// echo $webdev;
// echo $webappdev;
// echo $mobileappdev;
// echo $webdesign;
// echo $digital;

      ?>
      
        
        
        

      </div>
    </section>