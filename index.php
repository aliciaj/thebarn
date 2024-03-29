<?php 
if(!empty($_POST)){
	 
	if(isset($_POST['contact'])){
	
		
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$to = 'aliciaj.com' . ', ';
		$to .= $email;
		
		$subject = "$name has contacted you through The Barn.";
		
		$error_list = array();
		
		if(empty($error_list)){
			$message .= "\t Name: $name \n"; 
			$message .= "\t Email: $email \n"; 
			$message .= "\t Comments: $message \n";
			
			//echo $message;
			$mail = @mail($to, $subject, $message);
			if($mail){
				//echo "yay contact sent";
			}else{
				//echo "not sending email";
			}//mail sent
		}else{
			//echo "error";
		}//empty error list

	}else{
		//echo "nothing was sent";
	}//isset contact	
}//if post
?>

<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>The Barn</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/style.css?v=2">
  
  
 

</head>

<body>

  <div id="container">
    <header>
		<h1 class="ir">The Barn in St. Joe</h1>
		
		<nav>
			<ul>
				<li><a href="#about" title="About" class="active">About</a></li>
				<li><a href="#schedstart" title="Schedule">Schedule</a></li>
				<li><a href="#contact" id="various1">Contact</a></li>
			</ul>
		</nav>
    </header>
    
    <div id="main" role="main">

		<a name="about"></a>
		<section id="aboutIntro">
			<img src="img/thebarn.jpg" alt="the barn sign small"/>
			<!-- <h2>The Barn</h2> -->
			<p>"What more could any musician or music lover hope for than an off-the-beaten-path venue where the atmosphere is perfectly peculiar, the talent is tremendous, the acoustics are unbelievable and there's a couch for the first 25 people through the door? Seriously, The Barn is our favorite place to play. Clay is the nicest guy you'll every meet and the venue and the crowd are a musician's dream. I can't wait to come back."</p><p>Rebecca (The Surrendering)</p>
		</section>
		
		
		<section name="testing">
			<h2>Testing here</h2>
			<p data-bind="text: quoter"></p>
		</section>
		
		
		<section id="aboutQuotes"> 
			<div class="openquote"></div>
				<div id="slides">
					<div class="slides_container">
						<div>
							<blockquote>
								Well shucks� What can I say? The Barn was one of my first gigs and it continues to be my favorite. Very professional. I have never had a problem sound-wise or schedule-wise.
							</blockquote>
							
							<span>Derek Schwartz</span>	
						</div>
						<div>
							<blockquote>
								I've seen my fair share of venues in my day, and I must say the barn has and forever will be my favorite. Its the perfect size, intimate when seen fit, and epic when seen fit. The variety of musicians is splendid and every show is followed by a stellar incomparable rave of incredibility. The Barn is just plain perfect.
							</blockquote>
							
							<span>Laurel Dispenza</span>	
						</div>
						<div>
							<blockquote>
								The Barn has a loyal and great turnout at every show� true music lovers.
							</blockquote>
							
							<span>Ben Elder</span>	
						</div>
						<div>
							<blockquote>
								I loved the mellow environment, but how it was also welcoming to our rock style and attitude.
							</blockquote>
							
							<span>Dylan (The Surrendering)</span>	
						</div>
					</div><!-- end slides_container -->
					<a href="" title="" class="prev ir">back</a>
					<a href="" title="" class="next ir">next</a>
				</div><!-- end slides --> 
			
			<div class="closequote"></div>
		</section>

		<a name="schedstart"></a>
		<section id="schedule">
		
			<article id="nextshow">
<!-- 				<p class="countdown">10 days 12 hours</p> -->
				<div id="countbox1" class="countdown"></div>
				
				<p class="date">7:00 p.m. Friday, October 7th</p>
				
				<p>
					<ul>
						<li><a href="http://www.facebook.com/thegreatfloodcatastrophe" title="The Great Flood Catastrophe">The Great Flood Catastrophe</a></li>
						<li><a href="http://www.facebook.com/pages/Part-Time-Hero/304957052063" title="Part-Time Hero">Part-Time Hero</a></li>
						<li><a href="http://www.facebook.com/mileshigh2010" title="Miles High">Miles High</a></li>
						<li><a href="http://www.facebook.com/desertneighbor" title="Desert Neighbor">Desert Neighbor</a></li>
					</ul>
				</p>
			</article>
			
			<!--
