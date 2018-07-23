<?php
$pageTitle="Submit Form:";
$pageSummary="ParkWood Document Solutions Ltd is all about providing the highest quality equipment and support to your business";
$form = $_GET['form'];
include('include/pds-main.php');
include('include/pds-header.php');
include('include/pds-contact.php');

if( $form == "general" )
{ $crumb = "<a href=\"general-enquiry-form.php\">General Enquiry Form</a>"; }
if( $form == "meter" )
{ $crumb = "<a href=\"meter-reading-form.php\">Meter Reading Form</a>"; }
if( $form == "service" )
{ $crumb = "<a href=\"service-request-form.php\">Service Request Form</a>"; }

?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="contact.php">Contact</a>
		&gt; <?php echo $crumb; ?> &gt; <a href="">Submit</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<h1>Form Submit</h1>
		<?php

		if(isset($_POST['email_address']))
		{

    		function died($error)
    		{
		        // your error code can go here
		        echo "<p>We are very sorry, but there were error(s) found with the form you submitted.</p> ";
		        echo "<p>These errors appear below.</p>";
		        echo $error;
		        echo "<p>Please go <a href=\"javascript:history.back(1)\">Back</a> and fix these errors.</p>";
		        echo "</div>";
				include('include/pds-sidebar.php');
				echo "</div>";
				include('include/pds-footer.php');
		        die();
   	 		}

     		if( $form == "general" )
			{
				include('include/form-general.php');
			}

			if( $form == "meter" )
			{
				include('include/form-meter.php');
			}

			if( $form == "service" )
			{
				include('include/form-service.php');
			}

			// create email headers
			$headers = 'From: '.$email_from."\r\n".
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			@mail($email_to, $email_subject, $email_message, $headers);



?>
		<p>Thank you for contacting us. We will be in touch with you very soon.</p>
		<?php
}
?></div>
	<?php
	include('include/pds-sidebar.php');
	?></div>
<?php
include('include/pds-footer.php');
?>
