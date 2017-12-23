@extends('layouts.master')

@section('title')
    Movie
@endsection()

@section('content')
<div class="content">

    <div class="jumbotron">
        <h1>{{ $movie->title }}</h1>
        <p> Genre: {{ $movie->genre }} | {{ $movie->director}} | {{ $movie->year }}</p>
        <p>{{ $movie->storyline, 0, 100}}</p>

    </div>

</div>
@endsection()
