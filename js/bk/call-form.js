//call form js
(function($) {
    'use strict';


        // validations start here
        $('#call_form').validate({

            submitHandler: function() {
                var con_phone = $('#con_phone').val();
               // console.log(con_phone);
                if(con_phone===""){
                    $('#call_check').show().html('Please enter your Phone number!');
                    return false;
                }
                $("#call_check").hide();
                var xurl = 'php/send_email.php?type=CALL_US&con_phone=' + con_phone ;

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

                               // $('#call_check').show().html(result.message);
                               
                                swal("Success", "Callback request received. Our representative will reach you shortly.", "success");
                            //    swal("Error", "Failed to send server error.", "error");

                            $('#con_phone').val('');
                            return false;
                                 
                               
                             } else if (result.response == 'error') {
                                swal("Error", "Failed to send server error.", "error");

                             }
                         },
                         error: function (error) { // error callback 
                               console.log("error");
                               console.log(error);
                              
                               swal("Error", "Failed to send server error.", "error");
                         }
                     });
                     });
                     });
                 }
        });
}(jQuery));