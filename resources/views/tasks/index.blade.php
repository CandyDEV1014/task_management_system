@extends('layout.master')

@section('title', 'Tasks Management System')

@section('content')
	<div class = "container">
		<h1> <center> Task Management System </center> </h1>
		<div class = "pull-right"> <a href = "{{ URL::to('tasks/create') }}"  class = "btn btn-info"> Add New Task </a> </div>
		<!-- will be used to show any messages -->
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		<table class = "table">
			<tr>
				<th> Name </th>
				<th> Description </th>
				<th> Date Created </th>
				<th> Date Modified </th>
				<th> Action </th>
			</tr>
			@if(count($tasks) > 0)
					@foreach($tasks as $task)
						<tr>
							<td> {{ $task->name or ''}} </td>
							<td> {{ $task->description or '' }} </td>
							<td> {{ date('F j, Y, g:i a', strtotime($task->dateCreated)) }} </td>
							<td> {{ date('F j, Y, g:i a', strtotime($task->dateUpdated)) }} </td>
							<td> <a href = "{{ URL::to('tasks/' . $task->id . '/edit') }}" class = "btn btn-info"> Edit </a> &nbsp;&nbsp;&nbsp; / {{ Form::open(array('url' => 'tasks/' . $task->id, 'class' => 'pull-right')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
							{{ Form::close() }}
							<!--<a href = "{{ URL::to('tasks/' . $task->id) }}" class = "btn btn-danger"> Delete </a>--> </td>
						</tr>
					@endforeach
			@else
					<tr>
						<td> No Record Found </td>
					</tr>
			@endif
		</table>
	</div>
@stop