<?php
$email_to = "sales@parkwoodsolutions.com";
$email_subject = "PDS Website | General Enquiry Form";

// validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['email_address']) ||
        !isset($_POST['phone_number']) ||
        !isset($_POST['company']) )
        { died('We are sorry, but there appears to be a problem with the form you submitted.'); }
     
    $title = $_POST['title'];
    $full_name = $_POST['full_name']; 
    $company = $_POST['company']; 
    $address_one = $_POST['address_one']; 
    $address_two = $_POST['address_two']; 
    $city = $_POST['city']; 
    $county = $_POST['county']; 
    $country = $_POST['country']; 
    $post_code = $_POST['post_code']; 
    $email_from = $_POST['email_address']; 
    $telephone = $_POST['phone_number']; 
    $comments = $_POST['comments']; 
    $method = $_POST['method'];     
    $items = $_POST['items']; 
    
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
  	
  	if( $method == "Please Select" )
  	{
  		$error_message .= '   - Please select a Prefered Method Of Contact.<br />';
  	}
  	
  	if( $method == "By Post" )
  	{
		$string_exp = "/^[A-Za-z .'-]+$/";
  		if(!preg_match($string_exp,$address_one)) 
  		{
   			$error_message .= '   - Address Line 1 does not appear to be valid.<br />';
  		}
  		
  		$string_exp = "/^[A-Za-z .'-]+$/";
  		if(!preg_match($string_exp,$county)) 
  		{
   			$error_message .= '   - County does not appear to be valid.<br />';
  		}
  		
  		$string_exp = "/^[A-Za-z .'-]+$/";
  		if(!preg_match($string_exp,$post_code)) 
  		{
   			$error_message .= '   - Post Code does not appear to be valid.<br />';
  		}
  		
  		$string_exp = "/^[A-Za-z .'-]+$/";
  		if(!preg_match($string_exp,$contrty)) 
  		{
   			$error_message .= '   - Contry does not appear to be valid.<br />';
  		}
	}
	
	if(empty($items))
  	{
    	$error_message .= '   - Please select at least 1 area of interest.<br />';;
  	}
  
  	if(strlen($error_message) > 0) 
  	{
    	died($error_message);
  	}
  	
    $email_message = "General Enquiry Form details below.\n\n";
     
    function clean_string($string)
    {
    	$bad = array("content-type","bcc:","to:","cc:","href");
    	return str_replace($bad,"",$string);
    }
     
    $email_message .= "Title: ".clean_string($title)."\n"; 
    $email_message .= "Full Name: ".clean_string($full_name)."\n"; 
    $email_message .= "Company: ".clean_string($company)."\n";   
    $email_message .= "Address 1: ".clean_string($address_one)."\n";  
    $email_message .= "Address 2: ".clean_string($address_two)."\n";    
    $email_message .= "Town / City: ".clean_string($city)."\n";
    $email_message .= "County: ".clean_string($county)."\n"; 
    $email_message .= "Post Code: ".clean_string($post_code)."\n";  
    $email_message .= "Country: ".clean_string($country)."\n";  
 	$email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";    
    $email_message .= "Prefered Method Of Contact: ".clean_string($method)."\n\n"; 
    $email_message .= "The sender has requested information on the following subjects\n\n"; 
    
    $N = count($items); 
    for($i=0; $i < $N; $i++)
    {
    	$email_message .= "   ".($items[$i])."\n";
    }
    
    $email_message .= "\nFurther Information: ".clean_string($comments)."\n\n"; 
?>