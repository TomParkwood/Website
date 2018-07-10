<div id="slide-wrapper" class="desktop" align="center">
	<a href="products.php"><img class="mySlides" src="images/slides/slide-1.jpg" align="middle"/></a>
	<a href="copiers-printers.php"><img class="mySlides" src="images/slides/slide-2.jpg" align="middle"/></a>
	<a href="document-management.php"><img class="mySlides" src="images/slides/slide-3.jpg" align="middle"/></a>
	<a href="copiers-printers.php"><img class="mySlides" src="images/slides/slide-4.jpg" align="middle"/></a>
	<a href="print-audit.php"><img class="mySlides" src="images/slides/slide-5.jpg" align="middle"/></a>
</div>
<script>
var myIndex =0;
carousel();

function carousel(){
	var i;
	var x = document.getElementsByClassName("mySlides");
	for (i=0;i<x.length; i++){
		x[i].style.display="none";
	}
	myIndex++;
	if(myIndex > x.length) {myIndex	= 1}
	x[myIndex-1].style.display = "block";
	setTimeout(carousel,5000); //Change image every 5 seconds
}
</script>
