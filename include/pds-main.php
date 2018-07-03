<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
// Turn off all error reporting
error_reporting(0);

// meta description ( get from page or display default )
if(isset($metaDescription))
{
	echo "<meta content=\"".$metaDescription."\" name=\"description\" />\n";
}
else
{
	echo"<meta content=\"We supply, install, maintain and, most importantly, monitor the performance of photocopiers and print machines both locally across Hampshire Dorset Wiltshire and nationally from a variety of manufacturers\" name=\"description\" />\n";
}

// meta keywords ( get from page or display default )
if(isset($metaKeywords))
{
	echo "<meta content=\"".$metaKeywords."\" name=\"keywords\" />\n";
}
else
{
	echo "<meta content=\"Sharp,Ricoh,kyocera,Cannon,Photocopiers,Photocopier Sales,Copier Sales,Copiers,Printers,Printer Sales,Multifunctional Devices,MFP,MFPS,MFD,MFDS,Colour &amp; Mono,Colour,Mono,Duplex,Electronic Document Management,Hampshire,Dorset,Wiltshire,Egland,UK\" name=\"keywords\" />\n";
}

$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
/*
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";
if( $url = "error-401.php" || $url = "error-403.php" || $url = "error-404.php" )
{
	echo "<meta http-equiv=\"refresh\" content=\"10; URL=http://www.parkwoodsolutions.com/index.php\" />";
}
*/
?>

<meta content="ParkWood Document Solutions: it@parkwoodsolutions.com" name="author" />
<meta content="text/html;charset=UTF-8" http-equiv="content-type" />
<link href="http://www.parkwoodsolutions.com/style/desktop.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://www.parkwoodsolutions.com/style/print.css" media="print" rel="stylesheet" type="text/css" />
<link href="http://www.parkwoodsolutions.com/style/slider.css" media="screen" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="http://parkwoodsolutions.com/scripts/jQuery.equal.columns.js" type="text/javascript"></script>
<script src="http://parkwoodsolutions.com/scripts/jQuery.menu.js" type="text/javascript"></script>
<script src="http://parkwoodsolutions.com/scripts/jQuery.nivo.slider.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'fade', // Specify sets like: 'fold,fade,sliceDown'
        slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:500, // Slide transition speed
        pauseTime:10000, // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:true, // Next and Prev navigation
        directionNavHide:false, // Only show on hover
        controlNav:true, // 1,2,3... navigation
        controlNavThumbs:false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel:false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav:true, // Use left and right arrows
        pauseOnHover:true, // Stop animation while hovering
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>

<title><?php echo $pageTitle; ?> ParkWood Document Solutions - Multifunctional Photocopiers Printers Scanners Faxes - UK, Hampshire, Romsey
</title>
</head>
<body>
<div id="top"></div>
<div id="wrapper">

