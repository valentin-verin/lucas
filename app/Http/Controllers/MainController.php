<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index() {
        $albums = Album::all();
        return view("index", ['albums' => $albums]);
    }
}
