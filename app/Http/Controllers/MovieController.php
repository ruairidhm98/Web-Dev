<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MovieController extends Controller
{

    // power our /movies page
    function index() 
    {

        $movies = \App\Movie::all();
        return view('fun.movies', ['all_movies' => $movies ]);

    }

}