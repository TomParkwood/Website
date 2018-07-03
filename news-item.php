<?php 
include('include/pds-news.php');
$id = $_GET['id'];
$pageSummary = $newsPageSummary[$id];
$pageTitle = $newsPageTitle[$id];
$items = sizeof($newsTitle);
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="news.php">News</a> &gt; <a href=""><?php echo $newsPageCrumb[$id]; ?></a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
	
		<?php	
			echo "<div class=\"main-span\">";	
				
				echo "<h1> "; 
				echo $newsTitle[$id]; 
				echo "</h1>";
				echo "By: <span class=\"green bold\">"; 
				echo $newsAuthor[$id]; 
				echo "</span> On: <span class=\"green bold\">"; 
				echo $newsDate[$id]; 
				echo "</span> At: <span class=\"green bold\">"; 
				echo $newsTime[$id]; 
				echo "</span>";	
					
			echo "</div>";
			
			echo "<div class=\"separator\"></div>";
			
			echo "<div class=\"main-span\">";
							
					echo "<div class=\"left\" >";
					echo "<img alt=\"\" title=\"\" src=\"images/news/";
					echo $newsImage[$id];
					echo ".jpg\" />"; 
					echo "</div>";
					
					echo "<div class=\"right\" style=\"width: 550px\">";
					echo $newsBody[$id];
					echo "</div>";
					
			echo "</div>";	
		?>
	</div>
	<?php 
	include('include/pds-sidebar.php');
	?>
</div>
<?php 
include('include/pds-footer.php');
?>