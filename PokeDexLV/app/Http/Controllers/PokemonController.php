<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pokemon;

class PokemonController extends Controller
{
    //guradar pokemon
    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|min:3',
            'exp' =>'required|min:1',
            'hp' =>'required|min:1',
            'atk' =>'required|min:1',
            'def' =>'required|min:1'
        ]);
        $pokemon = new pokemon;
        $pokemon->nombre=$request->nombre;
        $pokemon->exp=$request->exp;
        $pokemon->hp=$request->hp;
        $pokemon->atk=$request->atk;
        $pokemon->def=$request->def;
        $pokemon->save();

        return redirect()->route('todo')->with('success','Tarea Creada');

    }
    //mostrar pokemon's guardados
    public function index(){
        $pokemones = pokemon::all();
        return view('todo.guardados',['pokemones'=>$pokemones]);
    }
}
