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
	<a href="arabic/single-page.php" style="float:right;margin-right:150px">العربية</a>
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
						<li><a href="products.php" style="color: #EE3023;">Nos produits </a><span> </span></li>
						
						<li><a href="Coordonnees.php">Coordonn&Eacute;es</a><span> </span></li>
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
			<?php
			  
			  if(isset($_GET["catlg"])){
				  
			 ?>
			<!----content---->
				<div class="content">
					<div class="container">
				<!--- products ---->
				<div class="products">
					<div class="product-filter">
						<h1><a href="#">Les produits</a></h1>
						<div class="product-filter-grids"> 
						
						<div class="col-md-3 product-filter-grid1-brands">
								<h3>&nbsp;&nbsp;&nbsp;&nbsp;Matières</h3></br>
								<ul class="col-md-6 unstyled-list b-list1">
								<?php
												$query = mysql_query("SELECT `Matiere` FROM `bottes` WHERE `ref`='".$_GET["ref"]."'");
												
													while($row = mysql_fetch_row($query))
													{	
														echo '<li><a href="#'.$row[0].'">'.$row[0].'</a></li>';							
													}
									?>
									
									<div class="clearfix"> </div>
								</ul>
								
							</div>
							
									<div class="col-md-6 product-filter-grid1-brands-col2">
									<div class="producst-cate-grids">
									
									<?php
									
									
							
									  if($_GET["catlg"]=='FEMME'){
										   
											$query = mysql_query("SELECT * FROM produit WHERE cat='FEMME' ");
											$numrows= mysql_num_rows($query);   //*****************  cout notif
											
										  echo '<div class="col-md-4 producst-cate-grid text-center">
													<h2>FEMME</h2>
													<a class="r-list-w" href="product_catalogue.php?catlg=FEMME"><img class="r-img text-center img-responsive" src="images/img-w.jpg" title="name"></a>
													
													<h4>TOTAL</h4>
													<label>'.$numrows.' PRODUITS</label>
													<a class="r-list-w" href="product_catalogue.php?catlg=FEMME"><img src="images/list-icon.png" title="list"></a>
												</div>';
										}
										
										if($_GET["catlg"]=='HOMME'){
											
											
											$query = mysql_query("SELECT * FROM produit WHERE cat='HOMME' ");
											$numrows= mysql_num_rows($query);   //*****************  cout notif
											
										  echo '<div class="col-md-4 producst-cate-grid text-center">
													<h2>HOMME</h2>
													<a class="r-list-w" href="product_catalogue.php?catlg=HOMME"><img class="r-img text-center img-responsive" src="images/man-r-img.jpg" title="name">
													</a>
													<h4>TOTAL</h4>
													<label>'.$numrows.' PRODUITS</label>
													<a class="r-list-w" href="product_catalogue.php?catlg=HOMME"><img src="images/list-icon.png" title="list"></a>
												</div>';
										}
										
										if($_GET["catlg"]=='ENFANTS'){
											
											$query = mysql_query("SELECT * FROM produit WHERE cat='ENFANTS' ");
											$numrows= mysql_num_rows($query);   //*****************  cout notif
									
										  echo '<div class="col-md-4 producst-cate-grid text-center">
													<h2>ENFANTS</h2>
													<a class="r-list-w" href="product_catalogue.php?catlg=ENFANTS"><img class="r-img text-center img-responsive" src="images/kid-r-img.jpg" title="name">
													</a>
													<h4>TOTAL</h4>
													<label>'.$numrows.' PRODUITS</label>
													<a class="r-list-w" href="product_catalogue.php?catlg=ENFANTS"><img src="images/list-icon.png" title="list"></a>
												</div>';
										}
										if($_GET["catlg"]=='BOTTES'){
											
											$query = mysql_query("SELECT * FROM bottes ");
											$numrows= mysql_num_rows($query);   //*****************  cout notif
									
										  echo '<div class="col-md-4 producst-cate-grid text-center">
													<h2>BOTTES</h2>
													<a class="r-list-w" href="#BOTTES"><img class="r-img text-center img-responsive" src="images/bot-r-img.jpg" title="name">
													</a>
													<h4>TOTAL</h4>
													<label>'.$numrows.' PRODUITS</label>
													<a class="r-list-w" href="#BOTTES"><img src="images/list-icon.png" title="list"></a>
												</div>';
										}
									 ?>
									 
									</div>
							</div>
							<!---->
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				</div>
				<div class="clearfix"> </div>
				<!-- //products ---->
				<!----product-details--->
				<div class="product-details">
					<div class="container">
					<div class="product-details-row1">
						<div class="product-details-row1-head"></br></br>
							<p>Référence &nbsp;:&nbsp;&nbsp;<?php echo $_GET["ref"]; ?></p>
						</div>
						<div class="col-md-4 product-details-row1-col1">
							<!----details-product-slider--->
						<!-- Include the Etalage files -->
							<link rel="stylesheet" href="css/etalage.css">
							<script src="js/jquery.etalage.min.js"></script>
						<!-- Include the Etalage files -->
						<script>
								jQuery(document).ready(function($){
					
									$('#etalage').etalage({
										thumb_image_width: 300,
										thumb_image_height: 400,
										source_image_width: 1000,
										source_image_height: 1100,
										show_hint: true,
										click_callback: function(image_anchor, instance_id){
											alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
										}
									});
									// This is for the dropdown list example:
									$('.dropdownlist').change(function(){
										etalage_show( $(this).find('option:selected').attr('class') );
									});
		
							});
						</script>
						<!----//details-product-slider--->
						<div class="details-left">
							<div class="details-left-slider">
								<ul id="etalage">
								<?php
												$description =null;
												
											   if($_GET["catlg"]=='BOTTES'){
														$query = mysql_query("SELECT image,discrip FROM bottes WHERE ref='".$_GET['ref']."' ");
													
														$numrows= mysql_num_rows($query);   //*****************  cout notif
														if($numrows == 0){
																echo '<li>
																	<a href="optionallink.php">
																		<center> Aucun images  trouvé pour ce produit </center>
																	</a>
																</li>';
														}
														while($row = mysql_fetch_row($query))
														{	$description =$row[1];
															echo '<li>
																	<a href="optionallink.php">
																		<img class="etalage_thumb_image" src="'.$row[0].'" />
																		<img class="etalage_source_image" src="'.$row[0].'" />
																	</a>
																</li>';
														
														}
															
														//*******************************************************
													
														$query1 = mysql_query("SELECT * FROM `product-slide` WHERE `ref`='".$_GET['ref']."'");
														$numrows= mysql_num_rows($query1);  
														if($numrows == 0){
																echo '<li>
																		<center>il y a pas d\'autres images pour ce produit.</center>
																		
																</li>';
														}	
														while($row = mysql_fetch_row($query1))
														{
															echo '<li>
																		<img class="etalage_thumb_image" src="'.$row[1].'"/>
																		<img class="etalage_source_image" src="'.$row[1].'" />	
																</li>';
														}

											   }
											   else{
													$query = mysql_query("SELECT image,discrip FROM produit WHERE ref='".$_GET['ref']."' ");
													
														$numrows= mysql_num_rows($query);   //*****************  cout notif
														if($numrows == 0){
																echo '<li>
																	<a href="optionallink.php">
																		<center> Aucun images  trouvé pour ce produit </center>
																	</a>
																</li>';
														}
														while($row = mysql_fetch_row($query))
														{	$description =$row[1];
															echo '<li>
																	<a href="optionallink.php">
																		<img class="etalage_thumb_image" src="'.$row[0].'" />
																		<img class="etalage_source_image" src="'.$row[0].'" />
																	</a>
																</li>';
														
														}
															
														//*******************************************************
														
														$query1 = mysql_query("SELECT * FROM `product-slide` WHERE `ref`='".$_GET['ref']."'");
														$numrows= mysql_num_rows($query1);  
														if($numrows == 0){
																echo '<li>
																		<center>il y a pas d\'autres images pour ce produit.</center>
																		
																</li>';
														}	
														while($row = mysql_fetch_row($query1))
														{
															echo '<li>
																		<img class="etalage_thumb_image" src="'.$row[1].'"/>
																		<img class="etalage_source_image" src="'.$row[1].'" />	
																</li>';
														}
												}	
											?>
								</ul>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="col-md-8 product-details-row1-col2" style="margin-left: 7%;">
						
											<div class="product-rating">
												<h1 id="Commander">les informations sur ce produit</h1>
											</div></br>
											
							<!---->
							<div class="product-filter-grid1-brands-col3">
								<div class="products-colors">
									<h3>-&nbsp;&nbsp;&nbsp;&nbsp;les couleur disponible </h3>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><a href=""><span class="color1"> </span></a></li>
									<li><a href=""><span class="color9"> </span></a></li>
									<li><a href=""><span class="color11"> </span></a></li>
									<li><a href=""><span class="color20"> </span></a></li>
									<div class="clearfix"> </div>
								</div>
							</div>
							<!---->
							<div class="product-filter-grid1-brands-col3">
								<div class="products-colors">
									<h3>-&nbsp;&nbsp;&nbsp;&nbsp;les tailles disponible </h3>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><span> 39 ,</span></li>
									<li><span> 40 ,</span></li>
									<li><span> 45 </span></li>
									<div class="clearfix"> </div>
								</div>
							</div>
										</br></br>
						<div class="product-price-details">
							<p class="text-left">Merci de nous contacter pour plus d'information.</p>
							<a class="shipping" href="Contact.php"><span> </span>Contactez nous</a>
							<div class="clearfix"> </div>
							
							<div class="clearfix"> </div>
							
						</div>
					</div>
					
					
					
						<div class="clearfix"> </div>
				<!--//product-details--->
				</div>
				<!---- product-details ---->
				<div class="product-tabs">
					<!--Horizontal Tab-->
				    <div id="horizontalTab">
				        <ul>
				            <li><a href="#tab-1">DESCRIPTION du produit</a></li>
				        </ul>
				        <div id="tab-1" class="product-complete-info">
				        	<h3>DESCRIPTION:</h3>
							<p><?php echo $description; ?></p>
				        </div>
				       
				    </div>
				    <!-- Responsive Tabs JS -->
				    <script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>
				
				    <script type="text/javascript">
				        $(document).ready(function () {
				            $('#horizontalTab').responsiveTabs({
				                rotate: false,
				                startCollapsed: 'accordion',
				                collapsible: 'accordion',
				                setHash: true,
				                disabled: [3,4],
				                activate: function(e, tab) {
				                    $('.info').php('Tab <strong>' + tab.id + '</strong> activated!');
				                }
				            });
				
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('#stop-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('stopRotation');
				            });
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('.select-tab').on('click', function() {
				                $('#horizontalTab').responsiveTabs('activate', $(this).val());
				            });
				
				        });
				    </script>
				</div>
				<!-- //product-details ---->
				</div>
				</div>
			<!----content---->
			<div class="clearfix"> </div>
			<?php
			  
				}else
					echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
			 ?>

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











