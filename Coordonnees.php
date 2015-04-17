<?php
	include('connexion.php');
 ?>
	<head>
		<title>Safrer </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body style="background: #f4f4f4 url(images/patBody.png);">
	<a href="arabic/Coordonnees.php" style="float:right;margin-right:150px">العربية</a>
		<!----container---->
		<div class="container">
			<!----top-header---->
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="barndlogo" /></a>
				</div>
				<div class="top-header-info">
					<div class="top-contact-info">
						<ul class="unstyled-list list-inline">
							<li><span class="phone"> </span>05 39 95 40 20&nbsp;&nbsp;&nbsp;&nbsp;-</li>
							<li><span class="phone"> </span>05 39 95 40 20</li>
							<li><span class="mail"> </span><a href="#">Contact@safrer.com</a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<!----//top-header---->
			<!---top-header-nav---->
			<div class="top-header-nav"> 
			<!----start-top-nav---->
			 <nav class="top-nav main-menu">
					<ul class="top-nav">
						<li><a href="index.php">Accueil </a><span> </span></li>
						<li><a href="products.php">Nos produits </a><span> </span></li>
						
						<li><a href="Coordonnees.php" style="color: #EE3023;">Coordonn&Eacute;es</a><span> </span></li>
						<li><a href="Contact.php">Contact</a></li>
						<div class="clearfix"> </div>
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
			  </nav>
			  <!----End-top-nav---->
			  <!---top-header-search-box--->
			  <div class="top-header-search-box">
			  	<form action='search.php' method="GET" >
			  		<input type="text" placeholder="Recherche par référence" required name='sear' maxlength="22">
			  		<input type="submit" value=" " >
			  	</form>
			  </div>
			  <!---top-header-search-box--->
						<div class="clearfix"> </div>
			</div>
		</div>
			<!--//top-header-nav---->
			<!----contact---->
			<div class="contact-info">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12953.242114347586!2d-5.7975014!3d35.7431716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x47e52cd4d251b831!2sMETAPLEX!5e0!3m2!1sfr!2s!4v1414981001390" width="600" height="450" frameborder="0" style="border:0"></iframe>
					</div>
			</div>
			<!---//contact---->
			<!----footer--->
			<div class="footer">
				<div class="container">
					<div class="col-md-3 footer-logo">
						<a href="index.php"><img src="images/flogo.png" title="brand-logo" /></a>
					</div>
					<div class="col-md-7 footer-links">
						<ul class="unstyled-list list-inline">
							<li><a href="contact.php"> Contact</a> </li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="col-md-2 footer-social">
						<ul class="unstyled-list list-inline">
							<li><a class="pin" href="#"><span> </span></a></li>
							<li><a class="twitter" href="#"><span> </span></a></li>
							<li><a class="facebook" href="#"><span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			 </div>
			 <div class="clearfix"> </div>
<!---//footer--->
			<!---copy-right--->
					<div class="copy-right">
						<div class="container">
							<p>
												<!----contact---->
								<div class="contact-info">
										
										 <div class="container">
										 <div class="contact-grids">
												 <div class="col_1_of_bottom span_1_of_first1">
														<h5>Address</h5>
														<ul class="list3">
															<li>
																<img src="images/home.png" alt="">
																<div class="extra-wrap">
																 <p>ZONE INDUSTRIELLE TRANCHE B LOT 827&nbsp;-&nbsp;B.P&nbsp;1294</p>
																</div>
															</li>
														</ul>
													</div>
													<div class="col_1_of_bottom span_1_of_first1">
														<h5>Phones</h5>
														<ul class="list3">
															<li>
																   <img src="images/phone.png" alt="">
																<div class="extra-wrap">
																	<p><span>Tel.</span>(+212)&nbsp;05 39 95 40 20</p>
																	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+212)&nbsp;05 39 95 79 37</p>
																</div>
																	<img src="images/fax.png" alt="">
																<div class="extra-wrap">
																	<p><span>FAX:</span>(+212)&nbsp;05 39 95 79 37</p>
																</div>
															</li>
														</ul>
													</div>
													<div class="col_1_of_bottom span_1_of_first1">
														 <h5>Email</h5>
														<ul class="list3">
															<li>
																<img src="images/email.png" alt="">
																<div class="extra-wrap">
																  <p><span class="mail"><a href="mailto:Contact@safrer.com">Contact@safrer.com </a></span></p>
																</div>
															</li>
														</ul>
													</div>
													<div class="clearfix"></div>
										 </div>
												</div>
								</div>
								<!---//contact---->
							</p>
							<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
							<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
						</div>
					</div>
			<!--//copy-right--->
		</div>
		<!----container---->
	</body>
</php>











