<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::getAllMovies();

        return view('movies',compact('movies'));
    }

    public function show($id){
        $movie = Movie::find($id);

        return view('movie',compact('movie') );
    }


}
