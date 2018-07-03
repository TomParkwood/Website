<?php 
$pageTitle="News:";
$pageSummary="Welcome to our news and updates page. The information here will be updated whenever there is a new development at ParkWood Document Solutions. We'll also keep you updated with any industry news that we feel may be of benefit to you and your business";
include('include/pds-main.php');
include('include/pds-header.php');
include('include/pds-news.php');
$items = sizeof($newsTitle);
$count = 0;
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="news.php">News</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<div class="main-span">
			<h1>News RSS Feeds</h1>
			<div class="left">
				<a href="rss.php" target="_blank">
				<img alt="RSS Feed" src="images/social/rss-64.png" title="RSS Feed" /></a>
			</div>
			<div class="right" style="width: 630px">
				<p>We have an RSS Feed of all our news items. If you wish to use 
				this feature our RSS Feed can be found
				<a href="rss.php" target="_blank">here</a> </p>
			</div>
		</div>
		<div class="separator">
		</div>
		<?php		
			for( $count = $items; $count > 0; $count -= 1)
			{
				echo "<div class=\"main-span underline\">";
				
					echo "<div class=\"news-img-small\" >";
					echo "<img alt=\"\" title=\"\" src=\"images/news/";
					echo $newsImage[$count];
					echo "-small.jpg\" />"; 
					echo "</div>";
				
					echo "<div class=\"right\" style=\"width: 650px\">";
					echo "<h1> "; 
					echo $newsTitle[$count]; 
					echo "</h1>";
					echo "By: <span class=\"green bold\">"; 
					echo $newsAuthor[$count]; 
					echo "</span> On: <span class=\"green bold\">"; 
					echo $newsDate[$count]; 
					echo "</span> At: <span class=\"green bold\">"; 
					echo $newsTime[$count]; 
					echo "</span>";		
					echo "</div>";
				
				echo "</div>";
					
				echo "<div class=\"main-span\">";
				echo $newsSummary[$count];		
				echo "<a class=\"more\" href=\"news-item.php?id=";
				echo $count;	
				echo "\"><img alt=\"\" src=\"../images/read-more.png\" title=\"\" /></a>";		
				echo "</div>";
				
				if( $count > 1 )
				{
					echo "<div class=\"separator\"></div>";
				}
			}
		?></div>
	<?php 
	include('include/pds-sidebar.php');
	?></div>
<?php 
include('include/pds-footer.php');
?>