<?php 
$pageTitle="General Enquiry Form:";
$pageSummary="Please use to this form to contact us with any questions that you may have. You can also call us on: 0844 561 6507";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="contact.php">Contact</a> 
		&gt; <a href="general-enquiry-form.php">General Enquiry Form</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<h1>General Enquiry Form</h1>
		<form action="form-submit.php?form=general" method="post" name="generalcontactform">
			<p class="bold">Please provide the following contact information so 
			that we can respond to you as efficiently as possible:</p>
			<table width="700px">
				<tr>
					<td class="contact-left"><label>Title</label>
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
					<td class="contact-left"><label>Address Line 
					1</label> </td>
					<td class="contact-right">
					<input maxlength="100" name="address_one" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left"><label>Address Line 
					2</label> </td>
					<td class="contact-right">
					<input maxlength="100" name="address_two" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left"><label>Town / City</label>
					</td>
					<td class="contact-right">
					<input maxlength="100" name="city" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left"><label>County</label>
					</td>
					<td class="contact-right">
					<input maxlength="100" name="county" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left"><label>Post Code</label>
					</td>
					<td class="contact-right">
					<input maxlength="7" name="post_code" size="50" type="text"/>
					</td>
				</tr>
				<tr>
					<td class="contact-left"><label>Country</label>
					</td>
					<td class="contact-right">
					<input maxlength="100" name="country" size="50" type="text"/>
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
							<option value="By Post">By Post</option>
						</select> 
					</td>
				</tr>
			</table>
			<p class="bold">Select any of the following products &amp; services that 
			you would like to know more about:</p>
			<table width="700px">
				<tr>
					<td width="500px">Multifunctional Printers Print / Copy / Scan 
					/ Fax (MFP&#39;s) </td>
					<td><input name="items[]" type="checkbox" value="Multifunctional Devices"/></td>
				</tr>
				<tr>
					<td width="500px">Photocopiers</td>
					<td>
					<input name="items[]" type="checkbox" value="Photocopiers"/></td>
				</tr>
				<tr>
					<td width="500px">Laser Printers</td>
					<td>
					<input name="items[]" type="checkbox" value="Laser Printers"/></td>
				</tr>
				<tr>
					<td width="500px">Scanning Devices</td>
					<td>
					<input name="items[]" type="checkbox" value="Scanning Devices"/></td>
				</tr>
				<tr>
					<td width="500px">Print Control &amp; Management Solutions</td>
					<td>
					<input name="items[]" type="checkbox" value="Print Control"/></td>
				</tr>
				<tr>
					<td width="500px">Electronic Document &amp; Records Management Software</td>
					<td><input name="items[]" type="checkbox" value="Electronic Document Management"/></td>
				</tr>
				<tr>
					<td width="500px">Digital Pen &amp; Paperwork</td>
					<td>
					<input name="items[]" type="checkbox" value="Digital Pen"/></td>
				</tr>
				<tr>
					<td width="500px">Print Audit</td>
					<td>
					<input name="items[]" type="checkbox" value="Print Audit"/></td>
				</tr>
				<tr>
					<td width="500px">Archiving Solutions</td>
					<td>
					<input name="items[]" type="checkbox" value="Archiving Solutions"/></td>
				</tr>
				<tr>
					<td width="500px">Servicing &amp; Support</td>
					<td>
					<input name="items[]" type="checkbox" value="Service and Support"/></td>
				</tr>
				<tr>
					<td width="500px">Office &amp; Paper Supplies</td>
					<td>
					<input name="items[]s" type="checkbox" value="Office and Paper Supplies"/></td>
				</tr>
			</table>
			<p class="bold">Any Further Information:</p>
			<p><textarea cols="85" name="comments" rows="6"></textarea></p>
			<p class="center"><input type="submit" value="Submit"/> <input type="reset"/></p>
		</form>
	</div>
	<?php 
	include('include/pds-sidebar.php');
	?></div>
<?php 
include('include/pds-footer.php');
?>