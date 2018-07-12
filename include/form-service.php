<?php
$email_to = "service@parkwoodsolutions.com";
$email_subject = "PDS Website | Service Request Form";

// validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['email_address']) ||
        !isset($_POST['phone_number']) ||
        !isset($_POST['company']) )
        { died('We are sorry, but there appears to be a problem with the form you submitted.'); }

    $title = $_POST['title'];
    $full_name = $_POST['full_name'];
    $company = $_POST['company'];
    $email_from = $_POST['email_address'];
    $telephone = $_POST['phone_number'];
    $comments = $_POST['comments'];
    $method = $_POST['method'];
    $problem = $_POST['problem'];
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $serial = $_POST['serial'];
	$firmware = $_POST['firmware'];

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

  	if( empty($problem) && empty($comments) )
  	{
    	$error_message .= '   - Please add either a &quot;Brief description of the issue&quot; or some &quot;Further Information&quot;.<br />';
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
 	$email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Prefered Method Of Contact: ".clean_string($method)."\n\n";
	$email_message .= "Machine Info\n\n";
	$email_message .= "Manufacturer: ".clean_string($manufacturer)."\n";
	$email_message .= "Model: ".clean_string($model)."\n";
	$email_message .= "Serial Number: ".clean_string($serial)."\n";
	$email_message .= "Firmware Version: ".clean_string($serial)."\n\n";
	$email_message .= "Brief Description Of Issue:\n\n";
	$email_message .= " ".clean_string($problem)."\n\n";
    $email_message .= "Further Information:\n\n";
    $email_message .= " ".clean_string($comments)."\n\n";
?>
