<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function list(){

        $movies = Movie::orderBy('id', 'desc')->get();

        $movie = Movie:: find(1);
    


        return view('listMovie', compact('movies'));
    }
}
