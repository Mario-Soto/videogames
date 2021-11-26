@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4">{{ $videogame->titulo }}</h1>

<div>
    <p>
        <span class="font-weight-bold text-primary">Consola: </span>{{ $videogame->consola }}
    </p>
    <p>
        <span class="font-weight-bold text-primary">ESRB: </span>{{ $videogame->esrb }}
    </p>
    <p>
        <span class="font-weight-bold text-primary">Creado el: </span> {{ $videogame->created_at }}
    </p>
    <p>
        <span class="font-weight-bold text-primary">Propietario: </span> {{ $videogame->users->name }}, {{ $videogame->users->email }}
    </p>
</div>
@endsection