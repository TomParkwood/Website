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
        $issue = $_POST['problem'];

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
 ?>
