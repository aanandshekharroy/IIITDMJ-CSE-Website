@extends('layouts.header_footer')
@section('content')
<div class="container" style="margin-top:10px;">
<div class="row">
<div class="span12">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
    <tr>
      <th>Faculty</th>
      <th>Project</th>
      <!-- <th>Description</th> -->
      <th>Starting</th>
      <th>Ending</th>
      <th>Funding agency</th>
      <th>Funding amount</th>
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
	      
	      <td>{{$project->start_date}}</td>
	      <td>{{$project->end_date}}</td>
	      <td>{{$project->funding_agency}}</td>
        <td>{{$project->funding_amount}}</td>
	      <td>{{$project->PI}}</td>
	      <td>{{$project->co_PI}}</td>
	      <td>{{$project->status}}</td>
	      
	    </tr>
	    
    @endforeach
    
  </tbody>
</table>
</div>
</div>
</div>
@endsection