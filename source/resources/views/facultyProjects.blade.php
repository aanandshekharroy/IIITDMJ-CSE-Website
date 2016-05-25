@extends('layouts.header_footer')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th>Faculty</th>
      <th>Project</th>
      <th>Description</th>
      <th>Start date</th>
      <th>End date</th>
      <th>Funding agency</th>
      <th>Principle Investigator</th>
      <th>Co-Principle Investigator</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($projects as $project)
    	<tr>
	      <!-- <th scope="row">{{$project->pName}}</th> -->
	      <td>{{$project->faculty->name}}</td>
	      <td>{{$project->pName}}</td>
	      <td>{{$project->description}}</td>
	      <td>{{$project->start_date}}</td>
	      <td>{{$project->end_date}}</td>
	      <td>{{$project->funding_agency}}</td>
	      <td>{{$project->PI}}</td>
	      <td>{{$project->co_PI}}</td>
	      <td>{{$project->status}}</td>
	      
	    </tr>
	    
    @endforeach
    
  </tbody>
</table>
@endsection