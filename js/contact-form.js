//contact form js
(function($) {
    'use strict';


        // validations start here
        $('#contact_form').validate({

            rules: {

                cont_fn: {
                    required: true
                },
                cont_email: {
                    required: true,
                    email: true
                },
                
                // cont_phone: {
                //     number: true,
                //     regex:"[- +0-9]+"
                    
                // },
                // cont_subject: {
                //     required: true,
                // },
                cont_message: {
                    required: true,
                }
            },

            messages: {

                cont_fn: {
                    required: 'Please enter your full name!',
                },
                cont_email: {
                    required: 'Please enter a valid email address!',
                    email: 'Your email must be valid.'
                },
                
                // // cont_phone: {
                // //     required: 'Message must be filled out.'
                // // },

                // // cont_subject: {
                // //     required: 'Email must be filled out.',
                // // },
                cont_message: {
                    required: 'Please write a message!',
                }
            },

            submitHandler: function() {
                var con_fname = $('#cont_fn').val();
                var con_email = $('#cont_email').val();
                var con_phone = $('#cont_phone').val();
                var con_subject = $('#cont_subject').val();
                var con_message = $('#cont_message').val();
               
                var xurl = 'php/send_email.php?type=CONTACT_US&con_email=' + con_email + '&con_fname=' + con_fname + '&con_phone=' + con_phone + '&con_message=' + con_message+ '&con_subject=' + con_subject;

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

                                 $('#error_message').html(result.message);
                               
                                  $('#cont_email').val('');
                                  $('#cont_fn').val('');
                                  $('#cont_phone').val('');
                                    $('#cont_subject').val('');
                                  $('#cont_message').val('');
                                           
   $('#contact_form').removeClass("was-validated");
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