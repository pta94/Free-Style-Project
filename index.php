<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

include("libs/DataProvider.php");
include("libs/ShoppingCart.php");

// session_destroy();

if (isset($_SESSION["GioHang"]) == false) {
	$gioHang = new GioHang();
	$_SESSION["GioHang"] = serialize($gioHang);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body> 
<!--top-header & bottom-header-->
<?php include("modules/mHeader.php") ?>
<!--banner-starts-->
<?php include("modules/mBanner.php") ?>
<!--banner-ends--> 
<!--Slider-Starts-Here-->
		<script src="js/responsiveslides.min.js"></script>
		<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
			});
	
		});
		</script>
<!--End-slider-script-->
<?php 
$c = 1;

if (isset($_GET['c'])) {
	$c = $_GET['c'];
}

switch ($c) {
	case 1:
		include("pages/pHome.php");
		break;
	case 2:
		include("pages/pAccount.php");
		break;
	case 3:
		include("pages/pShoppingCart/pCheckout.php");
		break;
	case 4:
		include("pages/pContact.php");
		break;
	case 5:
		include("pages/pProducts.php");
		break;
	case 6:
		include("pages/pSingle.php");
		break;
	case 101:
		//Xử lý thêm sản phẩm vào giỏ hàng
		include("pages/pShoppingCart/exAddToCart.php");
		break;
	default:
		include("pages/pError.php");
}
?>
<!--start-shoes--> 
<!-- include("pages/pShoes.php"); -->
<!--end-shoes-->

<!--start-abt-shoe-->
<?php include("modules/mAboutShoes.php"); ?>
<!--end-abt-shoe-->

<!--start-footer-->
<?php include("modules/mFooter.php"); ?>
<!--end-footer-->

</body>
</html>