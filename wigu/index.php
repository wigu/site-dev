<!DOCTYPE html>

<html class="no-js">
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>WIGU Games | Games for the Curious</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="keywords" content="wigugames, wigu, game, games, mobile, educational, tween, teen, tweens, teens, kids, children, parents, ios, profession, explore, grow up, young, fun, top, cool, doctor, life, simulation, role-play, roleplay, rpg, simulations, simulator, diagnose, treat, build, doctor life">
	<meta name="description" content="Developing games for the curious.">
	<meta name="author" content="WIGU Games">


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
	
<!-- 	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42385945-1', 'wigugames.com');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	</script> -->
	<script src="bin/pixi.dev.js"></script>
	
</head>
  
  
<body>



<!-- 		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=199206370262577";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script> -->

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
Home Page
=========================================-->
	<section id="home" class="section" >
		<h1>
			<a href = "http://bit.ly/1iuImwr" target= "_blank">
				<img class="img-responsive" src="css/images/header_01.png" alt="WIGU header"/>
				<p>WIGU's Home Page!</p>
			</a>
		</h1>
		
		

		<div class ="container ">
			<!--Facebook Buttons-->
			<div class="row rowSpacing">
				<div class="col-sm-9">
					<div class="" data-href="https://www.facebook.com/wigugames" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
				<div class="col-sm-3">
					<div class="" data-href="http://www.facebook.com/wigugames" data-height="20" data-width="350" data-colorscheme="light" data-layout="standard" data-show-faces="false"></div>
					
				</div>
			</div>
			
			<!-- 
			jumbotron 
			-->
			
			<div  id="mainpagecanvas" class="jumbotron">
				<img id="img_left" src = "css/images/tree_b.png" alt="background trees"/>
				<img id="caninelife_logo" src = "css/images/caninelife_logo.png" alt="canine life logo"/>
				<img id="img_right" src = "css/images/tree_a.png" alt="background trees"/>
			    <h2 class = "font-a bold">Beta Test!</h2>
			    <p>I want to beta test Canine Life!</p>
				<br>
				
				<!-- signup-mainpage Button -->
				
			    <p><input id = "signup-mainpage" type="button" class="jumpingicon btn btn-lg" role="button" data-toggle="collapse" data-target="#form-mainpagecanvas" value=" "></p>
				<br>
			
				<!-- Begin MailChimp Signup Form -->
				<div id="form-mainpagecanvas" class="collapse" data-parent="#signup-mainpage">
					<form action="//wigugames.us3.list-manage.com/subscribe/post?u=dedadd33431ffb1db7cd863d6&amp;id=3fc9b03779" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					
						<div id="mc_embed_signup_scroll">
							<div class="row column">
								<div class="col-md-6">
									<div class="name col-md-12 mc-field-group">
										<label for="mce-MMERGE1" class="col-md-3">First Name  <span class="asterisk">*</span></label>
										<input type="text" value="" name="MMERGE1" class="required" id="mce-MMERGE1">
									</div>
									<div class="name col-md-12 mc-field-group" >
										<label for="mce-MMERGE2" class="col-md-3">Last Name  <span class="asterisk">*</span></label>
										<input type="text" value="" name="MMERGE2" class="required" id="mce-MMERGE2">
									</div>
									<div class="name col-md-12 mc-field-group">
										<label for="mce-EMAIL" class="col-md-3">Email Address  <span class="asterisk">*</span></label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
									<div class="col-md-12 mc-field-group size1of2">
										<label for="mce-MMERGE4-month" class="col-md-3">Birthday <span class="asterisk">*</span></label>
										<div class="datefield">
											<span class="subfield monthfield"><input class="required datepart " type="text" pattern="[0-9]*" value="" placeholder="mm" size="2" maxlength="2" name="MMERGE4[month]" id="mce-MMERGE4-month"></span> / 
											<span class="subfield dayfield"><input class="required datepart " type="text" pattern="[0-9]*" value="" placeholder="dd" size="2" maxlength="2" name="MMERGE4[day]" id="mce-MMERGE4-day"></span> / 
											<span class="subfield yearfield"><input class="required datepart " type="text" pattern="[0-9]*" value="" placeholder="yyyy" size="4" maxlength="4" name="MMERGE4[year]" id="mce-MMERGE4-year"></span>
											<span class="small-meta nowrap">( mm / dd / yyyy )</span>
										</div>
									</div>
									<div class=" col-md-12 mc-field-group size1of2">
										<label for="mce-MMERGE5">Time spent playing games (hours per week)</label>
										<input type="number" name="MMERGE5" class="" value="" id="mce-MMERGE5">
									</div>
								</div>
							
								
								<div class="col-md-6">
									<div class=" col-md-12 mc-field-group input-group">
										<label>Gender </label>
										<ul class="listitems">
											<li><input type="radio" value="16" name="group[8977]" id="mce-group[8977]-8977-0"><label for="mce-group[8977]-8977-0"> Male</label></li>
											<li><input type="radio" value="32" name="group[8977]" id="mce-group[8977]-8977-1"><label for="mce-group[8977]-8977-1"> Female</label></li>							
										</ul>
									</div>							

									<div class=" col-md-12 mc-field-group input-group">
										<label>Devices used </label>
										<ul class="listitems">
											<li><input type="checkbox" value="1" name="group[8969][1]" id="mce-group[8969]-8969-0"><label for="mce-group[8969]-8969-0"> Android Phone</label></li>
											<li><input type="checkbox" value="2" name="group[8969][2]" id="mce-group[8969]-8969-1"><label for="mce-group[8969]-8969-1"> iOS Phone</label></li>
											<li><input type="checkbox" value="4" name="group[8969][4]" id="mce-group[8969]-8969-2"><label for="mce-group[8969]-8969-2"> Android Tablet</label></li>
											<li><input type="checkbox" value="8" name="group[8969][8]" id="mce-group[8969]-8969-3"><label for="mce-group[8969]-8969-3"> iOS Tablet</label></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="rowSpacing ">
								<div class="font-b smallFont">Beta testers will be chosen at random and contacted via email. By supplying us with your details you also agree to receive occasional updates from us.</div>
							</div>
							
							
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;"><input type="text" name="b_dedadd33431ffb1db7cd863d6_3fc9b03779" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="" name="subscribe" id="submit-mainpage" class="jumpingicon btn btn-lg button"></div>
							
							<br>
							
							<div id="mce-responses" class="clear rowSpacing">
								<div class="alert-success response" id="mce-error-response" style="display:none"></div>
								<div class="alert-success response" id="mce-success-response" style="display:none"></div>
							</div>    
							
						</div>
					</form>
				</div>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='MMERGE1';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='MMERGE4';ftypes[4]='date';fnames[5]='MMERGE5';ftypes[5]='number';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
				
				

				<div  id="bottomcanvas" class="rowSpacing">
					<div id="fence"></div>
					<div id="grass-canvas"></div>
					<div id="background-deco"></div>
					<div id="doghouse-deco"></div>
				</div>
			</div>
			
			
	
			<!--Wigu Highlights-->
			<div class="row rowSpacing">
				<!--Who are we?-->
				<div class ="col-sm-4">
					<div class ="column mobile-padding">
						<div class="row grey-box">
							<div class="text-center col-sm-12 double-border">
								<img src="css/images/plug.png" alt="plug accent"/>
							</div>
							<h2 class="col-sm-12 text-center font-a double-border"><a href="aboutus.php" class="isHeader">Who Are We?</a></h2>
							<div class="rowSpacing col-sm-12 col-xs-5 miniColumn"><a href="aboutus.php"><img class="img-responsive" src="css/images/homethumb2.jpg" alt="WIGU thumbnail 1"></a></div>
							<div class="col-sm-12 col-xs-7"><br><p>Wondering who is behind the Wigu team and what we're all about?</p><br><p>Click <a href="#about">here</a> to find out more!</p></div>
						</div>
					</div>
					
				</div>
				
				<!--Our Games-->
				<div class ="col-sm-4">
					<div class ="column mobile-padding">
						<div class="row grey-box">
							<div class="text-center col-sm-12 double-border">
								<img src="css/images/plug.png" alt="plug accent"/>
							</div>
							<h2 class="col-sm-12 text-center font-a double-border"><a href="ourgames.php" class="isHeader">Our Games</a></h2>
							<div class="rowSpacing col-sm-12 col-xs-5 miniColumn"><a href="ourgames.php"><img class="img-responsive" src="css/images/HomeThumb1.png" alt="WIGU thumbnail 2"></a></div>
							<div class="col-sm-12 col-xs-7"><br><p>Introducing our first title, Doctor Life!</p><br><p>If you ever wanted to be a doctor, here's your chance! Diagnose your wacky patients, treat them and don't forget to build up your hospital so more patients will visit!</p><br><p><a href="ourgames.php">Check it out</a> now!</p></div>
						</div>
					</div>
				</div>
				<!--Doctor Life-->
				<div class ="col-sm-4">
					<div class ="column mobile-padding">				
						<div class="row grey-box">
							<div class="text-center col-sm-12 double-border">
								<img src="css/images/plug.png" alt="plug accent"/>
							</div>
							<h2 class="col-sm-12 text-center font-a double-border"><a href="ourgames.php"  class="isHeader">Doctor Life!</a></h2>
							<div class="rowSpacing col-sm-12 col-xs-5 miniColumn"><a href="ourgames.php"><img class="img-responsive" src="css/images/HomeThumb3.jpg" alt="WIGU thumbnail 3"></a></div>
							<div class="col-sm-12 col-xs-7"><br><p>Doctor Life on Google Play!</p><br><p>Check out our <a href="/press">Press Kit</a> for more information!</p></div>
						</div>
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