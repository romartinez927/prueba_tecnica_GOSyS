<?php
require_once "Ubicacion.php";

class Origen extends Ubicacion
{
    /**
     * Constructor de la clase Origen.
     *
     * @param string $direccion La dirección del destino.
     * @param float $latitud La latitud del destino.
     * @param float $longitud La longitud del destino.
     */

    public function __construct( $direccion, $latitud, $longitud) 
    {
        parent::__construct($direccion, $latitud, $longitud);
    }
    
}
?>