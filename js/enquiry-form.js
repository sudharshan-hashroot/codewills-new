//contact form js
(function($) {
    'use strict';


        // validations start here
        $('#enquiry_form').validate({

            rules: {

                r_name: {
                    required: true
                },
                r_email: {
                    required: true,
                    email: true
                },
                
                // cont_phone: {
                //     required: true
                // },
                // cont_subject: {
                //     required: true,
                // },
                r_message: {
                    required: true,
                }
            },

            messages: {

                r_name: {
                    required: 'Please enter your full name!'
                },
                r_email: {

                    required: 'Please enter a valid email address!',
                    email: 'Your email must be valid.'
                },
                
                // // cont_phone: {
                // //     required: 'Message must be filled out.'
                // // },

                // // cont_subject: {
                // //     required: 'Email must be filled out.',
                // // },
                r_message: {
                    required: 'Please write a Project Description!',
                }
            },

            submitHandler: function() {
                var r_name = $('#r_name').val();
                var r_email = $('#r_email').val();
                var r_message = $('#r_message').val();
                var web_design = $('input[name="service1"]:checked').val();
                var web_app =$('input[name="service2"]:checked').val();
              
                var ecommerce_design = $('input[name="service3"]:checked').val();
           
                var  mob_app =$('input[name="service4"]:checked').val();
               
                var  dig_mark = $('input[name="service5"]:checked').val();

                  
                var xurl = 'php/send_email.php?type=Enquiry_Form&r_name='+ r_name + '&r_email=' + r_email + '&r_message=' + r_message + '&web_design=' + web_design +'&web_app=' + web_app +'&ecommerce_design=' + ecommerce_design + '&mob_app=' + mob_app +'&dig_mark=' + dig_mark ;

                $('#btn_sent').val('Sending...');
                $('#error_message').html('');
                $('#btn_sent').attr('disabled', true);
                grecaptcha.ready(function () {
                    grecaptcha.execute('6Ldb7PAcAAAAALKN6oPEOLjDjOBnMKhDCJ3Bn6KL', { action: 'submit' }).then(function (token) {
                     //   var recaptchaResponse = document.getElementById('recaptchaResponse');
                     //   recaptchaResponse.value = token;
                        xurl=xurl+"&recaptcha_response="+token;
                     $.ajax({
                         type: 'POST',
                         url: xurl,
                         dataType: 'json',
                         success: function(result) {
                             console.log(result);
                             // result=JSON.parse(result);
                             $('#btn_sent').prop('disabled', false);
                             $('#btn_sent').val('Send enquiry');
                             if (result.response == 'success') {
                                 $('#enquiry_form')[0].reset();
                                 $('#error_message').html(result.message);
                                 $('#enquiry_form').removeClass("was-validated");
                                 $("input:radio").removeAttr("checked");
                                   $('#ux2').removeClass('active');
                                     $('#ux3').removeClass('active');
                                       $('#ux4').removeClass('active');
                                         $('#ux5').removeClass('active');
                                 return false;
                             } else if (result.response == 'error') {
                                 $('#error_message').html(result.message);
                                 $('#error_message').addClass('contact-confirmation');
                             }
                         },
                         error: function (error) { // error callback 
                               console.log("error");
                               console.log(error);
                              
                               $('#error_message').html("Failed to send server error");
                         }
                     });
                     });
                     });
                 }
        });
}(jQuery));