<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index (){

        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function about(){

        return view('about');
    }

    public function details($id){


        $movie = Movie::find($id);

        if(is_null($movie)){
            abort(404, 'Film non presente nel database');
        }

        return view('detail', compact('movie'));
    }
}
