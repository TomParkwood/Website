<?php 
$pageTitle="Service Request Form:";
$pageSummary="If you have any problems and have a serive request, please use this form. You can also call us on: 0844 561 1969";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="contact.php">Contact</a> &gt; <a href="service-request-form.php">Service Request Form</a></div>
</div>
<div id="main-wrapper">
<div id="equal-1" class="width-three">
	<h1>Service Request Form</h1>
		<form action="form-submit.php?form=service" method="post" name="servicecontactform">
			<p class="bold">Please provide the following contact information so 
			that we can respond to you as efficiently as possible:</p>
			<table width="700px">
				<tr>
					<td class="contact-left" width="250px"><label>Title</label>
					</td>
					<td class="contact-right">
					<input maxlength="50" name="title" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left">
					<label class="required">Full Name *</label>
					</td>
					<td class="contact-right">
					<input maxlength="50" name="full_name" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left">
					<label class="required">Company *</label> </td>
					<td class="contact-right">
					<input maxlength="50" name="company" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left">
					<label class="required">Telephone Number 
					*</label> </td>
					<td class="contact-right">
					<input maxlength="100" name="phone_number" size="50" type="text"/>
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
				<tr>
					<td class="contact-left" style="height: 30px">
						<label class="required">Preferred Method 
						Of Contact *</label> 
					</td>
					<td class="contact-right" style="height: 30px">
						<select name="method"  size="1">
							<option value="Please Select">Please Select</option>
							<option value="By Phone">By Phone</option>
							<option value="By E-Mail">By E-Mail</option>
						</select> 
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
				<tr>
					<td class="contact-left" style="height: 30px">
					<label>Serial Number</label>
					</td>
					<td class="contact-right" style="height: 30px">
					<input maxlength="100" name="serial" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left" style="height: 30px">
					<label>Firmware Version</label>
					</td>
					<td class="contact-right" style="height: 30px">
					<input maxlength="100" name="firmware" size="50" type="text"/>
					</td>
				</tr>
			</table>
			<p class="bold">Brief description of the issue:</p>
			<p><textarea cols="85" name="problem" rows="6"></textarea></p>
			<p class="bold">Any Further Information:</p>
			<p><textarea cols="85" name="comments" rows="6"></textarea></p>
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