@extends('layouts.header_footer')
@section('content')
	@foreach ($staffData as $staff)
		<div class="row">
			<div class="col-sm-2">
				<img src="{{$staff->picture}}" width="100px" height="100px;">
			</div>
			<div class="col-sm-8">
			<b>{{$staff->name}}</b>
			<p>{{$staff->designation}}<br>{{$staff->department}}</p>
			<b>Contact : (O)</b><font>{{$staff->contact}}</font>
			</div>
		</div>
		<br>
	@endforeach
@endsection