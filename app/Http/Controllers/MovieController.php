<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function list(){
        $movies = Movie::all();

       

        foreach($movies as $movie) {
            echo $movie->title .' - ' . $movie->original_title .'<br>';
            

        }

        die();

    


        return view('listMovie');
    }
}
