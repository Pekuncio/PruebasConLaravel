<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

class EquipoController extends Controller
{
    //DATOS_TEMP
    private $equipos_json= '
    [{
      "id": 1,
      "equipo": "Thoughtblab",
      "email": "bterzo0@aboutads.info"
    }, {
      "id": 2,
      "equipo": "Zoomdog",
      "email": "adies1@earthlink.net"
    }, {
      "id": 3,
      "equipo": "Plajo",
      "email": "cpullan2@nifty.com"
    }]';
    public function mostrarEquipos(){
        $equipos_temp = json_decode($this->equipos_json);

        return $equipos_temp;
    }
    public function mostrarEquipo($equipoId)  {
        $equipos_temp = json_decode($this->equipos_json, true); 
        return 'El equipo con el nombre : '.$equipos_temp[$equipoId]["equipo"].' ,Mostrado desde el ordenador';
        
    }
}