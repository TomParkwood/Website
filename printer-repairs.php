<!-- Printer Repairs-->
<?php
$pageTitle="Printer Repairs:";
$pageSummary="We can repair most types of printer and multi-function devices. We operate out of the Hampshire region but have contacts country wide.";
$metaKeywords = "Printer Repairs, mfp repairs, sharp repairs, utax repairs, photocopier repairs, hampshire printer repairs, hampshire mfp repairs, hampshire photocopier repairs, southampton printer repairs, southampton photocopier repairs, printer repair service";
$metaDescription = "We can repair most types of printers and multi function devices. Find out what information we would need from you.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="printer-repairs.php">Printer Repairs</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<div class="main-span">
			<h1>Printer Repairs</h1>
			<div class="left">
				<img alt="" src="images/Repairs.jpg" title="" height="150px" width="150px"/> </div>
			<div class="left" style="width: 80%">
				<p>Most office printers aren't cheap.<br>In most cases, a full repair can be made for a fraction of the price of a new printer.<br>
          We can repair most types of printers and mult-function devices (formally known as photocopiers).<br>
          We operate in the Hampshire region but have many contacts country wide.</p>
        <p>What you can try before you get our help.<br>
          Most print quality issues which occur in printers are cartridge problems, especially with combined toner and drum cartridges. If you can, try another cartridge or even an old one to see if it makes a difference.<br>
          If you need any help, please call us for advice. We are always happy to help. If you do call us please have the printer make and model and a descriptionof the fault, because we maybe able to cure it over the phone or point you to an easy user repair before you spend your money on a needless callout.</p>
        <p>Why would we do this?<br>
          We believe that a good service will result in you calling us again in the future. We want to show you that our interest is in your machines continued functioning and not just in our pockets.</p>
        <p>Please note that we no longer repair inkjet printers, except for high value plotters and printers, most inkjets these days are cheaper the replace than to repair.</p>

			</div>
		</div>
	</div>
	<?php
	include('include/pds-sidebar.php');
	?>
	<div id="equal-1" class="width-three">
		<h2>Printer Repairs Form</h2>
			<form acton="form-sumbit.php?form=service" method="post" name="servicecontactform">
				<p class="bold">If you would like to enquire about a printer repair please fill out the following details.</p>
				<table width=100%>
					<tr>
						<td class="contact-left">
							<label class="required">Name*</label>
						</td>
						<td class="contact-right">
							<input maxlength="50" name="full_name" size="50" type="text"/>
						</td>
					</tr>
					<tr>
						<td class="contact-left">
							<label class="required">E-Mail Address*</label>
						</td>
						<td class="contact-right">
							<input maxlength="100" name="email_address" size="50" type="text"/>
						</td>
					</tr>
				</table>
				<p class="bold">To help us, help you. Please fill out as much details about the problem as possible.</p>
				<table width=100%>
					<tr>
						<td class="contact-left">
							<label>Manufacturer</label>
						</td>
						<td class="contact-right">
							<input maxlength="100" name="manufacturer" size="50" type="text"/>
						</td>
					</tr>
					<tr>
						<td class="contact-left">
							<label>Model</label>
						</td>
						<td class="contact-right">
							<input maxlength="100" name="model" size="50" type"text"/>
						</td>
					</tr>
				</table>
				<p class="bold">Brief description of the problem</p>
				<p><textarea cols="90" name="problem" rows="6"></textarea></p>
				<p class="center"><input type="submit" value="Submit"/><input type="reset"/></p>
	</div>
</div>
<?php
include('include/pds-footer.php');
?>
