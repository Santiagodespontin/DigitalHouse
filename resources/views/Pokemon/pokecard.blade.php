@extends('Template.basic')
@section('content')
<a href="{{ route('pokemon.uno',['pokemon' => $poke->id]) }}">
  <article class="poke {{ $poke->name }}">
  @if($poke->id>9)
  <img src="{{ asset('poke-img/images/poke-default.jpg') }}" alt="Icono de {{ $poke->name }}">
  @else 
  <img src="{{ asset('poke-img/images/poke-'.$poke->id.'.jpg') }}" alt="Icono de {{ $poke->name }}">
  @endif
    <h3>Nombre: {{ $poke->name }}</h3>
    <h4>Peso: {{ $poke->weight }}</h4>
    <h4>Altura: {{ $poke->height }}</h4>
    @if(!empty($evolves))
    <h4>Evolucion: {{ $evolves->name }}</h4>
    @endif
    <h4>Tipo:
      @foreach ($poke->type as $type)
      {{$type->name}} |
    @endforeach
  </h4>
  </article>
<a href="{{$poke->id}}/editar">Editar Pokemon</a>
  <br>
    <form id="delete" name="delete" method="POST">
  @csrf
  @method('delete')
    <button value="borrar">Borrar Pokemon</button>
  </form>
</a>
<hr>
<div>
<a href="/pokemon">Volver</a>
</div>
@endsection
