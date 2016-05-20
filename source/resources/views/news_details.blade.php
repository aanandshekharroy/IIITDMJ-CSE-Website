@extends('layouts.header_footer')
@section('content')
<section id="sub-header">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center">
			<h1>News page</h1>
			
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
     @include('notices')
     </div>
     <div class="col-md-8">
            <h2>{!!$detail->title!!}</h2>
             <p>{!!$detail->description!!}</p> 
     </div><!-- End col-md-8-->   
	
  </div>  <!-- End row-->    
</div><!-- End container -->
</section>
@endsection