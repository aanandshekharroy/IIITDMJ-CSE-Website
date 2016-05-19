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
     	@if(isset($newsData))
     		@foreach ($newsData as $data)
     			<div class="media list_news">
                   <div class="circ-wrapper pull-left">
                   <h3>{{$data->created_at->day}}<br>{{date("F", mktime(0, 0, 0, $data->created_at->month, 10))}}</h3></div>
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
   	</div><!-- End col-md-8-->   
    
  </div>  <!-- End row-->    
</div><!-- End container -->
</section><!-- End main_content-->

@endsection