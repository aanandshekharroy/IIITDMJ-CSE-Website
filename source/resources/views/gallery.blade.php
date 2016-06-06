@extends('layouts.header_footer')
@section('content')
<section id="gallery">
	<div class="container">
		<div class="row">
			@if(isset($images))
				@foreach ($images as $image)
				<div class="col-md-3 col-sm-3 col-xs-6 picture">
					<a href="{{$image->picUrl}}" title="Title" class="fancybox" rel="gallery1" >
					
					<img src="{{$image->picUrl}}" alt="" class="img-responsive">
					</a>
				</div>
				@endforeach
			@endif
		</div>
	</div>
</section>
<!-- <script src="/assets/js/lightbox-plus-jquery.min.js"></script> -->
@endsection