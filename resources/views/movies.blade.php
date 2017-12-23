@extends('layouts.master')

@section('title')
    All Movies
@endsection()

@section('content')
<div class="content">
    <div class="title m-b-md">
        Movies
    </div>

        @foreach($movies as $movie)
            <div class="jumbotron">
                <h1><a href="{{route('movie', ['id' => $movie->id])}}" > {{ $movie->title }} </a></h1>
                <p>{{ substr($movie->storyline, 0, 100)}}</p>
                <p><a href="{{route('movie', ['id' => $movie->id])}}" class="btn btn-primary btn-lg">Learn more</a></p>
            </div>

        @endforeach
</div>
@endsection()
