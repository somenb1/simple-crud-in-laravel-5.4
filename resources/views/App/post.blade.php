@extends ('layouts.master')

@section ('content')
	<h1 class="text-center">View Post</h1>
	<hr/>
	<br/><br/>

	<div class="row">
		<div class="col-md-12">
			<h1>{{$post->title}}</h1>
			<br/><br/>
		</div>
		<div class="col-md-12">
			<h5>{{$post->content}}</h5>
			<br/><br/>
		</div>
		{{-- <div class="col-md-1 ">
			<a href="http://localhost/crud/public/app" class="btn btn-primary">Back</a>
			<br/><br/>
		</div> --}}
	</div>
@endsection