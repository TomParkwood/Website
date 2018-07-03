<?php 
$pageTitle="General Enquiry Form:";
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="contact.php">Contact</a> 
		&gt; <a href="splashform.php">SplashForm</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<h1>Get yourself in NOW</h1>
		<form action="form-submit.php?form=splash" method="post" name="generalcontactform">
			<p class="bold">Please provide the following contact information so 
			that we can respond to you as efficiently as possible:</p>
		  <table width="700px">
				<tr>
					<td class="contact-left">
					<label class="required">Full Name *</label>
					</td>
					<td class="contact-right">
					<input maxlength="50" name="full_name" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left" style="height: 30px">
					<label class="required">E-Mail Address *</label>
					</td>
					<td class="contact-right" style="height: 30px">
					<input maxlength="100" name="email_address" size="50" type="text"/>
					</td>
				</tr>
			</table>
		  <p class="center">
		    <input type="submit" value="Submit"/>
	      <input type="reset"/></p>
		</form>
	</div></div>
<?php 
include('include/pds-footer.php');
?>