<!-- form -->
<section class=" bg-secondary pt-5 pt-md-6 pt-lg-7">
      <div class="container py-3 pt-md-0">
        <div class="row pb-2 pb-md-5">
          <form class="col-xl-6 col-lg-7 col-md-7 needs-validation mb-5"  method="post" id="enquiry_form"
                        novalidate="novalidate" action="#" enctype="multipart/form-data">
            <h2 class="pb-4">What project are you looking for?</h2>
            <h3 class="h6 pb-2">Services</h3>
            <div class="btn-group-toggle pb-3 mb-3" data-bs-toggle="buttons">
              <label class="btn btn-outline-primary me-2 mb-2 active" id="ux1">
                <input class="visually-hidden" type="radio" name="service1" value="Web Design" id="branding" checked="">Web Design
              </label>
              <label class="btn btn-outline-primary me-2 mb-2" id="ux2">
                <input class="visually-hidden" type="radio" name="service2" value="Web Application" id="ux">Web Application
              </label>
              <label class="btn btn-outline-primary me-2 mb-2" id="ux3">
                <input class="visually-hidden" type="radio" name="service3" value="eCommerce Development" id="illustration">eCommerce Development
              </label>
              <label class="btn btn-outline-primary mb-2" id="ux4">
                <input class="visually-hidden" type="radio" name="service4" value="Mobile Application" id="motion">Mobile Application
              </label>
              <label class="btn btn-outline-primary mb-2" id="ux5">
                <input class="visually-hidden" type="radio" name="service5" value="Digital Marketing" id="dig">Digital Marketing
              </label>
            </div>
            <div class="input-group mb-3"><i
                class="ai-user position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded" name="r_name"  id="r_name" type="text" placeholder="Name" required="">
              <div class="invalid-feedback"></div>

            </div>
            <div class="input-group mb-3"><i
                class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded" type="email" id="r_email" name="r_email" placeholder="Email" required="">
              <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3 pb-1">
              <textarea class="form-control" rows="4" id="r_message" name="r_message"  placeholder="Project description" required=""></textarea>
              <div class="invalid-feedback"></div>
            </div>
            <div class="row pt-2">
              <div class="col-lg-6 col-md-8">
                <button class="btn btn-primary btn-block" type="submit">Send Request</button>
              </div>
              
            </div>          
            <p id="error_message"> </p>

          </form>
          <div class="col-xl-3 col-lg-4 offset-xl-3 offset-lg-1 col-md-5 mb-5">
            <h2 class="pb-2">Contacts</h2>
            <ul class="list-unstyled fs-sm mb-4 pb-2">
              <li><a class="nav-link-style" href="mailto:contact@example.com">contact@example.com</a></li>
              <li><a class="nav-link-style" href="tel:+15262200459">+91 9778426320</a></li>
            </ul>
            <h3 class="h6 pb-2">Or connect with us on:</h3><a class="btn-social bs-outline bs-facebook bs-lg me-2 mb-2"
              href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-outline bs-twitter bs-lg me-2 mb-2"
              href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-outline bs-instagram bs-lg me-2 mb-2"
              href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-outline bs-dribbble bs-lg me-2 mb-2"
              href="#"><i class="ai-dribbble"></i></a><a class="btn-social bs-outline bs-behance bs-lg me-2 mb-2"
              href="#"><i class="ai-behance"></i></a>
          </div>
        </div>
      </div>
    </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LfsmegcAAAAAOfQiUcaEbtgDkUPax5ecu40zrUP"></script>    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/jquery.validate.js"></script>
    <script src="js/mailchimp.js"></script>
    <script src="js/enquiry-form.js"></script>
  <script>
    $(".hovercards").hover(function () {
      $(".hovercardschild").children().css("display", "none")
      var valueparent = $(this).attr('data-hover')
      var valuechild = $(".hovercards" + valueparent)
      valuechild.css("display", "block")

    })
  </script>
    <script>
   $('#ux').click(function() {
    var checked = $(this).attr('checked');
    $('#ux2').addClass('active');

   // alert(checked);
    if (checked) {
      $('#ux2').removeClass('active');
        $(this).attr('checked', false);

    }
    else {
      $('#ux2').addClass('active');
        $(this).attr('checked', true);
    }
});
$('#illustration').click(function() {
    var checked = $(this).attr('checked');
    $('#ux3').addClass('active');
   // alert(checked);
    if (checked) {
      $('#ux3').removeClass('active');
        $(this).attr('checked', false);

    }
    else {
      $('#ux3').addClass('active');
        $(this).attr('checked', true);
    }
});
$('#motion').click(function() {
    var checked = $(this).attr('checked');
    $('#ux4').addClass('active');
   // alert(checked);
    if (checked) {
      $('#ux4').addClass('active');
        $(this).attr('checked', false);

    }
    else {
      $('#ux4').addClass('active');
        $(this).attr('checked', true);
    }
});
$('#dig').click(function() {
    var checked = $(this).attr('checked');
    $('#ux5').addClass('active');
   // alert(checked);
    if (checked) {
      $('#ux5').removeClass('active');
        $(this).attr('checked', false);

    }
    else {
      $('#ux5').addClass('active');
        $(this).attr('checked', true);
    }
});
$('#branding').click(function() {
    var checked = $(this).attr('checked');
   // alert(checked);
    if (checked) {
      $('#ux1').removeClass('active');
        $(this).attr('checked', false);

    }
    else {
      $('#ux1').addClass('active');
        $(this).attr('checked', true);
    }
});
  </script>