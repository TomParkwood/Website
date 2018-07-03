<?php
include('include/pds-news.php');
$items = sizeof($newsTitle);
$count = 0;
$now = date("D, d M Y H:i:s T");

$output = "<?xml version=\"1.0\"?><rss version=\"2.0\"><channel>";

for( $count = $items; $count > 0; $count -= 1)
{
	$output .= "<item>";
	$output .= "<title>$newsTitle[$count]</title>";	
	$output .= "<link>http://www.parkwoodsolutions.com/news-item.php?id=$count</link>";
	$output .= "<pubDate>$newsDate[$count] $newsTime[$count]</pubDate>";
	$output .= "<description>$newsSummary[$count]</description>";
	$output .= "</item>";
}

$output .= "</channel></rss>";
header("Content-Type: application/rss+xml");
echo $output;


?>