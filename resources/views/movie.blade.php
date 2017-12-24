@extends('layouts.master')

@section('title')
    Movie
@endsection()

@section('content')
<div class="content">

    <div class="jumbotron">
        <h1>{{ $movie->title }}</h1>
        <p> Genre: {{ $movie->genre }} | {{ $movie->director}} | {{ $movie->year }}</p>
        <p>{{ $movie->storyline}}</p>

    </div>

    <!-- prikazi komentare-->
    @foreach ($movie->comments as $comment)
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">{{$comment->created_at}}</h3>
            </div>
            <div class="panel-body">
                {{$comment->content}}
            </div>
        </div>
    @endforeach

    <h2 class="blog-post-title">Add comment</h2>

    <form method="POST" action="{{ url('/comments/add/' . $movie->id) }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="content" name="content"></textarea>

            @if($errors->has('content'))
                @foreach($errors->get('content') as $error)
                    <div class="alert alert-dismissible alert-danger mt-3">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ $error }}
                    </div>
                @endforeach
            @endif()
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

</div>
@endsection()
