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
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8"/>
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
	<a href="arabic/Contact.php" style="float:right;margin-right:150px">العربية</a>
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
						
						<li><a href="Coordonnees.php">Coordonn&Eacute;es</a><span> </span></li>
						<li><a href="Contact.php" style="color: #EE3023;">Contact</a></li>
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
												<p><span>Telephone:</span>(+212)&nbsp;05 39 95 40 20</p>
												<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+212)&nbsp;05 39 95 79 37</p>
											</div>
												<img src="images/fax.png" alt="">
											<div class="extra-wrap">
												<p><span>FAX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>(+212)&nbsp;05 39 95 79 37</p>
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
					 <?php
								    if(isset($_POST['send']))
									{
										if($_POST["nom"]!='Nom complet...' && $_POST["email"]!='E-mail...' && $_POST["sujet"]!='Sujet...' && $_POST["message"]!='Message..')
										{

										    $req="INSERT INTO `safrer`.`messages` (`id_message`, `nom`, `email`, `sujet`,`tele`,`ville`,`message`) VALUES (NULL, '".$_POST["nom"]."','".$_POST["email"]."','".$_POST["sujet"]."','".$_POST["tel"]."','".$_POST["ville"]."','".$_POST["message"]."');";
											
											
											if ( !( mysql_query($req))) {
											  echo '<meta http-equiv="refresh" content="2;URL=\'#\'" />
													<style>
														rp {
														background:rgba(231, 22, 22, 0.59);
														border:1px solid rgba(231, 22, 22, 0.59);
														color:#fff;
														margin:0 auto;
														top:12%;
														font-family:Trebuchet MS;
														font-size:18px;
														font-weight:bold;
														padding:15px;
														text-shadow:1px 1px rgba(0,0,0,0.5);
														}
													</style>
													<center></br></br><rp>Echec d\'un envoi .Contactez nous merci .</br></br></rp></br></br></center>';
											  
										   }else{
											    echo '<meta http-equiv="refresh" content="2;URL=\'#\'" />
													<style>
														pr {
														background:rgba(56, 190, 34, 0.59);
														border:1px solid rgba(0,0,0,0.5);
														color:#fff;
														margin:0 auto;
														top:12%;
														font-family:Trebuchet MS;
														font-size:18px;
														font-weight:bold;
														padding:15px;
														text-shadow:1px 1px rgba(0,0,0,0.5);
														}
													</style>
													<center></br></br></br></br><pr>Merci ! Votre message a été envoyée avec succès !</pr></br></br></br></center>';
										   }

										}else{
											    echo '<meta http-equiv="refresh" content="2;URL=\'#\'" />
													<style>
														pr {
														background:rgba(56, 190, 34, 0.59);
														border:1px solid rgba(0,0,0,0.5);
														color:#fff;
														margin:0 auto;
														top:12%;
														font-family:Trebuchet MS;
														font-size:18px;
														font-weight:bold;
														padding:15px;
														text-shadow:1px 1px rgba(0,0,0,0.5);
														}
													</style>
													<center></br></br></br></br><pr>S\'il vous plaît remplir tous les champs ! Merci!</pr></br></br></br></center>';
										   }
										}
						?>
						
					 	<form action="" method="POST">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" class="text" name="nom" value="Nom complet..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom complet...';}" required>
								 	<input type="text" class="text" name="email" value="E-mail..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail...';}" required >
								 	<input type="text" class="text" name="sujet" value="Sujet..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Sujet...';}" required >
								</div>
								<div class="contact-to">
														<input type="text" name="tel"  class="text" value="Téléphone ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Téléphone...';}" required />
														<select name="ville" style="padding: 12px 10px;height: 45.9px;width: 31.9%;font-family: 'Open Sans', sans-serif;margin: 12px 10;border: 1px solid rgba(192, 192, 192, 0.61);color: #626262;background: #FFF;float: left;outline: none;font-size: 0.85em;transition: border-color 0.3s;-o-transition: border-color 0.3s;-ms-transition: border-color 0.3s;-moz-transition: border-color 0.3s;-webkit-transition: border-color 0.3s;box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);-webkit-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);-moz-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);-o-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);border-radius: 4px;-webkit-border-radius: 4px;-moz-border-radius: 4px;-o-border-radius: 4px;" />
															<option selected>Ville</option>
															<option></option>
															<option>Agadir</option>
															<option>Amizmiz</option>
															<option>Asilah</option>
															<option>Azrou</option>
															<option>Beni Mellal</option>
															<option> Berkane</option>
															<option>Berrechid</option>
															<option>Boujdour</option>
															<option>Casablanca</option>
															<option>Chefchaouen</option>
															<option> Dakhla</option>
															<option>El Jadida</option>
															<option>Erfoud</option>
															<option>Er rachidia</option>
															<option>Essaouira</option>
															<option>Fès</option>
															<option>Figuig</option>
															<option>Ifrane</option>
															<option>Imilchil</option>
															<option>Kenitra</option>
															<option>Khenifra</option>
															<option>Laayoune</option>
															<option>Larache</option>
															<option>Marrakech</option>
															<option>Meknes</option>
															<option>Merzouga</option>
															<option>Midelt</option>
															<option>Moulay Bousselham</option>
															<option>Ouarzazate</option>
															<option>Oujda</option>
															<option>Rabat</option>
															<option>Rissani</option>
															<option>Safi</option>
															<option>Salé</option>
															<option>Sefrou</option>
															<option>Taliouine</option>
															<option>Tanger</option>
															<option>Tafraoud</option>
															<option>Tagounit</option>
															<option>Taroudant</option>
															<option>Tetouan</option>
															<option>Tineghir</option>
															<option>Tiznit</option>
															<option>Volubilis</option>
															<option>Zagora</option>
														</select>
													</div>
								<div class="text2">
				                   <textarea value="Message:" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
				                </div>
				               <span><input type="submit" class="" value="Send" name="send"></span>
				                <div class="clearfix"></div>
				               </div>
				           </form>
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










