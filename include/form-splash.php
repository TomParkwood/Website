<?php
$email_to = "mike@parkwoodsolutions.com";
$email_subject = "PDS Website | Splash Enquiry Form";

// validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['email_address']) )
        { died('We are sorry, but there appears to be a problem with the form you submitted.'); }
     

    $full_name = $_POST['full_name']; 
    $email_from = $_POST['email_address']; 
    
    $error_message = "";
    
    $string_exp = "/^[A-Za-z .'-]+$/";
  	if(!preg_match($string_exp,$full_name)) 
  	{
   		$error_message .= '   - The Name you entered does not appear to be valid.<br />';

  	}
    
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  	if(!preg_match($email_exp,$email_from)) 
  	{
    	$error_message .= '   - The Email Address you entered does not appear to be valid.<br />';

 	}    
  	
  	
    $email_message = "Slash Form details below.\n\n";
     
    function clean_string($string)
    {
    	$bad = array("content-type","bcc:","to:","cc:","href");
    	return str_replace($bad,"",$string);
    }
     

    $email_message .= "Full Name: ".clean_string($full_name)."\n"; 
 	$email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "The sender has requested information on the following subjects\n\n"; 
    
    $N = count($items); 
    for($i=0; $i < $N; $i++)
    {
    	$email_message .= "   ".($items[$i])."\n";
    }
    
    $email_message .= "\nFurther Information: ".clean_string($comments)."\n\n"; 
?>