@extends('layouts.header_footer')
@section('content')
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="420" src="https://maps.google.com/maps?hl=en&q=IIITDMJ &ie=UTF8&t=roadmap&z=10&iwloc=B&output=embed" frameborder="0" onload="document.getElementById('loadImg').style.display='none';">
				<div>
					<small>
						<a href="http://embedgooglemaps.com">
						embed google map
						</a>
					</small>
				</div>
				<div>
					<small>
						<a href="http://googlemapsgenerator.com">google maps html code
						</a>
					</small>
				</div>
				</iframe>
  <!--<section id="map"></section>-- end map-->
  <section id="directions">
  	<div class="container">
    	<div class="row">
        <div class="col-md-8 col-md-offset-2">
       <form action="http://maps.google.com/maps" method="get" target="_blank">
				<div class="input-group">
					<input type="text" name="saddr" placeholder="Enter your starting point" class="form-control style-2" />
					<input type="hidden" name="daddr" value="PDPM IIITDM, Jabalpur"/><!-- Write here your end point -->
					<span class="input-group-btn">
					<button class="btn" type="submit" value="Get directions" style="margin-left:0;">GET DIRECTIONS</button>
					</span>
				</div><!-- /input-group -->
			</form>
          </div>
        </div>
    </div>
  </section>
  
<section id="main_content" >
<div class="container">
<div class="row">
	<div class="col-md-4">
		<h3>Address</h3>
		<ul id="contact-info">
			<li><i class="icon-home"></i>Computer Science & Engineering Department<br>
			Pandit Dwarka Prasad Mishra<br>
Indian Institute of Information Technology,<br>
Design & Manufacturing Jabalpur<br>
Dumna Airport Road,<br>
P.O.: Khamaria,<br>
Jabalpur - 482 005,<br>
Madhya Pradesh, India</li>
<li><i class="icon-phone"></i>Tel: +91-761 2794094 Fax: +91-761-2632524</li>
			<!--<li><i class=" icon-email"></i> <a href="#">info@domain.com</a></li>-->
		</ul>
		<hr>
		
	</div>
	<div class="col-md-8">
		<div class=" box_style_2">
			<span class="tape"></span>
			<div class="row">
				<div class="col-md-12">
					<h3>General Enquire</h3>
				</div>
			</div>
			<div id="message-contact"></div>
			<form method="POST" action="{{ url('/contact-us')}}" id="">
			<input type="hidden" class="_token" name="_token" value="{{{csrf_token()}}}">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control style_2" id="name_contact" name="first_name" placeholder="Enter Name">
                            <span class="input-icon"><i class="icon-user"></i></span>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control style_2" id="lastname_contact" name="last_name" placeholder="Enter Last Name">
                            <span class="input-icon"><i class="icon-user"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<input type="email" id="email_contact" name="email" class="form-control style_2" placeholder="Enter Email">
                            <span class="input-icon"><i class="icon-email"></i></span>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<input type="text" id="phone_contact" name="phone" class="form-control style_2" placeholder="Enter Phone number">
                            <span class="input-icon"><i class="icon-phone"></i></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<textarea rows="5" id="message_contact" name="message" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- <input type="text" id="verify_contact" class=" form-control" placeholder="Are you human? 3 + 1 ="> -->
						<input type="submit" value="Submit" class=" button_medium" id=""/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</section>
@endsection