@extends('layouts.app')

@section('botones')
<a href="{{ route('videogames.create') }}" class="btn btn-primary mr-2">Añadir Videojuego</a>
@endsection

@section('content')
<h2 class="text-center mb-3">Videojuegos</h2>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-info text-light">
            <tr>
                <th>Nombre</th>
                <th>Clasificación</th>
                <th>Consola</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($juegos as $item)
            <tr>
                <td>{{ $item->titulo }}</td>
                <td>{{ $item->esrb }}</td>
                <td>{{ $item->consola }}</td>
                <td>
                    <a href="{{ route('videogames.edit', ['videogame' => $item->id]) }}" class="btn btn-dark mr-1 mb-1">
                        <i class="far fa-edit"></i> Editar
                    </a>
                    <a href="{{ route('videogames.show', ['videogame' => $item->id]) }}" class="btn btn-success mr-1 mb-1">
                        <i class="far fa-eye"></i> Ver
                    </a>
                    <form action="{{ route('videogames.destroy', ['videogame'=>$item->id]) }}" method="POST" class="d-inline mb-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mr-1">
                            <i class="far fa-trash-alt"></i> Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection