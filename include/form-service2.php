
<?php
$email_to = "service@parkwoodsolutions.com";
$email_subject = "Service Enquiry from Website";

//To make sure the fields are valid they need to be checked to make sure they arent null
  if(!isset($_POST['full_name']) ||
        !isset($_POST['email_address']))
        {died('Sorry there seems to be a problem with the information you have submitted.');}

        $full_name = $_POST['full_name'];
        $email_from = $_POST['email_address'];
        $manufacturer = $_POST['manufacturer'];
        $model = $_POST['model'];
        $problem = $_POST['problem'];

        $error_message = "";

        $string_exp = "/^[A-Za-z .'-]+$./";
        if(!preg_match($string_exp,$full_name))
        {
          $error_message .= ' - The Name you entered does not appear to be valid.<br>';
        }

        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        if(!preg_match($email_exp,$email_from))
        {
          $error_message .= ' - The Email address you entered does not appear to be valid.<br>';
        }

        if(strlen($error_message) > 0))
        {
          died($error_message)
        }

        $email_message = "Service enquiry from website, details below. \r\n\r\n";

        function clean_string($string)
        {
          $bad = array("content-type","bcc:"."to:","cc:","href");
          return str_replace($bad, "", $string);
        }

        $email_message .= "Title: ".clean_string($full_name)"\r\n"
        $email_message .= "Email: ".clean_string($email_from)"\r\n";
        $email_message .= "Manufacturer: ".clean_string($manufacturer)"\r\n";
        $email_message .= "Model: ".clean_string($model)"\r\n";
        $email_message .= "The stated problem is: ".clean_string($problem)"\r\n";
 ?>
 <?php
 /*function IsInjected($str)
 {
     $injections = array('(\n+)'),
       '(\r+)',
       '(\t+)',
       '(%0A+)',
       '(%0D+)',
       '(%08+)',
       '(%09+)'
     );
     $inject = join('|', $injections);
     $inject = "/inject/i";

     if(preg_match($inject,$str))
     {
       return true;
     }
     else
     {
       return false;
     }
 }

 if(IsInjected($email_from))
 {
   echo "Bad email value!";
   exit;
 }*/
 ?>
