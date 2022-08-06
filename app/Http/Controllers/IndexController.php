<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function Index () {

        $data = Movie::all();


        return view('index', ["movies" => $data]);
    }
}
