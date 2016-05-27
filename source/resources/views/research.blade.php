@extends('layouts.header_footer')
@section('content')
<section id="sub-header">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h1>Research and Development</h1>
		</div>
	</div><!-- End row -->
</div><!-- End container -->
<div class="divider_top"></div>
</section><!-- End sub-header -->

<section id="main_content">

<div class="container">

	<div class="row">
		@if(isset($researchDetail))
			<div class="col-md-12">
	     		<div class="post">
					
					<div class="post_info clearfix">
						<div class="post-left">
							<ul>
								<li><i class="icon-calendar-empty"></i>On <span>{{$researchDetail->created_at->format('d-m-Y')}}</span></li>
								<li><i class="icon-user"></i>By <a href="#">{{$researchDetail->student->name}}</a></li>
								<li>Guide:  <a href="/faculty/{{$researchDetail->faculty->webpage}}">{{$researchDetail->faculty->name}}</a></li>
								<li><i class="icon-tags"></i>Tag: 
									<a href="/research-group/{{$researchDetail->researchGroup->rgId}}">{{$researchDetail->researchGroup->name}}</a>
								</li>

							</ul>
						</div>
						
					</div>
					<h2>{{$researchDetail->title}}</h2>
					<p>
						
						{{$researchDetail->content}}
						
					</p>
				</div><!-- end post -->
	                
	     	</div>
		@elseif(isset($research))
			@foreach ($research as $item)
			<div class="col-md-12">
	     		<div class="post">
					<a href="/research/{{$item->rId}}" ><img src="img/blog-3.jpg" alt="" class="img-responsive"></a>
					<div class="post_info clearfix">
						<div class="post-left">
							<ul>
								<li><i class="icon-calendar-empty"></i>On <span>{{$item->created_at->format('d-m-Y')}}</span></li>
								<li><i class="icon-user"></i>By <a href="#">{{$item->student->name}}</a></li>
								<li>Guide:  <a href="/faculty/{{$item->faculty->webpage}}">{{$item->faculty->name}}</a></li>
								<li><i class="icon-tags"></i>Tag: 
									<a href="/research-group/{{$item->researchGroup->rgId}}">{{$item->researchGroup->name}}</a>
								</li>

							</ul>
						</div>
						
					</div>
					<h2><a href="#" title="single_post.html">{{$item->title}}</a></h2>
					<p>
						{{-- */$description=str_limit($item->content,350,'...')/* --}}
						{{$description}}
						
					</p>
					<a href="/research/{{$item->rId}}" class="button_medium" >Read more</a>
				</div><!-- end post -->
	                
	     	</div>
			@endforeach
		@endif
     	
     <!-- End col-md-8-->   
  	</div>  <!-- End row-->    
</div><!-- End container -->
</section><!-- End main_content-->

@endsection