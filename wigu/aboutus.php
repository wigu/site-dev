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
About Us
=========================================-->
	<section id="about" class="section">
		<h1>			
			<a href = "http://bit.ly/1iuImwr" target= "_blank">
				<img class="img-responsive" src="css/images/header_02.png" alt="WIGU header"/>
				<p>About WIGU</p>
			</a>
		</h1>
		
		
		
		<div class=" container ">
			<div class="row rowSpacing">
				<div class="col-sm-9">
					<div class="" data-href="https://www.facebook.com/wigugames" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
				<div class="col-sm-3">
					<div class="" data-href="http://www.facebook.com/wigugames" data-height="20" data-width="350" data-colorscheme="light" data-layout="standard" data-show-faces="false"></div>
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-2">
					<img src = "css/images/WIGU_logo.png" alt="WIGU logo"/>
				</div>
				<div class="col-md-10">
					<blockquote>
						<p class="text-center font-a">Inspiring our players to explore the different professions in the world.</p>
						<small class="text-center">Wigu's Vision </small>
					</blockquote>
				
					<blockquote>
						<p class="text-center font-a">Interweaving profession specific knowledge with interactive entertainment.</p>
						<small class="text-center">Wigu's Design Philosophy</small>
					</blockquote>
				</div>		
			</div>
			
			<div class="row rowSpacing">
				<blockquote>
					<p class="text-left ">WIGU is an acronym which stands for When I Grow Up. We're all about exploring what you want to be when you grow up, or what you wanted to be when you were growing up. It is this desire that has inspired our vision and design philosophy.</p>
				</blockquote>
			</div>
			
			
			<!-- Nav tabs -->
			<div class="row rowSpacing" role="tablist">
			  <div class="active col-sm-1 col-xs-2">
				<a href="#team-1" role="tab" data-toggle="tab"><img id="avatar-1" src="css/images/richard.png" data-toggle="popover tab" data-content="Richard" alt="Richard Sun"/></a>
				<div class ="wigu-red"></div>
			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-2" role="tab" data-toggle="tab"><img id="avatar-2" img src="css/images/joyce.png" data-toggle="popover tab" data-content="Joyce" alt="Joyce Lim"/></a>
				<div class ="wigu-red"></div>
			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-3" role="tab" data-toggle="tab"><img id="avatar-3" img src="css/images/dave.png" data-toggle="popover tab" data-content="Dave" alt="Dave Jayasingam"/></a>
				<div class ="wigu-green"></div>
			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-4" role="tab" data-toggle="tab"><img id="avatar-4" img src="css/images/hongleong.png" data-toggle="popover tab" data-content="Hong Leong" alt="Hong Leong"/></a>
				<div class ="wigu-green"></div>
 			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-5" role="tab" data-toggle="tab"><img id="avatar-5" img src="css/images/unknown.png" data-toggle="popover tab" data-content="You!" alt="You!"/></a>
				<div class ="wigu-green"></div>
 			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-6" role="tab" data-toggle="tab"><img id="avatar-6" img src="css/images/unknown.png" data-toggle="popover tab" data-content="You!" alt="You!"/></a>
				<div class ="wigu-green"></div>
 			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-7" role="tab" data-toggle="tab"><img id="avatar-7" img src="css/images/jun.png" data-toggle="popover tab" data-content="Jun" alt="Jun Fong"/></a>
				<div class ="wigu-orange"></div>
 			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-8" role="tab" data-toggle="tab"><img id="avatar-8" img src="css/images/unknown.png" data-toggle="popover tab" data-content="You!" alt="You!"/></a>
				<div class ="wigu-orange"></div>
 			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-9" role="tab" data-toggle="tab"><img id="avatar-9" img src="css/images/unknown.png" data-toggle="popover tab" data-content="You!" alt="You!"/></a>
				<div class ="wigu-orange"></div>
 			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-10" role="tab" data-toggle="tab"><img id="avatar-10" img src="css/images/unknown.png" data-toggle="popover tab" data-content="You!" alt="You!"/></a>
				<div class ="wigu-blue"></div>
 			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-11" role="tab" data-toggle="tab"><img id="avatar-11" img src="css/images/unknown.png" data-toggle="popover tab" data-content="You!" alt="You!"/></a>
				<div class ="wigu-blue"></div>
 			  </div>
			  <div class=" col-sm-1 col-xs-2">
				<a href="#team-12" role="tab" data-toggle="tab"><img id="avatar-12" img src="css/images/unknown.png" data-toggle="popover tab" data-content="You!" alt="You!"/></a>
				<div class ="wigu-blue"></div>
 			  </div>
			</div>

			<!-- Tab panes -->
			<div class="tab-content">
			  <div class="tab-pane active" id="team-1"><p>Rich is.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-2"><p>Joyce is ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-3"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-4"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-5"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-6"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-7"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-8"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-9"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-10"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-11"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  <div class="tab-pane" id="team-12"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			  
			 
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