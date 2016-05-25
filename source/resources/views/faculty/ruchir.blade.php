@extends('layouts.header_footer')
@section('content')
<section id="sub-header">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h1>Dr. Ruchir Gupta</h1>
			<p class="lead">Assistant Professor </p>
		</div>
	</div><!-- End row -->
</div><!-- End container -->
<div class="divider_top"></div>
</section><!-- End sub-header -->

<section id="main_content">

<div class="container">

<ol class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li class="active">Active page</li>
</ol>
      <div class="row">
     <aside class="col-md-4">
     	<div class=" box_style_1 profile">
		<p class="text-center"><img src="/assets/img/faculty/rgupta.jpg" alt="Teacher" class="img-circle styled"></p>
        		  <ul class="social_teacher">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class=" icon-google"></i></a></li>
                </ul>   
                 <ul>
                     <li>Name <strong class="pull-right">Ruchir Gupta</strong> </li>
                     <li>Email <strong class="pull-right">rgupta@iiitdmj.ac.in</strong></li>
                     <li>Telephone  <strong class="pull-right">+91-761-2632273(EX-134)</strong></li>
                     <li>Intranet link <strong class="pull-right"><a href="http://web.iiitdmj.ac.in/~rgupta">Click here..</a></strong></li>
                    <!-- <li>Lessons <strong class="pull-right">12</strong></li>
                     <li>Courses <strong class="pull-right">15</strong></li>-->
                </ul>
              
			</div><!-- End box-sidebar -->
     </aside><!-- End aside -->
     
     <div class="col-md-8">
     
     			<!--  Tabs -->   
                    <ul class="nav nav-tabs" id="mytabs">
                        <li class="active"><a href="#profile_teacher" data-toggle="tab">Profile</a></li>
						<li><a href="#Courses" data-toggle="tab">My Courses</a></li>
						<li><a href="#Research_Activities" data-toggle="tab">Research Activities</a></li>
						<li><a href="#Research_Publications" data-toggle="tab">Research Publications</a></li>
						<li><a href="#Study_Materials" data-toggle="tab">Study Materials</a></li>
                    </ul>
                    
                     <div class="tab-content">
                    
                        <div class="tab-pane fade in active" id="profile_teacher">
                        <h3>About me</h3>
                        <p><strong>Research Interest:  ></strong>
						<ul>
						<li>Peer-to-Peer Networks</li>
						<li>Information diffusion Algorithms</li>
						<li>Reputation Management Systems</li>
						<li>Cloud Computing</li>
						</ul></p>
                        
                     	<h4>Credentials</h4>
						<p></p>
						<div class="row">
                        	<div class="col-md-6">
                            	<ul class="list_3">
                                    <li><strong>Ph.D.</strong><p>IIT Kanpur </p></li>
                                </ul>
                            </div>
                            
                        </div><!-- End row--> 
                       </div><!-- End tab-pane --> 
                      
					   <div class="tab-pane fade in" id="Courses">
                       			<h3>Active courses</h3>
								<ol>
								<li>Computer Networks (UG)</li>
								<li>Mathematics for CS (PG) </li>
								</ol>
                       </div><!-- End tab-pane -->
					   <div class="tab-pane fade in" id="Research_Activities">
                       			<h3>Research Activities</h3>
                        		<p>
								<ol>
								<li>Development of a reputation management system for peer-to-peer networks.</li>
								<li>Development of more efficient gossip algorithm for dynamic networks.</li>
								</ol></p>
                                
                       </div><!-- End tab-pane -->
					   <div class="tab-pane fade in" id="Research_Publications">
                       			<h3>Research Publications</h3>
                        		<p>
								<ol>
								<li>Gupta, R.; Singh, Y.N., "Reputation Aggregation in Peer-to-Peer Network Using Differential Gossip Algorithm," Knowledge and Data Engineering, IEEE Transactions on , vol.PP, no.99, pp.1,1 doi: 10.1109/TKDE.2015.2427793</li>
								<li>R. Gupta and Y. N. Singh, “Reputation Based Probabilistic resource allocation for Avoiding Free Riding and Formation of Common Interest Groups in Unstructured P2P Networks”, DOI: 10.1007/s12083-015-0389-0 (Accepted for publication in Peer-to-Peer Networking and Applications - Springer)</li>
								<li>Pradumn Kumar Pandey, Bibhas Adhikari, Ruchir Gupta "Measuring diversity of network models using distorted information diffusion process" COMSNETS 2015</li>
								<li>R. Gupta, Abhijeet C. Mali and Y. N. Singh, "Adaptive Push‐Then‐Pull Gossip Algorithm for Scale‐free Networks" ICEIT Conference on Advances in Mobile Communications, Networking and Computing.</li>
								<li>R. Gupta and Y. N. Singh, “Avoiding Whitewashing in Unstructured Peer‐to‐Peer Resource Sharing Network”, (Communicated to IEEE Transaction on Knowledge and Data Engineering) (Under Revision)</li>
								<li>Ruchir Gupta, Manoj Kr. Shukla, “Performance Analysis of Tree Based Inter‐leaver with Iterative IDMA Receivers using Optimum Power Allocation Algorithm”, in the IEEE sponsored First UK‐India International Workshop onCognitive Wireless Systems (UKIWCWS 2009) held at IIT Delhi, India during December 11‐12, 2009</li>
								<li>Ruchir Gupta, Manoj Kr. Shukla, “Analysis and Design of Prime Inter‐leaver for Multiuser Iterative IDMA Systems”, in the International Conference “IEEE sponsored CICN2010</li>
								<li>Shukla, M. and Ruchir Gupta. "Performance Analysis of Optimum Inter‐leaver based on Prime Numbers for Multiuser Iterative IDMA Systems." IJITN 2.3 (2010): 51‐65</li>
								</ol></p>
                                
                       </div><!-- End tab-pane -->
					   <div class="tab-pane fade in" id="Study_Materials">
                       			<h3>Study Materials</h3>
                        		<p>Cooming Soon...</p>
                                
                       </div><!-- End tab-pane -->
                       
                  </div>   <!-- End content-->              
		
     </div><!-- End col-md-8-->   	
  </div><!-- End row-->   
</div><!-- End container -->
</section><!-- End main_content-->
@endsection