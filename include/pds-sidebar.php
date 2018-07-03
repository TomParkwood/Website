<?php
$pageName = basename($_SERVER['PHP_SELF']);
?>

<div id="equal-4" class="sidebar width-four">
	<div id="summary">
		<p>&quot;<?php echo $pageSummary; ?>&quot;.</p>
	</div>
	<div class="separator">
	</div>
		
	<?php
		if( $pageName == "support.php" )
		{
			echo "<h1>F.A.Q</h1>";
			echo "<p>If you are having a problem please have a look at our F.A.Q page. It may very well hold the answer and save time as well.</p>";
			echo "<p><a href=\"faq.php\">Browse F.A.Q Page</a></p>";
			echo "<div class=\"separator\"></div>";
		}
		
		if( $pageName == "faq.php" )
		{
			echo "<h1>Glossary</h1>";
			echo "<p>We also have a glossary of common photocopier &amp; computing terms.</p>";
			echo "<p><a href=\"glossary.php\">Browse Glossary</a></p>";
			echo "<div class=\"separator\"></div>";
		}
		
		if( $pageName == "contact.php" || $pageName == "general-enquiry-form.php" || $pageName == "meter-reading-form.php" || $pageName == "service-request-form.php")
		{
			echo "<h1>Quick Links</h1>";
			echo "<p><a href=\"service-request-form.php\">Service Request Form</a></p>";
			echo "<p><a href=\"meter-reading-form.php\">Meter Reading Form</a></p>";
			echo "<p><a href=\"general-enquiry-form.php\">General Enquiry Form</a></p>";
			echo "<div class=\"separator\"></div>";
		}
		
		if( $pageName == "about.php" )
		{
			echo "<h1>Photocopiers &amp; Printers</h1>";
			echo "<p>We supply a range of copiers, printers and MFDs from a variety of manufacturers. Whatever your requirements we can supply you with the right machine for you business.</p>";
			echo "<p><a href=\"copiers-printers.php\">Photocopiers &amp; Printers</a></p>";
			echo "<div class=\"separator\"></div>";
			
			echo "<h1>Document Management Systems</h1>";
			echo "<p>ParkWood offer a range of Solutions and Systems, helping you to keep track of your document files using a top-quality document management system.</p>";
			echo "<p><a href=\"document-management.php\">Document Management Systems</a></p>";
			echo "<div class=\"separator\"></div>";
		}
		
		if( $pageName == "news-item.php" )
		{
			$max = 0;
			if( $items > 5 )
			{
				$max = 5;
			}
			
			echo "<p><a href=\"news.php\">Main News Page</a></p>";
			echo "<h1>Other News</h1>";
			
			for( $count = $items; $count > $max; $count -= 1)
			{
				echo "<p><a href=\"news-item.php?id=";
				echo $count;
				echo "\">";
				echo $newsTitle[$count]; 
				echo "</a></p>";
			}
			
			echo "<div class=\"separator\"></div>";
		}
	?>
		
	<h2>Learn More</h2>
	<p class="center">If you would like any more information about any of our products 
	or services, please do not hesitate to get in touch.</p>
	<p class="center"><a href="contact.php">Contact Us</a></p>
</div>
