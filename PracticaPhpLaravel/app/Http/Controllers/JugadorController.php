<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Jugador;

class JugadorController extends Controller
{

    public function mostrarJugadores(){
        $html = "";
        foreach(Jugador::all() as $jugador){
            $html= $html.$jugador->id.": ".$jugador->nombre."<br>";
        }
        return $html;
    }
    public function mostrarJugador($id){
        $html = "";
        $jugador = Jugador::find($id);
        $html= $html.$jugador->id.": ".$jugador->nombre." ".$jugador->dorsal."<br>";
        return $html;
    }
    public function mostrarJugadorNombre($nombre){
        $html = "";
        $jugador = Jugador::where('nombre', $nombre)->first();
        $html= $html.$jugador->id.": ".$jugador->nombre." ".$jugador->dorsal."<br>";
        return $html;
    }
}