<article id="followingShow">
				
				
			</article>
-->
		
		</section>
    </div>
    
    <div class="picturereel">
    	<ul>
    		<li><a rel="example_group" href="img/full/full_1.jpg" title=""><img src="img/mini/mini_1.jpg" alt=""/></a></li>
    		<li><a rel="example_group" href="img/full/full_2.jpg" title=""><img src="img/mini/mini_2.jpg" alt=""/></a></li>
    		<li><a rel="example_group" href="img/full/full_3.jpg" title=""><img src="img/mini/mini_3.jpg" alt=""/></a></li>
    		<li><a rel="example_group" href="img/full/full_4.jpg" title=""><img src="img/mini/mini_4.jpg" alt=""/></a></li>
    		<li><a rel="example_group" href="img/full/full_5.jpg" title=""><img src="img/mini/mini_5.jpg" alt=""/></a></li>
    		<li><a rel="example_group" href="img/full/full_6.jpg" title=""><img src="img/mini/mini_6.jpg" alt=""/></a></li>
    		<li><a rel="example_group" href="img/full/full_7.jpg" title=""><img src="img/mini/mini_7.jpg" alt=""/></a></li>
    		<li><a rel="example_group" href="img/full/full_8.jpg" title=""><img src="img/mini/mini_8.jpg" alt=""/></a></li>
    	</ul>
    </div>
    
    
    <!-- <a id="various1" href="#inline1" title="Lorem ipsum dolor sit amet">Inline</a> -->
    <div style="display: none;">
		<div id="contact" style="width:400px;height:250px;">
			<h3>Contact Clay at The Barn</h3>
			<form action="index.php" method="post" id="contactform">
				<fieldset>
					<ul>
						<li>
							<input id="fullname" name="fullname" type="text" value="Full Name" />
							<input type="hidden" name="contact" value="contact"/>
						</li>
						<li>
							<input id="email" name="email" type="text" value="Email" />
						</li>
						<li>
							<textarea id="message" name="message"></textarea>
						</li>
					</ul>
					<input type="submit"/>
				</fieldset>
			</form>
		</div>
	</div>

    
    
    <footer>
		<p>&copy; Copyright thebarninstjoe.com 2011</p>
			
		<nav class="social">
			<ul>
				<li><a href="http://g.co/maps/erzr" title="Find the Barn" class="google ir" target="_blank">Find The Barn</a></li>
				<li><a href="http://www.facebook.com/pages/The-Barn/345045285102" title="The Barn on Facebook" class="facebook ir" target="_blank">Like The Barn on Facebook!</a></li>
				<!-- <li><a href="" title="Follow the Barn" class="twitter ir" target="_blank">Follow The Barn on Twitter</a></li> -->
			</ul>
		</nav>
		
    </footer>
  </div> <!-- eo #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>

<script src="js/libs/modernizr-1.7.min.js"></script>
  <script src="js/slides.min.jquery.js"></script>
  
  <!-- fancybox -->
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->
  
  <!-- scripts for knockout js -->
	<script src="js/jquery.tmpl.js"></script>  
    <script src="js/knockout-2.0.0.js"></script>  
    <script src="js/behavior.js"></script>


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->



  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>
  
   <script type="text/javascript">
  	
	$(function(){
		$('#slides').slides({
			preload: true,
			//play: 5000,
			hoverPause: true,
			generatePagination: false,
			autoHeight: true,
			effect: 'fade'
		});
		
		$("#various1").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'titleShow': 'false'
		});
		
		$("a[rel=example_group]").fancybox({
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'titlePosition' 	: 'over',
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
				return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
			}
		});
	});
  </script>

</body>
</html>