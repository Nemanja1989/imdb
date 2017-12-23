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

    public function create(){
        return view('create',compact('create'));
    }

    public function store(Request $request){
        //validate

        $this->validate($request, ['title' => 'required',
                                   'genre' => 'required',
                                   'director' => 'required',
                                   'year'  => 'nullable|digits_between:1900,2018|numeric',
                                   'storyline' => 'max:1000']);

        Movie::create($request->all());

        //redirect to home page
        return $this->index();
    }


}
