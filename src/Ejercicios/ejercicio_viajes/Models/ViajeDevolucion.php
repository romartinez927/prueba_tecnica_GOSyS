<?php
require_once "Viaje.php";

class ViajeDevolucion extends Viaje
{
    public $tarifa = 1000;

    /**
     * Constructor de la clase ViajeDevolucion.
     * 
     * @param array $paquetes Un array que contiene información sobre los paquetes del viaje.
     * @param Origen $origen La ubicación de origen del viaje.
     * @param Destino $destino La ubicación de destino del viaje.
     */

    public function __construct( $paquetes, $origen, $destino) 
    {
        parent::__construct($paquetes, $origen, $destino);
    }

    /**
     * Devuelve el costo del viaje devolucion.
     * 
     * @return float El costo del viaje devolucion.
     */
    public function calcularCosto() {
        return $this->tarifa;
    }

}
?>