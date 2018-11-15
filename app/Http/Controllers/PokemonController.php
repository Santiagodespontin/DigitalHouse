<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;
use App\Type;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todos() //Ver la lista de Pokémon
    {
        $pokemons = pokemon::all();
        return view('Pokemon.show')->with('pokemons', $pokemons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo()// Agregar un nuevo Pokémon
    {
        $type = Type::all();
        $pokemon = Pokemon::all();
        return view('Pokemon.create')->with('type', $type)->with('pokemon',$pokemon);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)// Agregar un nuevo Pokémon
    {
               $validar=[
                'name' => 'required',
                'height'=> 'required',
                'weight' => 'required',
                'type_id'=> 'required',
            ];
            $this->validate($request, $validar);
            
            $pokemon = Pokemon::create([
                'name' => $request->input('name'),
                'weight' => $request->input('weight'),
                'height' => $request->input('height'),
                
                ]);
                $pokemon-> type()->attach($request->input('type_id'));
    return redirect('pokemon/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function uno ($pokemon) //Ver el detalle de un Pokémon
    {
        $poke = pokemon::find($pokemon);
        $evolves = pokemon::find($poke->evolves);
        return view('Pokemon.pokecard')->with('poke',$poke)->with('evolves',$evolves);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function editar(Pokemon $pokemon)// Modificar un Pokémon
    {
        $poke = Pokemon::find($pokemon);
        $evolves = Pokemon::find($poke->evolves);
        $type = Type::all();
        $pokemon = Pokemon::all();
        return view('Pokemon.create')->with('type', $type)->with('pokemon',$pokemon)->with('poke', $poke)->with('evolves',$evolves);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, Pokemon $pokemon)// Modificar un Pokémon
    {
        $poke = Pokemon::find($pokemon);
        $poke->save();

        return redirect('/pokemon/' . $poke->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function borrar(Pokemon $pokemon)//Eliminar un Pokémon
    {
    
        $pokemon->delete();

        return redirect('pokemon/');
    }

}
