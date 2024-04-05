<?php
require_once "Viaje.php";

class ViajeNormal extends Viaje
{
    public $costo;

    /**
     * Constructor de la clase ViajeNormal.
     * 
     * @param float $costo El costo del viaje normal.
     * @param array $paquetes Un array que contiene información sobre los paquetes del viaje.
     * @param Origen $origen La ubicación de origen del viaje.
     * @param Destino $destino La ubicación de destino del viaje.
     */
    public function __construct( $paquetes, $origen, $destino) 
    {
        parent::__construct($paquetes, $origen, $destino);
    }

    /**
     * Calcula el costo del viaje normal.
     * 
     * @return float El costo del viaje normal.
     */
    public function calcularCosto() {
        $pesoPaquetes = $this->calcularPesoTotalPaquetes();
        $distancia = $this->calcularDistanciaViaje();
        $costo = 2 * $pesoPaquetes * $distancia;
        return $costo;
    }

}
?>