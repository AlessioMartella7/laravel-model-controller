<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        // recupero i dati dal DB
        $movies = Movie::all();
        return view('movies.index');

    }
}
