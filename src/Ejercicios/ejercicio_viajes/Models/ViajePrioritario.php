<?php
require_once "Viaje.php";

class ViajePrioritario extends Viaje
{
    public $costo;

    /**
     * Constructor de la clase ViajePrioritario.
     * 
     * @param float $costo El costo del viaje prioritario.
     * @param array $paquetes Un array que contiene información sobre los paquetes del viaje.
     * @param Origen $origen La ubicación de origen del viaje.
     * @param Destino $destino La ubicación de destino del viaje.
     */
    public function __construct( $paquetes, $origen, $destino) 
    {
        parent::__construct($paquetes, $origen, $destino);
    }

    /**
     * Calcula el costo del viaje prioritario. 
     * Compara el costo según el peso total de los paquetes y según el volumen total de los paquetes, 
     * Devuelve el costo más elevado entre ambos.
     * 
     * @return float El costo del viaje prioritario.
     */
    public function calcularCosto() {
        $pesoPaquetes = $this->calcularPesoTotalPaquetes();
        $distancia = $this->calcularDistanciaViaje();
        $costoSegunPeso = 4 * $pesoPaquetes * $distancia;

        $volumenPaquetes = $this->calcularVolumenTotalPaquetes();
        $costoSegunVolumen = 10 * $volumenPaquetes * $distancia;

        if($costoSegunPeso > $costoSegunVolumen) {
            return $costoSegunPeso;
        }
        return $costoSegunVolumen;
    }

}

?>