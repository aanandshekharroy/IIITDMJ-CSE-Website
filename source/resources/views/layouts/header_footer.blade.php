<html lang="en">

<head>
  	<meta charset="utf-8">
    <title>LEARN - Courses, Education site template</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" type="image/x-icon" href="/assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/assets/img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/superfish.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/fontello/css/fontello.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    

  </head>
  <body>
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
				<a href="index.php">Home</a>
				</li>
				<li class="normal_drop_down">
				<a href="program.php">Programs</a>
				<div class="mobnav-subarrow"></div>
				<ul>
                	<li><a href="btech.php">B.Tech.</a></li>
                    <li><a href="mtech.php">M.Tech.</a></li>
                    <li><a href="phd.php">Ph.D.</a></li>
				</ul>
				</li>
				<li class="normal_drop_down">
				<a href="#">People</a>
				<div class="mobnav-subarrow"></div>
				<ul>
                	<li><a href="courses_grid.html">Faculty</a></li>
                    <li><a href="students">Student</a></li>
                    <li><a href="staff">Staff</a></li>
				</ul>
				</li>
				<li><a href="research">Research</a></li>
				<li><a href="blog.html">Facilities</a></li>
				<li><a href="blog.html">Gallery</a></li>
                <li class="mega_drop_down">
				<a href="#">Pages (Megamenu)</a>
                <div class="mobnav-subarrow"></div>
                <div class="sf-mega">
                	<div class="col-md-4 col-sm-6">
                    	<h5>Communicate</h5>
                            <ul class="mega_submenu">
                            	<li><a href="about_us.html">About us</a></li>
								<li><a href="teachers.html">Teachers</a></li>
                                <li><a href="teacher_profile.html">Teacher profile</a></li>
                                <li><a href="member_profile.html">Member profile</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="news-and-events">News &amp; Events</a></li>
                            </ul>
                    </div>
                  <div class="col-md-4 col-sm-6">
                   <h5>Other pages</h5>
                          <ul class="mega_submenu">
                           	  <li><a href="apply.html">PHP working wizard apply</a></li>
                              <li><a href="apply_2.html">PHP working apply</a></li>
                              <li><a href="login.html">Login</a></li>
                              <li><a href="register.html">Register</a></li>
                              <li><a href="shortcodes.html">Shortcodes</a></li>
                              <li><a href="gallery.html">Photo &amp; video gallery <img src="img/new.png" alt=""></a></li>
                          </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <h5>Submenu with icons</h5>
                            <ul class="mega_submenu icons">
                            	<li><a href="#"> Downloads<i class="icon-download"></i></a></li>
                                <li><a href="#">Video files <i class="icon-video"></i></a></li>
                                <li><a href="#">Audio files <i class="icon-mic"></i></a></li>
                                <li><a href="#">Members <i class="icon-user"></i></a></li>
                            </ul>
                    </div>
                </div>
                </li>
				<li><a href="contacts.html">Contacts</a></li>
			</ul>
            
              
		</div>
	</div><!-- End row -->
</div><!-- End container -->
</nav>
<!-- End of header -->
@yield('content')




<!-- Footer section -->
<footer>

<div class="container" id="nav-footer">
	<div class="row text-left">
		<div class="col-md-3 col-sm-3">
			<h4>FACULTIES</h4>
			<ul>
				<li><a href="prices_plans.html">Prof. Aprajita Ojha</a></li>
				<li><a href="courses_grid.html">Dr. Pritee Khanna</a></li>
				<li><a href="blog.html">Dr. Atul Gupta</a></li>
				<li><a href="contacts.html">Dr. Sraban Mohanty</a></li>
				<li><a href="courses_grid.html">Dr. Vinod Kumar Jain</a></li>
				<li><a href="blog.html">Dr. Manish Kumar Bajpai</a></li>
				<li><a href="contacts.html">Dr. Ruchir Gupta</a></li>
				<li><a href="blog.html">Mr. Ayan Seal</a></li>
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<h4>RESEARCH GROUP</h4>
			<ul>
				<li><a href="course_details_1.html">IMAGE AND VISION ENGINEERING GROUP</a></li>
				<li><a href="course_details_2.html">ROBOTICS, AUTOMATION AND CONTROL ENGINEERING</a></li>
				<li><a href="course_details_2.html">SOFTWARE ENGINEERING RESEARCH GROUP</a></li>
				<li><a href="course_details_3.html">SECURITY RESEARCH GROUP</a></li>
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<h4>About IIITDM</h4>
			<ul>
				<li><a href="about_us.html">About Us</a></li>
				<li><a href="apply_2.html">Web Team</a></li>
				<li><a href="#">Terms and conditions</a></li>
				<li><a href="register.html">Register</a></li>
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<ul id="follow_us">
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class=" icon-google"></i></a></li>
			</ul>
			<ul>
				<li><strong class="phone">+91-761-2632273</strong><br><small>Mon - Fri / 9.00AM - 05.00PM</small></li>
				<li>Questions? <a href="#">question@iiitdmj.ac.in</a></li>
			</ul>
		</div><!-- End col-md-4 -->
	</div><!-- End row -->
</div>
<div id="copy_right">© 1998-2014</div>
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

<!-- OTHER JS --> 
<script src="/assets/js/superfish.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/retina.min.js"></script>
<script src="/assets/assets/validate.js"></script>
<script src="/assets/js/jquery.placeholder.js"></script>
<script src="/assets/js/functions.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/uisearch.js"></script>
<script>new UISearch( document.getElementById( 'sb-search' ) );</script>

  </body>
</html>