<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Jugador;
use Illuminate\Http\Client\Request;

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
    public function insertJugador(Request $request)
{
    // Validar los datos de la solicitud
    $validatedData = $request->validate([
        'nombre' => 'required|string',
        'apellido1' => 'required|string',
        'apellido2' => 'string',
        'dorsal' => 'required|integer',
        'altura_m' => 'required|numeric',
        'anyo' => 'required|date',
    ]);

    // Si la validación es exitosa, continuar con la creación del jugador
    $jugador = new Jugador;

    // Recoger los datos de la petición
    $jugador->nombre = $validatedData['nombre'];
    $jugador->apellido1 = $validatedData['apellido1'];
    $jugador->apellido2 = $validatedData['apellido2'] ?? null;
    $jugador->dorsal = $validatedData['dorsal'];
    $jugador->altura_m = $validatedData['altura_m'];
    $jugador->anyo = $validatedData['anyo'];

    // Insertar el nuevo modelo
    $jugador->save();

    return "Nuevo Jugador insertado con éxito";
}


}