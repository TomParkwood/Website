<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
// meta description ( get from page or display default )
if(defined( $metaDescription ))
{
	echo "<meta content=\"".$metaDescription."\" name=\"description\" />";
}
else
{
	echo"<meta content=\"We supply, install, maintain and, most importantly, monitor the performance of photocopiers and print machines both locally across Hampshire Dorset Wiltshire and nationally from a variety of manufacturers\" name=\"description\" />";
}

// meta keywords ( get from page or display default )
if(defined( $metaKeywords ))
{
	echo "<meta content=\"";
	echo $metaDescription;
	echo "\" name=\"keywords\" />";
}
else
{
	echo "<meta content=\"Sharp,Ricoh,kyocera,Cannon,Photocopiers,Photocopier Sales,Copier Sales,Copiers,Printers,Printer Sales,Multifunctional Devices,MFP,MFPS,MFD,MFDS,Colour &amp; Mono,Colour,Mono,Duplex,Electronic Document Management,Hampshire,Dorset,Wiltshire,Egland,UK\" name=\"keywords\" />";
}
?>

<meta content="ParkWood Document Solutions: it@parkwoodsolutions.com" name="author" />
<meta content="text/html;charset=UTF-8" http-equiv="content-type" />
<link href="./style/desktop.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://www.parkwoodcopiers.co.uk/style/print.css" media="print" rel="stylesheet" type="text/css" />
<link href="http://www.parkwoodcopiers.co.uk/style/slider.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="http://parkwoodcopiers.co.uk/scripts/jQuery.equal.columns.js" type="text/javascript"></script>
<script src="http://parkwoodcopiers.co.uk/scripts/jQuery.menu.js" type="text/javascript"></script>

<title><?php echo $pageTitle; ?> ParkWood Document Solutions</title>
</head>
<body>
<div id="top"></div>
<div id="wrapper">
