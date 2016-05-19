@extends('layouts.header_footer')
@section('content')

<section id="sub-header">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h1>News page</h1>
			<p class="lead boxed ">Ex utamur fierent tacimates duis choro an</p>
			<p class="lead">
				Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. 
			</p>
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
     @include('notices')
     
     <div class="col-md-8">
     	@if(isset($newsData))
     		@foreach ($newsData as $data)
     			<div class="media list_news">
                   <div class="circ-wrapper pull-left">
                   <h3>15<br>July</h3></div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="news-and-events/{{$data->id}}">{!!$data->title!!}</a></h4>
                         {{--*/ $description = str_limit($data->description, 350, '...') /*--}}
                         <p>{!!$description!!}</p>
                      	<!-- <small><em>Posted By Admin</em></small> -->
                      </div>
         		</div>
     		@endforeach
     		{!! $newsData->render() !!}
     	@endif
        <!-- <div class="media list_news">
                   <div class="circ-wrapper pull-left">
                   <h3>15<br>July</h3></div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="news_detail.html">Ne nisl idque fierent vix</a></h4>
                         <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset vituperatoribus, tation tritani prodesset ex sed. </p>
                      	<small><em>Posted By Admin</em></small>
                      </div>
         </div>
         <div class="media list_news">
                   <div class="circ-wrapper pull-left"><h3>10<br>July</h3></div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="news_detail.html">Simul appellantur reprehendunt mea an</a></h4>
                         <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset vituperatoribus, tation tritani prodesset ex sed. </p>
                      	<small><em>Posted By Mike</em></small>
                      </div>
         </div>
         <div class="media list_news">
                   <div class="circ-wrapper pull-left"><h3>27<br>Aug</h3></div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="news_detail.html">Ne nisl idque fierent vix</a></h4>
                         <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset vituperatoribus, tation tritani prodesset ex sed. </p>
                      	<small><em>Posted By Admin</em></small>
                      </div>
         </div>
         <div class="media list_news">
                   <div class="circ-wrapper pull-left"><h3>12<br>Aug</h3></div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="news_detail.html">At mei sumo sonet audiam, ad mutat elitr platonem vix</a></h4>
                         <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset vituperatoribus, tation tritani prodesset ex sed. </p>
                      	<small><em>Posted By Mike</em></small>
                      </div>
         </div>
         <div class="media list_news">
                   <div class="circ-wrapper pull-left"><h3>05<br>Aug</h3></div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="news_detail.html">An gloriatur vulputate eos.</a></h4>
                         <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset vituperatoribus, tation tritani prodesset ex sed. </p>
                      	<small><em>Posted By Lucas</em></small>
                      </div>
         </div>
         <div class="media list_news">
                   <div class="circ-wrapper pull-left"><h3>20<br>June</h3></div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="news_detail.html">Simul appellantur reprehendunt mea an</a></h4>
                         <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset vituperatoribus, tation tritani prodesset ex sed. </p>
                      	<small><em>Posted By Marc</em></small>
                      </div>
         </div>
     
                
				<hr>
                
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul><!-- end pagination-->
                <!-- </div>  -->
     	</div><!-- End col-md-8-->   
    
   	</div>  <!-- End row-->    
</div><!-- End container -->
</section><!-- End main_content-->

@endsection