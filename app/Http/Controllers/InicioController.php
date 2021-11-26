<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $videogames = Videogame::all();
        return view('index', compact('videogames'));
    }
}
