@extends('layouts/app')

@section('content')
<h1 class="mb-4">Bienvenido a tu rincón de videojuegos</h1>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
    @foreach ($videogames as $videogame)
    <div class="col mb-2">
        <div class="card h-100 border-dark">
            <div class="card-header bg-info text-center">
                <h4 class="card-title">{{ $videogame->titulo }}</h4>
            </div>
            <div class="card-body bg-transparent border-dark">
                <h5 class="card-subtitle text-muted text-center">{{ $videogame->consola }}</h5>
                <p class="card-text mt-2">Clasificación: {{ $videogame->esrb }}</p>
            </div>
            <div class="card-footer text-center bg-transparent border-dark">
                <a href="{{ route('videogames.show', ['videogame' => $videogame->id]) }}" class="card-link">Ver...</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection