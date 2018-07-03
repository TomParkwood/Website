<?php
$pageTitle="Meter Reading Form:";
$pageSummary="You can use this form to send us your copier meter readings"; 
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="contact.php">Contact</a> 
		&gt; <a href="meter-reading-form.php">Meter Reading Form</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
	<h1>Meter Reading Form</h1>
		<form action="form-submit.php?form=meter" method="post" name="metercontactform">
			<p class="bold">Please provide the following contact information so 
			that we can respond to you as efficiently as possible:</p>
			<table width="700px">
				<tr>
					<td class="contact-left" width="200px">
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
			</table>
			
			<p class="bold">Please enter the following information about the device in question:</p>
			
			<table width="700px">
			<tr>
					<td class="contact-left" style="height: 30px" width="200px">
					<label class="required">Manufacturer *</label>
					</td>
					<td class="contact-right" style="height: 30px">
					<input maxlength="100" name="manufacturer" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left" style="height: 30px">
					<label class="required">Model *</label>
					</td>
					<td class="contact-right" style="height: 30px">
					<input maxlength="100" name="model" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left" style="height: 30px">
					<label class="required">Serial Number *</label>
					</td>
					<td class="contact-right" style="height: 30px">
					<input maxlength="100" name="serial" size="50" type="text"/>
					</td>
				</tr>
			</table>
			
			<p class="bold">Please provide the meter readings for your device:</p>
			<p>If you do not have a colour device please use &quot;0&quot;</p>
			
			<table width="700px">
				<tr>
					<td class="contact-left" width="200px">
					<label class="required">Mono *</label>
					</td>
					<td class="contact-right">
					<input maxlength="50" name="mono" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left">
					<label class="required">Colour *</label> </td>
					<td class="contact-right">
					<input maxlength="50" name="colour" size="50" type="text"/>
					</td>
				</tr>
			</table>
			<p class="center"><input type="submit" value="Submit"/> <input type="reset"/></p>


		</form>

	</div>
	<?php 
	include('include/pds-sidebar.php');
	?></div>
<?php 
include('include/pds-footer.php');
?>