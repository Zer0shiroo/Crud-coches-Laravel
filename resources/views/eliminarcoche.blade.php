@extends('layouts.app')

@section('content')
    <h1>Eliminar Coche</h1>
    <p>¿Estás seguro de que deseas eliminar el coche {{ $coche->matricula }}?</p>
    <form action="{{ route('eliminarcoche', $coche->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
        <a href="{{ route('listacoches') }}">Cancelar</a>
    </form>
@endsection