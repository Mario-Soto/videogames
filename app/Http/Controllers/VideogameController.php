<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = auth()->user()->videogames;
        return view('videogames.index', compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'titulo' => 'required|min:2',
            'consola' => 'required',
            'esrb' => 'size:1'
        ]);
        auth()->User()->videogames()->create([
            'titulo' => $data['titulo'],
            'consola' => $data['consola'],
            'esrb' => $data['esrb']
        ]);

        return redirect()->action('VideogameController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function show(Videogame $videogame)
    {
        return view('videogames.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function edit(Videogame $videogame)
    {
        return view('videogames.edit', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videogame $videogame)
    {
        return dd($videogame);
        $data = request()->validate([
            'titulo' => 'required|min:2',
            'consola' => 'required',
            'esrb' => 'size:1'
        ]);
        $videogame->titulo = $data['titulo'];
        $videogame->consola = $data['consola'];
        $videogame->esrb = $data['esrb'];

        $videogame->save();
        return redirect()->route('videogames.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();
        return redirect()->route('videogames.index');
    }
}
