<html lang="en">

<head>
  	<meta charset="utf-8">
    <title>Computer Science department IIITDM Jabalpur</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" type="image/x-icon" href="/assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/assets/img/apple-touch-icon-144x144-precomposed.png">
    <link href="/assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet">

    <!-- CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/superfish.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/fontello/css/fontello.css" rel="stylesheet">
    <link href="/assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/js/fancybox/source/jquery.fancybox.css?v=2.1.4">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href="//cdn.shopify.com/s/files/1/0691/5403/t/121/assets/style.scss.css?3719080539427352740" rel="stylesheet" type="text/css"  media="all"  />

 </head>
  <body class="Body">
    <header>
  	<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a href="/" id="logo">Department of Computer Science & Engineering</a>
		</div>
	</div>
</div>
</header><!-- End header -->

<nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="mobnav-btn"></div>
			<ul class="sf-menu">
				<li class="normal_drop_down">
				<a href="/">Home</a>
				</li>
				<li><a href="/about-us">About Us</a></li>
				<li class="normal_drop_down">
				<a href="/programme">Programs</a>
				<div class="mobnav-subarrow"></div>
				<ul>
                	<li><a href="/programme/btech">B.Tech.</a></li>
                    <li><a href="/programme/mtech">M.Tech.</a></li>
                    <li><a href="/programme/phd">Ph.D.</a></li>
				</ul>
				</li>
				<li class="normal_drop_down">
				<a href="#">People</a>
				<div class="mobnav-subarrow"></div>
				<ul>
                	<li><a href="/faculty">Faculty</a></li>
                    <li><a href="/students">Student</a></li>
                    <li><a href="/staff">Staff</a></li>
				</ul>
				</li>
				<li class="normal_drop_down">
				<a href="/research">Research</a>
				<div class="mobnav-subarrow"></div>
				<ul>
                	<li><a href="/projects">Projects</a></li>
                	@if(isset($researchGroup))
                	@foreach ($researchGroup as $group)
						<li><a href="/research-group/{{$group->rgId}}">{{$group->name}}</a></li>		
					@endforeach
					@endif
                    <!-- <li><a href="/programme/mtech">M.Tech.</a></li> -->
                    <!-- <li><a href="/programme/phd">Ph.D.</a></li> -->
				</ul>

				</li>
				<li><a href="/facilities">Facilities</a></li>
				<li><a href="/gallery">Gallery</a></li>
				<li><a href="/news-and-events">News &amp; Events</a></li>
                <li><a href="/contact-us">Contacts</a></li>

			</ul>
            
              
		</div>
	</div><!-- End row -->
</div><!-- End container -->
</nav>
<!-- End of header -->
@yield('content')
<!-- 
<section id="testimonials">
<div class="container">
	<div class="row">
		<div class='col-md-offset-2 col-md-8 text-center'>
			<h2>What they say</h2>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-offset-2 col-md-8'>
			<div class="carousel slide" data-ride="carousel" id="quote-carousel"> -->
				<!-- Bottom Carousel Indicators -->
		<!-- 		<ol class="carousel-indicators">
					<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#quote-carousel" data-slide-to="1"></li>
					<li data-target="#quote-carousel" data-slide-to="2"></li>
				</ol> -->
				<!-- Carousel Slides / Quotes -->
				<!-- <div class="carousel-inner"> -->
					<!-- Quote 1 -->
					<!-- <div class="item active">
						<blockquote>
							<div class="row">
								<div class="col-sm-3 text-center">
									<img class="img-circle" src="/assets/img/testimonial_1.jpg" alt="">
								</div>
								<div class="col-sm-9">
									<p>
										Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!
									</p>
									<small>Someone famous</small>
								</div>
							</div>
						</blockquote>
					</div> -->
					<!-- Quote 2 -->
					<!-- <div class="item">
						<blockquote>
							<div class="row">
								<div class="col-sm-3 text-center">
									<img class="img-circle" src="/assets/img/testimonial_2.jpg" alt="">
								</div>
								<div class="col-sm-9">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.
									</p>
									<small>Someone famous</small>
								</div>
							</div>
						</blockquote>
					</div> -->
					<!-- Quote 3 -->
<!-- 					<div class="item">
						<blockquote>
							<div class="row">
								<div class="col-sm-3 text-center">
									<img class="img-circle" src="/assets/img/testimonial_1.jpg" alt="">
								</div>
								<div class="col-sm-9">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.
									</p>
									<small>Someone famous</small>
								</div>
							</div>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section> -->


<!-- Footer section -->
<footer>

<div class="container" id="nav-footer">
	<div class="row text-left">
		<div class="col-md-3 col-sm-3">
			<h4>FACULTIES</h4>
			<ul>
			
				@if(isset($faculty))
					@foreach ( $faculty as $item)
						<li><a href="/faculty/{{$item->webpage}}">{{$item->name}}</a></li>
					@endforeach
				@endif
				
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<h4>RESEARCH GROUP</h4>
			<ul>
				<li><a href="http://ive.iiitdmj.ac.in/">IMAGE AND VISION ENGINEERING GROUP</a></li>
				<li><a href="http://race.iiitdmj.ac.in/">ROBOTICS, AUTOMATION AND CONTROL ENGINEERING</a></li>
				<li><a href="http://serg.iiitdmj.ac.in/">SOFTWARE ENGINEERING RESEARCH GROUP</a></li>
				<li><a href="http://srg.iiitdmj.ac.in/">SECURITY RESEARCH GROUP</a></li>
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<h4>About IIITDM</h4>
			<ul>
				<li><a href="/about-us">About Us</a></li>
				<li><a href="/web-team">Web Team</a></li>
				<li><a href="#">Terms and conditions</a></li>
				<!-- <li><a href="#">Register</a></li> -->
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<ul id="follow_us">
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class=" icon-google"></i></a></li>
			</ul>
			<ul>
				<li><strong class="phone">+91-761 2794094</strong><br><small>Mon - Fri / 9.00AM - 05.00PM</small></li>
				<!-- <li>Questions? <a href="#">question@iiitdmj.ac.in</a></li> -->
			</ul>
		</div><!-- End col-md-4 -->
	</div><!-- End row -->
</div>
<!-- <div id="copy_right">© 1998-2014</div> -->
</footer>

<div id="toTop">Back to top</div>
<!-- JQUERY -->
<script src="/assets/js/jquery-1.10.2.min.js"></script>
<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">

		var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1700,
					startheight:600,
					hideThumbs:true,
					navigationType:"none",
					fullWidth:"on",
					forceFullWidth:"on"
				});

		});	//ready

	</script>

	<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
	</script>

<script src="/assets/js/autochange.js"></script>
<script type="text/javascript">
        autoScroll('scroll');
		 autoScroll2('scroll1');
		 autoScroll3('scroll3');
</script>
<!-- OTHER JS --> 
<script src="/assets/js/dataTables.bootstrap.min.js"></script>
<script src="/assets/js/jquery.dataTables.min.js"></script>
<script src="/assets/js/superfish.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/retina.min.js"></script>
<script src="/assets/assets/validate.js"></script>
<script src="/assets/js/jquery.placeholder.js"></script>
<script src="/assets/js/functions.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/uisearch.js"></script>
<script>new UISearch( document.getElementById( 'sb-search' ) );</script>

 <!-- FANCYBOX -->
<script  src="/assets/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="/assets/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="/assets/js/fancy_func.js" type="text/javascript"></script> 

  </body>
</html>