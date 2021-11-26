@extends('layouts.app')

@section('botones')
<a href="{{ route('videogames.index') }}" class="btn btn-primary mr-2">Regresar</a>
@endsection

@section('content')
<h2 class="text-center mb-3">Nuevo videojuego</h2>
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <form action="{{ route('videogames.store') }}" method="post" novalidate>
            @csrf
            <div class="form-group">
                <label for="titulo">Título del videojuego</label>
                <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror"
                    placeholder="Título del videojuego" value="{{ old('titulo') }}">
                @error('titulo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="consola">Consola</label>
                <input type="text" name="consola" id="consola"
                    class="form-control @error('consola') is-invalid @enderror" placeholder="Marca de consola"
                    value="{{ old('consola') }}">
                @error('consola')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="esrb">Clasificación ESRB</label>
                <input type="text" name="esrb" id="esrb" class="form-control @error('esrb') is-invalid @enderror"
                    placeholder="ESRB (Entertainment Software Rating Board)" value="{{ old('esrb') }}">
                @error('esrb')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Agregar videojuego" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection