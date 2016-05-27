@extends('layouts.header_footer')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Programme</th>
      <!-- <th>Description</th> -->
      <th>Research-Area</th>
      <th>Guide</th>
      <th>Completion</th>
      <th>Email</th>
      
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
	      
	      
        
	      
	    </tr>
	    
    @endforeach
    
  </tbody>
</table>
@endsection