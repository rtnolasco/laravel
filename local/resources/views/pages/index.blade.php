
@extends('main')
@section('title', ' | Homepage')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a mi eget ligula feugiat euismod. Sed tincidunt efficitur mi, id finibus ligula condimentum in. Integer tortor ligula</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div> 
                <!-- <div class="item">
                  <img src="..." alt="...">
                  <div class="carousel-caption">
                    <h3>...</h3>
                    <p>...</p>
                  </div>
                </div> -->

          </div> 
    </div><!-- end of header row -->

        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)

                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." :"" }}</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                    <hr>
                @endforeach

            </div>

        

        <div class="col-md-3 col-md-offset-1" style="color=red;">
            <h3>Sidebar</h3> 
        </div>
    </div>
@endsection