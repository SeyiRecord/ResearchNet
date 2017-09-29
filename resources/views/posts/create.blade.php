@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	        	<div class="panel-body">
					<h1>Create Post</h1> 
					{!! Form::open(['url' => 'posts']) !!} 
					<div class="form-group"> 
						{!! Form::label('Title', 'Title:') !!} {!! Form::text('title',null,['class'=>'form-control']) !!} 
					</div> 
					<div class="form-group"> 
						{!! Form::label('Content', 'content:') !!} {!! Form::text('content',null,['class'=>'form-control']) !!} 
					</div> 
					<div class="form-group"> 
						{!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!} 
					</div> 
					{!! Form::close() !!} 
					@stop
				</div>
			</div>
	    </div>
	</div>