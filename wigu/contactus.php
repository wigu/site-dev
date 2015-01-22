<!DOCTYPE html>

<html class="no-js">
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>WIGU Games | Games for the Curious</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="keywords" content="wigugames, wigu, game, games, mobile, educational, tween, teen, tweens, teens, kids, children, parents, ios, profession, explore, grow up, young, fun, top, cool, doctor, life, simulation, role-play, roleplay, rpg, simulations, simulator, diagnose, treat, build, doctor life">
	<meta name="description" content="Developing games for the curious.">
	<meta name="author" content="WIGU Games">
	<meta name="apple-itunes-app" content="app-id=742028366">

<!--========================================
Stylesheets
=========================================-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">    <!-- Bootstrap -->
    <link href="css/wigu.css" rel="stylesheet" media="screen">    <!-- Main stylesheet -->
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans%7cAbril+Fatface%7cGalindo' rel='stylesheet' type='text/css'>
	<link href="css/jquery.fancybox.css" rel="stylesheet" media="screen">
	<link href="css/jquery.fancybox-buttons.css" rel="stylesheet" media="screen"> 
	
	
	<script type="text/javascript" async src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.0/modernizr.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> <!-- Google Maps -->
	<link rel="shortcut icon" href="favicon.ico" type="image/ico"/>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42385945-1', 'auto');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	</script> 

	
</head>
  
  
<body>


	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=199206370262577";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

<!-- ==============================================
Preloader
=============================================== -->
	<div id='preloader'>
		<div id='loading-animation'></div>
	</div>

<!--========================================
Navigation Bar
=========================================-->
<?php include("navbar.php"); ?>

	
<!--========================================
Contact
=========================================-->
	<section id="contact" class="section">
		<h1>			

			<img class="img-responsive" src="css/images/header_05.png" alt="WIGU header"/>
			<p>Contact us now!</p>

		</h1>
		
		
		<div class="container ">
			
			<div class="row rowSpacing">
				<div class="col-sm-9">
					<div class="" data-href="https://www.facebook.com/wigugames" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
				<div class="col-sm-3">
					<div class="" data-href="http://www.facebook.com/wigugames" data-height="20" data-width="350" data-colorscheme="light" data-layout="standard" data-show-faces="false"></div>
					
				</div>
			</div>
		
			<div class="row text-center" id="email-list">
				
				<div class="mobile-padding column text-center col-xs-4">
					<h2 class="text-center isHeader col-sm-12 font-a">Support</h2>
					<div class="col-sm-12"><a href="mailto:support@wigugames.com"><img src="css/images/feedback_icon.png" alt="Feedback"/></a></div>
					<div class="col-sm-12"><a href="mailto:support@wigugames.com"><p>support@wigugames.com</p></a></div>
				</div>

				<div class="mobile-padding column col-xs-4">
					<h2 class="text-center isHeader col-sm-12 font-a">Recruitment</h2>
					<div class="col-sm-12"><a href="mailto:hr@wigugames.com"><img src="css/images/human_resource_icon.png" alt="HR"/></a></div>
					<div class="col-sm-12"><a href="mailto:hr@wigugames.com"><p>hr@wigugames.com</p></a></div>
				</div>
				
				<div class="mobile-padding column col-xs-4">
					<h2 class="text-center isHeader col-sm-12 font-a">Contact</h2>
					<div class="col-sm-12"><a href="mailto:contact@wigugames.com"><img src="css/images/contact_icon.png" alt="Contact Us!"/></a></div>
					<div class="col-sm-12"><a href="mailto:contact@wigugames.com"><p>contact@wigugames.com</p></a></div>
				</div>
			</div>

			<div class="row text-center rowSpacing">
				<div class="col-sm-4">
					<div class="text-center col-sm-12 double-border">
						<img src="css/images/ticket.png" alt="ticket accent"/>
					</div>
					<h2 class="col-sm-12 isExtraLarge text-center font-a double-border">Where are We?</h2>
				</div>
			</div>
			
			<div class="row pc-only">
				<div class="col-sm-10 dotted-line">
				</div>
			
				<div class="mail-van col-sm-1">
					<img src="css/images/mailvan_.png" alt="Address"/>
				</div>
			</div>

			<div class="column">
			<div class="grey-box row text-center">
				<div class="col-sm-8" id="map-div">
					<div id="map-canvas">
					</div>
				</div>
				
				<script>
					function initialize() {
						var map_canvas = document.getElementById('map-canvas');
						var map_options = {
						  center: new google.maps.LatLng(3.0227082,101.5816691),
						  zoom: 13,
						  mapTypeId: google.maps.MapTypeId.ROADMAP
						}
						var map = new google.maps.Map(map_canvas, map_options);

						var marker = new google.maps.Marker({
							position: new google.maps.LatLng(3.0227082,101.5816691),
							map:map,
							title:"Wigu Studios!",
							icon:"css/images/icn_mapindicator.png"
						});


					}
					google.maps.event.addDomListener(window, 'load', initialize);

				</script>
					
				<div class="col-sm-4" id="contact-details">
					<address id="contact-address">
						<img src="css/images/icon_address.png" alt="Address"/><br>
						<p><strong>Wigu Sdn Bhd</strong><br>
						B-07-05, Level 7, Block B<br>
						Sky Park, One City @ USJ 25<br>
						Jalan USJ 25/1<br>
						47650 Subang Jaya<br>
						Malaysia</p>
					</address><br>
					
					<address id="address-break">
						<img src="css/images/icon_telephone.png" alt="Phone"/><br>
						<p>+6 (03) 5115 0279</p>
					</address>
		
				</div>
				
			</div>
			</div>
			<?php include("footer.php"); ?>
		  
		</div>

	</section>


	
<!-- Mobile Footer -->

	<div class=" footer mobile-only row text-center">	
		<div class="col-sm-2">&copy; Wigu Games. All rights reserved</div>
		<div class = "col-xs-12 footer text-center">
			<p>Access our <a href = "http://www.privacychoice.org/policy/mobile?policy=1eb17e17957390e381600fbe6d939a60" target="_blank">Privacy Policy.</a></p><br>
		</div>
	</div>
	
	
	
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>
	<script src="js/mainpagecanvas.js"></script>

	<script src="js/wigu.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script async src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script type="text/javascript" async src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" async src="js/jquery.fancybox-buttons.js"></script>

	


	
	
  </body>
</html>