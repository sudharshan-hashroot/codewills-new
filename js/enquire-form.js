//contact form js
(function($) {
    'use strict';


        // validations start here
        $('#enquire_form').validate({

            rules: {

                r_name: {
                    required: true
                },
                r_email: {
                    required: true,
                    email: true
                },
                r_phone: {
                    required: true,
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
                
                r_phone: {
                   required: 'Please enter a phone number!'
                },

                // // cont_subject: {
                // //     required: 'Email must be filled out.',
                // // },
                r_message: {
                    required: 'Please write a message!',
                }
            },

            submitHandler: function() {
                var r_name = $('#r_name').val();
                var r_email = $('#r_email').val();
                var r_message = $('#r_message').val();
                var r_phone = $('#r_phone').val();
                var xurl = 'php/send_email.php?type=Enquire_Form&r_name='+ r_name + '&r_email=' + r_email + '&r_message=' + r_message + '&r_phone=' + r_phone ;

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
                                 $('#enquire_form')[0].reset();
                             //    $('#error_message').html(result.message);
                             $('body').removeAttr("style");
                                 swal("Success", "Message Sent. Our representative will reach you shortly", "success");
                                 $('#r_email').val('');
                                 $('#r_phone').val('');
                                 $('#r_message').val('');
                                 $('#r_name').val('');
                                                                  $('#enquire_form').removeClass("was-validated");
                                 $('#modal-enquirenow').modal('hide');
                                 $('body').removeAttr("style");
                                 $('body').removeClass('modal-open');
                                 $('.modal-backdrop').remove();
                                   $('body').removeAttr("style");
                                   $(".swal-button--confirm").on('click', function(event){
      $('body').removeAttr("style");
});
                                   
                                   
                                 return false;
                             } else if (result.response == 'error') {
                                swal("Error", "Callback request received. Our representative will reach you shortly.", "error");
                               
                                $('#modal-enquirenow').modal('hide');
                            $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();
                             
                                //  $('#error_message').html(result.message);
                                //  $('#error_message').addClass('contact-confirmation');
                             }
                         },
                         error: function (error) { // error callback 
                               console.log("error");
                               console.log(error);
                               swal("Error", "Failed to send server error", "error");
                               $('#modal-enquirenow').modal('hide');
                               $('body').removeClass('modal-open');
                                   $('.modal-backdrop').remove();
                                

                            //   $('#error_message').html("Failed to send server error");
                         }
                         
                     });
                     });
                     });
                 }
        });
}(jQuery));