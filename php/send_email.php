<?php
// require_once('php/PHPMailer/class.phpmailer.php');
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
//print( $_REQUEST['recaptcha_response']);
if(isset($_REQUEST['recaptcha_response'])){
    
    $google_recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
   $recaptcha_secret_key = '6LfsmegcAAAAAB7HLh98T4b2_9VhJQWXQWyIarBN'; // Add your generated Secret key
  $set_recaptcha_response = $_REQUEST['recaptcha_response'];
   // Make the request and capture the response by making below request.
   $get_recaptcha_response = file_get_contents($google_recaptcha_url . '?secret=' . $recaptcha_secret_key . '&response=' . $set_recaptcha_response);

//   print( $get_recaptcha_response);
   $get_recaptcha_response = json_decode($get_recaptcha_response);

   // Set the Google recaptcha spam score here and based the score, take your action
   if ($get_recaptcha_response) {
        if(isset($_REQUEST['type']) && $_REQUEST['type'] == 'CONTACT_US'){
        // 	$to = 'safarubaid@gmail.com';
     //   print($_REQUEST['type']);
        	$to = 'safar.u@hashroot.com';
        	$subject = 'Codewills Contact Us Request';
        	$send_arr = array();	
        	
        	$headers = "MIME-Version: 1.0" . "\r\n";
        	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        	$headers .= "From: <noreply@codewills.com>" . "\r\n";
        // 	$headers .= "Cc: ".$_REQUEST['con_email'] . "\r\n";
        	
        	$message = "Full Name : ".$_REQUEST['con_fname']. "<br />";
        	$message .= "Email address : ".$_REQUEST['con_email']. "<br />";
        	$message .= "Phone number : ".$_REQUEST['con_phone']. "<br />";
        	$message .= "Subject : ".$_REQUEST['con_subject']. "<br />";
            $message .= "Message : ".$_REQUEST['con_message']. "<br />";
        //	var_dump( $message);
        	if (mail($to,$subject,$message,$headers) ){
        		
        		$send_arr['response'] = 'success';
        		$send_arr['message'] = 'Your message has been sent.';
        		
        		} else{
        			
        		$send_arr['response'] = 'error';
        		$send_arr['message'] = "You message couldn't be sent. Please try later!";
        			
        			}
        	echo json_encode($send_arr);
        	exit;
        	
        }else if(isset($_REQUEST['type']) && $_REQUEST['type'] == 'Enquiry_Form'){
            
         //   var xurl = 'php/send_email.ph + '&web_design=' + web_design +'&web_app=' + web_app +'&ecommerce_design=' + ecommerce_design + '&mob_app=' + mob_app +'&mob_app=' + dig_mark ;
        $services="";
         if(isset($_REQUEST['web_design']) && $_REQUEST['web_design'] !=='undefined'){
            $services=$_REQUEST['web_design']. ",";
         }
         if(isset($_REQUEST['web_app']) && $_REQUEST['web_app'] !=='undefined'){
            $services.=$_REQUEST['web_app']. " ,";

        }
        if(isset($_REQUEST['ecommerce_design']) && $_REQUEST['ecommerce_design'] !=='undefined'){
            $services.=$_REQUEST['ecommerce_design']. " ,";

        }
        if(isset($_REQUEST['mob_app']) && $_REQUEST['mob_app'] !=='undefined'){
            $services.=$_REQUEST['mob_app']. " ,";

        }
        if(isset($_REQUEST['dig_mark']) && $_REQUEST['dig_mark'] !=='undefined'){
            $services.=$_REQUEST['dig_mark'];

        }

        // 	$to = 'safarubaid@gmail.com';
            $to = 'safar.u@hashroot.com';
            $subject = 'Codewills Enquiry Form';
        	$send_arr = array();
        	$headers = "MIME-Version: 1.0" . "\r\n";
        	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        	$headers .= "From: <noreply@codewills.com>" . "\r\n";
        // 	$headers .= "Cc: ".$_REQUEST['con_email'] . "\r\n";
        	
        	$message = "Name : ".$_REQUEST['r_name']. "<br />";
        	$message .= "E-mail : ".$_REQUEST['r_email']. "<br />";
            $message .= "Project description : ".$_REQUEST['r_message']. "<br/>";
        	$message .= "Services : ". rtrim($services, ", "). "<br />";
        	//var_dump($message );exit;
            
                   if(empty($errors)==true){
                        if (mail($to,$subject,$message,$headers) ){
                    		$send_arr['response'] = 'success';
                    		$send_arr['message'] = 'Your message has been sent.';
                		} else{
                    		$send_arr['response'] = 'error';
                    		$send_arr['message'] = "You message couldn't be sent. Please try later!";
                		}
                   }else{
                       		$send_arr['response'] = 'error';
                    		$send_arr['message'] = $errors;
                   }
        	echo json_encode($send_arr);
        	exit;	 
}
         
   } else {
       	$send_arr = array();
      	$send_arr['response'] = 'error';
        $send_arr['message'] = "Invalid Google Captcha!!";
        echo json_encode($send_arr);
    	exit;
   }
    
}else{
     	$send_arr = array();
      	$send_arr['response'] = 'error';
        $send_arr['message'] = "Invalid Google Captcha!!!!";
        echo json_encode($send_arr);
    	exit;
}

?>