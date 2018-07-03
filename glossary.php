<?php 
$pageSummary = "If we have missed anything from this glossary, please do let us know.";
$pageTitle = "Glossary";
include('include/pds-glossary.php');
include('include/pds-main.php');
include('include/pds-header.php');

$countTotal = 0;
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="resources.php">Resources</a> &gt; <a href="glossary.php">Glossary</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<h1>Glossary</h1>
		
		<?php
			
			// create an array of letters used
			echo "<p>";
			$letterCount = 0;
			$letters[0] = "";
			for( $count1 = 0; $count1 < sizeof($glossItem); $count1 ++ )
			{
				$letter = $glossItem[$count1][0];
				
				if (in_array($letter, $letters))
				{
				
				}
				else
				{
					// add letter to array
					$letters[$letterCount] = $letter;						
					$letterCount ++;			
				}				
			}
			
			//sorry the array into order
			sort($letters);
			
			// output top letter links	
			for( $i = 0; $i < sizeof($letters); $i ++ )
			{						
				echo "<a href=\"#gloss-";
				echo $letters[$i];
				echo "\">";
				echo $letters[$i];
				echo "</a> | ";		
			}
			
			echo "</p><div class=\"separator\"></div>";
			
			for( $count2 = 0; $count2 < sizeof($letters); $count2 ++ )
			{
				// create div for glossary based on letter
				echo "<div id=\"gloss-";
				echo $letters[$count2];
				echo "\"><h1>";
				echo $letters[$count2];
				echo "</h1>";
				
				// find all items with the current letter
				$count4 = 0;
				for( $count3 = 0; $count3 < sizeof($glossItem); $count3 ++ )
				{
					$letter = $glossItem[$count3][0];
					
					if( $letter == $letters[$count2] )
					{
						// add all items with the correct letter to an array
						$newItems[$count4] = $glossItem[$count3];
						$count4 ++;
					}					
				}
				
				//sorry the array into order
				sort($newItems);
				
				// outout the array
				foreach ($newItems as $key => $val) 
				{
					// output glossary term
    				echo "<p class=\"bold\">";
					echo $newItems[$key];
					echo "</p>";
					
					// find and output glossary description
					for( $i = 0; $i < sizeof($glossItem); $i ++ )
					{
						if( $newItems[$key] == $glossItem[$i] )
						{
							echo $glossDesc[$i];
						}
					}					
				}		
				
				unset($newItems);				
				
				echo "<p><a href=\"#top\">Back to top</a></p>";
				echo "</div><div class=\"separator\"></div>";
			}
			

		?></div>
	<?php 
include('include/pds-sidebar.php');
?></div>
<?php 
include('include/pds-footer.php');
?>