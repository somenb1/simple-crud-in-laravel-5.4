@extends ('layouts.master')

@section('content')
	<h1 class="text-center">Edit</h1>
	<hr/>
	{{-- {{route('app.store')}}
	http://localhost/crud/public//app/store'.$post->id --}}
	<form action="{{route('app.store').'/'.$post->id}}" method="post">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group">
    			<label for="title"><h5>Title</h5></label>
    			<input type="text" class="form-control" name="title" aria-describedby="textHelp" value="{{$post->title}}">
    			{{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
  			</div>
			<div class="form-group">
		    	<label for="content"><h5>Content</h5></label>
		    	<textarea class="form-control" name="content" rows="3">{{$post->content}}</textarea>
		  	</div>
		  	{{-- <div class="form-group">
			    <label for="image">Image</label>
			    <input type="file" class="form-control-file" name="image" aria-describedby="fileHelp">
			    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
		  	</div> --}}
		  	<button type="submit" class="btn btn-primary">Upade</button>
		  	<a href="{{@url('app/manage')}}" class="btn btn-danger">Cancel</a>
	</form>
@endsection