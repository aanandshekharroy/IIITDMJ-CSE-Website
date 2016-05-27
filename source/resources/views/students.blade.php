@extends('layouts.header_footer')
@section('content')
<div class="container" style="margin-top:10px;">
<div class="row">
<div class="span12">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Programme</th>
      <!-- <th>Description</th> -->
      <th>Research-Area</th>
      <th>Guide</th>
      <th>Completion</th>
      <th>Email</th>
      <th>Webpage</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($students as $student)
    	<tr>
	       <td>{{$student->name}}</td>
	      <td>{{$student->programme}}</td>
	      
	      <td>{{$student->research_area}}</td>
        <td>{{$student->guide->name}}</td>
        <td>{{$student->completion_date}}</td>
        <td>{{$student->email}}</td>
	      <td>{{$student->webpage}}</td>
	      
        
	      
	    </tr>
	    
    @endforeach
    
  </tbody>
</table>
</div>
</div>
</div>
@endsection