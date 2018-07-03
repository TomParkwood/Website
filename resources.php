<?php 
$pageTitle="Resources:";
$pageSummary="Welcome to our resources page. This page will; grow as we add more resource links to our website.";
$metaKeywords = "Resources,Downloads,Drivers,Manuals,Photocopiers,Copier,Photocopier,Hampshire,Dorset,Wiltshire,Egland,UK";
$metaDescription = "We supply, install, maintain and, most importantly, monitor the performance of photocopiers and print machines both locally across Hampshire Dorset Wiltshire and nationally from a variety of manufacturers";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="resources.php">Resources</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<div class="main-span">
			<h1>Glossary...</h1>
			<p>We have a glossary of terms located <a href="glossary.php">here</a> 
			that you may find usefull.</p>
			<p>If we have missed anything out, please let us know.</p>
			<p class="center"><a href="glossary.php">Browse Glossary of Terms</a></p>
		</div>
		<div class="separator">
		</div>
		<div class="main-span">
			<h1>Drivers, Manuals &amp; Other Useful Links. . . . . .</h1>
			<p>We have a page <a href="links.php">here</a> that contains links to 
			manufacturer websites.</p>
			<p>This page has been established to enable our customers to download 
			drivers, software and manuals direct from manufacturers websites</p>
			<p class="center"><a href="links.php">Browse Resource Links</a></p>
		</div>
	</div>
	<?php 
	include('include/pds-sidebar.php');
	?></div>
<?php 
include('include/pds-footer.php');
?>