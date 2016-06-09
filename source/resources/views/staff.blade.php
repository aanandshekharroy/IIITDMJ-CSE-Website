@extends('layouts.header_footer')
@section('content')

<div class="container" style="margin-top:10px;">
<div class="row">
<div class="span12">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th>Photo</th>
      <th>Name</th>
      <th>Designation</th>
      <!-- <th>Description</th> -->
      <th>Department</th>
      <th>Contact</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($staffData as $staff)
    	<tr>
    	<td>
    	<img src="{{$staff->picture}}" class="img-thumbnail" style="height:100px;width:100px;"></td>
	       <td>{{$staff->name}}</td>
	      <td>{{$staff->designation}}</td>
	      
	      <td>{{$staff->department}}</td>
	      <td>{{$staff->contact}}</td>
        
	      
	    </tr>
	    
    @endforeach
    
  </tbody>
</table>
</div>
</div>
</div>
@endsection