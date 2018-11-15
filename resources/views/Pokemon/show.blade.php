@extends('Template.basic')
@section('content')
<h3 style="text-align: center;">Pokemon</h3>

<ul style="text-align: center;">
    @foreach ($pokemons as $pokemon)
    
       <a href="/pokemon/{{$pokemon->id}}"> {{$pokemon->name}} </a>
        <br>
    @endforeach
    <a href="/pokemon/nuevo">Nuevo pokemon</a>
    <hr>
    <a href="/">Volver</a>
@endsection