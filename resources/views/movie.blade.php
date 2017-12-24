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
    @foreach ($comments as $comment)
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">{{$comment->created_at}}</h3>
            </div>
            <div class="panel-body">
                {{$comment->content}}
            </div>
        </div>
    @endforeach

</div>
@endsection()
