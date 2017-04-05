@extends ('layouts.master')


@section('jumbotron')
    
    <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Welcome to the Simple <font color="red">CRUD</font>!</h1>
        <p class="lead">This is just a simple CRUD application in Laravel.This application can Create New post | View all post | Update and Delete post.</p>
        
        {{-- <p class="lead"><a class="btn btn-lg btn-success" href="#" role="button">Know More</a></p> --}}
      </div>

@endsection

@section('content')

    <!-- Example row of columns -->
    <div class="row">   
      @foreach ($posts as $post)
        <div class="col-sm-4" style="padding: 4px;">
          <div class="card">
            <div class="card-block">
              <h3 class="card-title">{{$post->title}}</h3>
              <p class="card-text">{{$post->content}}</p>
              <a href="{{@url('app').'/'.$post->id}}" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

@endsection