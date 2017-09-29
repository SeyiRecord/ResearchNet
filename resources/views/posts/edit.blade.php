@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	        	<div class="panel-body">
					{{$post->title}} <br> create by <br>
					<strong>{{$post->ownerID}}</strong>
				</div>
			</div>
	    </div>
	</div>
@endsection