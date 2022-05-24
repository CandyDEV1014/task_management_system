@extends('layout.master')

@section('title', 'Tasks Management System')

@section('content')
	<div class = "container">
		<h1> <center> Edit The Task </center> </h1>
		<div class = "pull-right"> <a href = "{{ URL::to('tasks') }}"  class = "btn btn-info"> Show All Tasks </a></div>		
		{{ Form::model($task, array('route' => array('tasks.update', $task->id), 'method' => 'PUT')) }}
			<div class = "form-group">
				<input placeholder = "Task Name" type = "text" name = "task_name" class = "form-control" value = "{{ $task->name or '' }}"/>
				@if ($errors->has('task_name'))
					<div class="alert alert-warning">
					  <strong>{{ $errors->first('task_name') }}</strong>
					</div>
				@endif
			</div>
			<div class = "form-group">
				<textarea placeholder = "Task Description" id = "task_desc" name = "task_desc" class = "form-control" rows = "5">{{ $task->description or '' }}</textarea>
				@if ($errors->has('task_desc'))
					<div class="alert alert-warning">
					  <strong>{{ $errors->first('task_desc') }}</strong>
					</div>
				@endif
			</div>
			<button type = "submit" class = "btn btn-primary"> Edit Task </button>
			<input type = "hidden" name = "_token" value = "{{ Session::token() }}"/>
		{{ Form::close() }}
	</div>
@stop