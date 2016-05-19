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
     	<div class="col-md-4">
      <div class=" box_style_1">                
        <div class="widget">
          <h4>NOTICES</h4>
                    
          <ul class="recent_post">
          @if( isset($notices))
            @foreach($notices as $notice)
            <li>
              <i class="icon-calendar-empty"></i>{{ date('F d, Y', strtotime($notice->created_at)) }}
              <div>
                <a href="{{$notice->url}}"> {{$notice->title}}</a>
              </div>
            </li>
            @endforeach           
          @endif
          </ul>
          
        </div><!-- End widget -->
        
      </div><!-- End box-sidebar -->
     </div>
     <div class="col-md-8">
            <h2>{!!$detail->title!!}</h2>
             <p>{!!$detail->description!!}</p> 
     </div><!-- End col-md-8-->   
	
  </div>  <!-- End row-->    
</div><!-- End container -->
</section>
@endsection