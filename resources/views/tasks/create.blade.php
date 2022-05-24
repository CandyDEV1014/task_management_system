@extends('layout.master')

@section('title', 'Tasks Management System')

@section('content')
	<div class = "container">
		<h1> <center> Add New Task </center> </h1>
		<div class = "pull-right"> <a href = "{{ URL::to('tasks') }}"  class = "btn btn-info"> Show All Tasks </a></div>
		{{ Form::open(array('url' => 'tasks')) }}
			<div class = "form-group">
				<input value="{{ old('task_name') }}" type = "text" name = "task_name" class = "form-control" placeholder = "Task Name"/>
				@if ($errors->has('task_name'))
					<div class="alert alert-warning">
					  <strong>{{ $errors->first('task_name') }}</strong>
					</div>
				@endif
			</div>
			<div class = "form-group">
				<textarea placeholder = "Task Description" id = "task_desc" name = "task_desc" class = "form-control" rows = "5">{{ old('task_desc') }}</textarea>
				@if ($errors->has('task_desc'))
					<div class="alert alert-warning">
					  <strong>{{ $errors->first('task_desc') }}</strong>
					</div>
				@endif
			</div>
			<button type = "submit" class = "btn btn-primary"> Add New Task </button>
			<input type = "hidden" name = "_token" value = "{{ Session::token() }}"/>
		{{ Form::close() }}
	</div>
@stop
