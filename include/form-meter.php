<?php
$email_to = "meter@parkwoodsolutions.com";
$email_subject = "PDS Website | Meter Reading Form";

// validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['email_address']) ||
        !isset($_POST['phone_number']) ||
        !isset($_POST['company']) )
        { died('We are sorry, but there appears to be a problem with the form you submitted.'); }
     
    $full_name = $_POST['full_name']; 
    $company = $_POST['company']; 
    $email_from = $_POST['email_address']; 
    $telephone = $_POST['phone_number']; 
    $manufacturer = $_POST['manufacturer']; 
    $model = $_POST['model']; 
    $serial = $_POST['serial']; 
    $mono = $_POST['mono']; 
    $colour = $_POST['colour']; 

    
    $send_info = "";     
    $error_message = "";
    
    $string_exp = "/^[A-Za-z .'-]+$/";
  	if(!preg_match($string_exp,$full_name)) 
  	{
   		$error_message .= '   - The Name you entered does not appear to be valid.<br />';
  	}
  	
  	$string_exp = "/^[A-Za-z .'-]+$/";
  	if(!preg_match($string_exp,$company)) 
  	{
   		$error_message .= '   - The Company Name you entered does not appear to be valid.<br />';
  	}
    
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  	if(!preg_match($email_exp,$email_from)) 
  	{
    	$error_message .= '   - The Email Address you entered does not appear to be valid.<br />';
 	}
 	
 	$telephone_exp = '/^0[1-9][0-9]{8,9}$/';
  	if(!preg_match($telephone_exp,$telephone)) 
  	{
    	$error_message .= '   - The Telephone Number you entered does not appear to be valid.<br />';
 	}
 	
 	$manufacturer_exp = "/^[A-Za-z .'-]+$/";
  	if(!preg_match($manufacturer_exp,$manufacturer)) 
  	{
   		$error_message .= '   - The Manufacturer you entered does not appear to be valid.<br />';
  	}
  	
  	$model_exp = "/^[A-Za-z0-9 .'-]+$/";
  	if(!preg_match($model_exp,$model)) 
  	{
   		$error_message .= '   - The Model you entered does not appear to be valid.<br />';
  	}
  	
  	$serial_exp = "/^[A-Za-z0-9.'-]+$/";
  	if(!preg_match($serial_exp,$serial)) 
  	{
   		$error_message .= '   - The Serial you entered does not appear to be valid.<br />';
  	}
  	
  	$reading_exp = "/[0-9]+/";
  	if(!preg_match($reading_exp,$mono)) 
  	{
   		$error_message .= '   - Please eneter the Mono count for your device.<br />';
  	}
	if(!preg_match($reading_exp,$colour)) 
  	{
   		$error_message .= '   - Please eneter the Colour count for your device.<br />';
  	} 	
  
  	if(strlen($error_message) > 0) 
  	{
    	died($error_message);
  	}
  	
    $email_message = "Meter Reading Form details below.\n\n";
     
    function clean_string($string)
    {
    	$bad = array("content-type","bcc:","to:","cc:","href");
    	return str_replace($bad,"",$string);
    }
     
    $email_message .= "Full Name: ".clean_string($full_name)."\n"; 
    $email_message .= "Company: ".clean_string($company)."\n";   
 	$email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n"; 
    $email_message .= "\nMachine Info\n\n";    
	$email_message .= "Manufacturer: ".clean_string($manufacturer)."\n"; 
	$email_message .= "Model: ".clean_string($model)."\n"; 
	$email_message .= "Serial Nuber: ".clean_string($serial)."\n"; 
    $email_message .= "\nMeter Readings\n\n"; 
    $email_message .= "Mono: ".clean_string($mono)."\n"; 
	$email_message .= "Colour: ".clean_string($colour)."\n"; 
?>