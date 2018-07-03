<?php 
$pageSummary = "If you have any questions regarding your photocopier hopefully they will be answered through one of the following F.A.Q links";
$pageTitle = "F.A.Q";
include('include/pds-faq.php');
include('include/pds-main.php');
include('include/pds-header.php');
$countHeadings = sizeof($faqHeadings);
$countItems = sizeof($faqQuestion);
$countTotal = 0;
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="faq.php">F.A.Q</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<h1>Frequently Asked Questions</h1>
		<p>If you have read through our F.A.Q list below and are unable to find 
		the answer you are looking for. Please <a href="contact.php">Contact Us</a> 
		and we will do our best to help.</p>
		<?php
			// not using a database. faqs are stored in a text array
			// loop through faq headings
			for( $count1 = 0; $count1 < $countHeadings; $count1 ++ )
			{
				echo "<h2>";
				echo $faqHeadings[$count1];
				echo "</h2>";
				
				$headingItems = 1;	
				// loop through all faqs and output questions for current heading
				for( $count2 = 0; $count2 < $countItems; $count2 ++ )
				{							
					if( $faqType[$count2] == $count1 )
					{
						echo $headingItems;
						echo ") <a class=\"faq\" href=\"#faq-";
						echo $countTotal;
						echo "\">";
						echo $faqQuestion[$count2];
						echo "</a><br/>";
						
						$countTotal ++;
						$headingItems ++;
					}
				}
				
				echo "<br/>";
			}
			
			// separator bar
			echo "<br/><br/><br/><div class=\"separator\"></div>";
			
			// this is where we output the answer to each questions in a div #faq-number
			$countTotal = 0;
			
			// for each heading group
			for( $count1 = 0; $count1 < $countHeadings; $count1 ++ )
			{		
				// loop through faq items and find items for this heading
				for( $count2 = 0; $count2 < $countItems; $count2 ++ )
				{			
					if( $faqType[$count2] == $count1 )
					{
						// create div for faq based on faq number
						echo "<div id=\"faq-";
						echo $countTotal;
						echo "\">";
						
						// output question
						echo "<p class=\"bold\">Q: ";
						echo $faqQuestion[$count2];
						echo "</p>";
						
						// output answer
						echo $faqAnswer[$count2];
						echo "<p><a href=\"#top\">Back To Contents List</a></p>";
						
						// separator bar
						$countTotal ++;
						echo "</div><div class=\"separator\"></div>";												
					}
				}
			}

		?></div>
	<?php 
include('include/pds-sidebar.php');
?></div>
<?php 
include('include/pds-footer.php');
?>