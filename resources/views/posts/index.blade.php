@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	        	<div class="panel-body">
						<h1>Blog</h1> 
						<a href="{{url('/posts/create')}}" class="btn btn-success">Create Post</a> 
						<hr> 
						<table class="table table-striped table-bordered table-hover"> 
							<thead> 
								<tr class="bg-info"> 
									<th>Id</th> 
									<th>Owner ID</th> 
									<th>Title</th> 
									<th>Content</th> 
									<th colspan="3">Actions</th> 
								</tr> 
							</thead> 
							<tbody> 
								@foreach ($posts as $post) 
								<tr> 
									<td>{{ $post->id }}</td> 
									<td>{{ $post->ownerID }}</td> 
									<td>{{ $post->title }}</td> 
									<td>{{ $post->content }}</td> 
									<td><a href="{{url('posts',$post->id)}}" class="btn btn-primary">Read</a></td> 
									<td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Update</a></td>
									<td> {!! Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id]]) !!} {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} {!! Form::close() !!} </td> 
								</tr> 
								@endforeach 
							</tbody> 
						</table>
				</div>
			</div>
	    </div>
	</div>
@endsection