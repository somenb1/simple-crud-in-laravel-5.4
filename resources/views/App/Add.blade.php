@extends('layouts.master');

@section('content')
	
		<h1 class="text-center">Add New Post</h1>
		<hr><br/>

		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		{{-- {{route('store')}} --}}
		<form action="{{route('app.store')}}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
    			<label for="title"><h5>Title</h5></label>
    			<input type="text" class="form-control" name="title" aria-describedby="textHelp" placeholder="Post's Title">
  			</div>
			<div class="form-group">
		    	<label for="content"><h5>Content</h5></label>
		    	<textarea class="form-control" name="content" rows="3" placeholder="Post's Content"></textarea>
		  	</div>
		  	{{-- <div class="form-group">
			    <label for="image">Image</label>
			    <input type="file" class="form-control-file" name="image" aria-describedby="fileHelp">
			    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
		  	</div> --}}
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<br/> <br/>
@endsection