<?php
$pageTitle="Service Request Form:";
$pageSummary="If you have any problems and have a service request, please use this form. You can also call us on: 0844 561 1969";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="contact.php">Contact</a> &gt; <a href="service-request-form.php">Service Request</a></div>
</div>
<div id="main-wrapper">
<div id="equal-1" class="width-three">
	<h1>Service Request Form</h1>
		<form action="form-submit.php?form=service" method="post" name="servicecontactform">
			<p class="bold">Please provide the following contact information so
			that we can respond to you as efficiently as possible:</p>
			<table width=100%>
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
			<p class="bold">Please enter the following information about the device in question if known:</p>

			<table width="700px">
			<tr>
					<td class="contact-left" style="height: 30px" width="250px">
					<label>Manufacturer</label>
					</td>
					<td class="contact-right" style="height: 30px">
					<input maxlength="100" name="manufacturer" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left" style="height: 30px">
					<label>Model</label>
					</td>
					<td class="contact-right" style="height: 30px">
					<input maxlength="100" name="model" size="50" type="text"/>
					</td>
				</tr>
			</table>
			<p class="bold">Brief description of the issue:</p>
			<p><textarea cols="85" name="problem" rows="6"></textarea></p>
			<p class="center"><input type="submit" value="Submit"/> <input type="reset"/></p>

	</form>
	</div>
	<?php
	include('include/pds-sidebar.php');
	?>
</div>
<?php
include('include/pds-footer.php');
?>
