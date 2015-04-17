<?php
	include('connexion.php');
 ?>
	<head>
		<title>Safrer </title>

		<link href="Bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="Bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="Bootstrap/css/custom.css" rel='stylesheet' type='text/css' />




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
		<meta name="viewport" content="width=device-width, initial-scale=1; charset=utf-8">
		
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
	 
	      <div class="container">
		      <a  href="../index.php"  class="navbar-left" style="float:right;margin-right:150px">Français</a>
				     <!----top-header---->
			          <div class="top-header">
					          <a href="index.php" class="navbar-right"><img src="images/logo.png"/></a>
				           <div class="top-header-info navbar-left">
						         

					            <div class="top-contact-info">
						             <ul class="unstyled-list list-inline">
							            <li><span class="mail"> </span><a href="#">Contact@safrer.com</a></li>
							            <li><span class="phone"> </span>05 39 95 40 20</li>
							             <li><span class="phone"> </span>05 39 95 40 20&nbsp;&nbsp;&nbsp;&nbsp;</li>
							            <div class="clearfix"> </div>
						              </ul>
					            </div>
					
				           </div>
				           <div class="clearfix"> </div>
			         </div>
			         <!----//top-header---->
					 <div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					       <span class="sr-only" >Toggle navigation</span>
						   <span class="icon-bar"></span>
						   <span class="icon-bar"></span>
						   <span class="icon-bar"></span>
					  </button>
					  <!---top-header-nav---->
			<div class="top-header-nav"> 
			<!----start-top-nav---->
			 <nav class="top-nav main-menu">
					<ul class="top-nav">
						<li><span> </span><a href="index.php" style="color: #EE3023;">الرئسية </a></li>
						<li><span> </span><a href="products.php">منتجاتنا </a></li>
						<li><span> </span><a href="Coordonnees.php">خريطة الموقع</a></li>
						<li><a href="Contact.php">اتصال</a></li>
						<div class="clearfix"> </div>
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
			  </nav>
			  <!----End-top-nav---->
			  <!---top-header-search-box--->
			  <div class="top-header-search-box">
			  	<form action='search.php' method="GET" >
			  		<input type="text" placeholder="البحث" required name='sear' maxlength="22">
			  		<input type="submit" value=" " >
			  	</form>
			  </div>
			  <!---top-header-search-box--->
						<div class="clearfix"> </div>
			</div>
			
		</div>
		
		
			<!--//top-header-nav---->


				</div>
		  </div>
		  </div>
			<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
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
			<!----//End-slider-script---->
			 
			<!-- Slideshow 4  -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides " id="slider4">
				  <li>
			          <img src="images/slide7.JPG" alt="" >
			           <div class="caption">
			           	<div class="slide-text-info navbar-right">
							</br></br></br></br></br></br></br></br>
			          		<label  style="color:blue;">سافرير</label>
			          		<a class="slide-btn" href="products.php"><small>جميع المنتجات</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide2.JPG" alt="">
			          <div class="caption">
			          	<div class="slide-text-info navbar-right">
			          		</br></br></br></br></br></br></br></br>
			          		<label  style="color:blue;">سافرير</label>
			          		<a class="slide-btn" href="products.php"><small>جميع المنتجات</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide1.JPG" alt="">
			          <div class="caption">
			          	<div class="slide-text-info navbar-right">
			          		</br></br></br></br></br></br></br></br>
			          		<label  style="color:blue;">سافرير</label>
			          		<a class="slide-btn" href="products.php"><small>جميع المنتجات</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide3.JPG" alt="" >
			           <div class="caption">
			           	<div class="slide-text-info navbar-right">
							</br></br></br></br></br></br></br></br>
			          		<label  style="color:blue;">سافرير</label>
			          		<a class="slide-btn" href="products.php"><small>جميع المنتجات</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
					<li>
			          <img src="images/slide4.JPG" alt="">
			          <div class="caption">
			          	<div class="slide-text-info navbar-right">
			          		</br></br></br></br></br></br></br></br>
			          		<label  style="color:blue;">سافرير</label>
			          		<a class="slide-btn" href="products.php"><small>جميع المنتجات</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide5.JPG" alt="" >
			           <div class="caption">
			           	<div class="slide-text-info navbar-right">
							</br></br></br></br></br></br></br></br>
			          		<label  style="color:blue;">سافرير</label>
			          		<a class="slide-btn" href="products.php"><small>جميع المنتجات</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
					<li>
			          <img src="images/slide6.JPG" alt="">
			          <div class="caption">
			          	<div class="slide-text-info navbar-right">
			          		</br></br></br></br></br></br></br></br>
			          		<label  style="color:blue;">سافرير</label>
			          		<a class="slide-btn" href="products.php"><small>جميع المنتجات</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide3.JPG" alt="" >
			           <div class="caption">
			           	<div class="slide-text-info navbar-right">
							</br></br></br></br></br></br></br></br>
			          		<label  style="color:blue;">سافرير</label>
			          		<a class="slide-btn" href="products.php"><small>جميع المنتجات</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!--  //End-slider---->

			<!----content---->
				<div class="content">
					<div class="container">
				<!---top-row---->
				<div class="top-row">
				     <div class="col-xs-4">
						<div class="top-row-col1 text-center">
							<h2>الاطفال</h2>
							<a class="r-list-w" href="product_catalogue.php?catlg=ENFANTS"><img class="r-img text-center" src="images/kid-r-img.jpg" title="name" />
							</a>
							<h4>المجموع</h4>
							<?php
							
											$query = mysql_query("SELECT * FROM produit WHERE cat='ENFANTS' ");
											$numrows= mysql_num_rows($query);   //*****************  cout notif
							
											echo "<label>المنتجات</label><label>$numrows</label>";
											?>
							<a class="r-list-w" href="product_catalogue.php?catlg=ENFANTS"><img src="images/list-icon.png" title="list" /></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="top-row-col1 text-center">
							<h2>الرجال</h2>
							<a class="r-list-w" href="product_catalogue.php?catlg=HOMME"><img class="r-img text-center" src="images/man-r-img.jpg" title="name" />
							</a>
							<h4>المجموع</h4>
							<?php
							
											$query = mysql_query("SELECT * FROM produit WHERE cat='HOMME' ");
											$numrows= mysql_num_rows($query);   //*****************  cout notif
							
											echo "<label>المنتجات</label><label>$numrows</label>";
											?>
							<a class="r-list-w" href="product_catalogue.php?catlg=HOMME"><img src="images/list-icon.png" title="list" /></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="top-row-col1 text-center">
							<h2>النساء</h2>
							<a class="r-list-w" href="product_catalogue.php?catlg=FEMME"><img class="r-img text-center" src="images/img-w.jpg" title="name" />
							</a>
							<h4>المجموع</h4>
							<?php
											 
											$query = mysql_query("SELECT * FROM produit WHERE cat='FEMME' ");
											$numrows= mysql_num_rows($query);   //*****************  cout notif
							
                                             echo "<label>المنتجات</label><label>$numrows</label>";
											?>
							<a class="r-list-w" href="product_catalogue.php?catlg=FEMME"><img src="images/list-icon.png" title="list" /></a>
						</div>
					</div>
					
					
					
					<div class="col-xs-4" style="margin-left: 33.3%;margin-bottom: 30px;"></br>
						<div class="top-row-col1 text-center">
							<h2>بووتس</h2>
							<a class="r-list-w" href="product_catalogue.php?catlg=BOTTES"><img class="r-img text-center" src="images/bot-r-img.jpg" title="name" />
							</a>
							<h4>المجموع</h4>
							<?php
							
											$query = mysql_query("SELECT * FROM bottes");
											$numrows= mysql_num_rows($query);   //*****************  cout notif
							
											echo "<label>المنتجات</label><label>$numrows</label>";
											?>
							<a class="r-list-w" href="product_catalogue.php?catlg=BOTTES"><img src="images/list-icon.png" title="list" /></a>
						</div>
					</div>
					
					</div>
					
				</div>
				<!---top-row--->
				<div class="container"> 
				<!----speical-products---->
				
				<!---//speical-products---->
				</div>
			<!----content---->
			<!----footer---->
			<div class="footer">
				<div class="container">
					<div class="col-md-3 footer-logo">
						<a href="index.php"><img src="images/flogo.png" title="brand-logo" /></a>
					</div>
					<div class="col-md-7 footer-links">
						<ul class="unstyled-list list-inline">
							<li><a href="contact.php">اتصال</a> </li>
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
			<!---copy-right---->
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










