<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $movies = Movie::All();

        // dd($movies);

        return view('pages.home', compact('movies'));
    }
}
